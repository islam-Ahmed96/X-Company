@extends('layouts.parent')

@section('title', 'Home')

@section('description', ' Easiest way to find your dream home')

@section('content')

<div class="hero">
    <div class="hero-slide">
        <div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
        <div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
        <div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">Easiest way to find your dream home</h1>
                <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                    data-aos-delay="200">
                    <input type="text" class="form-control px-4" placeholder="Search" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="font-weight-bold text-primary heading">
                    Popular Projects
                </h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p>
                    <a href="{{route('home.projects')}}" class="btn btn-primary text-white py-3 px-4">View all
                        Projects</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        @foreach ($projects as $project)
                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="images/img_1.jpg" alt="Image" class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>{{$project->name}}</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">{{$project->company}}</span>
                                    <span class="city d-block mb-3">{{$project->location}}</span>

                                    <div class="specs d-flex mb-2">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="caption">Spaces : {{$project->space_range}}</span>
                                        </span>
                                    </div>
                                    <div class="specs d-flex mb-2">
                                        <span class="d-block d-flex align-items-center">
                                            <span class="caption">Price : {{$project->price_range}}</span>
                                        </span>
                                    </div>

                                    <a href="{{route('project.show', $project->id)}}" class="btn btn-primary py-2 px-3">See details</a>
                                </div>
                            </div>
                        </div>
                        <!-- .item -->
                        @endforeach

                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="features-1"></section>

<div class="section sec-testimonials">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
                    Customer Says
                </h2>
            </div>
            <div class="col-md-6 text-md-end">
                <div id="testimonial-nav">
                    <span class="prev" data-controls="prev">Prev</span>

                    <span class="next" data-controls="next">Next</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
            <div class="testimonial-slider">

                @foreach($users as $user)
                    <div class="item">
                        <div class="testimonial">
                            <img src="images/person_icon2.webp" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                            <div class="rate">
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                                <span class="icon-star text-warning"></span>
                            </div>
                            <h3 class="h5 text-primary mb-4">{{$user->name}}</h3>
                            <blockquote>
                                <p>
                                    &ldquo;Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the blind
                                    texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;
                                </p>
                            </blockquote>
                            <p class="text-black-50">Designer, Co-founder</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<section class="features-1"></section>



@endsection