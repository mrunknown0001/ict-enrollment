@extends('layouts.registrar-layout')

@section('title') Students @endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Student Info</h1>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0)"><i class="fa fa-graduation-cap"></i> Home</a></li>
			<li class="active">Student</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<p>
					<a href="{{ route('registrar.students') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to Students</a>
				</p>
				@include('includes.all')
				<div class="box box-primary">
					<div class="box-header with-border">
						<strong>Student Information</strong>
					</div>
					<div class="box-body">
						<p>Name: <strong>{{ ucwords($student->firstname) }} {{ $student->middle_name ? substr($student->middle_name, 0, 1) . '.' : '' }} {{ ucwords($student->lastname) }} {{ $student->suffix_name ? $student->suffix_name : '' }}</strong></p>

					</div>
					<div class="box-footer">
						
					</div>
				</div>
				<p><a href="{{ route('registrar.student.educational.info', ['id' => $student->id]) }}" class="btn btn-primary"><i class="fa fa-arrow-right"></i> View Educational Information</a></p>
			</div>
		</div>
	</section>
</div>
@endsection