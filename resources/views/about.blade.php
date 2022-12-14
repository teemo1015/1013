@extends('layouts.second')
@section('content')
<!-- Page Title
    ============================================= -->

    <section id="page-title" class="page-title-parallax page-title-center page-title-dark include-header" style="background-image: linear-gradient(to top, rgba(254,150,3,0.5), #39384D), url('demos/seo/images/1.png'); background-size: cover; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

        <div class="container clearfix mt-4">
            <div class="badge rounded-pill border border-light text-light">About Us</div>
            <h1>What We Do</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap py-0 overflow-visible">

            <div class="card mx-auto mw-md border-0 shadow rounded-4 card-seo-about mb-5 mb-lg-0">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="heading-block border-bottom-0 mb-0">
                                <div class="badge rounded-pill badge-default">Page Traffic</div>
                                <h3 class="nott ls0 mb-3">See how our Business Grows Month by Month</h3>
                                <p>Dynamically provide access to resource-leveling mindshare vis-a-vis bricks-and-clicks ideas authoritatively.</p>
                                <a href="#" class="button button-rounded text-capitalize m-0 ls0">Get Started</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="text-end text-muted text-smaller">Overall Progress: <span class="text-success fw-bold text-larger">+75%</span></p>
                            <canvas id="chart-0"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features
            ============================================= -->
            <div class="section bg-transparent m-0 pt-3 pb-0">
                <div class="container mw-md">

                    <div class="heading-block border-bottom-0 center mx-auto" style="max-width: 550px">
                        <div class="badge rounded-pill badge-default">Services</div>
                        <h3 class="nott ls0 mb-3">What We Do</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed velit quo, quis. Culpa reprehenderit quo nostrum facere quis maiores.</p>
                    </div>

                    <div class="text-md-center">
                        <h3 class="bg-color d-inline-block px-4 py-2 text-white mb-0 rounded-1">Our Roadmap</h3>
                    </div>
                    <div class="story-timeline">

                        <div class="clear mt-4"></div>
                        <div class="story-timeline-line"></div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-5 text-md-end">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-1 mb-3">Feb, 2019</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5">
                                <h3 class="mb-3">We Started</h3>
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Corrupti quisquam molestiae consequuntur tempora recusandae impedit dolorum ex ipsum blanditiis similique?
                            </div>
                        </div>

                        <div class="clear my-5"></div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-5 order-md-2">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-1 mb-3">Oct, 2019</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5 text-md-end">
                                <h3 class="mb-3">Registration</h3>
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Corrupti quisquam molestiae consequuntur tempora recusandae impedit dolorum ex ipsum blanditiis similique?
                            </div>
                        </div>

                        <div class="clear my-5"></div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-5 text-md-end">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-1 mb-3">Mar, 2020</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5">
                                <h3 class="mb-3"><span class="counter counter-inherit text-dark"><span data-from="2" data-to="57" data-refresh-interval="10" data-speed="2000"></span>% Increase in Sales</span></h3>
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Corrupti quisquam molestiae consequuntur tempora recusandae impedit dolorum ex ipsum blanditiis similique?
                            </div>
                        </div>

                        <div class="clear my-5"></div>

                        <div class="row justify-content-md-center">
                            <div class="col-md-5 order-md-2">
                                <h4 class="bg-secondary d-inline-block px-3 py-1 text-white mb-0 rounded-1 mb-3">Nov, 2010</h4>
                            </div>
                            <div class="story-timeline-dots"></div>
                            <div class="col-md-5 text-md-end">
                                <h3 class="mb-3"><span class="counter counter-inherit text-dark"><span data-from="20" data-to="410" data-refresh-interval="10" data-speed="2000"></span>+ Employees</span></h3>
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Corrupti quisquam molestiae consequuntur tempora recusandae impedit dolorum ex ipsum blanditiis similique?
                            </div>
                        </div>

                        <div class="clear mt-5"></div>

                    </div>

                </div>
            </div>

            <!-- Features
            ============================================= -->
            <div class="section bg-transparent">
                <div class="container">
                    <div class="row col-mb-30 align-content-stretch">

                        <div class="col-lg-4 col-md-6 d-flex">
                            <a href="demo-seo-experience.html" class="card h-shadow h-translate-y-sm all-ts">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-image mb-5 text-center">
                                            <img height="150" src="demos/seo/images/services/seo.svg" alt="Feature Icon">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">SEO optimization</h3>
                                            <p class="text-smaller">Objectively fashion highly efficient testing off proced through sustainable channels.</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Unlimited Pages</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> UI/UX Design</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Speed Optimized</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Graphics Banner</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Advertisement</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <a href="demo-seo-social.html" class="card h-shadow h-translate-y-sm all-ts">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-image mb-5 text-center">
                                            <img height="150" src="demos/seo/images/services/social.svg" alt="Feature Icon">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Social Media Marketing</h3>
                                            <p class="text-smaller">Objectively fashion highly efficient testing off proced through sustainable channels.</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Facebook Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Instagram Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Twitter Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Pinterest Advertising</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Sales Banner</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <a href="demo-seo-adwords.html" class="card h-shadow h-translate-y-sm all-ts">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-image mb-5 text-center">
                                            <img height="150" src="demos/seo/images/services/adwords.svg" alt="Feature Icon">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Adwords Campaign</h3>
                                            <p class="text-smaller">Objectively fashion highly efficient testing off proced through sustainable channels.</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Google Search</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Google Shopping</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> App Campaign</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Video Advertising</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Mobile Advertising</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Display Advertising</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <a href="demo-seo-analysis.html" class="card h-shadow h-translate-y-sm all-ts">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-image mb-5 text-center">
                                            <img height="150" src="demos/seo/images/services/analysis.svg" alt="Feature Icon">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Digital Analysis</h3>
                                            <p class="text-smaller">Objectively fashion highly efficient testing off proced through sustainable channels.</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Google Analytics</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Page Analytics</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Page Speed</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <a href="demo-seo-experience.html" class="card h-shadow h-translate-y-sm all-ts">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-image mb-5 text-center">
                                            <img height="150" src="demos/seo/images/services/experience.svg" alt="Feature Icon">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Customer Experience</h3>
                                            <p class="text-smaller">Objectively fashion highly efficient testing off proced through sustainable channels.</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Orginality</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Quality</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Readability</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Keyword Density</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Grammer &amp; Spelling</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex">
                            <a href="demo-seo-content-marketing.html" class="card h-shadow h-translate-y-sm all-ts">
                                <div class="card-body p-5">
                                    <div class="feature-box flex-column">
                                        <div class="fbox-image mb-5 text-center">
                                            <img height="150" src="demos/seo/images/services/content_marketing.svg" alt="Feature Icon">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0 text-larger">Content Marketing</h3>
                                            <p class="text-smaller">Objectively fashion highly efficient testing off proced through sustainable channels.</p>
                                        </div>
                                        <ul class="iconlist ms-3 mt-4 mb-0">
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Increase Profits</li>
                                            <li class="mb-2 text-muted"><i class="icon-check text-smaller color"></i> Create a Story</li>
                                            <li class="text-muted"><i class="icon-check text-smaller color"></i> Create a Dialogue</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Testimonials
            ============================================= -->
            <div class="section mt-0" style="background: url('demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 0 0 70px;">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <div class="badge rounded-pill badge-default">Testimonials</div>
                        <h3 class="nott ls0">What Clients Says</h3>
                    </div>

                    <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget clearfix" data-margin="0" data-pagi="true" data-loop="true" data-center="true" data-autoplay="5000" data-items-sm="1" data-items-md="2" data-items-xl="3">

                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="demos/pet/images/testimonials/4.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Mary Jane
                                        <span>Google Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="oc-item">
                            <div class="testimonial">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/5.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                    <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo/Contact
            ============================================= -->
            <div class="section mt-5" style="padding: 100px 0; overflow: visible; background: url('demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover;">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <h5 class="text-uppercase ls1 mb-1">Grab your Free Trail and Explore the Options</h5>
                        <h2 class="nott ls0">Try Keyword Search 30 Days Free With Canvas<span>SEO</span></h2>
                        <a href="demo-seo-contact.html" class="button button-large button-rounded nott ms-0 ls0 mt-4">Contact Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
    @stop
