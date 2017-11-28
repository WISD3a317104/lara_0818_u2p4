Skip to content
This repository
Search
Pull requests
Issues
Marketplace
Explore
 @s3a317097
 Sign out
 Watch 0
  Star 0  Fork 0 WISD3A432016/lara_0818_u2p4
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Insights
Tree: 737c15b4b0 Find file Copy pathlara_0818_u2p4/resources/views/layouts/master.blade.php
737c15b  24 days ago
@s3A432016 s3A432016 Exercise4-6 : 修改主樣板內link 標籤css檔案的參考位置，利用asset()輔助方法
1 contributor
RawBlameHistory      
72 lines (50 sloc)  2.44 KB
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">  -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <!-- <link href="css/clean-blog.min.css" rel="stylesheet">  -->
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    @include('layouts.partials.navigation')

    @yield('content')


    <hr>

    <!-- Footer -->
    @include('layouts.partials.footer')


    <!-- jQuery -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
    <script src="{{asset('js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <!--<script src="js/jqBootstrapValidation.js"></script>-->
    <!--<script src="js/contact_me.js"></script>-->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>

    <!-- Theme JavaScript -->
    <!--<script src="js/clean-blog.min.js"></script>-->
    <script src="{{asset('js/clean-blog.min.js')}}"></script>

</body>

</html>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
About