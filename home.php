<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<?php
require_once 'inc/head.php';
?>



<nav class="nav-menu">
    <div id="icons"></div>
    <div class="material-m"><i class="material-icons mi">menu</i></div>





    <div class="links " >
        <a>Home</a>
        <a>Categories</a>
        <a>Classified</a>
        <a>Offers</a>
        <a>Business Plans</a>
    </div>
    <div id="search-bar">
        <input type="text" placeholder="Search products here...">
    <button id="search-button"><i class="fa fa-search" ></i></button>
 <div id="user">
     <div class="parts part1">
         <div class="p" id="bag"></div>
         <div class="p" id="user-pic"></div>
     </div>
     <div class="parts part2">
         <h5>Akash Divya</h5>
         <div class="icon-menu-pic"></div>
     </div>
 </div>



    </div>
   
<div id="menubar">
    <div id="user-nav-res"></div>
    <h2>Akash Sharma</h2>
    
    <div id="res-nav-link">
        <a>Home</a>
        <a>Categories</a>
        <a>Classified</a>
        <a>Offers</a>
        <a>Business Plans</a>
    </div>
</div>

</nav>



<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide ss1"></div>
      <div class="swiper-slide ss2"></div>
      <div class="swiper-slide ss3"></div>
      <div class="swiper-slide ss4"></div>
      <div class="swiper-slide ss5"></div>
   <!--   <div class="swiper-slide"></div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div>-->
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <div class="swiper-discount " id="discount sw" >
    <h3>Get Flat 60% OFF On selected<br>AtheleteWear merchandises.* </h3>
    <p>*Valid till the stoks lasts on shopping of $2999 or above. Offer stays till<br>December 21,2019 </p>
    </div>




  </div>
  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>







<!--<div id="slider" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators" id="indicator" >
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    
     <div class="carousel-inner">

        <div class="item active">
            <img src="la.jpg"  style="width:100%;">
        </div>

        <div class="item">
            <img src="la.jpg"  style="width:100%;">
        </div>

        <div class="item">
            <img src="la.jpg"  style="width:100%;">
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>



     </div>


</div>  -->

<!--<div id="slider">
    <div id="image-container" class="galleria">
    
    <img src="assets/car.png" >
    <img src="assets/car.png">
    <img src="assets/car.png">

   
    </div>
</div>-->



<!--<div id="products">

    <div class="discount" id="discount" >
    <h3>Get Flat 60% OFF On selected<br>AtheleteWear merchandises.* </h3>
    <p>*Valid till the stoks lasts on shopping of $2999 or above. Offer stays till<br>December 21,2019 </p>
    </div>
        <h3 id="Product-of-the-day">Products Of The Day</h3>
  
  
  
    <div class="product">


        <div class="cards" id="card1">
            <div class="off">
                <div class="off-percent">
                    <h3>40</h3>
                    <div class="percentage-off">
                        <h4>%</h4>
                        <p>off</p>
                    </div>
                   
                </div>
                <button class="apparal">SMARTPHONE</button>
            </div>
            <div class="rating">
                <div class="brand" >
                    <h1>iPhone XS Max</h1>
                    <p>Bhopal Expo</p>
                    <h2>Price: <span>$2300</span></h2>
                </div>
                <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp">
                        <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


        <div class="cards" id="card22">
            <div class="off">
                <div class="off-percent">
                    <h3>40</h3>
                    <div class="percentage-off">
                        <h4>%</h4>
                        <p>off</p>
                    </div>
                   
                </div>
                <button class="apparal">SMARTPHONE</button>
            </div>
            <div class="rating">
                <div class="brand" >
                    <h1>iPhone XS Max</h1>
                    <p>Bhopal Expo</p>
                    <h2>Price: <span>$2300</span></h2>
                </div>
                <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp">
                        <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


        <div class="cards" id="card3">
            <div class="off">
                <div class="off-percent">
                    <h3>40</h3>
                    <div class="percentage-off">
                        <h4>%</h4>
                        <p>off</p>
                    </div>
                   
                </div>
                <button class="apparal">SMARTPHONE</button>
            </div>
            <div class="rating">
                <div class="brand" >
                    <h1>iPhone XS Max</h1>
                    <p>Bhopal Expo</p>
                    <h2>Price: <span>$2300</span></h2>
                </div>
                <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp">
                        <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


     
</div>
-->
</div>


<h3 class="automobile-of-the-month">Product of the Day</h3>
<div id="automobile">
   
    <div class="container-fluid auto-container">
        <div class="row" id="auto-row">
            <div class="col-lg-4 col-sm-12 auto-cards smartphone-pic">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp">
                        <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 auto-cards badguy">
                <button class="auto-button">APPARAL</button>
                <div class="auto-div">40%</div>
                 <div class="auto-rating">
                 <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>
                    <p>21 Reviews</p>
                    <div class="product-mrp">
                    <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                    </div>
                 </div>  
                 
            </div>
            <div class="col-lg-4 col-sm-12 auto-cards speakerpic">
                <button class="auto-button">AUDIO AND WOOFER</button>
                <div class="auto-div">40%</div>
                 <div class="auto-rating">
                 <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>
                    <p>21 Reviews</p>
                    <div class="product-mrp">
                    <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                    </div>
                 </div>  
                 
            </div>
        </div>
    </div>
</div>

<div class="top-categories container-fluid ">
    <h3>Top Categories</h3>
    <div class="container container-fluid  top-categories-div">
        <div class="row container-fluid ">
            <div class="  col-4 col-lg-4 col-sm-12 card-categories cc1">
                <div class="discription">
                    <h4 id="ge">Gadets & Electronics</h4>
                    <p>2059 Products</p>
                </div>
            </div>
            <div class=" col-4 col-lg-4 col-sm-12 card-categories cc2">
            <div class="discription">
                    <h4 id="ge">Gadets & Electronics</h4>
                    <p>2059 Products</p>
                </div>
            </div>
            <div class="  col-4 col-lg-4 col-sm-12 card-categories cc3">
            <div class="discription">
                    <h4 id="ge">Gadets & Electronics</h4>
                    <p>2059 Products</p>
                </div>
            </div>
            <div class=" col-4 col-lg-4 col-sm-12 card-categories cc4">
            <div class="discription">
                    <h4 id="ge">Gadets & Electronics</h4>
                    <p>2059 Products</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<button class="explore ">Explore All<i class="fa fa-long-arrow-right" style="font-size:24px"></i></button>


<div class="shoes">
    <div class="container">
    <div class="row shoe-row">
        <div class="col-lg-6 col-sm-12 s1" id="s1" >
            <div>
                <h2>Mens Shoe Under $599 </h2>
            <button class="btn-dsn ">Explore All<i class="fa fa-long-arrow-right" style="font-size:24px"></i></button>

            </div>
        </div>
        <div class=" col-lg-6 col-sm-12 s1" id="s2">
            <div>
            <h2>DSLR Under 2259 </h2>
            <button class="btn-dsn  ">Explore All<i class="fa fa-long-arrow-right" style="font-size:24px"></i></button>

            </div>
        </div>
    </div>
</div>

</div>


<h3 class="automobile-of-the-month">Automobile of the Month</h3>
<div id="automobile">
   
    <div class="container-fluid auto-container">
        <div class="row" id="auto-row">
            <div class="col-lg-4 col-sm-12 auto-cards auto-card-1">
                <button class="auto-button">AUTOMOBILE</button>
                <div class="auto-div">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp">
                        <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 auto-cards auto-card-2">
                <button class="auto-button">AUTOMOBILE</button>
                <div class="auto-div">40%</div>
                 <div class="auto-rating">
                 <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>
                    <p>21 Reviews</p>
                    <div class="product-mrp">
                    <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                    </div>
                 </div>  
                 
            </div>
            <div class="col-lg-4 col-sm-12 auto-cards auto-card-3">
                <div id="overlay">
                    <button>ADVERTISE</button>
                </div>
            </div>
        </div>
    </div>
</div>


 

<div class="headphone container">
<div class="discount" id="discount" >
    <h3>Get Flat 60% OFF On selected<br>AtheleteWear merchandises.* </h3>
    <p>*Valid till the stoks lasts on shopping of $2999 or above. Offer stays till<br>December 21,2019 </p>
    </div>
    <button class="explore headphone-button" id="hpbn">Explore All<i class="fa fa-long-arrow-right" style="font-size:24px"></i></button>
      
</div>


<h3 class="automobile-of-the-month">Product of the Day</h3>
<!--<div id="automobile">
   
    <div class="container-fluid auto-container">
        <div class="row" id="auto-row">
            <div class="col-lg-4 col-sm-12 auto-cards blackop">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp">
                        <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 auto-cards wicher">
                <button class="auto-button">APPARAL</button>
                <div class="auto-div">40%</div>
                 <div class="auto-rating">
                 <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>
                    <p>21 Reviews</p>
                    <div class="product-mrp">
                    <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                    </div>
                 </div>  
                 
            </div>
            <div class="col-lg-4 col-sm-12 auto-cards bman">
                <button class="auto-button">AUDIO AND WOOFER</button>
                <div class="auto-div">40%</div>
                 <div class="auto-rating">
                 <div class="brand" >
                        <h1>iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>
                    <p>21 Reviews</p>
                    <div class="product-mrp">
                    <h4>44444</h4>
                        <div class="mrp-block" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                    </div>
                 </div>  
                 
            </div>
        </div>
    </div>
</div>-->



<!-- Swiper -->
<div class="swiper-container bottom-container">
    <div class="swiper-wrapper">

      <div class="swiper-slide responsive-ss"> <div class="col-lg-4 col-sm-12 auto-cards blackop">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div" id="bottom-dis-per">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1 id="bottom-h1">iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars" id="bottom-stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp" id="product-mrp-bottom-block">
                        <h4>44444</h4>
                        <div class="mrp-block" id="bottom-mrp-adjust" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div></div>
      <div class="swiper-slide responsive-ss"> <div class="col-lg-4 col-sm-12 auto-cards blackop">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div" id="bottom-dis-per">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1 id="bottom-h1">iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars" id="bottom-stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp" id="product-mrp-bottom-block">
                        <h4>44444</h4>
                        <div class="mrp-block" id="bottom-mrp-adjust" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div></div>
      <div class="swiper-slide responsive-ss"> <div class="col-lg-4 col-sm-12 auto-cards blackop">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div" id="bottom-dis-per">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1 id="bottom-h1">iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars" id="bottom-stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp" id="product-mrp-bottom-block">
                        <h4>44444</h4>
                        <div class="mrp-block" id="bottom-mrp-adjust" >
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div></div>
      <div class="swiper-slide responsive-ss"> <div class="col-lg-4 col-sm-12 auto-cards blackop">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div" id="bottom-dis-per">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1 id="bottom-h1">iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars" id="bottom-stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp" id="product-mrp-bottom-block">
                        <h4>44444</h4>
                        <div class="mrp-block" id="bottom-mrp-adjust">
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div></div>
      <div class="swiper-slide responsive-ss"> <div class="col-lg-4 col-sm-12 auto-cards blackop">
                <button class="auto-button">SMARTPHONE</button>
                <div class="auto-div" id="bottom-dis-per">40%</div>
                <div class="auto-rating">
                    <div class="brand" >
                        <h1 id="bottom-h1">iPhone XS Max</h1>
                        <p>Bhopal Expo</p>
                        <h2>Price: <span>$2300</span></h2>
                    </div>
                    <div class="stars" id="bottom-stars">
                    <div class="star-rating">
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='far fa-star' style="color:black ; font-weight:500"></i>
                    </div>

                    <p>21 Reviews</p>

                    <div class="product-mrp" id="product-mrp-bottom-block">
                        <h4>44444</h4>
                        <div class="mrp-block" id="bottom-mrp-adjust">
                            <h3>MRP</h3>
                        </div>
                    </div>
                </div>
                </div>
            </div></div>
      <div class="swiper-slide responsive-ss">Slide 6</div>
      <div class="swiper-slide responsive-ss">Slide 7</div>
      <div class="swiper-slide responsive-ss">Slide 8</div>
      <div class="swiper-slide responsive-ss">Slide 9</div>
      <div class="swiper-slide responsive-ss">Slide 10</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
      

  </div>
  <script>

     
var swiper = new Swiper('.bottom-container', {
  slidesPerView: 3,
  spaceBetween: 30,
     pagination: {
      el: '.swiper-pagination',
       clickable: true,
      },
      breakpoints: {
        700: {       
         slidesPerView: 1,
         spaceBetween: 11     
      },
      760: {       
         slidesPerView: 1,
         spaceBetween: 10     
      },
      }
    });

    

  //  var swiper = new Swiper('.bottom-container', {
  //    slidesPerView: 3,
   //   spaceBetween: 30,
    //  pagination: {
     //   el: '.swiper-pagination',
      //  clickable: true,
    //  },
   // });
  </script>












<footer>
    <div id="footer-div-img">

    </div>
    <div>
        <h4>Links</h4>
        <a>Home</a>
        <a>Categories</a>
        <a>Classified</a>
        <a>Offers</a>
    </div>
    <div>
    <h4>About</h4>
        <a>Home</a>
        <a>Categories</a>
        <a>Classified</a>
        <a>Offers</a>
    </div>
    <div>
    <h4>Earn with us</h4>
        <a>Home</a>
        <a>Categories</a>
        <a>Classified</a>
        <a>Offers</a>
    </div>
    <div>
    <h4>Legal</h4>
        <a>Home</a>
        <a>Categories</a>
        <a>Classified</a>
        <a>Offers</a>
    </div>
</footer>






<div class="down-footer">Coded at HackerKernel by Sanskriti Thakur &#128125;</div>
<?php
require_once 'inc/footer-link.php';
?>


