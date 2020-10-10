<html>

<head>
    <title>App Product</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #E55383;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
.footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #E55383;
            color: white;
            text-align: center;
        }
</style>
    <!-- <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #E55383;
            color: white;
            text-align: center;
        }
        body {
            background-color:  #EDF7EF
        }

    </style> -->

</head>

<body>

<div class="navbar">
  <a href="/home">Home</a>
  <a href="/numbers">Number</a>
  <a href="/products">Product</a>
  <a href="/image-upload">Upload Gambar</a>

</div>
<br>
<br>
<br>
<br>
    @section('sidebar')

    @show

    <div class="container">
        @yield('content')
        @yield('contentnumber')
        @yield('contentproduct')
        @yield('contentproductdetail')
        @yield('contentberanda')
        @yield('contentimage')
        @yield('contentupload')
    </div>
    <div class="text-center footer">

        <h5>Copyright @2020. Yuspin. All rights reserved</h5>

    </div>
</body>

</html>
