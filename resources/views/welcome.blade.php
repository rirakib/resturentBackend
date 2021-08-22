<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resturent</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./style.css">

    <style>
        .profile_btn {
            color: #fff;
            font-size: 18px;
            padding: 0px 5px;
        }

        .user_section {
            display: flex;
            justify-content: space-evenly
        }

        .user_section li {
            font-size: 18px;
        }

        .search_btn {
            font-size: 22px;
            color: #fff;
            cursor: pointer;
        }

        nav.bg-white.border-b.border-gray-100 {
            padding: 0;
            margin: 0;
            height: 0px;
            display: inline;
            font-size: 16px;
        }

        a.block.px-4.py-2.text-sm.leading-5.text-gray-700.hover\:bg-gray-100.focus\:outline-none.focus\:bg-gray-100.transition {
            font-size: 14px;
        }

        button.inline-flex.items-center.px-3.py-2.border.border-transparent.text-sm.leading-4.font-medium.rounded-md.text-gray-500.bg-white.hover\:text-gray-700.focus\:outline-none.transition {
            font-size: 16px;
            font-weight: 700;
        }

    </style>

</head>

<body>

    <!-- page loader animation  -->

    <div class="loader_wrapper" id="my_loader">

        <div class="box">
            <div class="container">
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
                <span class="circle"></span>
            </div>
        </div>

    </div>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>R</span>esturent</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <span class="search_btn"><i class="fas fa-search" id="search-btn"></i></span>

        </nav>

        <div class="icons">
            <ul class="user_section">
                <li></li>
                <li class="user">
                    <x-app-layout>

                    </x-app-layout>
                </li>
            </ul>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->

    <!-- login form container  -->



    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <h3>Online Resturent</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, officiis eligendi? Neque dolores natus
                iure eos amet debitis ea odio necessitatibus ut quia! Earum tempore corporis assumenda culpa veritatis
                optio.</p>
            <div class="home_btn">
                <a href="#">Happy Fooding</a>
            </div>
        </div>
    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>o</span>
            <span>r</span>
            <span>d</span>
            <span>e</span>
            <span>r</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/order_img.png" alt="">
            </div>

            <form action="{{route('orderStore')}}" method="post">
                @csrf 
                {{ method_field('GET') }}

                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name" name='where'>
                </div>
                <div class="inputBox">
                    <h3>item name</h3>
                    <input type="text" placeholder="item name" name='item'>
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" name='item-quantity' placeholder="number of quantity">
                </div>
                <div class="inputBox">
                    <h3>contact number</h3>
                    <input type="number" name="number" placeholder="  01XXXXXXXXX">
                </div>

                <input type="submit" class="btn" value="order now">
            </form>

        </div>

    </section>

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/bbq.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-utensils"></i> Barbeque </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/burger.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-utensils"></i> barger </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/soup.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-utensils"></i> soup </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/steak.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-utensils"></i> Steak </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/noodles.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-utensils"></i> noodles </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pasta.jpg" alt="">
                <div class="content">
                    <h3> <i class="fas fa-utensils"></i> pasta </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">order now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>lorem ipsume</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate
                    exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>Healthy food</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate
                    exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>24 hours service</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate
                    exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>Fresh food</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate
                    exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>timley transport</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate
                    exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>lorem ipsume</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate
                    exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pasta.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/noodles.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/steak.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/bbq.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/grill.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/soup.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/pasta.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/noodles.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/steak.jpg" alt="">
                <div class="content">
                    <h3>lorem ipsume</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt
                            fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt
                            fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt
                            fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.png" alt="">
                        <h3>john deo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt
                            fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact.png" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est
                    accusantium voluptas enim nemo facilis sit debitis.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">Rangpur</a>
                <a href="#">Dhaka</a>
                <a href="#">Rajshahi</a>
                <a href="#">Shylet</a>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">order</a>
                <a href="#">packages</a>
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>

        </div>

        <h1 class="credit"> created by <span> Rakib </span> | all rights reserved! </h1>

    </section>















    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="./script.js"></script>

</body>

</html>
