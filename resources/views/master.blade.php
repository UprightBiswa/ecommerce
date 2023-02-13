<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ecommerce</title>


    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
 {{ View::make('header')}}   
 @yield('content')
 {{ View::make('footer')}}   

</body>
<style>
           .navbar-default {
    background-color: rgb(255, 174, 187);
    
    }       
    .custom-login{
        height: 500px;
        padding-top: 100px
    }
    img.slider-img{
        height:400px !important;

    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: #00d5ff29 !important;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float:left;
        width: 20%;
    }
    .tranding-wrapper{
        margin: 20px;
    }
    .detail-img{
      height: 200px;  
    }
    .search-form{
        width: 500px !important;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom:20px;
    }

        .trending-item {
        display: inline-block;
        width: 25%;
        padding: 0 10px;
        }
</style>
</html>