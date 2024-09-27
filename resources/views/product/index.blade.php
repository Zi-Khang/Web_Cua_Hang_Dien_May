@extends('layout.master')

@section('content')
    <div class="main-banner">
        <div class="circle"></div>
        <img class="banner-img1"
            src="images/item/longines-the-longines-master-collection-l2-673-4-78-3-2000x2000-1680291333.avif"
            alt="" />
        <div class="container-fluid banner-wrapper">
            <div class="row">
                <div class="col-6 banner-col">
                    <h1>Cửa hàng điện máy đa dạng mẫu mã</h1>
                    <p>
                        Lựa chọn tốt nhất dành cho bạn
                    </p>
                </div>
                <div class="col-6 img-banner-col">
                    <img src="images/Montblanc_logo.svg.png" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="main-hot-product">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="main-title">Sản Phẩm Nổi Bật</h2>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4">
                        <a href="{{ route('product_detail', $product) }}">
                            <div class="product-item">
                                <div class="product-image">
                                    <img src="../public/photos/products/<?php echo $product['photo']; ?>" height="120">
                                </div>
                                <div class="product-description">
                                    <h3>{{ $product->Name }}</h3>
                                    <div class="product-price">
                                        <b>{{ $product->Price }}</b>
                                    </div>
                                    <div class="product-add-cart">
                                        {{-- <form action="{{ route('edit', $product) }}" method="get">
                                            @csrf --}}
                                            <button class="product-buy-now-btn product-btn">Mua ngay</button>
                                        {{-- </form> --}}
                                        <div class="product-add-cart-btn product-btn">
                                            <img src="images/icons8-shopping-cart-30.png" alt="">
                                            <span>
                                                <a onclick="AddCart({{ $product->id }})" href="javascript:">Thêm vào giỏ hàng</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row">
        </div>
    </div>
    </div>
    </div>
    {{-- <div class="main-hot-news">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="main-title">Tin Tức</h2>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2018/04/high-end-watches.jpg"
                                alt="" />
                        </div>
                        <div class="news-description">
                            <h3>
                                Đồng hồ Meccaniche Veneziane Arsenale: Mang cả tinh thần
                                Venice trên cổ tay
                            </h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/num-dong-ho-la-gi.jpg" alt="" />
                        </div>
                        <div class="news-description">
                            <h3>
                                Đồng hồ Meccaniche Veneziane Arsenale: Mang cả tinh thần
                                Venice trên cổ tay
                            </h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/muc-chiu-nuoc-dong-ho.jpg" alt="" />
                        </div>
                        <div class="news-description">
                            <h3>
                                Đồng hồ Meccaniche Veneziane Arsenale: Mang cả tinh thần
                                Venice trên cổ tay
                            </h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/tinh-nang-chronograph-la-gi.jpg"
                                alt="" />
                        </div>
                        <div class="news-description">
                            <h3>
                                Đồng hồ Meccaniche Veneziane Arsenale: Mang cả tinh thần
                                Venice trên cổ tay
                            </h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/chuan-chronometer-la-gi.jpg" alt="" />
                        </div>
                        <div class="news-description">
                            <h3>
                                Đồng hồ Meccaniche Veneziane Arsenale: Mang cả tinh thần
                                Venice trên cổ tay
                            </h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/tourbillon-la-gi.jpg" alt="" />
                        </div>
                        <div class="news-description">
                            <h3>
                                Đồng hồ Meccaniche Veneziane Arsenale: Mang cả tinh thần
                                Venice trên cổ tay
                            </h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2018/04/dsc0621_2.jpg" alt="" />
                        </div>
                        <div class="news-description">
                            <h3>Mua Đồng Hồ Chính Hãng – Tưởng Khó Mà Dễ</h3>
                            <div class="news-time">
                                <time>05/03/2023</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="news">
                        <div class="news-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2020/09/8aa74d44fbe6e839fc06594d1c1d89a7_original.jpeg"
                                alt="" />
                        </div>
                        <div class="news-description">
                            <h3>Bảng Xếp Hạng Các Thương Hiệu Đồng Hồ</h3>
                            <div class="news-time">
                                <time>20/04/2018</time>
                            </div>
                            <div class="news-text">
                                <p>
                                    Mạnh mẽ và khoáng đạt, những chiếc đồng hồ Arsenale của
                                    Meccaniche Veneziane giống như những pháo đài trên cổ tay,
                                    tái hiện lại một biểu tượng của nước Ý…
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-testimonial">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="main-title">Cảm nhận khách hàng</h2>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="customer">
                        <div class="customer-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2018/03/53525796_644460662676945_9130067553136148480_n.jpg"
                                alt="" />
                        </div>
                        <div class="customer-description">
                            <h3 class="customer-name">nguyễn mạnh hùng</h3>
                            <div class="customer-cmt">
                                <p>Mình nhận đồng hồ rất ưng ý nhé, đẹp lắm ạ</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="customer">
                        <div class="customer-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2018/03/26240048_2068888089992767_3232039795964392366_o.jpg"
                                alt="" />
                        </div>
                        <div class="customer-description">
                            <h3 class="customer-name">nguyễn mạnh B</h3>
                            <div class="customer-cmt">
                                <p>Mình nhận đồng hồ rất ưng ý nhé</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="customer">
                        <div class="customer-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2018/03/29695418_1138785506264682_1472953413403292111_n.jpg"
                                alt="" />
                        </div>
                        <div class="customer-description">
                            <h3 class="customer-name">nguyễn mạnh An</h3>
                            <div class="customer-cmt">
                                <p>
                                    Nhân viên của shop rất nhiệt tình, đồng hồ mình đặt thì
                                    ưng ý lắm rồi
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="customer">
                        <div class="customer-image">
                            <img src="https://luxewatch.vn/wp-content/uploads/2018/03/10653732_695323030572074_8725238594521361368_n.jpg"
                                alt="" />
                        </div>
                        <div class="customer-description">
                            <h3 class="customer-name">Đào Anh Khoa</h3>
                            <div class="customer-cmt">
                                <p>
                                    Đặt hàng được kiểm tra hàng trước khi thanh toán là mình
                                    rất yên tâm, shop làm ăn rất uy tín, sẽ ủng hộ shop dài
                                    dài
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="about-us" id="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-6">
                        <img src="images/gioithieu.jpg" alt="" />
                    </div>
                    <div class="col-6 content-col">
                        <h3>Về chúng tôi</h3>
                        <p>
                            Được thành lập vào những ngày cuối cùng của năm 2030, cửa hàng đã tồn tại và phát triển đến ngày nay và đang dần vươn
                            lên trở thành 1 trong những chuỗi bán lẻ hàng đầu ở
                            Việt Nam.
                        </p>
                        <p>
                            Cùng với tiêu chí luôn đề cao những giá trị cao nhất cho khách
                            hàng, không chỉ mang đến những phiên bản với chất lượng tốt nhất, mà còn mang lại sự an tâm, tin
                            cậy dành cho Quý khách hàng.
                        </p>
                    </div>
                    <div class="col-12 author-col">
                        <h2>Tác Giả</h2>
                        {{-- <div class="author-block">
                            <div class="author">
                                <div class="author-card">
                                    <div class="author-img">
                                        <img src="images/tyler-henry-reading-hollywood-medium-1551978559.jpg"
                                            alt="" />
                                    </div>
                                    <div class="author-inf">
                                        <h3>Vũ Trường Giang</h3>
                                        <span>Giám đốc điều hành</span>
                                    </div>
                                    <div class="author-link">
                                        <a href="">
                                            <i class="fa-brands fa-facebook fa-xl" style="color: #ffffff"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa-brands fa-youtube fa-xl" style="color: #ffffff"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="author">
                                <div class="author-card">
                                    <div class="author-img">
                                        <img src="images/3021752-inline-i-1-why-square-designed-its-new-offices-to-work-like-a-city.webp"
                                            alt="" />
                                    </div>
                                    <div class="author-inf">
                                        <h3>Triệu Vỹ Khang</h3>
                                        <span>Giám đốc ý tưởng</span>
                                    </div>
                                    <div class="author-link">
                                        <a href="">
                                            <i class="fa-brands fa-facebook fa-xl" style="color: #ffffff"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa-brands fa-instagram fa-xl" style="color: #ffffff"></i>
                                        </a>
                                        <a href="">
                                            <i class="fa-brands fa-youtube fa-xl" style="color: #ffffff"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
