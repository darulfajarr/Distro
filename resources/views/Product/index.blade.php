@extends('layouts.admina')
@section('content')
<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Produk </li>
    </h4>
      </ol>
    </section>
            
<br><br>
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
                      <p> <a class="btn btn-primary" href="{{ route('Product.create') }}">Tambah</a> </p>
          
              {{-- <p> <a class="btn btn-primary" href="Product/edit">Edit</a> </p> --}}
              {!! $html->table(['class'=>'table-striped']) !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
{!! $html->scripts() !!}
@endsection