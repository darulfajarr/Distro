<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Products</span>
    </h1>
    <link rel="shortcut icon" href="{{asset('icon.png')}}">
@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data1) 

      <br>

          <nav class="navbar navbar-expand-lg navbar-dark py-lg-2" id="mainNav">
      <div class="container">
       
       
       
          <ul class="navbar-nav mx-auto">
           <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="/products">Semua Produk</a>
            </li>
            @foreach ($kategori as $data2)
            <li class="nav-item px-lg-1">
              <a class="nav-link text-uppercase text-expanded" href="{{route('showperkategori', $data2->id)}}">{!!$data2->nama_kategori!!}</a>
            </li>
           @endforeach
          </ul>
        </div>
      </div>
    </nav>

<body style="background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(../img/img1/{{$data1->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">



         @foreach ($filtercategori as $data)
 
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
              Bahan &nbsp&nbsp : &nbsp {!!$data->bahan!!}
              <br>
              Warna &nbsp&nbsp : &nbsp {!!$data->warna!!}
              <br>
              Ukuran &nbsp: &nbsp {!!$data->ukuran!!}
              

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
   {{$filtercategori->links('vendor.pagination.bootstrap-4')}}
</ul><br>
    </section>

      @endforeach
@endsection
