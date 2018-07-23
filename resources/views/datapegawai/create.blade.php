@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Tambah Data Pegawai 
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('datapegawai.store') }}" method="post" enctype="multipart/form-data" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai</label>	
			  			<input type="text" name="name" class="form-control"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('nipd') ? ' has-error' : '' }}">
			  			<label class="control-label">NIPD Pegawai</label>	
			  			<input type="text" name="nipd" class="form-control"  required>
			  			@if ($errors->has('nipd'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nipd') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email Pegawai</label>	
			  			<input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label for="password" class="control-label">Password Pegawai</label>	
			  			<input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
			  		</div>
			  		<div class="form-group">
			  			<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>	
			  			
			  			<div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
			  		<div class="form-group">
                        <p><label for="cc-payment" class="control-label mb-1">Foto</label></p>
                            <input name="gambar" type="file" required>
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  			<a class="btn btn-primary" href="{{ url()->previous() }}"><font color="white">BACK</font></a>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection