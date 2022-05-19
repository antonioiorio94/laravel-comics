<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/app.css">
  <title>@yield('title')</title>
</head>
<body>
  <!--Include Header-->
@include('partials/header')

<main>
<div class="jumbo">
<img class="jumbotron" src="images/jumbotron.jpg" alt="Image"/>

</div>

<section class="comics">
@yield('content')
</section>

<!--Info-section-->
@include('partials/info')
 
</main>

<!--Footer-->

<footer> 

@include('partials/footer')


</footer>
  
</body>
</html>