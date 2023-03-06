@extends('landing.layouts.master ')

@section('content')
{{-- carousel --}}
<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.carousel-indicator -->
     <ol class="carousel-indicators">
       <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
       <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
       <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
    </ol><!-- /ol-->
    <!--/.carousel-indicator -->

    <!--/.carousel-inner -->
    <div class="carousel-inner" role="listbox">
       <!-- .item -->
       <div class="item active">
          <div class="single-slide-item slide1">
             <div class="container">
                <div class="welcome-hero-content">
                   <div class="row">
                      <div class="col-sm-7">
                         <div class="single-welcome-hero">
                            <div class="welcome-hero-txt">
                               <h4>great design collection</h4>
                               <h2>shoes with good fabric</h2>
                               <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
                               </p>
                               <div class="packages-price">
                                  <p>
                                     $ 399.00
                                     <del>$ 499.00</del>
                                  </p>
                               </div>
                               <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                  <span class="lnr lnr-plus-circle"></span>
                                  add <span>to</span> cart
                               </button>
                               <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                  more info
                               </button>
                            </div><!--/.welcome-hero-txt-->
                         </div><!--/.single-welcome-hero-->
                      </div><!--/.col-->
                      <div class="col-sm-5">
                         <div class="single-welcome-hero">
                            <div class="welcome-hero-img">
                               <img src="{{asset('assets/images/slider/shoes1.png')}}" alt="slider image">
                            </div><!--/.welcome-hero-txt-->
                         </div><!--/.single-welcome-hero-->
                      </div><!--/.col-->
                   </div><!--/.row-->
                </div><!--/.welcome-hero-content-->
             </div><!-- /.container-->
          </div><!-- /.single-slide-item-->

       </div><!-- /.item .active-->

       <div class="item">
          <div class="single-slide-item slide2">
             <div class="container">
                <div class="welcome-hero-content">
                   <div class="row">
                      <div class="col-sm-7">
                         <div class="single-welcome-hero">
                            <div class="welcome-hero-txt">
                               <h4>great design collection</h4>
                               <h2>comfortable material to use</h2>
                               <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
                               </p>
                               <div class="packages-price">
                                  <p>
                                     $ 199.00
                                     <del>$ 299.00</del>
                                  </p>
                               </div>
                               <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                  <span class="lnr lnr-plus-circle"></span>
                                  add <span>to</span> cart
                               </button>
                               <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                  more info
                               </button>
                            </div><!--/.welcome-hero-txt-->
                         </div><!--/.single-welcome-hero-->
                      </div><!--/.col-->
                      <div class="col-sm-5">
                         <div class="single-welcome-hero">
                            <div class="welcome-hero-img">
                               <img src="{{asset('assets/images/slider/shoes2.png')}}" alt="slider image">
                            </div><!--/.welcome-hero-txt-->
                         </div><!--/.single-welcome-hero-->
                      </div><!--/.col-->
                   </div><!--/.row-->
                </div><!--/.welcome-hero-content-->
             </div><!-- /.container-->
          </div><!-- /.single-slide-item-->

       </div><!-- /.item .active-->

       <div class="item">
          <div class="single-slide-item slide3">
             <div class="container">
                <div class="welcome-hero-content">
                   <div class="row">
                      <div class="col-sm-7">
                         <div class="single-welcome-hero">
                            <div class="welcome-hero-txt">
                               <h4>great design collection</h4>
                               <h2>quite affordable price</h2>
                               <p>
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
                               </p>
                               <div class="packages-price">
                                  <p>
                                     $ 299.00
                                     <del>$ 399.00</del>
                                  </p>
                               </div>
                               <button class="btn-cart welcome-add-cart" onclick="window.location.href='#'">
                                  <span class="lnr lnr-plus-circle"></span>
                                  add <span>to</span> cart
                               </button>
                               <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                  more info
                               </button>
                            </div><!--/.welcome-hero-txt-->
                         </div><!--/.single-welcome-hero-->
                      </div><!--/.col-->
                      <div class="col-sm-5">
                         <div class="single-welcome-hero">
                            <div class="welcome-hero-img">
                               <img src="{{asset('assets/images/slider/shoes3.png')}}" alt="slider image">
                            </div><!--/.welcome-hero-txt-->
                         </div><!--/.single-welcome-hero-->
                      </div><!--/.col-->
                   </div><!--/.row-->
                </div><!--/.welcome-hero-content-->
             </div><!-- /.container-->
          </div><!-- /.single-slide-item-->
          
       </div><!-- /.item .active-->
    </div><!-- /.carousel-inner-->

 </div>


<!--populer-products start -->
<section id="populer-products" class="populer-products">
    <div class="container">
        <div class="populer-products-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="single-populer-products">
                        <div class="single-populer-product-img mt40">
                            <img src="{{asset('assets/images/populer-products/sepatu5.png')}}" alt="populer-products images">
                        </div>
                        <h2><a href="#">Nike Air</a></h2>
                        <div class="single-populer-products-para">
                            <p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-populer-products">
                        <div class="single-inner-populer-products">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="single-inner-populer-product-img">
                                        <img src="{{asset('assets/images/populer-products/sepatu8.png')}}" alt="populer-products images">
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="single-inner-populer-product-txt">
                                        <h2>
                                            <a href="#">
                                                Compass <span>and</span> Allstar
                                            </a>
                                        </h2>
                                        <p>
                                            Edi ut perspiciatis unde omnis iste natusina error sit voluptatem accusantium doloret mque laudantium, totam rem aperiam.
                                        </p>
                                        <div class="populer-products-price">
                                            <h4>Sales Start from <span>$99.00</span></h4>
                                        </div>
                                        <button class="btn-cart welcome-add-cart populer-products-btn" onclick="window.location.href='#'">
                                            discover more
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-populer-products">
                        <div class="single-populer-products">
                            <div class="single-populer-product-img">
                                <img src="{{asset('assets/images/populer-products/sepatu2.png')}}" alt="populer-products images">
                            </div>
                            <h2><a href="#">Nike Sport</a></h2>
                            <div class="single-populer-products-para">
                                <p>Nemo enim ipsam voluptatem quia volu ptas sit asperna aut odit aut fugit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.populer-products-->
<!--populer-products end-->

<!--new-arrivals start -->
<section id="new-arrivals" class="new-arrivals">
    <div class="container">
        <div class="section-header">
            <h2>new arrivals</h2>
        </div><!--/.section-header-->
        <div class="new-arrivals-content">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu1.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-1">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">Sport</a></h4>
                        <p class="arrival-product-price">Rp365.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu2.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-2">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">Nike Sport</a></h4>
                        <p class="arrival-product-price">Rp.580.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu3.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">compass</a></h4>
                        <p class="arrival-product-price">Rp.240.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu4.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-1">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">compass</a></h4>
                        <p class="arrival-product-price">Rp.210.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu5.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">Nike Air</a></h4>
                        <p class="arrival-product-price">Rp2.120.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu6.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-1">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">Converse</a></h4>
                        <p class="arrival-product-price">Rp.414.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu7.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="sale bg-2">
                                <p>sale</p>
                            </div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">Nike Sport</a></h4>
                        <p class="arrival-product-price">Rp.490.000</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-new-arrival">
                        <div class="single-new-arrival-bg">
                            <img src="{{asset('assets/images/collection/sepatu8.png')}}" alt="new-arrivals images">
                            <div class="single-new-arrival-bg-overlay"></div>
                            <div class="new-arrival-cart">
                                <p>
                                    <span class="lnr lnr-cart"></span>
                                    <a href="#">add <span>to </span> cart</a>
                                </p>
                                <p class="arrival-review pull-right">
                                    <span class="lnr lnr-heart"></span>
                                    <span class="lnr lnr-frame-expand"></span>
                                </p>
                            </div>
                        </div>
                        <h4><a href="#">Converse 70s</a></h4>
                        <p class="arrival-product-price">740.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.new-arrivals-->
<!--new-arrivals end -->

<!--sofa-collection start -->
<section id="shoes-collection">
    <div class="owl-carousel owl-theme" id="collection-carousel">
        <div class="shoes-collection collectionbg1">
            <div class="container">
                <div class="shoes-collection-txt">
                    <h2>unlimited shoes collection</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                    <div class="shoes-collection-price">
                        <h4>strting from <span>$ 199</span></h4>
                    </div>
                </div>
            </div>	
        </div><!--/.shoes-collection-->
        <div class="shoes-collection collectionbg2">
            <div class="container">
                <div class="shoes-collection-txt">
                    <h2>unlimited dainning table collection</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                    <div class="shoes-collection-price">
                        <h4>strting from <span>$ 299</span></h4>
                    </div>
                </div>
            </div>
        </div><!--/.sofa-collection-->
    </div><!--/.collection-carousel-->

</section><!--/.sofa-collection-->
<!--sofa-collection end -->

<!--feature start -->
<section id="feature" class="feature">
    <div class="container">
        <div class="section-header">
            <h2>featured products</h2>
        </div><!--/.section-header-->
        <div class="feature-content">
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-feature">
                        <img src="{{asset('assets/images/features/f5.jpg')}}" alt="feature image">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">designed sofa</a></h3>
                            <h5>$160.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-feature">
                        <img src="{{asset('assets/images/features/f6.jpg')}}" alt="feature image">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">dinning table </a></h3>
                            <h5>$200.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-feature">
                        <img src="{{asset('assets/images/features/f7.jpg')}}" alt="feature image">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">chair and table</a></h3>
                            <h5>$100.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-feature">
                        <img src="{{asset('assets/images/features/f8.jpg')}}" alt="feature image">
                        <div class="single-feature-txt text-center">
                            <p>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                <span class="feature-review">(45 review)</span>
                            </p>
                            <h3><a href="#">modern arm chair</a></h3>
                            <h5>$299.00</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->

</section><!--/.feature-->
<!--feature end -->

<!-- about us -->
<section class="about" id="about">
    <main class="abouts">
        <div class = "image-about">
           <img src="{{asset('assets/images/slider/shoes1.png')}}">
        </div>
    
        <div class = "content-about">
            <h2>About Us</h2>
            <span><!-- line here --></span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis aspernatur voluptas inventore ab voluptates nostrum minus illo laborum harum laudantium earum ut, temporibus fugiat sequi explicabo facilis unde quos corporis!</p>
            <ul class = "links">
                <li><a href = "#">work</a></li>
                <div class = "vertical-line"></div>
                <li><a href = "#">service</a></li>
                <div class = "vertical-line"></div>
                <li><a href = "#">contact</a></li>
            </ul>
            <ul class = "icons">
                <li>
                    <i class = "fa fa-twitter"></i>
                </li>
                <li>
                    <i class = "fa fa-facebook"></i>
                </li>
                <li>
                    <i class = "fa fa-github"></i>
                </li>
                <li>
                    <i class = "fa fa-pinterest"></i>
                </li>
            </ul>
        </div>
    </main>
</section>

<!--end about-->
<!--blog start -->
<section id="blog" class="blog">
    <div class="container">
        <div class="section-header">
            <h2>latest blog</h2>
        </div><!--/.section-header-->
        <div class="blog-content">
            <div class="row">
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="{{asset('assets/images/blog/b1.jpg')}}" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                            <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="{{asset('assets/images/blog/b2.jpg')}}" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                            <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-blog">
                        <div class="single-blog-img">
                            <img src="{{asset('assets/images/blog/b3.jpg')}}" alt="blog image">
                            <div class="single-blog-img-overlay"></div>
                        </div>
                        <div class="single-blog-txt">
                            <h2><a href="#">Why Brands are Looking at Local Language</a></h2>
                            <h3>By <a href="#">Robert Norby</a> / 18th March 2018</h3>
                            <p>
                                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.... 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.container-->
    
</section><!--/.blog-->
<!--blog end -->

<!-- contact -->
<section id="contact" class="contact">
    <div class="section-header">
        <h2>Contact</h2>
    </div>
   <div class="container">
    <div class="content">
        <div class="left-side">
            <div class="address details">
                <p class="topic">Address</p>
                <a href="#" class="text-one">Surket, NP12</a><br>
                <a href="#" class="text-two">Birendranager 06</a>
            </div>
            <div class="phone details">
                <p class="topic">Phone</p>
                <a href="#" class="text-one">+62089987xxxx</a><br>
                <a href="#" class="text-two">+62976499xxxx</a>
            </div>
            <div class="email details">
                <p class="topic">Email</p>
                <a href="#" class="text-one">alphashoes@gmil.com</a><br>
                <a href="#" class="text-two">info.alpha@gmail.com</a>
            </div>
        </div>
        <div class="right-side">
            <h3 class="topic-text">Send us a message</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam dignissimos et voluptate vel sequi,
                 cum aut illo tenetur magni molestias dolores.</p>
            <form action="#">
                <div class="input-box">
                    <input type="text" placeholder="Ente your name">
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Ente your email">
                </div>
                <textarea name="message" id="msg" class="input-box message-box" cols="30" rows="10">

                </textarea>
                <div class="button-send">
                    <input type="button" value="Send Now">
                </div>
            </form>
        </div>
    </div>
   </div>
</section>

<!-- clients strat -->
<section id="clients"  class="clients">
    <div class="container">
        <div class="owl-carousel owl-theme" id="client">
                <div class="item">
                    <a href="#">
                        <img src="{{asset('assets/images/clients/c1.png')}}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{asset('assets/images/clients/c2.png')}}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{asset('assets/images/clients/c3.png')}}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{asset('assets/images/clients/c4.png')}}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
                <div class="item">
                    <a href="#">
                        <img src="{{asset('assets/images/clients/c5.png')}}" alt="brand-image" />
                    </a>
                </div><!--/.item-->
            </div><!--/.owl-carousel-->

    </div><!--/.container-->

</section><!--/.clients-->	
<!-- clients end -->
    
@endsection