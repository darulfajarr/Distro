@extends('layouts.admina')
@section('content')
						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Produk / Tambah Produk </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
	
				{!! Form::open(['url' => route('Product.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Product._form')
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@endsection