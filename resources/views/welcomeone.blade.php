@extends('layouts.app')
@section('title') Welcome to ... @stop

@section('content')

    <div class="container">
        @include('menu')
        <div class="row">
            <div class="col-md-8 mt-2 d-none d-sm-block" >

                <div id="carouselExampleIndicators" class="carousel slide mb-3 shadow" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{URL::to('images/btsbg.jpg')}}" alt="First slide">
                            <div class="carousel-caption">
                                <h5 style="font-size: 50px; color: #cc2255" class="font-weight-bold">KPop Albums</h5>
                                <p class="font-italic" style="font-size: 20px; color: #cc2255"> Always for our Customers... </p>
                                <a href="{{route('contact')}}" class="btn btn-outline-info btn-lg"> Contact and leave feedback to us</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/exobg.jpg')}}" alt="Second slide">
                            <div class="carousel-caption">
                                <h5 style="font-size: 50px; color: #cc2255" class="font-weight-bold">KPop Albums</h5>
                                <p class="font-italic" style="font-size: 20px; color: #cc2255"> Always for our Customers... </p>
                                <a href="{{route('contact')}}" class="btn btn-outline-info btn-lg"> Contact and leave feedback to us</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/ikonbg.jpg')}}" alt="Third slide">
                            <div class="carousel-caption">
                                <h5 style="font-size: 50px; color: #cc2255" class="font-weight-bold">KPop Albums</h5>
                                <p class="font-italic" style="font-size: 20px; color: #cc2255"> Always for our Customers... </p>
                                <a href="{{route('contact')}}" class="btn btn-outline-info btn-lg"> Contact and leave feedback to us</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
            <div class="mt-2 d-none d-sm-block" >

                <div id="carouselExampleIndicators1" class="carousel slide mb-3 shadow" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{URL::to('images/blackpinkbg.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/btsbgtwo.jpg')}}" alt="Second slide">

                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/winnerbg.jpg')}}" alt="Third slide">

                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="mt-2" >

                <div id="carouselExampleIndicators2" class="carousel slide mb-3 shadow" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{URL::to('images/exobgone.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/btsbgthree.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{URL::to('images/twicebg.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            </div>
        </div>

        <p class="mt-5" style="color: #cc2255; font-size: 50px">Welcome to Our Online Shop <br></p>
        <p style="color: #f2a29f; font-size: 30px" class="text-right font-italic"> You can choose the following albums and order .........<br></p>
       <p style="color: #f2a29f; font-size: 30px" class="text-center font-italic"> Our shopping team will give you full service ..........</p>
        <h1 class="text-primary font-italic mt-5"> Available Items</h1>

        <div class="row">
            @foreach($pds as $pd)
                <div class="col-sm-6 col-md-3 mb-5">
                    <div class="card shadow" style="background: #f2dede">
                        <div class="card-body">
                            <img src="{{route('front.product.image',['image_name'=>$pd->image])}}" class="card-img-top img-thumbnail" >
                            <p class="card-text text-center" style="font-size: 20px">{{$pd->product_name}}</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <p> <i class="fa fa-money"></i> {{$pd->price}} MMK
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('add.cart',['id'=>$pd->id])}}" class="btn btn-outline-primary btn-sm shadow">Add Cart</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="pagination justify-content-center mt-3 mb-5">{{$pds->links()}}</div>


    @include('layouts/footer')
@stop
