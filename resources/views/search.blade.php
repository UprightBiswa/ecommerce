@extends('master')
@section('content')
    
<div class=" custom-product">
          <div class="col-sm-4">
            <a href="#">Filter</a>
          </div>
          <div class="col-sm-4">
            <div class="tranding-wrapper">
                <h4>Result Products</h4>
                    @foreach ($products as $item)
                    <div class="search-form">
                        <a href="detail/{{$item['id']}}">
                      <img class="trending-img" src="{{$item['gallery']}}" >
                      <div class="">
                        <h2>{{$item['name']}}</h2>
                        <h5>{{$item['description']}}</h5>
                      </div>
                        </a>
                    </div> 
                    @endforeach
                  
              </div>
          </div>
   
</div>

@endsection