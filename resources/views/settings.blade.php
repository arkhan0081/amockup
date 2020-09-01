@extends('master')
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

                <div class="col-lg-12 mt-5">
                    <form method="post" action="{{route('settings.update')}}" role="form" class="php-email-form">
                        @csrf
                        <div class="form-group {{ $errors->has('SEND_MAIL_TO') ? 'has-error': ''}} ">
                            <label>SEND EMAIL TO</label>
                            <input type="email" class="form-control" name="SEND_MAIL_TO"
                                   value="{{old('SEND_MAIL_TO',Setting::get('SEND_MAIL_TO'))}}">
                            @if($errors->has('SEND_MAIL_TO'))
                                <span class="help-block">
					       <strong>{{ $errors->first('SEND_MAIL_TO') }}</strong>
				               </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('SCRIPT_FB') ? 'has-error': ''}} ">
                            <label>FACE BOOK PIXEL SCRIPT</label>
                            <textarea type="text" class="form-control" name="SCRIPT_FB">{{Setting::get('SCRIPT_FB')}}</textarea>
                        @if($errors->has('SCRIPT_FB'))
                                <span class="help-block">
					       <strong>{{ $errors->first('SCRIPT_FB') }}</strong>
				               </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('SCRIPT_GOOGLE') ? 'has-error': ''}} ">
                            <label>GOOGLE ANALYTICS CODE</label>
                            <textarea type="text" class="form-control" name="SCRIPT_GOOGLE">{{Setting::get('SCRIPT_GOOGLE')}}</textarea>
                            @if($errors->has('SCRIPT_GOOGLE'))
                                <span class="help-block">
					       <strong>{{ $errors->first('SCRIPT_GOOGLE') }}</strong>
				               </span>
                            @endif
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!--ads-->
                </div>
            </div>
        </div>
    </section>

@stop
