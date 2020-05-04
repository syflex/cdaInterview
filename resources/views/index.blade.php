
@extends('layouts.main')
{{ $theSrc = asset('uploads/' . $page->featured_image) }}
@section('content')
    <!-- ======= Hero Section ======= -->

    <section class="d-flex align-items-center" style=" width: 100%; height: 100vh; background: url('{{$theSrc}}') top center; background-size: cover; ">
        <div class="container  text-center text-capitalize font-weight-light " data-aos="fade-up" data-aos-delay="500">
        <h1>{{$page->title}}</h1>
            <div class="d-flex justify-content-center">
            <div style="padding: 1.5px; background-color: white; width: 600px;"></div>
            </div>
        </div>
    </section><!-- End Hero -->

    <section id="about" class="">
        <div class="container">
            {{-- {{$home}} --}}
        <span class="theHeader">{{$page->heading}}</span>
        <br />
        {!! $page->content !!}

        </div>
    </section><!-- End About Section -->
@endsection
