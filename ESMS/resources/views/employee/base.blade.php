<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>E-storeManagement</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="logincss/login.css" rel="stylesheet" media="all">
    <link href="logincss/loginbutton.css" rel="stylesheet" media="all">
    <!--boot css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!--in css--->
    <style type="text/css">
        .box{
            margin-top:50px;
            width:70rem;
            height: 700px;
            background: #ba0d72;
            border:1px solid black;
        }

        .boxlogin{
            width:40rem;
            height:400px;
            margin-top:70px;
            background: #77e6e2;
            border:2px solid black;

        }
        .title{
            text-align:center;
            margin-top: 10px;
            color:#8a1b0f;
        }
        .boxregister{
            width:40rem;
            height:150px;
            margin-top:50px;
            background: #77e6e2;
            border:2px solid black;
        }
        .navpadding{
            padding:20px;
            
        }
        .boxdash{
            width:80%;
            height: 499px;
            background: #77e6e2;
            border:1px solid black;
        }
        .boxdashnav{
            width:80%;

        }
        .boxnav{
            margin-top:50px;
            width:60rem;
           
           
            border:1px solid black;
        }
        
    </style>

</head>
<body>
    <div class="container box ">
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav boxdashnav">
    <li class="nav-item navpadding">
      <a class="nav-link">{{Auth::user()->name}}</a>
    </li>
    <li class="nav-item navpadding">
      <a class="nav-link" href="{{url('product')}}">Product</a>
    </li>
    <li class="nav-item navpadding">
      <a class="nav-link " href="{{route('users.index')}}">Employee</a>
    </li>
    
    <li class="nav-item navpadding">
      <a class="nav-link" href="{{url('/')}}">LogOut</a>
    </li>
  </ul>
</nav>
<div class="container boxdash ">
@yield('empdash') 
</div>
    </div>
    
    

   
   


    
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    
</body>
</html>
