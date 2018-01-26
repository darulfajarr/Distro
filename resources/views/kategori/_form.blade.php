<br>
<div class="form-group{{ $errors->has('nama_kategori') ? ' has-error' : '' }}">
	{!! Form::label('nama_kategori', 'Nama Kategori', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('nama_kategori', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama_kategori', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>

<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>