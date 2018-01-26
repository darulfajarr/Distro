@extends('layouts.admina')
@section('content')


   
      <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Beranda / Ubah Halaman Beranda</li>
    </h4>
      </ol>
    </section>
     
<br><br>
					{!! Form::model($Home, ['url' => route('Home.update', $Home->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Home._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection