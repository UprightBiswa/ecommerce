<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem(); 
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" >
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" style="color: rgb(146, 7, 88);">ecommerce</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#" style="color: rgb(18, 158, 0);">Home </a></li>
          <li class=""><a href="/myorder" style="color: rgb(18, 158, 0);">Orders </a></li>
        </ul>
        <form action="/search" class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" name="query"class="form-control search-box" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default" style="color: rgb(0, 101, 196);">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/cartlist" style="color: rgb(18, 158, 0);">cart Item({{$total}})</a></li>
          @if(Session::has('user'))
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: rgb(126, 4, 4);">{{Session::get('user')['name']}}
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/logout" style="color: rgb(18, 158, 0);">Logout</a></li>
             
            </ul>
          </li>
          @else
          <li><a href="/login" style="color: rgb(18, 158, 0);">Login</a></li>
          <li><a href="/register" style="color: rgb(18, 158, 0);">Register</a></li>
          @endif
         
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>