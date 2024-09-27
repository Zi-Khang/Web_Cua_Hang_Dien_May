<header class="header">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="header-logo">
          <a href="index.html"><img src="images/logo.png" alt="" /></a>
        </div>
        @if(Auth::user()->role == 0)
          <div class="header-nav">
            <ul class="ul-all">
              <li>
                <a href="{{ route('index')}}">Trang chủ</a>
              </li>
              {{-- <li>
                <a href="./index.html#about-us">Về chúng tôi</a>
              </li> --}}
              {{-- <li class="nav-product-list">
                <a href="{{ route('product_index')}}">Sản phẩm</a>
                <ul class="ul-product-list">
                  <li><a href="product-list-1.html">G-Shock</a></li>
                  <li><a href="product-list-1.html">Skagen</a></li>
                  <li><a href="product-list-1.html">Seiko</a></li>
                  <li><a href="product-list-1.html">Fosil</a></li>
                  <li><a href="product-list-1.html">Casio</a></li>
                </ul>
              </li> --}}
              <li>
                <a href="{{ route('order_index')}}">Hóa đơn</a>
              </li>
            </ul>
          </div>
        @endif
        @if(Auth::user()->role == 1)
        <div class="header-nav">
          <ul class="ul-all">
            <li>
              <a href="{{ route('index')}}">Trang chủ</a>
            </li>
            <li>
              <a href="{{ route('index')}}">Sản phẩm</a>
            </li>
          </ul>
        </div>
      @endif
        <div class="header-user">
        </div>
        <div class="header-cart">
          <i class="fa-solid fa-cart-arrow-down fa-2xl"></i>
        </div>
        <div class="header-search">
          <div class="header-search-wrapper">
            <input type="text" />
            <button>
              <svg
                width="20"
                height="20"
                class="DocSearch-Search-Icon"
                viewBox="0 0 20 20"
              >
                <path
                  d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z"
                  stroke="currentColor"
                  fill="none"
                  fill-rule="evenodd"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>