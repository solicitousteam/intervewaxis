<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')
<style>
    .blue-btn a{
  color: white;
  text-decoration:none;
  text-align: center;
  display:block; /* important */
}

.blue-btn, .first-link{
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -ms-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;     
}


.blue-btn{
  height: 59px;
  font: normal normal 700 1em/4em Arial,sans-serif;
  overflow: hidden;
  width: 200px;
  background-color: #3b5998;
  border-radius: 20px;
}

.blue-btn:hover{
   background-color: #003D60;
  
}

.blue-btn a:hover{
  text-decoration: none;
}

.first-link{
  margin-top: 0em;   
}

.blue-btn:hover .first-link{
  margin-top: -4em;
}
</style>
    <!-- Home Banner -->
    <section class="home-slide d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-md-7">
                    <div class="home-slide-face aos" data-aos="fade-up">
                        <div class="home-slide-text ">
                            <h5>"Boost Confidence, Nail Interviews!"</h5>
                            <h1>Where practice meets perfection: sharpen your skills</h1>
                            <p>"Practice Today, Succeed Tomorrow."</p>
                        </div>
                        <div class="blue-btn">
                         <a class="first-link" href="">
                          Get Started
                           </a>
                           <a href="">
                             Get Started
                              </a>
                                 </div>
                                 <br>
                        <!--<div class="banner-content">-->
                        <!--    <form class="form" action="course-list">-->
                        <!--        <div class="form-inner">-->
                        <!--            <div class="input-group">-->
                        <!--                <i class="fa-solid fa-magnifying-glass search-icon"></i>-->
                        <!--                <input type="email" class="form-control"-->
                        <!--                    placeholder="Search School, Online eductional centers, etc">-->
                        <!--                <span class="drop-detail">-->
                        <!--                    <select class="form-select select">-->
                        <!--                        <option>Category</option>-->
                        <!--                        <option>Angular</option>-->
                        <!--                        <option>Node Js</option>-->
                        <!--                        <option>React</option>-->
                        <!--                        <option>Python</option>-->
                        <!--                    </select>-->
                        <!--                </span>-->
                        <!--                <button class="btn btn-primary sub-btn" type="submit"><i-->
                        <!--                        class="fas fa-arrow-right"></i></button>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </form>-->
                        <!--</div>-->
                        <div class="trust-user">
                            <p>Trusted by over 15K Users <br>worldwide</p>
                            <div class="trust-rating d-flex align-items-center">
                                <div class="rate-head">
                                    <h2><span>1000</span>+</h2>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <h2 class="d-inline-block average-rating">4.4</h2>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <div class="girl-slide-img aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/build/img/object.png') }}" alt="Img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->
    <section class="section student-course">
        <div class="container">
            <div class="course-widget">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="course-full-width">
                            <div class="blur-border course-radius align-items-center aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ URL::asset('/build/img/pencil-icon.svg') }}" alt="Img">
                                    </div>
                                    <div class="course-inner-content">
                                        <!--<h4><span>10</span>K</h4>-->
                                        <p>Default Interview</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-full-width">
                            <div class="blur-border course-radius aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ URL::asset('/build/img/cources-icon.svg') }}" alt="Img">
                                    </div>
                                    <div class="course-inner-content">
                                        <!--<h4><span>200</span>+</h4>-->
                                        <p>Customized Interview</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-full-width">
                            <div class="blur-border course-radius aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ URL::asset('/build/img/gratuate-icon.svg') }}" alt="Img">
                                    </div>
                                    <div class="course-inner-content">
                                        <!--<h4><span>60</span>K +</h4>-->
                                        <p>Build Your Resume</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div class="course-full-width">
                            <div class="blur-border course-radius aos" data-aos="fade-up">
                                <div class="online-course d-flex align-items-center">
                                    <div class="course-img">
                                        <img src="{{ URL::asset('/build/img/certificate-icon.svg') }}" alt="Img">
                                    </div>
                                    <div class="course-inner-content">
                                        <!--<h4><span>6</span>K+</h4>-->
                                        <p>Ceritified Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Banner -->

    <!-- Top Categories -->
    <section class="section how-it-works">
        <div class="container">
            <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head">
                    <span>Favourite Technology</span>
                    <h2>Top Category</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center">
                    <a href="{{ url('job-category') }}" class="btn btn-primary">All Categories</a>
                </div>
            </div>
            <div class="section-text aos" data-aos="fade-up">
                <p>Explore our top interview categories.</p>
            </div>
            <div class="owl-carousel mentoring-course owl-theme aos" data-aos="fade-up">
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/18143.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Information Technology</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/business-administration.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Business Administration</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/v987-18a.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Medical</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/20943399.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Law</div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/998_sap.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">SAP</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/Oracle-Logo-1.png') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Oracle</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/medicine-capsules-global-health-with-geometric-pattern-digital-remix.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Pharma</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/engineering-tech-logo-vector.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Engineering</div>
                            </div>
                        </div>
                     
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/digital-marketing-with-icons-business-people.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Digital Marketing</div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/tech/design.jpg') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/categories-icon-04.png') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Python Development</div>
                            </div>
                        </div>
                        <p>30 Instructors</p>
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/categories-icon-01.png') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Docker Development</div>
                            </div>
                        </div>
                        <p>45 Instructors</p>
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/categories-icon-02.png') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Node JS Frontend</div>
                            </div>
                        </div>
                        <p>40 Instructors</p>
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/categories-icon-03.png') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Swift Development</div>
                            </div>
                        </div>
                        <p>23 Instructors</p>
                    </div>
                </div>
                <div class="feature-box text-center ">
                    <div class="feature-bg">
                        <div class="feature-header">
                            <div class="feature-icon">
                                <img src="{{ URL::asset('/build/img/categories-icon-04.png') }}" alt="Img">
                            </div>
                            <div class="feature-cont">
                                <div class="feature-text">Python Development</div>
                            </div>
                        </div>
                        <p>30 Instructors</p>
                    </div>
                </div>
            </div>
        </div>-->
    </section>
     <!-- Feature Course -->
    <!-- <section class="section new-course">
        <div class="container">
            <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head">
                    <span>What’s New</span>
                    <h2>Featured Courses</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center">
                    <a href="{{ url('course-list') }}" class="btn btn-primary">All Courses</a>
                </div>
            </div>
            <div class="section-text aos" data-aos="fade-up">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum
                    gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
            </div>
            <div class="course-feature">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt="Img"
                                            src="{{ URL::asset('/build/img/course/course-01.jpg') }}">
                                    </a>
                                    <div class="price">
                                        <h3>$300 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user1.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="{{ url('instructor-profile') }}">Nicole Brown</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Information
                                            About UI/UX Design Degree</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                            <p>12+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                            <p>9hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="rating m-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                        </div>
                                        <div class="all-btn all-category d-flex align-items-center">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt="Img"
                                            src="{{ URL::asset('/build/img/course/course-02.jpg') }}">
                                    </a>
                                    <div class="price">
                                        <h3>$400 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user2.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="{{ url('instructor-profile') }}">Jenis R.</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Wordpress for
                                            Beginners - Master Wordpress Quickly</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                            <p>11+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                            <p>6hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="rating m-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.3</span> (15)</span>
                                        </div>
                                        <div class="all-btn all-category d-flex align-items-center">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt="Img"
                                            src="{{ URL::asset('/build/img/course/course-03.jpg') }}">
                                    </a>
                                    <div class="price combo">
                                        <h3>FREE</h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user5.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="{{ url('instructor-profile') }}">Jesse Stevens</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Sketch from A
                                            to Z (2022): Become an app designer</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                            <p>16+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                            <p>12hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="rating m-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                        </div>
                                        <div class="all-btn all-category d-flex align-items-center">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt="Img"
                                            src="{{ URL::asset('/build/img/course/course-04.jpg') }}">
                                    </a>
                                    <div class="price">
                                        <h3>$500 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user4.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="{{ url('instructor-profile') }}">Nicole Brown</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Learn Angular
                                            Fundamentals From beginning to advance lavel</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                            <p>10+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                            <p>8hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="rating m-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.2</span> (15)</span>
                                        </div>
                                        <div class="all-btn all-category d-flex align-items-center">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt="Img"
                                            src="{{ URL::asset('/build/img/course/course-05.jpg') }}">
                                    </a>
                                    <div class="price">
                                        <h3>$300 <span>$99.00</span></h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user3.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="{{ url('instructor-profile') }}">John Smith</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="{{ url('course-details') }}">Build
                                            Responsive Real World Websites with HTML5 and CSS3</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                            <p>13+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                            <p>10hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="rating m-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                        </div>
                                        <div class="all-btn all-category d-flex align-items-center">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="course-box d-flex aos" data-aos="fade-up">
                            <div class="product">
                                <div class="product-img">
                                    <a href="{{ url('course-details') }}">
                                        <img class="img-fluid" alt="Img"
                                            src="{{ URL::asset('/build/img/course/course-06.jpg') }}">
                                    </a>
                                    <div class="price combo">
                                        <h3>FREE</h3>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="course-group d-flex">
                                        <div class="course-group-img d-flex">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user6.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                            <div class="course-name">
                                                <h4><a href="{{ url('instructor-profile') }}">Stella Johnson</a></h4>
                                                <p>Instructor</p>
                                            </div>
                                        </div>
                                        <div class="course-share d-flex align-items-center justify-content-center">
                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <h3 class="title instructor-text"><a href="{{ url('course-details') }}">C# Developers
                                            Double Your Coding Speed with Visual Studio</a></h3>
                                    <div class="course-info d-flex align-items-center">
                                        <div class="rating-img d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img">
                                            <p>7+ Lesson</p>
                                        </div>
                                        <div class="course-view d-flex align-items-center">
                                            <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img">
                                            <p>7hr 30min</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="rating m-0">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="d-inline-block average-rating"><span>4.6</span> (15)</span>
                                        </div>
                                        <div class="all-btn all-category d-flex align-items-center">
                                            <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /Feature Course -->

    <!-- Master Skill -->
    <section class="section master-skill">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="section-header aos" data-aos="fade-up">
                        <div class="section-sub-head">
                            <span>What’s New</span>
                            <h2>Master the skills to drive your career</h2>
                        </div>
                    </div>
                    <div class="section-text aos" data-aos="fade-up">
                        <p>Get certified, master modern tech skills, and level up your career — whether you’re starting out
                            or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their
                            careers.</p>
                    </div>
                    <div class="career-group aos" data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ URL::asset('/build/img/icon/icon-1.svg') }}" alt="Img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p> Practice realistic interview scenarios tailored to your field.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ URL::asset('/build/img/icon/icon-2.svg') }}" alt="Img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p> Receive personalized feedback to refine your interview techniques.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ URL::asset('/build/img/icon/icon-3.svg') }}" alt="Img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Gain confidence and poise through simulated interview experiences.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{ URL::asset('/build/img/icon/icon-4.svg') }}" alt="Img"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Acquire essential skills to excel in real job interviews.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-end">
                    <div class="career-img aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/build/img/join.png') }}" alt="Img" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Master Skill -->

    <!-- Trending Course -->
    <section class="section trend-course">
        <div class="container">
            <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head">
                    <span>What’s New</span>
                    <h2>TRENDING INTERVIEWS</h2>
                </div>
                <div class="all-btn all-category d-flex align-items-center">
                    <a href="{{ url('course-list') }}" class="btn btn-primary">All Courses</a>
                </div>
            </div>
            <div class="section-text aos" data-aos="fade-up">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum
                    gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
            </div>
            <div class="owl-carousel trending-course owl-theme aos" data-aos="fade-up">
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-07.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$200 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">John Michael</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">Learn JavaScript and Express to
                                    become a professional JavaScript</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>13+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>10hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-08.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$300 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">Responsive Web Design Essentials
                                    HTML5 CSS3 and Bootstrap</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>10+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>11hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.2</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-05.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$100 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">Lavern M.</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">The Complete App Design Course -
                                    UX, UI and Design Thinking</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>8+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>8hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.3</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-08.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$200 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user5.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">Build Responsive Real World
                                    Websites with HTML5 and CSS3</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>13+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>10hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-07.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$300 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user2.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">Responsive Web Design Essentials
                                    HTML5 CSS3 and Bootstrap</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>10+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>11hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.5</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-09.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$100 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user4.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">Lavern M.</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">The Complete App Design Course -
                                    UX, UI and Design Thinking</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>8+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>8hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-08.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$200 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user1.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">John Michael</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">Learn JavaScript and Express to
                                    become a professional JavaScript</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>13+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>10hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="course-box trend-box">
                    <div class="product trend-product">
                        <div class="product-img">
                            <a href="{{ url('course-details') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/course/course-09.jpg') }}">
                            </a>
                            <div class="price">
                                <h3>$300 <span>$99.00</span></h3>
                            </div>
                        </div>
                        <div class="product-content">
                            <div class="course-group d-flex">
                                <div class="course-group-img d-flex">
                                    <a href="{{ url('instructor-profile') }}"><img
                                            src="{{ URL::asset('/build/img/user/user3.jpg') }}" alt="Img"
                                            class="img-fluid"></a>
                                    <div class="course-name">
                                        <h4><a href="{{ url('instructor-profile') }}">John Smith</a></h4>
                                        <p>Instructor</p>
                                    </div>
                                </div>
                                <div class="course-share d-flex align-items-center justify-content-center">
                                    <a href="#"><i class="fa-regular fa-heart"></i></a>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('course-details') }}">Responsive Web Design Essentials
                                    HTML5 CSS3 and Bootstrap</a></h3>
                            <div class="course-info d-flex align-items-center">
                                <div class="rating-img d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-01.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>10+ Lesson</p>
                                </div>
                                <div class="course-view d-flex align-items-center">
                                    <img src="{{ URL::asset('/build/img/icon/icon-02.svg') }}" alt="Img"
                                        class="img-fluid">
                                    <p>11hr 30min</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="rating m-0">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                </div>
                                <div class="all-btn all-category d-flex align-items-center">
                                    <a href="{{ url('checkout') }}" class="btn btn-primary">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Instructors -->
            <!-- <div class="feature-instructors">
                <div class="section-header aos" data-aos="fade-up">
                    <div class="section-sub-head feature-head text-center">
                        <h2>Featured Instructor</h2>
                        <div class="section-text aos" data-aos="fade-up">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                                bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel instructors-course owl-theme aos" data-aos="fade-up">
                    <div class="instructors-widget">
                        <div class="instructors-img ">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user7.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">David Lee</a></h5>
                            <p>Web Developer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user8.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Daziy Millar</a></h5>
                            <p>PHP Expert</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group yellow"></i>
                                <span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user9.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Patricia Mendoza</a></h5>
                            <p>Web Developer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group violet"></i>
                                <span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user10.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Skyler Whites</a></h5>
                            <p>UI Designer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group orange"></i>
                                <span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img ">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user7.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Patricia Mendoza</a></h5>
                            <p>Java Developer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>40 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user8.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">David Lee</a></h5>
                            <p>Web Developer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>50 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img ">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user9.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Daziy Millar</a></h5>
                            <p>PHP Expert</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>40 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img ">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user10.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Patricia Mendoza</a></h5>
                            <p>Web Developer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>20 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img ">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user7.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Skyler Whites</a></h5>
                            <p>UI Designer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>30 Students</span>
                            </div>
                        </div>
                    </div>
                    <div class="instructors-widget">
                        <div class="instructors-img">
                            <a href="{{ url('instructor-list') }}">
                                <img class="img-fluid" alt="Img"
                                    src="{{ URL::asset('/build/img/user/user8.jpg') }}">
                            </a>
                        </div>
                        <div class="instructors-content text-center">
                            <h5><a href="{{ url('instructor-profile') }}">Patricia Mendoza</a></h5>
                            <p>Java Developer</p>
                            <div class="student-count d-flex justify-content-center">
                                <i class="fa-solid fa-user-group"></i>
                                <span>40 Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- /Feature Instructors -->

        </div>
    </section>
    <!-- /Trending Course -->

    <!-- Leading Companies -->
    <!--<section class="section lead-companies">
        <div class="container">
            <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head feature-head text-center">
                    <span>Trusted By</span>
                    <h2>500+ Leading Universities And Companies</h2>
                </div>
            </div>
            <div class="lead-group aos" data-aos="fade-up">
                <div class="lead-group-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{ URL::asset('/build/img/lead-01.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{ URL::asset('/build/img/lead-02.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{ URL::asset('/build/img/lead-03.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{ URL::asset('/build/img/lead-04.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{ URL::asset('/build/img/lead-05.png') }}">
                        </div>
                    </div>
                    <div class="item">
                        <div class="lead-img">
                            <img class="img-fluid" alt="Img" src="{{ URL::asset('/build/img/lead-06.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /Leading Companies -->

    <!-- Share Knowledge -->
    <section class="section share-knowledge">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="knowledge-img aos" data-aos="fade-up">
                        <img src="{{ URL::asset('/build/img/share.png') }}" alt="Img" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="join-mentor aos" data-aos="fade-up">
                        <h2>Want to share your knowledge?</h2>
                        <p>High-definition video is video of higher resolution and quality than standard-definition. While
                            there is no standardized meaning for high-definition, generally any video.</p>
                        <ul class="course-list">
                            <li><i class="fa-solid fa-circle-check"></i>Best Courses</li>
                            <li><i class="fa-solid fa-circle-check"></i>Top rated Instructors</li>
                        </ul>
                        <div class="all-btn all-category d-flex align-items-center">
                            <a href="{{ url('instructor-list') }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Share Knowledge -->

    <!-- Users Love -->
    <section class="section user-love">
        <div class="container">
            <div class="section-header white-header aos" data-aos="fade-up">
                <div class="section-sub-head feature-head text-center">
                    <!-- <span>Check out these real reviews</span>-->
                    <h2>Testimonial</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /Users Love -->

    <!-- Say testimonial Four -->
    <section class="testimonial-four">
        <div class="review">
            <div class="container">
                <div class="testi-quotes">
                    <img src="{{ URL::asset('/build/img/qute.png') }}" alt="Img">
                </div>
                <div class="mentor-testimonial lazy slider aos" data-aos="fade-up" data-sizes="50vw ">
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                    "Using this platform was a game-changer for me! The personalized feedback and realistic interview simulations helped me nail my real interview with confidence."
                                    </p>
                                      <br>
                                        <br>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/cheerful-indian-businessman-smiling-closeup-portrait-jobs-career-campaign-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">Charles</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                    "I struggled with nerves during interviews until I found this platform. Practicing with their expert coaches made all the difference. Highly recommend!"
                                    </p>
                                      <br>
                                        <br>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/close-up-portrait-young-bearded-man-white-shirt-jacket-posing-camera-with-broad-smile-isolated-gray-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">jason L</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                   "Thanks to Interviewaxis.com, I felt prepared and composed during my job interviews. The feedback was constructive, and the mock sessions were spot on!"
                                    </p>
                                      <br>
                                        <br>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/cheerful-curly-business-girl-wearing-glasses-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">Ria G</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                    "I can't thank Interviewaxis.com enough for their role in my job search. The practice interviews were spot on and the feedback was invaluable. I got the job!"
                                    </p>
                                      <br>
                                        <br>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/medium-shot-smiley-man-sitting-desk-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">Himanshu R</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                    "This portal helped me refine my interview skills and gain the confidence I needed to succeed. The experience was professional and incredibly helpful!"
                                    </p>
                                      <br>
                                      <br>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/portrait-elegant-professional-businessman-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">Sunil M</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                        <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                    "This amazing platform turned my interview fears into strengths. The mock sessions were realistic and the coaches were supportive, making all the difference in my career journey."
                                    </p>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/portrait-smiling-young-businesswoman-standing-with-her-arm-crossed-against-gray-wall-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">Jeniffer G</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="testimonial-all d-flex justify-content-center">
                            <div class="testimonial-two-head text-center align-items-center d-flex">
                                <div class="testimonial-four-saying ">
                                    <div class="testi-right">
                                        <img src="{{ URL::asset('/build/img/qute-01.png') }}" alt="Img">
                                    </div>
                                      <br>
                                    <p>
                                    "Interviewaxis.com provided me with invaluable insights into my interview weaknesses. The tailored advice and supportive environment were instrumental in securing my dream job."
                                    </p>
                                      <br>
                                        <br>
                                    <div class="four-testimonial-founder">
                                        <div class="fount-about-img">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/portrait-young-indian-top-manager-t-shirt-tie-crossed-arms-smiling-white-isolated-wall-min.jpg') }}" alt="Img"
                                                    class="img-fluid"></a>
                                        </div>
                                        <h3><a href="{{ url('instructor-profile') }}">R Ranganathan</a></h3>
                                        <span>Interviewaxis</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Say testimonial Four -->

    <!-- Become An Instructor -->
    <section class="section become-instructors aos" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="student-mentor cube-instuctor ">
                        <h4>Become An Instructor</h4>
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="top-instructors">
                                    <p>Top instructors from around the world teach millions of students on Mentoring.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="mentor-img">
                                    <img class="img-fluid" alt="Img"
                                        src="{{ URL::asset('/build/img/icon/become-02.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex">
                    <div class="student-mentor yellow-mentor">
                        <h4>Transform Access To Education</h4>
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="top-instructors">
                                    <p>Create an account to receive our newsletter, course recommendations and promotions.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="mentor-img">
                                    <img class="img-fluid" alt="Img"
                                        src="{{ URL::asset('/build/img/icon/become-01.svg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Become An Instructor -->

    <!-- Latest Blog -->
    <section class="section latest-blog">
        <div class="container">
          <!--  <div class="section-header aos" data-aos="fade-up">
                <div class="section-sub-head feature-head text-center mb-0">
                    <h2>Latest Blogs</h2>
                    <div class="section-text aos" data-aos="fade-up">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan
                            bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet.</p>
                    </div>
                </div>
            </div>
            <div class="owl-carousel blogs-slide owl-theme aos" data-aos="fade-up">
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-01.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">Attract More Attention Sales And Profits</a></h5>
                        <p>Marketing</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Jun 15, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-02.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">11 Tips to Help You Get New Clients</a></h5>
                        <p>Sales Order</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>May 20, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-03.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">An Overworked Newspaper Editor</a></h5>
                        <p>Design</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>May 25, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-04.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">A Solution Built for Teachers</a></h5>
                        <p>Seo</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Jul 15, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-02.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">Attract More Attention Sales And Profits</a></h5>
                        <p>Marketing</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Sep 25, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-03.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">An Overworked Newspaper Editor</a></h5>
                        <p>Marketing</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>May 25, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-04.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">A Solution Built for Teachers</a></h5>
                        <p>Analysis</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>May 15, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-02.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">11 Tips to Help You Get New Clients</a></h5>
                        <p>Development</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>Jun 20, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-03.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">An Overworked Newspaper Editor</a></h5>
                        <p>Sales</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>May 25, 2022</span>
                        </div>
                    </div>
                </div>
                <div class="instructors-widget blog-widget">
                    <div class="instructors-img">
                        <a href="{{ url('blog-list') }}">
                            <img class="img-fluid" alt="Img"
                                src="{{ URL::asset('/build/img/blog/blog-04.jpg') }}">
                        </a>
                    </div>
                    <div class="instructors-content text-center">
                        <h5><a href="{{ url('blog-list') }}">A Solution Built for Teachers</a></h5>
                        <p>Marketing</p>
                        <div class="student-count d-flex justify-content-center">
                            <i class="fa-solid fa-calendar-days"></i>
                            <span>April 15, 2022</span>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="enroll-group aos" data-aos="fade-up">
                <div class="row ">
                    <div class="col-lg-4 col-md-6">
                        <div class="total-course d-flex align-items-center">
                            <div class="blur-border">
                                <div class="enroll-img ">
                                    <img src="{{ URL::asset('/build/img/icon/icon-07.svg') }}" alt="Img"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">253,085</span></h3>
                                <p>INTERVIEWS TAKEN</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="total-course d-flex align-items-center">
                            <div class="blur-border">
                                <div class="enroll-img ">
                                    <img src="{{ URL::asset('/build/img/icon/icon-08.svg') }}" alt="Img"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">1,205</span></h3>
                                <p>COURSE ENROLLED </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="total-course d-flex align-items-center">
                            <div class="blur-border">
                                <div class="enroll-img ">
                                    <img src="{{ URL::asset('/build/img/icon/icon-09.svg') }}" alt="Img"
                                        class="img-fluid">
                                </div>
                            </div>
                            <div class="course-count">
                                <h3><span class="counterUp">127</span></h3>
                                <p>BUILD RESUME</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lab-course">
                <div class="section-header aos" data-aos="fade-up">
                    <div class="section-sub-head feature-head text-center">
                        <h2>Access to 100 + Technology interviews for all levels.</h2>
                    </div>
                </div>
                <div class="icon-group aos" data-aos="fade-up">
                    <div class="offset-lg-1 col-lg-12">
                        <div class="row">
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/ai.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/atom.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/blockchain.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/docker.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/java.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/php.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/python.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/social.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/salesforce.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-3">
                                <div class="total-course d-flex align-items-center">
                                    <div class="blur-border">
                                        <div class="enroll-img ">
                                            <img src="{{ URL::asset('/build/img/icon/img/format.png') }}" alt="Img"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Latest Blog -->
@endsection
