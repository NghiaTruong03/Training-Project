<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/reset.css">
  <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/header.css">
  <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/home.css">
  <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
</head>

<body>
  <!-- header -->
  @include('shop.layouts.header')
  <!-- end header -->

  <!--main-->
  <div class="main"> 
    <!-- slider -->
  <div class="slider">
    <div class="slider_banner owl-carousel owl-theme">
      <div class="img_banner">
        <img src="{{ url('assets/shop/assets') }}/img/icon/slider01.png" alt="">
      </div>
      <div class="img_banner">
        <img src="{{ url('assets/shop/assets') }}/img/icon/slider01.png" alt="">
      </div>
      <div class="img_banner">
        <img src="{{ url('assets/shop/assets') }}/img/icon/slider01.png" alt="">
      </div>
      <div class="img_banner">
        <img src="{{ url('assets/shop/assets') }}/img/icon/slider01.png" alt="">
      </div>
    </div>
    <div class="slider_main">
      <div class="slider_content">
        <div class="slider_title">
          NEW COLLECTION FOR MEN
        </div>
        <div class="slider_desciption">
          From high to low, classic or modern, we have covered. Check out the hottest men's outfits of 2022. Find
          your own style and let us help you make it happen.
        </div>
        <div class="slider_btn-view">
          <a name="" href="#" role="button">VIEW OUR SHOP</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end slider -->


  <!-- section-1 -->
  <div class="section-1">
    <div class="s1_box1">
      <div class="s1_block_left">
        <div class="s1_head">fashion's portfolio</div>
        <div class="s1_title">lookbook for men</div>
        <div class="s1_content">Fashion is a both of womenswear and menswear store dedicated to creating considered
          everyday pieces of the highest quality.</div>
        <a href="{{route('product.list')}}"><button class="s1_btn_view">view our product</button></a>
      </div>
      <div class="s1_block_right">
        <!-- <div class="s1_main_img"> -->
            <img class="main_img" src="{{ url('assets/shop/assets') }}/img/icon/Frame 236.png" alt="">

        <!-- </div> -->
        <!-- <div class="s1_sub_img"> -->
          <img class="sub_img" src="{{ url('assets/shop/assets') }}/img/icon/Frame 237.png" alt="">

        <!-- </div> -->
      </div>
    </div>
    <div class="s1_box2">
      <div class="box2_title">featured products </div>
      <div class="box2_content">Wanna shine with the most outstanding outfits? Let’s see our featured products and
        choose the best choice for you</div>
      <div class="box2_nav_bar">
        <div class="box2_nav_bar_item_active">women's</div>
        <div class="box2_nav_bar_item">mens</div>
        <div class="box2_nav_bar_item">unisex</div>
      </div>
      <div class="box2_main">
        @foreach ($products as $product_value)
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <a href="{{route('product.detail', $product_value->id)}}"><img src="{{url('storage/' . $product_value->pro_image)}}" alt=""></a>
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
            </div>
          </div>
          <a href="{{route('product.detail', $product_value->id)}}"><div class="b2_m_item_name">{{$product_value->pro_name}}</div></a>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">${{$product_value->pro_price}}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- end section-1 -->


  <!-- break-section-->
  <div class="break-section">
    <img src="{{ url('assets/shop/assets') }}/img/icon/Break section.png" alt="">
  </div>
  <!-- end break-section-->


  <!-- section-2 -->
  <div class="section-2">
    <div class="s2-box">
      <div class="box2-item"></div>
      <div class="box2_title">best seller</div>
      <div class="box2_content">Take a look at the most popular costumes at Fashion in recent times. Maybe you will
        like it!</div>
      <div class="box2_nav_bar">
        <div class="box2_nav_bar_item_active">women's</div>
        <div class="box2_nav_bar_item">mens</div>
        <div class="box2_nav_bar_item">unisex</div>
      </div>
      <div class="s2_box2_main">
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">FLORAL FRILL T-SHIRT</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">BLACK BOXY BACKPACK</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">FLORAL FRILL T-SHIRT</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">BLACK BOXY BACKPACK</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">BLACK BOXY BACKPACK</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">BLACK BOXY BACKPACK</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">BLACK BOXY BACKPACK</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
        <div class="b2_main_item">
          <div class="b2_m_item_img">
            <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
            <div class="b2_img_status">hot</div>
            <div class="b2_img_cart">
              <img src="" alt="">
            </div>
          </div>
          <div class="b2_m_item_name">BLACK BOXY BACKPACK</div>
          <div class="b2_m_item_salePrice"></div>
          <div class="b2_m_item price">$ 380.00</div>
        </div>
      </div>
    </div>
  </div>
  <!-- end section-2-->

  <!-- section-3 -->
  <div class="section-3">
    <img src="{{ url('assets/shop/assets') }}/img/image 38.png" alt="">
    <div class="introduce">
      <div class="introduce_title">our mission</div>
      <div class="introduce_content">Fashion is a contemporary clothing store known for its trend-driven styles with
        affordable prices. Drawing inspiration from the latest trends, from street style to runway, Fashion clothing
        store offers an array of styles that is fit for the fashion loving people. From workwear to street style,
        night out, Fashion store can keep you going from day-to-night. Shop the latest collection from Fashion
        clothing line, ranging in dresses to tops, backpacks, rompers, pants, outerwear, watches and shoes.</div>
      <a href="" class="introduce_btn" type="button">read more</a>
    </div>
  </div>
  <!-- end section-3 -->

  <!-- section-4 -->
  <div class="section-4">
    <img src="{{ url('assets/shop/assets') }}/img/logo-list.png" alt="">
  </div>
  <!-- end section-4 -->


    <!-- footer -->
    @include('shop.layouts.footer')
    <!-- end footer -->
  </div>

  <script type="text/javascript" src="{{ url('assets/shop/assets') }}/js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript" src="{{ url('assets/shop/assets') }}/js/home.js"></script>

</body>

</html>