<!doctype html>
<html lang="en">

<head>
    <title>Product details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/reset.css">
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/header.css">
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/product_detail.css">
    <link rel="stylesheet" href="{{ url('assets/shop/assets') }}/css/footer.css">

    <!-- oxygen font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    <!-- playfair display font -->
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
</head>

<body>
    <!-- header -->
    @include('shop.layouts.header')
    <!-- end header -->
    <div class="main">
        <div class="path">Home / Shop / For Men / T-Shirt with crew neck</div>
        <div class="main_container">
            <div class="product_block_left">
                <div class="sub_img">
                    @foreach ($subImgList as $subImg)
                        <div class="sub_img_item">
                            <img src="{{ url('storage/'.$subImg->sub_image) }}" alt="">
                        </div>
                    @endforeach
                </div>
                <div class="main_img">
                    <img src="{{ url('storage/'.$details->pro_image) }}" alt="">
                </div>
            </div>
            <div class="product_block_right">
                <div class="product_title">
                    <div class="product_name">{{$details->pro_name}}</div>
                    <div class="product_status">hot</div>
                </div>
                <div class="product_price">$ {{$details->pro_price}}</div>
                <div class="short_info">{{$details->pro_description}}</div>
                <div class="add_to_cart">
                    <div class="quantity_box">
                        <div class="subtraction_btn">-</div>
                        <input class="input_quantity" value="1" type="text">
                        <div class="addition_btn">+</div>
                    </div>
                    <button type="submit" class="add_to_cart_btn">add to cart</button>
                </div>
                <div class="description">
                    <div class="des_title">description</div>

                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            Woman 3-piece dress suits: 100% organic cotton
                        </div>
                    </div>
                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            Dry clean only
                        </div>
                    </div>
                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            This product contains (suit, vest and pants)
                        </div>
                    </div>

                </div>
                <div class="description">
                    <div class="des_title">Additional Information</div>
                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            Category: Women, clothing, white, yellow, red, black,
                        </div>
                    </div>
                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            Size: S, M, L, XL, XXL
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="des_title">Shipping and Returns</div>
                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            Delivery in 5-7 days
                        </div>
                    </div>
                    <div class="des_content">
                        <img src="{{ url('assets/shop/assets') }}/img/dot.png" alt="">
                        <div class="des_title_content">
                            Free shipping (New York area only)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('shop.layouts.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>