@extends('layouts.admina')
@section('content')

					<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Kategori / Edit Kategori</li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($kategori, ['url' => route('kategori.update', $kategori->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('kategori._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
	
@endsection