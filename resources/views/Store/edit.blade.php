@extends('layouts.admina')
@section('content')

						
   
      
    <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Detail / Ubah Halaman Detail</li>
    </h4>
      </ol>
    </section>
   
<br><br>

					{!! Form::model($Store, ['url' => route('Store.update', $Store->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Store._form')
					{!! Form::close() !!}


@endsection