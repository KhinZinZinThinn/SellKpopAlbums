@extends('layouts.app')
@section('title') Shopping Cart
    @stop

@section('content')
    <div class="container" style="margin-top: 70px">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-hover" style="background: #f2a29f">
                    <tr>
                        <td>Product Name</td>
                        <td>Price</td>
                        <td>Quantity</td>
                        <td>Amount</td>
                    </tr>
                    @if(Session::has('cart'))
                    @foreach($cart as $item)
                        <tr>
                            <td>{{$item['item']['product_name']}}</td>
                            <td>{{$item['item']['price']}}</td>
                            <td>
                                <a href="{{route('decrease.cart',['id'=>$item['item']['id']])}}"><i class="fa fa-minus-circle"></i> </a>
                                {{$item['qty']}}
                                <a href="{{route('increase.cart',['id'=>$item['item']['id']])}}"><i class="fa fa-plus-circle"></i> </a>
                            </td>
                            <td>{{$item['amount']}}</td>

                        </tr>
                        @endforeach
                    <tr>
                        <td colspan="3" class="text-right"> TotalAmount</td>
                        <td> {{$totalAmount}}</td>
                    </tr>
                    <tr>
                        <td colspan="4" class="text-right">
                            <a href="{{route('cancel.cart')}}" class="btn btn-outline-danger">Cancel</a> </td>
                    </tr>
@else
                        <tr>
                            <td colspan="4" class="text-center text-danger"> Empty Cart!</td>
                        </tr>
                    @endif

                </table>
            </div>
            <div class="col-md-4">

                <div class="card shadow">
                    <div class="card-header" style="background:#f2a29f ">
                       <h3>Customer Information</h3>
                    </div>
                    <div class="card-body" style="background: #f2dede">
                        <form action="{{route('post.checkout')}}" method="post">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address" >Address</label>
                        <textarea  name="address" id="address" class="form-control"></textarea>
                    </div>
                    <div class="row">
                    <div class="col-md-8">
                    <div class="form-group">
                        <button type="submit" name="cancel" class="btn btn-danger">Cancel </button>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" name="order" class="btn btn-success">Order </button>
                        </div>
                    </div>
                    </div>
@csrf
                </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    @stop