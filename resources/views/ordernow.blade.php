@extends('master')

@section('content')
<div class="custom-product">

    <div class="col-sm-10">
    <table class="table">
    
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>

      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
      
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
  <div class="form-group">
  @csrf
    
    <textarea type="text" name="address" placeholder="enter your address here" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method:</label>
    <input type="radio" class="form-control" value="cash" name="payment"><span>Online Payment</span><br><br>
    <input type="radio" class="form-control" value="cash" name="payment"><span>Cash on Delivery</span>
  </div>
  
  <button type="submit" class="btn btn-default">Place Order</button>
</form>
  </div>
    </div>
</div>
@endsection