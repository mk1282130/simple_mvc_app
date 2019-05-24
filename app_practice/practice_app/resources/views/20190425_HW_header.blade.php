<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body{
    margin: 0;
    padding: 0;
}
header{
    width: 100%;
    height: 80px;
    background-color: coral;
}
/*ロゴ画像*/
h1{
    float: left;
    width: 14%; /*imgの幅*/
    line-height: 100px; /*heightの高さと同じに*/
    margin: 0;
}
img{
    line-height: 100px; /*heightの高さと同じに*/
    vertical-align: middle;
    width: 100%;
    margin-left: 50px;
    /*position: absolute;
    top: 50%;
    transform: translateY(-50%);*/
}
/*メニュー*/
div{ 
    float: right;
    line-height: 100px; /*headerの高さと同じに*/
}
ul{
    margin: 0;
    padding: 0;
}
li{
    display: inline-block;
    margin-right: 30px
}
li a{
    text-decoration: none;
    color: white;
}
</style>
<body>
    
    @yield('20190425_HW_master')
        <!-- @section('header') -->

        <!--header-->
        <header>
            </h1>    
            <!--メニュー-->
            <div>        
                <ul>
                    <li><a href="">menu1</a></li><li><a href="">menu2</a></li><li><a href="">menu3</a></li><li><a href="">menu4</a></li><li><a href="">menu5</a></li>
                </ul>
            </div>              
        </header>

        <!-- @endsection -->

</body>
</html>