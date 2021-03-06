@extends('layouts.registrar-layout')

@section('title') Registrar Profile @endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Update Registrar Profile</h1>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0)"><i class="fa fa-user"></i> Home</a></li>
			<li class="active">Profile</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				@include('includes.all')
				<div class="box box-danger">
					<div class="box-header with-border">
						<strong><i class="fa fa-user"></i> Update Registrar Profile</strong>
					</div>
					<div class="box-body">
						<p><em>Field with red asterisk (<label class="label-required">*</label>) are required fields.</em></p>
						<form action="{{ route('registrar.update.profile.post') }}" method="POST" role="form" autocomplete="off">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-6">
							      <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
							      	<label for="firstname">Firstname</label><label class="label-required">*</label>
							        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ Auth::guard('registrar')->user()->firstname }}" placeholder="Enter Firstname" autofocus required="">
							        @if ($errors->has('firstname'))
							            <span class="help-block">
							                <strong>{{ $errors->first('firstname') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-6">
							      <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
							      	<label for="middlename">Middlename</label>
							        <input id="middlename" type="text" class="form-control" name="middlename" value="{{ Auth::guard('registrar')->user()->middle_name }}" placeholder="Enter Middlename" >
							        @if ($errors->has('middlename'))
							            <span class="help-block">
							                <strong>{{ $errors->first('middlename') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-6">
							      <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
							      	<label for="lastname">Lastname</label><label class="label-required">*</label>
							        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ Auth::guard('registrar')->user()->lastname }}" placeholder="Enter Lastname" required>
							        @if ($errors->has('lastname'))
							            <span class="help-block">
							                <strong>{{ $errors->first('lastname') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-6">
							      <div class="form-group{{ $errors->has('suffix_name') ? ' has-error' : '' }}">
							      	<label for="suffix_name">Suffix</label>
							        <input id="suffix_name" type="text" class="form-control" name="suffix_name" value="{{ Auth::guard('registrar')->user()->suffix_name }}" placeholder="Enter Suffix Name" >
							        @if ($errors->has('suffix_name'))
							            <span class="help-block">
							                <strong>{{ $errors->first('suffix_name') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-6">
							      <div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
							      	<label for="id_number">ID Number</label>
							        <input id="id_number" type="text" class="form-control" name="id_number" value="{{ Auth::guard('registrar')->user()->id_number }}" placeholder="Enter ID Number" >
							        @if ($errors->has('id_number'))
							            <span class="help-block">
							                <strong>{{ $errors->first('id_number') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> Update Registrar Profile</button>
							</div>
						</form>
					</div>
					<div class="box-footer">
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection