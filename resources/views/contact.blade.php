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
                    <h1 class="text-center" style="color: white;font-family: Arial;font-size: 46px;line-height: 60px;font-weight: 400;">{{$page->sliderText}}</h1>
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
<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact Us</h2>
            <p>Contact us the get started</p>
        </div>

        <div class="row">
        @if(Session::has('message'))
                <div class="alert alert-{{ Session::get('message-type') }} alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button"> × </button>
                    <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i>  {{ Session::get('message') }}
                </div>
        @endif
            <div class="col-lg-12 d-flex align-items-stretch text-center" data-aos="fade-up" data-aos-delay="100">
               <div class="info">
                   {!! $page->content !!}
               </div>
            </div>

            <div class="col-lg-12 mt-5">
                <form action="{{route('contactUs')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">NAME: *</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email: *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                             @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">HOW CAN WE HELP YOU? *</label>
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                        @error('message')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Us Section -->
@endsection
@section('scripts')
    {!! $page->other_js !!}
@endsection
