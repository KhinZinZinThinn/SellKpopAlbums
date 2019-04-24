@extends('layouts.app')
@section('title') Welcome to ... @stop

@section('content')
    <div class="container mb-5" style="margin-top: 100px">
        <div class="row">
            <div class="col-md-6">
                <h1 class="font-weight-bold font-italic" style="font-size: 100px; color: #cc2255;">Welcome</h1>
                <h2 class="font-weight-bold text-secondary">Contact Us</h2>
                <h4 style="font-family:'Arial';">
                    Computer University Thaton, God Street, <br>
                    Thaton, Mon State <br>
                </h4>
                <i class="fa fa-mail-bulk"> www.khinzinzinthinn1@gmail.com</i><br>
                <i class="fa fa-phone"> 09-691886666 </i>

            </div>

            <div class="col-md-6">
                @if(Session('info'))<div class="alert alert-success">{{Session('info')}}</div>  @endif
                @if(Session('err'))<div class="alert alert-danger"> {{Session('err')}}</div> @endif



                    <h3 class="font-italic text-secondary mt-2"> Please leave your feedback</h3>
                <form method="post" action="{{route('post.message')}}">
                    <div class="form-divgroup">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control @if($errors->has('email')) is-invalid  @endif">
                        @if($errors->has('email'))<span class="invalid-feedback">{{$errors->first('email')}}</span> @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control @if($errors->has('phone')) is-invalid @endif">
                        @if($errors->has('phone'))<span class="invalid-feedback">{{$errors->first('phone')}}</span> @endif
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control @if($errors->has('message')) is-invalid @endif"></textarea>
                        @if($errors->has('message'))<span class="invalid-feedback">{{$errors->first('message')}}</span> @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-dark btn-lg">Send</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
            <h3 class="font-italic text-secondary">Shop Location <i class="fa fa-location-arrow"></i> </h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3817.7350580394727!2d97.38404964981434!3d16.888995721377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c2e971af8489db%3A0x77befc77b793c6f1!2sComputer+University+(Thaton)!5e0!3m2!1sen!2smm!4v1551880827451" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

@endsection