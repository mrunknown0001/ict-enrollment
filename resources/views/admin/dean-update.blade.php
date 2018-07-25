@extends('layouts.admin-layout')

@section('title') Deans @endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Update Dean</h1>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0)"><i class="fa fa-users"></i> Home</a></li>
			<li class="active">Deans</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<p><a href="{{ route('admin.deans') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to Deans</a></p>
				@include('includes.all')
				<div class="box box-primary">
					<div class="box-header with-border">
						<strong><i class="fa fa-user"></i> Update Dean</strong>
					</div>
					<div class="box-body">
						<form action="{{ route('admin.update.dean.post') }}" method="POST" role="form" autocomplete="off">
							{{ csrf_field() }}
							<input type="hidden" name="dean_id" value="{{ $dean->id }}">
							<div class="row">
								<div class="col-md-3">
							      <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
							      	<label for="firstname">Firstname</label>
							        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $dean->firstname }}" placeholder="Enter Firstname" autofocus>
							        @if ($errors->has('firstname'))
							            <span class="help-block">
							                <strong>{{ $errors->first('firstname') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-3">
							      <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
							      	<label for="middlename">Middlename</label>
							        <input id="middlename" type="text" class="form-control" name="middlename" value="{{ $dean->middle_name }}" placeholder="Enter Middlename" >
							        @if ($errors->has('middle_name'))
							            <span class="help-block">
							                <strong>{{ $errors->first('middlename') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-3">
							      <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
							      	<label for="lastname">Lastname</label>
							        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $dean->lastname }}" placeholder="Enter Lastname" >
							        @if ($errors->has('lastname'))
							            <span class="help-block">
							                <strong>{{ $errors->first('lastname') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-3">
							      <div class="form-group{{ $errors->has('suffix_name') ? ' has-error' : '' }}">
							      	<label for="suffix_name">Suffix</label>
							        <input id="suffix_name" type="text" class="form-control" name="suffix_name" value="{{ $dean->suffix_name }}" placeholder="Enter Suffix Name" >
							        @if ($errors->has('suffix_name'))
							            <span class="help-block">
							                <strong>{{ $errors->first('suffix_name') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
								<div class="col-md-6">
							      <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
							      	<label for="username">Username</label>
							        <input id="username" type="text" class="form-control" name="username" value="{{ $dean->username }}" placeholder="Enter Username" autofocus>
							        @if ($errors->has('username'))
							            <span class="help-block">
							                <strong>{{ $errors->first('username') }}</strong>
							            </span>
							        @endif
							      </div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save</button>
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