@extends('layouts.admina')
@section('content')
					 <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Lainnya / Ubah Halaman Lainnya</li>
    </h4>
      </ol>
    </section>
<br><br>
					{!! Form::model($Lainnya, ['url' => route('Lainnya.update', $Lainnya->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Lainnya._form')
					{!! Form::close() !!}

@endsection