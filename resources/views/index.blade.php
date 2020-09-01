@extends('master')
@section('title')
{!! $page->title !!}
@endsection
@section('metas')
    @if($page->index_allowed!=1)
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    @endif
@endsection
@section('css')
    {!! $page->other_css !!}
@endsection
@section('slider')
    <style>
        #hero {
            width: 100%;
            height: 70vh;
            background-image: url("{{asset("$page->image")}}");
            border-bottom: 2px solid #fcebe3;
            margin: 72px 0 -72px 0;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
        }
        hr.new{
           border: 1px solid #ffffff!important;
            background: white;

        }
    </style>
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1">
                    <h1 class="text-center" style="color: white;font-family: Arial;font-size: 46px;line-height: 60px;font-weight: 400;">{{$page->slider_text}}</h1>
                <hr class="new">
                </div>
{{--                <div class="col-lg-6 order-1 order-lg-2 hero-img">--}}
{{--                    <img src="{{asset('cda-interview-guide.jpg')}}" class="img-fluid animated" alt="">--}}
{{--                </div>--}}
            </div>
        </div>

    </section>
@endsection
@section('content')
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="row justify-content-between">
        {!! $page->content !!}
        </div>

    </div>
</section><!-- End About Section -->

@endsection
@section('scripts')
    {!! $page->other_js !!}

@endsection
