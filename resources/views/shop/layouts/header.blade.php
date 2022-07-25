  <!-- header -->
  <header>
    <div class="contact">
      <div class="contact_content">
        <div class="c_content_phone">
          <img src="{{ url('assets/shop/assets') }}/img/icon/Vector.png" alt="">
        </div>
        <div class="c_content_number">
          <div>Hotline: (01) 23 456 789</div>
        </div>
      </div>
      <div class="contact_welcome">
        Welcome Guest, have a nice day!
      </div>
    </div>
    <div class="header">
      <div class="header_logo">
        <a href="{{route('shop.index')}}">
          <img src="{{ url('assets/shop/assets') }}/img/icon/logo.png" alt="">
        </a>
      </div>
      <nav class="header_navbar">
        <a href="{{route('shop.index')}}">
          <div class="tag tag-active"><p>home</p></div>
        </a>
        <a href="">
          <div class="tag"><p>about us</p></div>
        </a>
        <a href="">
          <div class="tag">
            <p>shop</p>
            <img src="{{ url('assets/shop/assets') }}/img/icon/downArrow.png" alt="">
          </div>
        </a>
        <a href="">
          <div class="tag"><p>contact</p></div>
        </a>
      </nav>
      <div class="header_cart">
        <div class="navbar_cart_icon">
          <a href=""><img src="{{ url('assets/shop/assets') }}/img/icon/cart.png" alt=""></a>
          <div class="navbar_cart_icon_qty">0</div>
        </div>
        <div class="header_cart_total">
          $10.00
        </div>
      </div>
      <div class="header_toggleMenu">
        <img src="{{ url('assets/shop/assets') }}/img/menu_1.png" alt="">
      </div>
    </div>
  </header>
  <!-- end header -->