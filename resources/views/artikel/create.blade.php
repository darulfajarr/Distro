@extends('layouts.admina')
@section('content')
						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Tips & Tricks / Tambah Tips & Tricks </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
	
				{!! Form::open(['url' => route('artikel.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('artikel._form')
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@endsection