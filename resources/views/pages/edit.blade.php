@extends('master')
@section('title','Create New Page')
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
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
                    </div>
                @endif
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">

                    <form action="{{route('pages.update',$page->id)}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Page Title</label>
                                <input type="text" name="title" value="{{old('title',$page->title)}}" class="form-control @error('title') is-invalid @enderror" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Allow Indexing</label>
                                <select class="form-control @error('index_allowed') is-invalid @enderror" name="index_allowed" id="email">
                                    <option value="" readonly="readonly">Select One</option>
                                    <option value="1"  {{$page->index_allowed == 1 ? 'selected':''}}>Indexing Allowed</option>
                                    <option value="0" {{$page->index_allowed == 0 ? 'selected':''}}>Indexing Disabled</option>
                                </select>
                                @error('index_allowed')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Meta Description</label>
                            <input type="text" value="{{old('meta_description',$page->meta_description)}}" class="form-control @error('meta_description') is-invalid @enderror" name="meta_description" id="meta_description"  />
                            @error('meta_description')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Slider Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" />
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Slider Text</label>
                            <input type="text" value="{{old('slider_text',$page->slider_text)}}" class="form-control @error('slider_text') is-invalid @enderror" name="slider_text" id="slider_text" />
                            @error('slider_text')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Page Content</label>
                            <textarea class="form-control @error('detailed_content') is-invalid @enderror" id="detailed_content" name="detailed_content" rows="10" data-rule="required" data-msg="Please write something for us">{!! $page->content !!}</textarea>
                            @error('detailed_content')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Custom JS</label>
                            <textarea class="form-control" id="other_js" name="other_js" rows="10">{!! $page->other_js !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Custom CSS</label>
                            <textarea class="form-control" id="other_css" name="other_css" rows="10">{!! $page->other_css !!}</textarea>
                        </div>
                        <div class="text-center"><button type="submit">Update Page</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Us Section -->
@endsection
