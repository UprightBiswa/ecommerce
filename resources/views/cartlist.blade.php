@extends('master')
@section('content')
    
<div class=" custom-product">
    <h2>Cart List</h2>
          <div class="col-sm-10">
            <div class="tranding-wrapper">
                
                    @foreach ($products as $item)
                    <div class="row search-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}" >
                                  </a>

                        </div>
                        <div class="col-sm-3">
                                <div class="">
                                  <h2>{{$item->name}}</h2>
                                  <h5>{{$item->description}}</h5>
                                </div>
                                 

                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-warning">Remove From Cart</button>
                        
                                </div>
                                 

                        </div>
                       
                    </div> 
                    @endforeach
                  
              </div>
          </div>
   
</div>

@endsection