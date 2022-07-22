<!doctype html>
<html lang="en">

<head>
    <title>Product list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/reset.css">
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/header.css">
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/footer.css">
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/product_list.css">

    <!-- oxygen font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <!-- playfair display font -->
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
</head>

<body>
    <!---------------------------->
    <!-- header -->
    @include('shop.layouts.header')
    <!-- end header -->
    <!---------------------------->

    <!---------------------------->
    <!-- main -->
    <div class="main">
        <div class="path">Home / Shop / For Men</div>
        <div class="container">
            <div class="banner">
                <img src="{{ url('assets/shop/assets') }}/img/bannerForMen.png" alt="">
            </div>
            <div class="main_section">
                <div class="filter_bar">
                    <div class="filter_category">
                        <div class="filter_title">products category</div>
                        <div class="filter_content">
                            @foreach ($categories as $category)
                            <a class="f_category" href="">{{$category->cate_name}}</a>
                            @endforeach
                            {{-- <a class="f_category-active" href="">clothing</a>
                            <a class="f_category" href="">accessories</a>
                            <a class="f_category" href="">shoes</a>
                            <a class="f_category-last" href="">hat</a> --}}
                        </div>
                    </div>
                    <div class="filter_price">
                        <div class="filter_title">filter by price</div>
                        <div class="filter_content">
                            <div class="slider">
                                <div class="progress">
                                </div>
                                <div class="range_input">
                                    <input type="range" class="range_min" min="0" max="1000" value="100" step="10">
                                    <input type="range" class="range_max" min="0" max="1000" value="900" step="10">
                                </div>
                            </div>
                            <div class="find_price">
                                <div class="pricer_input">
                                    <p>$</p><input type="text" class="ip_min" value="100" disabled>
                                </div>
                                <div class="separator">-</div>
                                <div class="pricer_input">
                                    <p>$</p><input type="text" class="ip_max" value="900" disabled>
                                </div>
                                <div class="filter_price_btn">
                                    Filter
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter_color">
                        <div class="filter_title">colour</div>
                        <div class="filter_content">
                            <div class="color_list">
                                @foreach ($colors as $color)
                                @switch($color)
                                    @case($color->color_value == "Blue")
                                    <button class="item_color color-blue"></button>    
                                    @break
                                    @case($color->color_value == "White")
                                    <button class="item_color color-white"></button>    
                                    @break
                                    @case($color->color_value == "Black")
                                    <button class="item_color color-black"></button>    
                                    @break
                                    @case($color->color_value == "Red")
                                    <button class="item_color color-red"></button>    
                                    @break
                                    @case($color->color_value == "Yellow")
                                    <button class="item_color color-yellow"></button>    
                                    @break
                                    @default
                                        
                                @endswitch
                                    
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="filter_size">
                        <div class="filter_title">size</div>
                        <div class="filter_content">
                            <div class="size_list">
                                @foreach ($sizes as $size)
                                    <button class="item_size">{{$size->size_value}}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_list">
                    <div class="sort">
                        <div class="sort_select">
                            <p>default sorting</p>
                            <img src="{{ url('assets/shop/assets') }}/img/sort-up.png" alt="">
                        </div>
                    </div>
                    <div class="products">
                        @foreach ($productList as $product)
                        <div class="p_item_box">
                            <div class="p_item_box_img">
                                <img src="{{ url('storage/' . $product->pro_image) }}" alt="">
                                <div class="box_img_status">hot</div>
                                <div class="box_img_cart">
                                    <img src="{{ url('assets/shop/assets') }}/shop/{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
                                </div>
                            </div>
                            <div class="p_item_box_name">{{$product->pro_name}}</div>
                            <div class="p_item_box_price">
                                <div class="p_item_box_oldPrice"> {{$product->pro_sale_price ? '$ '.number_format($product->pro_sale_price, 2) : ""}}</div>
                                <div class="p_item_box_newPrice">$ {{number_format($product->pro_price,2)}}</div>
                            </div>
                        </div>
                        @endforeach
                        <div class="p_item_box">
                            <div class="p_item_box_img">
                                <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
                                <div class="box_img_status">hot</div>
                                <div class="box_img_cart">
                                    <img src="{{ url('assets/shop/assets') }}/shop/{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
                                </div>
                            </div>
                            <div class="p_item_box_name">BLACK BOXY BACKPACK</div>
                            <div class="p_item_box_price">
                                <div class="p_item_box_oldPrice"></div>
                                <div class="p_item_box_newPrice">$ 380.00</div>
                            </div>
                        </div>
                        <div class="p_item_box">
                            <div class="p_item_box_img">
                                <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
                                <div class="box_img_status">hot</div>
                                <div class="box_img_cart">
                                    <img src="{{ url('assets/shop/assets') }}/shop/{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
                                </div>
                            </div>
                            <div class="p_item_box_name">BLACK BOXY BACKPACK</div>
                            <div class="p_item_box_price">
                                <div class="p_item_box_oldPrice"></div>
                                <div class="p_item_box_newPrice">$ 380.00</div>
                            </div>
                        </div>
                        <div class="p_item_box">
                            <div class="p_item_box_img">
                                <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
                                <div class="box_img_status">hot</div>
                                <div class="box_img_cart">
                                    <img src="{{ url('assets/shop/assets') }}/shop/{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
                                </div>
                            </div>
                            <div class="p_item_box_name">BLACK BOXY BACKPACK</div>
                            <div class="p_item_box_price">
                                <div class="p_item_box_oldPrice"></div>
                                <div class="p_item_box_newPrice">$ 380.00</div>
                            </div>
                        </div>
                        <div class="p_item_box">
                            <div class="p_item_box_img">
                                <img src="{{ url('assets/shop/assets') }}/img/product2.png" alt="">
                                <div class="box_img_status">hot</div>
                                <div class="box_img_cart">
                                    <img src="{{ url('assets/shop/assets') }}/shop/{{ url('assets/shop/assets') }}/img/icon/bag.png" alt="">
                                </div>
                            </div>
                            <div class="p_item_box_name">BLACK BOXY BACKPACK</div>
                            <div class="p_item_box_price">
                                <div class="p_item_box_oldPrice"></div>
                                <div class="p_item_box_newPrice">$ 380.00</div>
                            </div>
                        </div>
                    </div>
                    {{-- {{ $productList->links() }} --}}

                    <div class="pagination">
                        <a href=""><img src="{{ url('assets/shop/assets') }}/img/arrow-left.png" alt=""></a>
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">...</a>
                        <a href="">10</a>
                        <a href="">11</a>
                        <a href=""><img src="{{ url('assets/shop/assets') }}/img/arrow-right.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end main -->
    <!---------------------------->

    <!---------------------------->
    <!-- footer -->
    @include('shop.layouts.footer')
    <!-- end footer -->
    <!---------------------------->

    <!-- Optional JavaScript -->
    <script src="{{ url('assets/shop/assets') }}/js/list_product.js"></script>
</body>

</html>