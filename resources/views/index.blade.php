
@extends('layouts.master')
@section('content')
@foreach ($items_slider as $item)
<!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element slider-parallax min-vh-60 min-vh-md-100 include-header">
        <div class="slider-inner" style="background: #FFF url('demos/seo/images/hero/hero-6.svg') center center no-repeat; background-size: cover;">

            <div class="vertical-middle slider-element-fade">
                <div class="container py-5">
                    <div class="row pt-5">
                        <div class="col-lg-5 col-md-8">
                            <div class="slider-title">
                                <div class="badge rounded-pill badge-default">SEO Ready</div>
                                <h2>{{$item -> title }}</h2>
                                <h3 class="text-rotater mb-2" data-separator="," data-rotate="fadeIn" data-speed="3500">{{ $item->subtitle}} <span class="t-rotate">快速,有質感,可盈利</span> 的網站</h3>
                                {!!$item->content!!}
                                <a href="demo-seo-about.html" class="button button-rounded button-large nott ls0">了解更多</a>
                                <a href="demo-seo-contact.html" class="button button-rounded button-large button-light text-dark bg-white border nott ls0">聯絡我們</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="video-wrap h-100 d-block d-lg-none">
                <div class="video-overlay" style="background: rgba(255,255,255,0.85);"></div>
            </div>

        </div>
    </section><!-- #slider end -->
    @endforeach

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap pt-0">

            <!-- Client Carousel
            ============================================= -->
            <div class="section bg-transparent m-0 border-bottom py-5">
                <div class="container">
                    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="100" data-loop="true" data-autoplay="5000" data-nav="false" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
                        <div class="oc-item"><a href="#"><img src="demos/business/images/clients/linkedin.svg" alt="Brands"></a></div>
                        <div class="oc-item"><a href="#"><img src="demos/business/images/clients/nat-geo.svg" alt="Brands"></a></div>
                        <div class="oc-item"><a href="#"><img src="demos/business/images/clients/jetblue.svg" alt="Brands"></a></div>
                        <div class="oc-item"><a href="#"><img src="demos/business/images/clients/zillow.svg" alt="Brands"></a></div>
                        <div class="oc-item"><a href="#"><img src="demos/business/images/clients/amazon.svg" alt="Brands"></a></div>
                    </div>
                </div>
            </div>

            <!-- Features
            ============================================= -->
            <div class="section bg-transparent mt-4 mb-0 pb-0">
                <div class="container">
                    <div class="heading-block border-bottom-0 center mx-auto mb-0" style="max-width: 550px">
                        <div class="badge rounded-pill badge-default">Services</div>
                        <h3 class="nott ls0 mb-3">免費加送6大功能及服務</h3>
                        <p></p>
                    </div>
                    <div class="row justify-content-between align-items-center">

                        <div class="col-lg-4 col-sm-6">

                            <div class="feature-box flex-md-row-reverse text-md-end border-0">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/seo.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">國際網域一組</h3>
                                    <p>價值NT$ 1,500</p>
                                </div>
                            </div>

                            <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/adword.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">ISTOCK商業授權圖片Ｘ2</h3>
                                    <p>價值NT$ 2,100</p>
                                </div>
                            </div>

                            <div class="feature-box flex-md-row-reverse text-md-end border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/analysis.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">頁面文章SEO優化教學</h3>
                                    <p>價值NT$6,000</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-7 offset-3 offset-sm-0 d-sm-none d-lg-block center my-5">
                            <img src="demos/seo/images/sections/2.png" alt="iphone" class="rounded  parallax" data-bottom-top="transform: translateY(-30px)" data-top-bottom="transform: translateY(30px)">
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class="feature-box border-0">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/social.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">GA流量分析器串接</h3>
                                    <p>價值NT$1,300</p>
                                </div>
                            </div>

                            <div class="feature-box border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/experience.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">客服信箱串接</h3>
                                    <p>價值NT$5,00</p>
                                </div>
                            </div>

                            <div class="feature-box border-0 mt-5">
                                <div class="fbox-icon">
                                    <a href="#"><img src="demos/seo/images/icons/content_marketing.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="nott ls0">SSL安全憑證</h3>
                                    <p>價值NT$1,800</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            @foreach ($items_feature as $item)
            <!-- Pricing
                ============================================= -->
                <div class="section m-0" style="background: url('demos/seo/images/sections/4.png') no-repeat center top; background-size: cover; padding: 140px 0 0;">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-4 mt-4">
                                <div class="heading-block border-bottom-0 bottommargin-sm">
                                    <div class="badge rounded-pill badge-default">Pricing Table</div>
                                    <h3 class="nott ls0">{{$item -> title }} <br></h3>
                                </div>
                                <p>{{ $item->subtitle}}</p>
                                <div class="pricing-tenure-switcher d-flex align-items-center mb-4 position-relative" data-container="#pricing-switch">
                                    <span class="pts-left fw-bold text-muted">設計費</span>
                                    <div class="pts-switcher mx-3">
                                        <div class="switch">
                                            <input id="switch-toggle-pricing-tenure" class="switch-toggle switch-toggle-round" type="checkbox">
                                            <label for="switch-toggle-pricing-tenure" class="mb-0"></label>
                                        </div>
                                    </div>
                                    <span class="pts-right fw-bold text-muted">每年主機租用費</span>
                                    <div class="price-discount"></div>
                                </div>
                            </div>
    
                            <div class="col-lg-8">
                                <div id="section-pricing" class="page-section p-0 m-0">
    
                                    <div id="pricing-switch" class="pricing row align-items-end g-0 col-mb-50 mb-4">
    
                                        <div class="col-md-6">
    
                                            <div class="pricing-box">
                                                <div class="pricing-title">
                                                    <img class="mb-2 bg-transparent rounded-0" src="demos/seo/images/icons/man.svg" alt="Pricing Icon" width="50">
                                                    <h3>形象網站</h3>
                                                    <span>Most Popular</span>
                                                </div>
                                                <div class="pricing-price">
                                                    <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>12000<span class="price-tenure"></span></div>
                                                    <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>6000<span class="price-tenure">每年</span></div>
                                                </div>
                                                <div class="pricing-features border-0 bg-transparent">
                                                    <ul>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>RWD行動裝置自動適應</strong> </li>
                                                        <li class="pts-switch-content-left text-black-50"><i class="icon-minus-circle me-2"></i><del style="opacity: .5"><strong>商品展示/金流串接</strong> </del></li>
                                                        <li class="pts-switch-content-right"><i class="icon-check-circle color me-2"></i><strong>頁面7頁內，可自由刪減</strong></li>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>內容圖文自由更新</strong> </li>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>區塊可自由調整</strong> </li>
                                                        <li><i class="icon-check-circle color me-2"></i>5-7天交付</li>
                                                    </ul>
                                                </div>
                                                <div class="pricing-action">
                                                    <div class="pts-switch-content-left"><a href="#" class="button button-large button-rounded w-100 text-capitalize m-0 ls0">馬上開始</a></div>
                                                    <div class="pts-switch-content-right"><a href="#" class="button button-large button-rounded w-100 text-capitalize m-0 ls0">馬上開始</a></div>
                                                </div>
                                            </div>
    
                                        </div>
    
                                        <div class="col-md-6">
    
                                            <div class="pricing-box">
                                                <div class="pricing-title">
                                                    <img class="mb-2 bg-transparent rounded-0" src="demos/seo/images/icons/group.svg" alt="Pricing Icon" width="60">
                                                    <h3>購物網站</h3>
                                                </div>
                                                <div class="pricing-price">
                                                    <div class="pts-switch-content-left"><span class="price-unit">&dollar;</span>24000<span class="price-tenure"></span></div>
                                                    <div class="pts-switch-content-right"><span class="price-unit">&dollar;</span>6000<span class="price-tenure">每年</span></div>
                                                </div>
                                                <div class="pricing-features border-0 bg-transparent">
                                                    <ul>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>RWD行動裝置自動適應</strong></li>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>商品展示/金流串接</strong> </li>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>頁面7頁內，可自由刪減</strong> </li>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>內容圖文自由更新</strong> </li>
                                                        <li><i class="icon-check-circle color me-2"></i><strong>區塊可自由調整</strong> </li>
                                                        <li><i class="icon-check-circle color me-2"></i>5-7天交付</li>
                                                    </ul>
                                                </div>
                                                <div class="pricing-action">
                                                    <div class="pts-switch-content-left"><a href="#" class="button button-rounded button-large button-light text-dark bg-white border w-100 nott m-0 ls0">馬上開始</a></div>
                                                    <div class="pts-switch-content-right"><a href="#" class="button button-rounded button-large button-light text-dark bg-white border w-100 nott m-0 ls0">馬上開始</a></div>
                                                </div>
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- Form Section
            ============================================= -->
            <div class="section m-0" style="background: url('demos/seo/images/sections/1.jpg') no-repeat center center; background-size: cover; padding: 100px 0;">
                <div class="container">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-md-4">
                            <div class="heading-block border-bottom-0 bottommargin-sm">
                                <div class="badge rounded-pill badge-default">Careers</div>
                                <h3 class="nott ls0">聯絡我們</h3>
                            </div>
                            <p>個人部落格，政府機關學校單位，公司企業形象，購物網站，在速度快的基礎上，我們要求質感，可以依客戶需求調整網站風格。</p>
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h4 class="mb-3"></h4>
                                    <div class="form-widget">
                                        <div class="form-result"></div>
                                        <form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">
                                            <div class="col-12 form-group mb-3">
                                                <label for="template-contactform-name">姓名:*</label>
                                                <input type="text" id="template-contactform-name" name="template-contactform-name" class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col-12 form-group mb-3">
                                                <label for="template-contactform-email">Email :*</label>
                                                <input type="email" id="template-contactform-email" name="template-contactform-email" class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col-12 form-group mb-4">
                                                <label for="template-contactform-website">電話:*</label>
                                                <input type="text" id="template-contactform-website" name="template-contactform-website" class="form-control input-sm required" value="">
                                            </div>
                                            <div class="col-12 form-group d-none">
                                                <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <button class="button button-rounded w-100 nott ls0 m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">傳送</button>
                                            </div>

                                            <input type="hidden" name="prefix" value="template-contactform-">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mt-5 mt-md-0 center">
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-icon shadow"><i class="icon-play"></i></a>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Works/Projects
            ============================================= -->
            <div class="section m-0" style="background: url('demos/seo/images/sections/5.jpg') no-repeat center center; background-size: cover;padding: 80px 0;">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <div class="badge rounded-pill badge-default">Completed Projects</div>
                        <h3 class="nott ls0">最新消息</h3>
                    </div>

                    <div id="portfolio" class="portfolio row grid-container gutter-20">

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-media pf-icons">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/1.jpg" alt="The Atmosphere">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">The Atmosphere</a></h3>
                                    <span>Digital Marketing</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/2.jpg" alt="Wavelength Structure">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Wavelength Structure</h3>
                                    <span>SEO</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-uielements">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/3.jpg" alt="Greenhouse Garden">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Simplicity Pages</h3>
                                    <span>Analytics</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-icons pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/4.jpg" alt="Industrial Hub">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>SEO Analysis</h3>
                                    <span>SEO</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-uielements pf-media">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/5.jpg" alt="Corporate Headquarters">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Marketing Strategy</h3>
                                    <span>Digital Marketing</span>
                                </div>
                            </div>
                        </article>

                        <article class="portfolio-item col-12 col-sm-6 col-md-4 pf-graphics pf-illustrations">
                            <div class="grid-inner">
                                <div class="portfolio-image">
                                    <img src="demos/seo/images/works/6.jpg" alt="Space Station">
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="500">
                                            <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeIn" data-hover-speed="500"><i class="icon-line-ellipsis"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="500"></div>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3>Space Station</h3>
                                    <span>Social Media</span>
                                </div>
                            </div>
                        </article>

                    </div>

                    <div class="center">
                        <a href="demo-seo-about.html" class="button button-large button-rounded text-capitalize ms-0 mt-5 ls0">閱讀更多</a>
                    </div>

                </div>
            </div>

            <!-- Features
            ============================================= -->
            <div class="container clearfix py-5">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="demos/seo/images/icons/research.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">5-7工作天上線</h3>
                                <p>專業高效率，經營網路事業不要等</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="demos/seo/images/icons/optimizing.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">Google Speed 80分以上</h3>
                                <p>訪客體驗很重要，網站開啟時間超過3秒，將流失52%流量</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-5">
                        <div class="feature-box fbox-center border-0">
                            <div class="fbox-icon">
                                <a href="#"><img src="demos/seo/images/icons/result.svg" alt="Feature Icon" class="bg-transparent rounded-0"></a>
                            </div>
                            <div class="fbox-content">
                                <h3 class="nott ls0">不滿意退費</h3>
                                <p>驗收時因設計風格不滿意或對本方案內容不符合期待，全額退還訂金（不含網域註冊費用）</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials
            ============================================= -->
            <div class="section mt-0" style="background: url('demos/seo/images/sections/3.jpg') no-repeat top center; background-size: cover; padding: 80px 0 70px;">
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

            <!-- Blogs
            ============================================= -->
            <div class="container py-4">
                <div class="heading-block border-bottom-0 center">
                    <div class="badge rounded-pill badge-default">Latest Articles</div>
                    <h3 class="nott ls0">網站知識</h3>
                </div>

                <div class="row mt-5 clearfix">
                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="demos/seo/images/blog/1.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">Top Most SEO Optizied Websites</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> 11 Mar 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem progressive technology through pariatur quibusdam veritatis quisquam. Efficiently communicate alternative.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="demos/seo/images/blog/2.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">10 Recent SEO Tips for Startups</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> Semicolonweb</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> 18 Apr 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix">
                                <p>Interactively predominate progressive technology through distinctive materials. Progressively benchmark extensible intellectual. Exercitationem progressive technology through pariatur.</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="entry">
                            <div class="entry-image mb-3">
                                <a href="#"><img src="demos/seo/images/blog/3.jpg" alt="Image 3"></a>
                            </div>
                            <div class="entry-title">
                                <h3><a href="#">3 Ways to Transform Your Site Into a SEO</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-line2-user"></i><a href="#"> John Doe</a></li>
                                    <li><i class="icon-calendar-times1"></i><a href="#"> 06 Aug 2021</a></li>
                                </ul>
                            </div>
                            <div class="entry-content clearfix">
                                <p>Globally synergize premium metrics with holistic e-markets. Professionally morph interoperable networks vis-a-vis value-added methods.</p>
                            </div>
                        </article>
                    </div>
                </div>

            </div>

            <!-- Promo/Contact
            ============================================= -->
            <div class="section mt-5 footer-stick promo-section bg-transparent" style="padding: 100px 0; overflow: visible">
                <div class="container">
                    <div class="heading-block border-bottom-0 center">
                        <h5 class="text-uppercase ls1 mb-1">如何開始，詳細製作流程</h5>
                        <h2 class="nott ls0">簡單，快速，專業，製作網站一次到位</span></h2>
                        <a href="demo-seo-contact.html" class="button button-large button-rounded nott ms-0 ls0 mt-4">馬上開始</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@stop