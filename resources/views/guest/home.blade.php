  <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3"></span>
      <span class="site-heading-lower">Beranda</span>
    </h1>

<link rel="shortcut icon" href="{{asset('icon.png')}}">
@extends('layouts.user')
@section('content')
@foreach ($Lainnya as $data) 
<body style="background:linear-gradient(rgba(47,23,15,.65),rgba(47,23,15,.65)),url(../img/img1/{{$data->cover}});
              background-repeat: no-repeat;
              background-size: cover; 
              background-attachment: fixed;">
  <body>
  @foreach ($Home as $data) 
    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">{!!$data->textkecilhd!!}</span>
      <span class="site-heading-lower">{!!$data->textbesarhd!!}</span>
    </h1>



    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="/img/img1/{{$data->cover}}" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{!!$data->textkecilboldbd!!}</span>
              <span class="section-heading-lower">{!!$data->textbesarbd!!}</span>
            </h2>
            <p class="mb-3">{!!$data->textkecilbd!!}</p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl">Visit Us Today!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{!!$data->textkecilboldft!!}</span>
                <span class="section-heading-lower">{!!$data->textbesarft!!}</span>
              </h2>
              <p class="mb-0">{!!$data->textkecilft!!}</p>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    @endforeach
@endforeach
@endsection