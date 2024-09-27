<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dien May</title>
    <script src="https://kit.fontawesome.com/81f062be42.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/762eecd80f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('web_CHDM/public/css/a.css') }}" />
    @stack('css')
</head>

<body>
    <div class="main-cart">
        <i id="quit-cart" class="fa-sharp fa-solid fa-circle-xmark fa-2xl"></i>
        <form action="">
            <h2>Giỏ hàng</h2>
            <table>
                <thead>
                    <tr>
                        <th>Ảnh</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody id="itemCart">
                    @if (session()->has('Cart'))
                        @foreach (session()->get('Cart')->products as $product)
                            <tr>
                                <td>
                                    <img
                                        src="{{ asset('web_CHDM/public/photos/products/') }}/{{ $product['productInfo']['photo'] }}">
                                </td>
                                <td>
                                    {{ $product['productInfo']['Price'] }} ;
                                </td>
                                <td>
                                    <input id="quantity" style="text-align: center" type="number"
                                        value="{{ $product['quantity'] }}"
                                        data-id="{{ $product['productInfo']['id'] }}">
                                </td>
                                <td>
                                    {{ $product['price'] }};
                                </td>
                                <td>
                                    <a href="javascript:" id="btnDeleteCartItem"
                                        data-id="{{ $product['productInfo']['id'] }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        <td>
                            {{ session()->get('Cart')->totalQuantity }};
                        </td>
                    @endif
                </tbody>
            </table>
            <div id="total" class="total-price">
                @if (session()->has('Cart'))
                    <span>Tổng tiền : {{ session()->get('Cart')->totalPrice }}</span>
                    <button class="btnPay" type="button">Thanh toán</button>
                @endif
                
            </div>
        </form>
    </div>
    {{-- Header --}}
    @include('layout.topbar')
    {{-- End Header --}}
    <main class="main">
        @yield('content')
    </main>
    {{-- Header --}}
    @include('layout.footer')
    {{-- End Header --}}
    <div class="modal hide">
        <div class="modal_iner">
            <div class="modal_header">
                <p>Thanh toán</p>
                <i class="fa-solid fa-rectangle-xmark"></i>
            </div>
            <div class="modal_body">              
                <table>
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody id="pay">
                        @if (session()->has('Cart'))
                            @foreach (session()->get('Cart')->products as $product)
                                <tr>
                                    <td>
                                        <img style="width: 50px"
                                            src="{{ asset('web_CHDM/public/photos/products/') }}/{{ $product['productInfo']['photo'] }}">
                                    </td>
                                    <td>
                                        {{ $product['quantity'] }}
                                    </td>
                                    <td>
                                        {{ $product['price'] }};
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <div>
                    Tên: {{ Auth()->user()->name }} 
                    <br>
                    Email: {{ Auth()->user()->email }} 
                </div>
            </div>
            <div class="modal_footer">
                <button id="btnCheckOut">Thanh toan</button>
            </div>
        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script src="{{ asset('web_CHDM/public/js/a.js') }}"></script>
<script>
    function AddCart(id) {
        $.ajax({
            type: "GET",
            url: `{{ route('addToCart', '') }}/${id}`,
            success: function(response) {
                $("#itemCart").empty();
                $("#itemCart").html(response);
            }
        });
    }

    $(document).on('click', '#btnDeleteCartItem', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
        var id = $(this).data('id');
        $.ajax({
            type: "GET",
            url: `{{ route('deleteCartItem', '') }}/${id}`,
            success: function(response) {
                $("#itemCart").empty();
                $("#itemCart").html(response);
            }
        });
    });

    // Lắng nghe sự kiện thay đổi giá trị của input số lượng
    $(document).on('change', '#quantity', function() {
        var id = $(this).data('id');
        var quantity = $(this).val();
        $.ajax({
            type: "GET",
            url: `{{ route('updateCartQuantity', '') }}/${id}`,
            data: {
                quantity: quantity
            },
            success: function(response) {
                $("#itemCart").empty();
                $("#itemCart").html(response);
            }
        });
    });

    $(document).on('click', '#btnCheckOut', function(event) {
        $.ajax({
            type: "GET",
            url: `{{ route('checkOut') }}`,
            success: function() {
                window.location.href = `{{ route('customer.index') }}`;
            },
            error: function(){
                console.log(1);
            }

        });
    });

</script>

</html>
