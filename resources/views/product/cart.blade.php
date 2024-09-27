@if (Session()->has('Cart'))
    @foreach (Session()->get('Cart')->products as $product)
        <tr>
            <td>
                <img src="{{ asset('web_CHDM/public/photos/products/') }}/{{ $product['productInfo']['photo'] }}">
            </td>
            <td>
                {{ $product['productInfo']['Price'] }} ;
            </td>
            <td>
                <input id="quantity" style="text-align: center" type="number" value="{{ $product['quantity'] }}" data-id="{{ $product['productInfo']['id'] }}">
            </td>
            <td>
                {{ $product['price'] }};
            </td>
            <td>
                <a href="javascript:" id="btnDeleteCartItem" data-id="{{ $product['productInfo']['id'] }}">Delete</a>
            </td>
            {{-- <td>
        {{ $newCart->totalPrice }};
    </td> --}}
        </tr>
    @endforeach
    <td>
        {{ Session()->get('Cart')->totalQuantity }};
    </td>
@endif
