@extends('master')
@section('content')
    
<div class=" custom-product">

          <div class="col-sm-6">
            
            <table class="table table-striped">
               
                <tbody>
                  <tr>
                    <td>price</td>
                    <td>{{$total}} Rupees</td>
                  </tr>
                  <tr>
                    <td>Tex</td>
                    <td>0 Rupees</td>                   
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total + 100}}</td>
                   
                  </tr>
                </tbody>
              </table>
              
              <form action="orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea  class="form-control" placeholder="enter your location" name="address"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                    <p> <input type="radio" value="cash" name="payment"> <span> Online Payment</span>   </p>
                    <p> <input type="radio" value="cash" name="payment"> <span> EMI Payment</span>   </p>
                    <p> <input type="radio" value="cash" name="payment"> <span> Cash On Delivery</span>   </p>

               
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
              
          </div>
   
</div>

@endsection