@extends('layouts.admina')
@section('content')
						 <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Profil / Ubah Halaman Profil</li>
    </h4>
      </ol>
    </section>

<br><br>
	
					{!! Form::model($About, ['url' => route('About.update', $About->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('About._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection