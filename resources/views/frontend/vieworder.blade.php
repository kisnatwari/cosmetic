@extends('frontend.layout.header')
<style>
  .container {
    max-width: 800px;
   
    /* min-height: 400px; */
    margin: 0 auto;
    padding: 10px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f5f5f5;
  }

  .product-image {
    width: 50px;
  }

  .status {
    text-transform: uppercase;
    font-weight: bold;
  }
</style>
@section('content')



<div class="container">
  <h2 class="text-center">Your Order</h2>
  <!-- Your profile content goes here -->

 

  <table style="margin-bottom: 100px;">
    <thead>
      <tr>
        <th>S.N.</th>
        <th>Product Image</th>
        <th>Product Name</th>
        <th>Order Date</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @php
        $serialNumber = 1
      @endphp
      @foreach ($orders as $order)

        @foreach ($order->carts as $cart)

        <tr>
        <td>{{$serialNumber}}</td>
        <td><img src="{{asset('images/products/'.$cart->product->photopath)}}" class="product-image"></td>
        <td>{{$cart->product->name}}</td>
        <td>{{$order->order_date}}</td>
        <td>{{$cart->qty}}</td>
        <td>{{$cart->product->price}}</td>
        <td class="status">{{$order->status}}</td>
      </tr>
          @php
            $serialNumber++
          @endphp
        @endforeach
        
        
      @endforeach
      
     
      
    </tbody>
  </table>
</div>

@endsection
