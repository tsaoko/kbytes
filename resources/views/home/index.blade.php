@extends('layout')


@section('hero')
    <!--hero section start-->

    <section id="home" class="fullscreen-banner banner p-0 bg-contain bg-pos-r" data-bg-img="images/bg/01.png">
        <div class="spinner-eff">
            <div class="spinner-circle circle-1"></div>
            <div class="spinner-circle circle-2"></div>
        </div>
        <div class="align-center pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 order-lg-1">
                        <img class="img-center wow jackInTheBox" data-wow-duration="3s" src="images/banner/01.png" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 order-lg-1 md-mt-5">
                        <h1 class="mb-4 wow fadeInUp" data-wow-duration="1.5s">专注云通讯技术服务提供商</h1>
                        <p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">目前公司已开发短信平台并开源使用，解决客户短信发送不及时，接收不透明，效果不显著的问题．提供发送数据统计分析报告．让你的每一分成本都掷地有声．</p>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--hero section end-->
@endsection


@section('content')

    <!--feature start-->

    <section class="p-0 text-center wow fadeInUp" data-wow-duration="2s">
        <div class="container-fluid">
            <div class="row custom-mt-10 z-index-1 md-mt-0">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" data-dots="false" data-items="4" data-lg-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">
                        <div class="item">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-data"></i>
                                    <span class="rotateme"></span>
                                </div>
                                <div class="featured-title">
                                    <h5>专业工具</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>营销短信发送数据统计分析报告</p>
                                    <a class="icon-btn mt-4" href="{{ url('/') }}"> <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-collaboration"></i>
                                    <span class="rotateme"></span>
                                </div>
                                <div class="featured-title">
                                    <h5>完全自定义</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>代码全开源</p>
                                    <a class="icon-btn mt-4" href="{{ url('/') }}"> <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-market"></i>
                                    <span class="rotateme"></span>
                                </div>
                                <div class="featured-title">
                                    <h5>三网通达短信接口签约开放</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>电信,移动,联通三网渠道全保证</p>
                                    <a class="icon-btn mt-4" href="{{url('/') }}"> <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-objective"></i>
                                    <span class="rotateme"></span>
                                </div>
                                <div class="featured-title">
                                    <h5>市场集成</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>集成数据命中目的</p>
                                    <a class="icon-btn mt-4" href="{{url('/') }}"> <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="featured-item style-2">
                                <div class="featured-icon">
                                    <i class="flaticon-analytics"></i>
                                    <span class="rotateme"></span>
                                </div>
                                <div class="featured-title">
                                    <h5>易使用</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>傻瓜式的操作,有视频教学.</p>
                                    <a class="icon-btn mt-4" href="{{url('/') }}"> <i class="la la-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--feature end-->


    <!--about start-->

    <section id="about" class="pos-r bg-contain bg-pos-l py-10" data-bg-img="images/bg/02.png">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 image-column p-0 pr-lg-5">
                    <div class="img-box box-shadow">
                        <div class="box-loader">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <img class="img-center" src="images/banner/03.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-5 ml-auto col-md-12 md-mt-5">
                    <div class="section-title mb-4">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h6>关于我们</h6>
                        <h2>持续构建高质量软件平台</h2>
                    </div>
                    <ul class="list-unstyled list-icon mb-4">
                        <li class="mb-3"><i class="la la-check"></i> 开源千比特云通讯短信平台</li>
                        <li class="mb-3"><i class="la la-check"></i> 千比特信息竞购平台</li>
                    </ul>
                    {{--<a class="btn btn-border btn-circle" href="index.html#" data-text="See About"> <span>S</span><span>e</span><span>e</span><span> </span>--}}
                        {{--<span>A</span><span>b</span><span>o</span><span>u</span><span>t</span>--}}
                    {{--</a>--}}
                    {{--<a class="btn btn-theme btn-circle" href="index.html#" data-text="Learn More"> <span>L</span><span>e</span><span>a</span><span>r</span><span>n</span>--}}
                        {{--<span> </span><span>M</span><span>o</span><span>r</span><span>e</span>--}}
                    {{--</a>--}}
                </div>
            </div>
        </div>
    </section>

    <!--about end-->


    <!--feature start-->

    <section id="service" class="service pos-r bg-effect o-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-12 image-column right">
                    <div class="blink-img">
                        <img class="img-fluid blinkblink" src="images/pattern/04.png" alt="">
                    </div>
                    <img class="img-fluid z-index-1 w-100" src="images/svg/01.svg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 md-mt-5 order-lg-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="featured-item style-3">
                                <div class="featured-icon">
                                    <i class="la la-diamond"></i>
                                </div>
                                <div class="featured-title">
                                    <h5>设计</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>采用Bootstrap最新框架</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="featured-item style-3">
                                <div class="featured-icon">
                                    <i class="la la-credit-card"></i>
                                </div>
                                <div class="featured-title">
                                    <h5>复制</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>持续优化平台</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 sm-mt-3">
                            <div class="featured-item style-3">
                                <div class="featured-icon">
                                    <i class="la la-desktop"></i>
                                </div>
                                <div class="featured-title">
                                    <h5>高质量</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>持续优化平台.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-4">
                            <div class="featured-item style-3">
                                <div class="featured-icon">
                                    <i class="la la-headphones"></i>
                                </div>
                                <div class="featured-title">
                                    <h5>客服技术</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>7x24小时工单客服.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--feature end-->


    <!--step start-->

    <section class="text-center pos-r">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10 ml-auto mr-auto">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h6>如何与千比特合作</h6>
                        <h2 class="title">三步简单操作走完全流程</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="svg-container">
                    <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"></svg>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="work-process">
                        <div class="box-loader"> <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="step-num-box">
                            <div class="step-icon"><span><i class="la la-lightbulb-o"></i></span>
                            </div>
                            <div class="step-num">01</div>
                        </div>
                        <div class="step-desc">
                            <h4>需求收集</h4>
                            <p class="mb-0">基本平台基础上,收集你的需求</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mt-5">
                    <div class="work-process">
                        <div class="box-loader"> <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="step-num-box">
                            <div class="step-icon"><span><i class="la la-rocket"></i></span>
                            </div>
                            <div class="step-num">02</div>
                        </div>
                        <div class="step-desc">
                            <h4>实现需求</h4>
                            <p class="mb-0">在合约时间内实现指现需求</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 md-mt-5">
                    <div class="work-process">
                        <div class="step-num-box">
                            <div class="step-icon"><span><i class="la la-check-square"></i></span>
                            </div>
                            <div class="step-num">03</div>
                        </div>
                        <div class="step-desc">
                            <h4>上线维护</h4>
                            <p class="mb-0">上线运营</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--step end-->



    <!--pricing start-->

    {{--<section id="pricing" class="pos-r">--}}
        {{--<canvas id="canvas"></canvas>--}}
        {{--<div class="container">--}}
            {{--<div class="row text-center">--}}
                {{--<div class="col-lg-8 col-md-12 ml-auto mr-auto">--}}
                    {{--<div class="section-title">--}}
                        {{--<div class="title-effect">--}}
                            {{--<div class="bar bar-top"></div>--}}
                            {{--<div class="bar bar-right"></div>--}}
                            {{--<div class="bar bar-bottom"></div>--}}
                            {{--<div class="bar bar-left"></div>--}}
                        {{--</div>--}}
                        {{--<h6>短信平台价格</h6>--}}
                        {{--<h2 class="title">请选择一款适合自己的短信发送方案</h2>--}}
                        {{--<p>假如你不想安装平台,只想快速使用千比特Saas短信平台,您可以选择以下的方案</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-lg-4 col-md-12">--}}
                    {{--<div class="price-table">--}}
                        {{--<div class="price-inside">Starter</div>--}}
                        {{--<div class="price-header">--}}
                            {{--<div class="price-value">--}}
                                {{--<h2><span>＄</span>33</h2>--}}
                                {{--<span>Monthly Package</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="price-list">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>15 Analytics Compaign</li>--}}
                                {{--<li>Unlimited Site licenses</li>--}}
                                {{--<li>1 Database</li>--}}
                                {{--<li>10 Free Optimization</li>--}}
                                {{--<li>Html5 + Css3</li>--}}
                                {{--<li>24/7 工单技术支持</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-12 md-mt-5">--}}
                    {{--<div class="price-table active">--}}
                        {{--<div class="price-inside">Premium</div>--}}
                        {{--<div class="price-header">--}}
                            {{--<div class="price-value">--}}
                                {{--<h2><span>$</span>55</h2>--}}
                                {{--<span>Monthly Package</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="price-list">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>15 Analytics Compaign</li>--}}
                                {{--<li>Unlimited Site licenses</li>--}}
                                {{--<li>1 Database</li>--}}
                                {{--<li>10 Free Optimization</li>--}}
                                {{--<li>Html5 + Css3</li>--}}
                                {{--<li>24/7 工单技术支持</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-12 md-mt-5">--}}
                    {{--<div class="price-table">--}}
                        {{--<div class="price-inside">Professional</div>--}}
                        {{--<div class="price-header">--}}
                            {{--<div class="price-value">--}}
                                {{--<h2><span>$</span>99</h2>--}}
                                {{--<span>Monthly Package</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="price-list">--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li>15 Analytics Compaign</li>--}}
                                {{--<li>Unlimited Site licenses</li>--}}
                                {{--<li>1 Database</li>--}}
                                {{--<li>10 Free Optimization</li>--}}
                                {{--<li>Html5 + Css3</li>--}}
                                {{--<li>24/7 工单技术支持</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <!--pricing end-->


@endsection