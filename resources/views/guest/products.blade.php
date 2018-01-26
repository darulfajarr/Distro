

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="{{asset ('p/css/style.css') }}">


<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Produk</span>
    </h1>
@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data1) 

      <br>

          <nav class="navbar navbar-expand-lg navbar-dark py-lg-2" id="mainNav">
      <div class="container">
       
       
       
          <ul class="navbar-nav mx-auto">
           <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="/products"><h4>Semua Produk</h4></a>
            </li>
           @foreach ($kategori as $data2)
            <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="{{route('showperkategori', $data2->id)}}"><h4>{!!$data2->nama_kategori!!}</h4></a>
            </li>
           @endforeach
          <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="/news"><h4>Produk Terbaru</h4></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<body style="background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(../img/img1/{{$data1->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">



         @foreach ($Product as $data)
 
    <section class="page-section">
      <div class="container">
        <div class="product-item">
          <div class="product-item-title d-flex">
            <div class="bg-faded p-5 d-flex ml-auto rounded">
              <h2 class="section-heading mb-0">
                <span class="section-heading-lower"><i>{!!$data->nama_product!!}</i></span>
              </h2>
            </div>
          </div>
          <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/img/img7/{{$data->cover}}" width="700px" height="900px">
          <div class="product-item-description d-flex mr-auto">
            <div class="bg-faded p-5 rounded">

              <p class="mb-0"><center><h2><b><u>Detail</u></b></h2></center>  <br>

                <table>
                  <tr>
                    <td>Bahan</td><td>&nbsp:&nbsp</td><td>{!!$data->bahan!!}</td>
                  </tr>
                  <tr>
                    <td>Warna</td><td>&nbsp:&nbsp</td><td>{!!$data->warna!!}</td>
                  </tr>
                  <tr>
                    <td>Ukuran</td><td>&nbsp:&nbsp</td><td>{!!$data->ukuran!!}</td>
                  </tr>
                </table>
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
<br>
<br>
<br>  
<ul class="pagination modal-4">
   {{$Product->links('vendor.pagination.bootstrap-4')}}
</ul><br> 


    </section>

@endforeach

@endsection



<script src='https://codepen.io/fbrz/pen/9a3e4ee2ef6dfd479ad33a2c85146fc1.js'></script>

  

    <script  src="{{asset ('p/js/index.js') }}"></script>