    <!--========== SWIPER SLIDER ==========-->
@extends('layouts.frontend_layout.app')

@section('content')  
<style>
    @-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1.5, 1.5);
  }
  to {
    -webkit-transform: scale(1, 1);
  }
}

@keyframes zoom {
  from {
    transform: scale(1.5, 1.5);
  }
  to {
    transform: scale(1, 1);
  }
}

.carousel-inner .item > img {
  -webkit-animation: zoom 20s;
  animation: zoom 20s;
}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="frontend_theme/frontend_images/image2.png" alt="Chania">
    </div>

    <div class="item">
      <img src="frontend_theme/frontend_images/1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="frontend_theme/frontend_images/image6.png" alt="Flower">
    </div>
    <div class="item">
      <img src="frontend_theme/frontend_images/mahindra/img3.png" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--    <div class="s-swiper js__swiper-one-item">
             Swiper Wrapper 
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('frontend_theme/img/1920x1080/02.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">A Mobile Experience<br>That Inspires Travel</h1>
                        </div>
                        <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                            <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                        </a>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('frontend_theme/img/1920x1080/01.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">We Craft Experience<br>That Help Brands<br>Stand Out</h2>
                            </div>
                            <a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
                                <i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
             End Swiper Wrapper 

             Arrows 
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
             End Arrows 
            
            <a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
                <span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
                <p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
            </a>
        </div>-->
        <!--========== END SWIPER SLIDER ==========-->
        <!-- Culture -->
        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">Visionary</h2>
                </div>
                <div class="g-margin-b-80--xs">
                    <p class="g-font-size-18--xs" style="color:#ffffff;font-family: Montserrat, sans-serif;">Take your time making a decision but once you make it, stay committed to it and make it work.</p>
                    <p class="g-font-size-18--xs" style="color:#ffffff;font-family: Montserrat, sans-serif;">Always keep auditing yourself as there is always scope for improvement.</p>
                </div>
                <!--<a href="http://keenthemes.com/" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Learn More</a>-->
            </div>
        </div>
        
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="col-sm-6 col-xs-6 g-hor-centered-row__col">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="frontend_theme/frontend_images/image3.png" alt="Image">
                    </div>
                </div>
<!--                <div class="col-sm-3 col-xs-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="frontend_theme/img/400x550/01.jpg" alt="Image">
                    </div>
                </div>-->
                <div class="col-sm-1"></div>
                <div class="col-sm-5 g-hor-centered-row__col">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Culture</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Event</h2>
                    <p class="g-font-size-18--sm">Our story began in 1907 as Jamshri Ranjitsinghji Spinning and Weaving Mills</p>
                </div>
            </div>

            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-100--md">
                <div class="col-sm-6 col-xs-6 col-sm-push-6 g-hor-centered-row__col">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="frontend_theme/frontend_images/image4.png" alt="Image">
                    </div>
                </div>
<!--                <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="frontend_theme/img/400x500/06.jpg" alt="Image">
                    </div>
                </div>-->
                <div class="col-sm-1"></div>
                <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Speakers</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Keynote Speakers</h2>
                    <p class="g-font-size-18--sm">Working together on the daily requires each individual to let the greater good of the team’s work surface above their own ego.</p>
                </div>
            </div>
            
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs ">
                <div class="col-sm-6 col-xs-6 g-hor-centered-row__col">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="frontend_theme/frontend_images/image5.png" alt="Image">
                    </div>
                </div>
<!--                <div class="col-sm-3 col-xs-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="frontend_theme/img/400x550/01.jpg" alt="Image">
                    </div>
                </div>-->
                <div class="col-sm-1"></div>
                <div class="col-sm-5 g-hor-centered-row__col">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Culture</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Event</h2>
                    <p class="g-font-size-18--sm">Our story began in 1907 as Jamshri Ranjitsinghji Spinning and Weaving Mills</p>
                </div>
            </div>
        </div>
        
        
<!--        <div class="g-promo-section">
            <section class="overview clearfix row" style="background:#ededed">
                <div class="container-fluid" style="padding-left: 0px;">
                    <div class="">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="row">
                                <img src="frontend_theme/frontend_images/image3.png" alt="KRaheja" style="width: 775px;height: 600px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 g-text-center--xs g-margin-b-100--xs g-padding-y-80--xs g-padding-y-125--sm">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                            <h2 class="g-font-size-32--xs g-font-size-36--md">Our story began in 1907 as Jamshri Ranjitsinghji Spinning and Weaving Mills</h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>-->
<!--        <div class="g-promo-section">
            <section class="overview clearfix" style="background:#ededed">
                <div class="container-fluid" style="padding-left: 0px;">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 g-text-center--xs g-margin-b-100--xs g-padding-y-80--xs g-padding-y-125--sm">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                            <h2 class="g-font-size-32--xs g-font-size-36--md">Our Journey So Far</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="row">
                                <img src="frontend_theme/frontend_images/image4.png" alt="KRaheja" style="width: 775px;height: 650px;">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </div>
        <div class="g-promo-section">
            <section class="overview clearfix" style="background:#ededed">
                <div class="container-fluid" style="padding-left: 0px;">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <div class="row">
                                <img src="frontend_theme/frontend_images/image5.png" alt="KRaheja" style="width: 775px;height: 650px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 g-text-center--xs g-margin-b-100--xs g-padding-y-80--xs g-padding-y-125--sm">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                            <h2 class="g-font-size-32--xs g-font-size-36--md">Our Journey So Far</h2>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
        </div>-->
        <!-- End Culture -->
        <!-- Testimonials -->
<!--        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Our Story</p>
                <div class="s-swiper js__swiper-testimonials">
                     Swiper Wrapper 
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <img src="frontend_theme/frontend_images/image3.png" alt="KRaheja" style="width: 800px;height: 550px;">
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake Richardson / Google</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <img src="frontend_theme/frontend_images/image4.png" alt="KRaheja" style="width: 775px;height: 650px;">
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake Richardson / Google</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <img src="frontend_theme/frontend_images/image5.png" alt="KRaheja" style="width: 775px;height: 650px;">
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake Richardson / Google</h4>
                            </div>
                        </div>
                    </div>
                     End Swipper Wrapper 

                     Arrows 
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                     End Arrows 
                </div>
            </div>
        </div>-->
        <!-- End Testimonials -->
        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
<!--        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">We Create Beautiful Experiences <br> That Drive Successful Businesses.</h2>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Responsive Layout</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                <i class="g-font-size-28--xs g-color--primary ti-settings"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Fully Customizable</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Pixel Perfect</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
            </div>
             // end row  
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-package"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Endless Possibilities</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-star"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Powerful Performance</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Parallax Support</h3>
                            <p class="g-margin-b-0--xs">This is where we sit down, grab a cup of coffee and dial in the details.</p>
                        </div>
                    </div>
                </div>
            </div>
             // end row  
        </div>-->
        <!-- End Features -->

        <!-- Parallax -->
<!--        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">The Fastest Way To Develop</h2>
                </div>
                <a href="http://keenthemes.com/" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50">Learn More</a>
            </div>
        </div>-->
        <!-- End Parallax -->

        

        <!-- Subscribe -->
<!--        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/07.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group">
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End Subscribe -->

        <!-- Portfolio Filter -->
<!--        <div class="container g-padding-y-80--xs">
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h2 class="g-font-size-32--xs g-font-size-36--md">Projects</h2>
            </div>
            <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">Show All</div>
                    <div data-filter=".graphic" class="s-portfolio__filter-v1-item cbp-filter-item">Graphic</div>
                    <div data-filter=".logos" class="s-portfolio__filter-v1-item cbp-filter-item">Logo</div>
                    <div data-filter=".motion" class="s-portfolio__filter-v1-item cbp-filter-item">Motion</div>
                </div>
            </div>
        </div>-->
        <!-- End Portfolio Filter -->

        <!-- Portfolio Gallery -->
<!--        <div class="container g-margin-b-100--xs">
            <div id="js__grid-portfolio-gallery" class="cbp">
                 Item 
                <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="frontend_theme/img/970x647/05.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by KeenThemes Inc.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="frontend_theme/img/970x647/05.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 Item 
                <div class="s-portfolio__item cbp-item graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="frontend_theme/img/970x647/06.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by KeenThemes Inc.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="frontend_theme/img/970x647/06.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 Item 
                <div class="s-portfolio__item cbp-item logos">
                    <div class="s-portfolio__img-effect">
                        <img src="frontend_theme/img/970x647/07.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by KeenThemes Inc.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="frontend_theme/img/970x647/07.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 Item 
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="frontend_theme/img/970x647/08.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by KeenThemes Inc.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="frontend_theme/img/970x647/08.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 Item 
                <div class="s-portfolio__item cbp-item logos graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="frontend_theme/img/970x647/09.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by KeenThemes Inc.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="frontend_theme/img/970x647/09.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 Item 
                <div class="s-portfolio__item cbp-item motion graphic">
                    <div class="s-portfolio__img-effect">
                        <img src="frontend_theme/img/970x647/04.jpg" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Portfolio Item</h4>
                            <p class="g-color--white-opacity">by KeenThemes Inc.</p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="frontend_theme/img/970x647/04.jpg" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="Portfolio Item <br/> by KeenThemes Inc.">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" class="s-icon s-icon--sm s-icon s-icon--white-bg g-radius--circle">
                                    <i class="ti-link"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 End Item 
            </div>
             End Portfolio Gallery 
        </div>-->
        <!-- End Portfolio -->

        <!-- Testimonials -->
<!--        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/04.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
                <div class="s-swiper js__swiper-testimonials">
                     Swiper Wrapper 
                    <div class="swiper-wrapper g-margin-b-50--xs">
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake Richardson / Google</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake Richardson / Google</h4>
                            </div>
                        </div>
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-color--white"><i>" I have purchased many great templates over the years but this product and this company have taken it to the next level. Exceptional customizability. "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">Jake Richardson / Google</h4>
                            </div>
                        </div>
                    </div>
                     End Swipper Wrapper 

                     Arrows 
                    <div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                     End Arrows 
                </div>
            </div>
        </div>-->
        <!-- End Testimonials -->

        <!-- Clients -->
<!--        <div class="g-bg-color--sky-light">
            <div class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
                 Swiper Clients 
                <div class="s-swiper js__swiper-clients">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="s-clients-v1" src="frontend_theme/img/clients/01-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".2s">
                                <img class="s-clients-v1" src="frontend_theme/img/clients/02-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".3s">
                                <img class="s-clients-v1" src="frontend_theme/img/clients/03-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".4s">
                                <img class="s-clients-v1" src="frontend_theme/img/clients/04-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".5s">
                                <img class="s-clients-v1" src="frontend_theme/img/clients/05-dark.png" alt="Clients Logo">
                            </div>
                        </div>
                    </div>
                </div>
                 End Swiper Clients 
            </div>
        </div>-->
        <!-- End Clients -->

        <!-- News -->
        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/03.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-80--xs">
                    <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white">GROUP DIRECTORS</h2>
                </div>
                <div class="row">
                <?php $group_director = App\GroupDirector::get(); 
                foreach($group_director as $group) { 
                ?>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="group_director/{{$group->image}}" alt="Image">
                        <!--<img class="img-responsive" src="frontend_theme/img/970x970/01.jpg" alt="Image">-->
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <!--<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>-->
                            <h3 class="g-font-size-22--xs g-letter-spacing--1">{{$group->name}}</h3>
                            <p>{{$group->position}}</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
                <?php } ?>
            </div>
            </div>
        </div>
<!--        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Blog</p>
                <h2 class="g-font-size-32--xs g-font-size-36--md">GROUP DIRECTORS </h2>
            </div>
            <div class="row">
                <?php // $group_director = App\GroupDirector::get(); 
//                foreach($group_director as $group) { 
                ?>
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                     News 
                    <article>
                        <img class="img-responsive" src="group_director/{{$group->image}}" alt="Image">
                        <img class="img-responsive" src="frontend_theme/img/970x970/01.jpg" alt="Image">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">News</p>
                            <h3 class="g-font-size-22--xs g-letter-spacing--1">{{$group->name}}</h3>
                            <p>{{$group->position}}</p>
                        </div>
                    </article>
                     End News 
                </div>
                <?php // } ?>
            </div>
        </div>-->
        <!-- End News -->

        <!-- Counter -->
<!--        <div class="js__parallax-window" style="background: url(frontend_theme/img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="row">
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">6</figure>
                                <span class="g-font-size-40--xs g-color--white">k</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Lines of Code</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                        <div class="g-text-center--xs">
                            <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">5</figure>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Award Winners</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">15</figure>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Multiple Pages</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 g-full-width--xs">
                        <div class="g-text-center--xs">
                            <div class="g-margin-b-10--xs">
                                <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">2</figure>
                                <span class="g-font-size-40--xs g-color--white">x</span>
                            </div>
                            <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                            <h4 class="g-font-size-18--xs g-color--white">Faster Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- End Counter -->

        <!-- Feedback Form -->
<!--        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Feedback</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Send us a note</h2>
                </div>
                <form>
                    <div class="row g-margin-b-40--xs">
                        <div class="col-sm-6 g-margin-b-20--xs g-margin-b-0--md">
                            <div class="g-margin-b-20--xs">
                                <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Name">
                            </div>
                            <div class="g-margin-b-20--xs">
                                <input type="email" class="form-control s-form-v2__input g-radius--50" placeholder="* Email">
                            </div>
                            <input type="text" class="form-control s-form-v2__input g-radius--50" placeholder="* Phone">
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control s-form-v2__input g-radius--10 g-padding-y-20--xs" rows="8" placeholder="* Your message"></textarea>
                        </div>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-80--xs">Submit</button>
                    </div>
                </form>
            </div>
        </div>-->
        <!-- End Feedback Form -->

        <!-- Google Map -->
<!--        <section class="s-google-map">
            <div id="js__google-container" class="s-google-container g-height-400--xs"></div>
        </section>-->
        <!-- End Google Map -->
        <!--========== END PAGE CONTENT ==========-->
@endsection