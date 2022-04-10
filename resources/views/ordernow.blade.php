@extends('.main')
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
        <td>$ {{$total * 0.15}}</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 8</td>
      </tr>
      <tr>
        <td>Total</td>
        <td>$ {{$total + $total*0.15 + 8}}</td>
      </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
      @csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input name="address" type="email" placeholder="you@email.com" style="width:30%;"class="form-control">
  </div>
  <div class="form-group">
    <label for="pwd">Payment Method</label>
    <br><br>
    <input type="radio" value="cash" name="payment" style="padding:10px;"><span>Online</span><br>
    <input type="radio" value="cash" name="payment" style="padding:10px;"><span>On delivery</span><br>
    <input type="radio" value="cash" name="payment" style="padding:10px;"><span>Mail</span><br>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
    </div>
</div>
@endsection