@extends('layouts.admin-layout')

@section('title') Principals @endsection

@section('content')
<div class="content-wrapper">
	<section class="content-header">
		<h1>Principal</h1>
		<ol class="breadcrumb">
			<li><a href="javascript:void(0)"><i class="fa fa-users"></i> Home</a></li>
			<li class="active">Principal</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				@include('includes.all')

				<p><button class="btn btn-danger" data-toggle="modal" data-target="#addDean"><i class="fa fa-plus"></i> Add Principal</button></p>
				@include('admin.includes.modal-dean-add')

				@if(count($deans) > 0)
				<div class="box box-danger">
					<div class="box-header with-border">
						<strong><i class="fa fa-users"></i> Principal</strong>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">Username</th>
									<th class="text-center">Name</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($deans as $d)
								<tr>
									<td>{{ $d->username }}</td>
									<td>
										{{ ucwords($d->firstname . ' ' . $d->lastname) }}
										{{ strtoupper($d->suffix_name) }}
									</td>
									<td class="text-center">
										{{-- <a href="{{ route('admin.update.dean', ['id' => $d->id]) }}" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span> Update</a> --}}
										<button class="btn btn-default btn-xs" data-toggle="modal" data-target="#deanResetPass-{{ $d->id }}"><i class="fa fa-key"></i> Reset Password</button>
										<button class="btn btn-default btn-xs" data-toggle="modal" data-target="#updateDean-{{ $d->id }}"><i class="fa fa-pencil"></i> Update</button>
									</td>
								</tr>
								@include('admin.includes.modal-dean-reset-password')
								@include('admin.includes.modal-dean-update')
								@endforeach
							</tbody>
							<tfoot>
							</tfoot>
						</table>	
					</div>
					<div class="box-footer">
						
					</div>
				</div>

				@else
				<p class="text-center">No Principal Available</p>
				@endif
			</div>
		</div>
	</section>
</div>
@endsection