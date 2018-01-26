<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="{{asset('icon.png')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Pans Company</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset ('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{asset ('p/css/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{asset ('user/css/business-casual.min.css') }}" rel="stylesheet">

  </head>

 

    <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
          <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item px-lg-4">
                <h1>
                <a class="nav-link text-uppercase text-expanded" href="/"><h2>Beranda</h2>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/about"><h2>Profil</h2></a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/products"><h2>Produk</h2></a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/store"><h2>Detail</h2></a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="/artikells"><h2>Tips And Trict</h2></a>
              </li>
            </h1>
            </ul>
          </div>
        </div>
      </nav>



  @include('layouts._flash')
        @yield('content')
        
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5a6a9c2ed7591465c7071a82/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->  






   <br>
<a href="https://info.flagcounter.com/eyKu"><img src="https://s11.flagcounter.com/count2/eyKu/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
    <br>
        <footer class="footer text-faded text-center py-5">
      <div class="container">
       <h4><p class="m-0 small">Copyright &copy; PansCompany.<i>cloth</i> 2018</p></h4>
      </div>
    </footer>


 

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset ('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{asset ('user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src='https://codepen.io/fbrz/pen/9a3e4ee2ef6dfd479ad33a2c85146fc1.js'></script>

  

    <script  src="{{asset ('user/js/index.js')"></script>
  </body>

</html>
    @include('tiny')
    @yield('scripts')