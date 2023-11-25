@extends('layouts.app')


@section('content')
    <section id="work" class="portfolio-mf sect-pt4 route footer-paralax sect-mt4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Projects
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ asset('img/projects/Mobile App Design.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ asset('img/projects/Mobile App Design.png') }}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Mobile App Design</h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href=""> <button class="btn btn-primary"><small>Details</small></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ asset('img/projects/app-design.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ asset('img/projects/app-design.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Social Media App</h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href=""><button class="btn btn-primary"><small>Details</small></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ asset('img/projects/app-design2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ asset('img/projects/app-design2.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Food Delivery App</h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href=""> <button class="btn btn-primary"><small>Details</small></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ asset('img/projects/app-design3.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ asset('img/projects/app-design3.png') }}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">VPN App Design</h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href=""><button class="btn btn-primary"><small>Details</small></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ asset('img/projects/Logo design-01.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ asset('img/projects/Logo design-01.png') }}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Ocean State Branding</h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href=""><button class="btn btn-primary"><small>Details</small></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="{{ asset('img/projects/tw-logo.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                            <div class="work-img">
                                <img src="{{ asset('img/projects/tw-logo.png') }}" alt="" class="img-fluid">
                            </div>
                        </a>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Tech Work Logo</h2>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <a href=""><button class="btn btn-primary"><small>Details</small></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
