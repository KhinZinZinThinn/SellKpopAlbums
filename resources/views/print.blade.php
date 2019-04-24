<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <link href="{{URL::to('bst/css/bootstrap.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        @foreach($orders as $od)
            <div class="col-md-8 offset-md-2">
                <h3 class="text-center">KPop Albums</h3>
                <p class="text-center" >Thaton</p>
                <p class="text-center">90691886666</p>
                <div class="row">
                    <div class="col-md-7">
                        <p>Customer : {{$od->name}}</p>
                        <p>Contact Phone : {{$od->phone}}</p>
                    </div>
                    <div class="col-md-5">
                        <p>Order Id : {{$od->id}}</p>
                        <p>Order Date : {{date('D(d)-m-y / h:i A',strtotime($od->created_at))}}</p>
                    </div>
                </div>

                <table class="table">
                    <tr>
                        <td>Item Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Amount</td>
                    </tr>

                    @foreach($od->cart->items as $item)
                        <tr>
                            <td>{{$item['item']['product_name']}}</td>
                            <td>{{$item['item']['price']}}</td>
                            <td>{{$item['qty']}}</td>
                            <td>{{$item['amount']}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3" class="text-right">Total Amount</td>
                        <td>{{$od->cart->totalAmount}}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Gov Tax (10%)</td>
                        <td>{{$od->cart->totalAmount* 0.1}}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total Amount</td>
                        <td>{{$od->cart->totalAmount*0.1+$od->cart->totalAmount}}</td>
                    </tr>
                </table>



            </div>



            @endforeach



    </div>
</div>

</body>
</html>
