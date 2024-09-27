@extends('layout.master')

@section('content')
    <div class="main-hot-product">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="main-title">Sản Phẩm</h2>
            </div>
            <a class="btn btn-success mb-2" href="{{ route('create') }}">
                Them
            </a>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4">
                        <a href="product-item.html">
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="{{ asset('web_CHDM/public/photos/products/')}}/{{$product->photo}}" height="120">
                                </div>
                                <div class="product-description">
                                    <h3>{{ $product->Name }}</h3>
                                    <div class="product-price">
                                        <b>{{ $product->Price }}</b>
                                    </div>
                                    <div class="product-add-cart">
                                        <form action="{{ route('edit', $product) }}" method="get">
                                            @csrf
                                            <button class="product-buy-now-btn product-btn">Edit</button>
                                        </form>
                                        <a href="#">
                                            <div class="product-add-cart-btn product-btn">
                                                <img src="images/icons8-shopping-cart-30.png" alt="">
                                                <span><?php if (!empty($product['id'])) { ?>
                                                    <a href="add_to_cart.php?id=<?php echo $product['id']; ?>">Delete</a>
                                                    <?php } ?>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{ $products->links() }}
            </div>
        </div>
@endsection
