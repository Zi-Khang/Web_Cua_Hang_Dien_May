@extends('layout.master')

@section('content')
    <div class="product-item-inf">
        <div class="container">
            <div class="product-item-wrapper">
                <div class="row">
                    <div class="col-6">
                        <div class="item-image">
                            <img class="main-img" src="{{ asset('web_CHDM/public/photos/products/')}}/{{$product->photo}}" alt="" />
                            <img src="../public/photos/products/<?php echo $product['photo']; ?>" height="120">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-inf">
                            <h2>{{ $product->Name }}</h2>
                            <div class="price">
                                <b>{{ $product->Price }}</b>
                            </div>
                            <div class="bao-hanh">
                                <ul>
                                    <li>Miễn phí giao hàng toàn quốc</li>
                                    <li>Bảo hành 5 năm</li>
                                    <li>Sản phẩm chính hãng</li>
                                    <li>Đổi trả 7 ngày bất kỳ lỗi nào đến từ nhà sản xuất</li>
                                </ul>
                            </div>
                            <p class="xuat-xu">
                                {{ $product->Description }}
                            </p>
                            <div class="product-item-btn">
                                <a href="">
                                    <button class="mua">Add to card</button>
                                </a>
                                <a href="">
                                    <button class="mua">Mua ngay</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
