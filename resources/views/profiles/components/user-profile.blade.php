@extends('layouts.app')

@section('title', 'User Profile')

@section('content')

    <div class="wrapper">
        @include('shared.header.navbar.navbar')
        <section class="cover-sec">
            <img src="assets/images/resources/cover-img.jpg" alt="">
        </section>
        <main>
            <div class="main-section">
                <div class="container">
                    <div class="main-section-data">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="main-left-sidebar">
                                    <div class="user_profile">
                                        <div class="user-pro-img">
                                            <img src="assets/images/resources/user-pro-img.png" alt="">
                                        </div>
                                        <div class="user_pro_status">
                                            <ul class="flw-hr">
                                                <li><a href="#" title="" class="flww"><i
                                                            class="la la-plus"></i> Follow</a></li>
                                                <li><a href="#" title="" class="hre">Hire</a></li>
                                            </ul>
                                            <ul class="flw-status">
                                                <li>
                                                    <span>Following</span>
                                                    <b>34</b>
                                                </li>
                                                <li>
                                                    <span>Followers</span>
                                                    <b>155</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="social_links">
                                            <li><a href="#" title=""><i class="la la-globe"></i>
                                                    www.example.com</a></li>
                                            <li><a href="#" title=""><i class="fa fa-facebook-square"></i>
                                                    Http://www.facebook.com/john...</a></li>
                                            <li><a href="#" title=""><i class="fa fa-twitter"></i>
                                                    Http://www.Twitter.com/john...</a></li>
                                            <li><a href="#" title=""><i class="fa fa-google-plus-square"></i>
                                                    Http://www.googleplus.com/john...</a></li>
                                            <li><a href="#" title=""><i class="fa fa-behance-square"></i>
                                                    Http://www.behance.com/john...</a></li>
                                            <li><a href="#" title=""><i class="fa fa-pinterest"></i>
                                                    Http://www.pinterest.com/john...</a></li>
                                            <li><a href="#" title=""><i class="fa fa-instagram"></i>
                                                    Http://www.instagram.com/john...</a></li>
                                            <li><a href="#" title=""><i class="fa fa-youtube"></i>
                                                    Http://www.youtube.com/john...</a></li>
                                        </ul>
                                    </div>
                                    <div class="suggestions full-width">
                                        <div class="sd-title">
                                            <h3>Suggestions</h3>
                                            <i class="la la-ellipsis-v"></i>
                                        </div>
                                        <div class="suggestions-list">
                                            <div class="suggestion-usd">
                                                <img src="assets/images/resources/s1.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Jessica William</h4>
                                                    <span>Graphic Designer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="assets/images/resources/s2.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>John Doe</h4>
                                                    <span>PHP Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="assets/images/resources/s3.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Poonam</h4>
                                                    <span>Wordpress Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="assets/images/resources/s4.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Bill Gates</h4>
                                                    <span>C & C++ Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="assets/images/resources/s5.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>Jessica William</h4>
                                                    <span>Graphic Designer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="suggestion-usd">
                                                <img src="assets/images/resources/s6.png" alt="">
                                                <div class="sgt-text">
                                                    <h4>John Doe</h4>
                                                    <span>PHP Developer</span>
                                                </div>
                                                <span><i class="la la-plus"></i></span>
                                            </div>
                                            <div class="view-more">
                                                <a href="#" title="">View More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-ws-sec">
                                    <div class="user-tab-sec">
                                        <h3>John Doe</h3>
                                        <div class="star-descp">
                                            <span>Graphic Designer at Self Employed</span>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="tab-feed">
                                            <ul>
                                                <li data-tab="feed-dd" class="active">
                                                    <a href="#" title="">
                                                        <img src="assets/images/ic1.png" alt="">
                                                        <span>Feed</span>
                                                    </a>
                                                </li>
                                                <li data-tab="info-dd">
                                                    <a href="#" title="">
                                                        <img src="assets/images/ic2.png" alt="">
                                                        <span>Info</span>
                                                    </a>
                                                </li>
                                                <li data-tab="portfolio-dd">
                                                    <a href="#" title="">
                                                        <img src="assets/images/ic3.png" alt="">
                                                        <span>Portfolio</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab current" id="feed-dd">
                                        <div class="posts-section">
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="assets/images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="assets/images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="assets/images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="assets/images/icon9.png"
                                                                alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i
                                                                    class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i
                                                                    class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior Wordpress Developer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Full Time</a></li>
                                                        <li><span>$30 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                                        luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id
                                                        magna sit amet... <a href="#" title="">view more</a>
                                                    </p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="assets/images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i
                                                                    class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="assets/images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="assets/images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="assets/images/icon8.png" alt=""><span>Front
                                                                End
                                                                Developer</span></li>
                                                        <li><img src="assets/images/icon9.png"
                                                                alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i
                                                                    class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i
                                                                    class="la la-envelope"></i></a></li>
                                                        <li><a href="#" title="" class="bid_now">Bid Now</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Simple Classified Site</h3>
                                                    <ul class="job-dt">
                                                        <li><span>$300 - $350</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                                        luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id
                                                        magna sit amet... <a href="#" title="">view more</a>
                                                    </p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="assets/images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i
                                                                    class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="assets/images/resources/us-pc2.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="assets/images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="assets/images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="assets/images/icon9.png"
                                                                alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i
                                                                    class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i
                                                                    class="la la-envelope"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Senior UI / UX designer</h3>
                                                    <ul class="job-dt">
                                                        <li><a href="#" title="">Par Time</a></li>
                                                        <li><span>$10 / hr</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                                        luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id
                                                        magna sit amet... <a href="#" title="">view more</a>
                                                    </p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="assets/images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i
                                                                    class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="post-bar">
                                                <div class="post_topbar">
                                                    <div class="usy-dt">
                                                        <img src="assets/images/resources/us-pic.png" alt="">
                                                        <div class="usy-name">
                                                            <h3>John Doe</h3>
                                                            <span><img src="assets/images/clock.png" alt="">3 min
                                                                ago</span>
                                                        </div>
                                                    </div>
                                                    <div class="ed-opts">
                                                        <a href="#" title="" class="ed-opts-open"><i
                                                                class="la la-ellipsis-v"></i></a>
                                                        <ul class="ed-options">
                                                            <li><a href="#" title="">Edit Post</a></li>
                                                            <li><a href="#" title="">Unsaved</a></li>
                                                            <li><a href="#" title="">Unbid</a></li>
                                                            <li><a href="#" title="">Close</a></li>
                                                            <li><a href="#" title="">Hide</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="epi-sec">
                                                    <ul class="descp">
                                                        <li><img src="assets/images/icon8.png" alt=""><span>Epic
                                                                Coder</span></li>
                                                        <li><img src="assets/images/icon9.png"
                                                                alt=""><span>India</span>
                                                        </li>
                                                    </ul>
                                                    <ul class="bk-links">
                                                        <li><a href="#" title=""><i
                                                                    class="la la-bookmark"></i></a></li>
                                                        <li><a href="#" title=""><i
                                                                    class="la la-envelope"></i></a></li>
                                                        <li><a href="#" title="" class="bid_now">Bid Now</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="job_descp">
                                                    <h3>Ios Shopping mobile app</h3>
                                                    <ul class="job-dt">
                                                        <li><span>$300 - $350</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                                        luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id
                                                        magna sit amet... <a href="#" title="">view more</a>
                                                    </p>
                                                    <ul class="skill-tags">
                                                        <li><a href="#" title="">HTML</a></li>
                                                        <li><a href="#" title="">PHP</a></li>
                                                        <li><a href="#" title="">CSS</a></li>
                                                        <li><a href="#" title="">Javascript</a></li>
                                                        <li><a href="#" title="">Wordpress</a></li>
                                                    </ul>
                                                </div>
                                                <div class="job-status-bar">
                                                    <ul class="like-com">
                                                        <li>
                                                            <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                            <img src="assets/images/liked-img.png" alt="">
                                                            <span>25</span>
                                                        </li>
                                                        <li><a href="#" class="com"><i
                                                                    class="fas fa-comment-alt"></i> Comments 15</a></li>
                                                    </ul>
                                                    <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                                </div>
                                            </div>
                                            <div class="process-comm">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab" id="info-dd">
                                        <div class="user-profile-ov">
                                            <h3>Overview</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                                aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec
                                                urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo
                                                viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac
                                                magna convallis bibendum. Quisque laoreet augue eget augue fermentum
                                                scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor
                                                neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit
                                                amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                                        </div>
                                        <div class="user-profile-ov st2">
                                            <h3>Experience</h3>
                                            <h4>Web designer</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                                aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec
                                                urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo
                                                viverra. </p>
                                            <h4>UI / UX Designer</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                                aliquam felis, nec condimentum ipsum commodo id.</p>
                                            <h4>PHP developer</h4>
                                            <p class="no-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit
                                                amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus
                                                commodo viverra. </p>
                                        </div>
                                        <div class="user-profile-ov">
                                            <h3>Education</h3>
                                            <h4>Master of Computer Science</h4>
                                            <span>2015 - 2018</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor
                                                aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec
                                                urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo
                                                viverra. </p>
                                        </div>
                                        <div class="user-profile-ov">
                                            <h3>Location</h3>
                                            <h4>India</h4>
                                            <p>151/4 BT Chownk, Delhi </p>
                                        </div>
                                        <div class="user-profile-ov">
                                            <h3>Skills</h3>
                                            <ul>
                                                <li><a href="#" title="">HTML</a></li>
                                                <li><a href="#" title="">PHP</a></li>
                                                <li><a href="#" title="">CSS</a></li>
                                                <li><a href="#" title="">Javascript</a></li>
                                                <li><a href="#" title="">Wordpress</a></li>
                                                <li><a href="#" title="">Photoshop</a></li>
                                                <li><a href="#" title="">Illustrator</a></li>
                                                <li><a href="#" title="">Corel Draw</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-feed-tab" id="portfolio-dd">
                                        <div class="portfolio-gallery-sec">
                                            <h3>Portfolio</h3>
                                            <div class="gallery_pf">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img1.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img2.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img3.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img4.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img5.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img6.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img7.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img8.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img9.jpg" alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="gallery_pt">
                                                            <img src="assets/images/resources/pf-img10.jpg"
                                                                alt="">
                                                            <a href="#" title=""><img
                                                                    src="assets/images/all-out.png" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="right-sidebar">
                                    <div class="message-btn">
                                        <a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
                                    </div>
                                    <div class="widget widget-portfolio">
                                        <div class="wd-heady">
                                            <h3>Portfolio</h3>
                                            <img src="assets/images/photo-icon.png" alt="">
                                        </div>
                                        <div class="pf-gallery">
                                            <ul>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery1.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery2.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery3.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery4.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery5.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery6.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery7.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery8.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery9.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery10.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery11.png"
                                                            alt=""></a>
                                                </li>
                                                <li><a href="#" title=""><img
                                                            src="assets/images/resources/pf-gallery12.png"
                                                            alt=""></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('shared.footer.footer')
        <div class="overview-box" id="create-portfolio">
            <div class="overview-edit">
                <h3>Create Portfolio</h3>
                <form>
                    <input type="text" name="pf-name" placeholder="Portfolio Name">
                    <div class="file-submit">
                        <input type="file" name="file">
                    </div>
                    <div class="pf-img">
                        <img src="images/resources/np.png" alt="">
                    </div>
                    <input type="text" name="website-url" placeholder="htp://www.example.com">
                    <button type="submit" class="save">Save</button>
                    <button type="submit" class="cancel">Cancel</button>
                </form>
                <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
            </div>
        </div>
    </div>

@stop
