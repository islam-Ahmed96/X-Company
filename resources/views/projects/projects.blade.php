@extends('layouts.parent')

@section('title', 'Projects')

@section('content')

<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Projects</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Projects
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    Featured Properties
                </h2>
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

@endsection