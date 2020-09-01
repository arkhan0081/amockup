@extends('master')
@section('title','Settings')
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
                    <form action="{{route('settings.update')}}" method="post" id="formSettings" class="php-email-form" >
                        @csrf
                        <div class="form-group">
                            <label>SEND EMAIL TO</label>
                            <input type="email" class="form-control" name="SEND_MAIL_TO" value="{{\Setting::get('SEND_MAIL_TO')}}">
                        </div>
                        <div class="form-group">
                            <label>FACE BOOK PIXEL ID</label>
                            <input type="text" class="form-control" id="SCRIPT_FB" name="SCRIPT_FB" value="{{\Setting::get('SCRIPT_FB') }}">
                        </div>
                         <div class="form-group">
                            <label>FACE BOOK PIXEL Event Name</label>
                            <input type="text" class="form-control" id="SCRIPT_FB_EVENT" name="SCRIPT_FB_EVENT" value="{{ \Setting::get('SCRIPT_FB_EVENT') }}">
                        </div>
                        <div class="form-group">
                            <label>GOOGLE ANALYTICS CODE</label>
                            <input type="text" class="form-control" id="SCRIPT_GOOGLE" name="SCRIPT_GOOGLE" value="{{ \Setting::get('SCRIPT_GOOGLE') }}">
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-success click">Submit</button>
                            </div>
                        </div>
                    </form>
                    <!--ads-->
                </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
<script>

</script>
@endsection
