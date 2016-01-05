@extends('layouts.app')

@section('content')

	<!-- Bootstrap boilerplate -->
	
	<!-- List of NGOs -->
	<h2 class="col-sm-offset-1 page-header">Contact "{{ $ngo->ngo_name }}"</h2>	
	
	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		
		<div class="panel-heading col-sm-6">
			<a href="/authentication/secure/dashboard/modules/ngos/causes/all" class="col-sm-offset-8">
  			<span class="glyphicon glyphicon-th-list" 
  				aria-hidden="true"></span> &nbsp; View All Causes
			</a>
		</div>

		<div class="panel-heading col-sm-6">
			<a href="/authentication/secure/dashboard/modules/ngos/{{ $ngo->user_id }}">
  			<span class="glyphicon glyphicon-chevron-left" 
  				aria-hidden="true"></span> &nbsp; Go back
			</a>
		</div>
		<hr>

		<div class="panel-body">
			<!-- Display validation errors. -->
			@include('common.errors')
			
			<form action="/authentication/secure/dashboard/modules/ngos/{{ $ngo->user_id }}/contact-us/message" method="POST" 
				class="form-horizontal">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="sender" class="col-sm-1 label-control">Name</label>
					<div class="col-sm-5">
						<input type="text" name="sender" id="sender-id" 
							style="font-size: 18px" class="form-control col-sm-2">
					</div>
				</div>

				<div class="form-group">
					<label for="subject" class="col-sm-1 label-control">Subject</label>
					<div class="col-sm-5">
						<input type="text" name="subject" id="subject-id" 
							style="font-size: 18px" class="form-control col-sm-2">
					</div>
				</div>

				<div class="form-group">
					<label for="body" class="col-sm-1 label-control">Body</label>
					<div class="col-sm-10">
					<!-- style="font-family: monospace"  -->
						<textarea rows="14" style="font-size: 18px"
							placeholder="Write your message here..." name="body"
							id="body-id" class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-2">
						<button type="submit" name="send" 
							class="btn btn-default form-control">
							<span class="glyphicon glyphicon-send" 
  							aria-hidden="true"></span> &nbsp; Send
						</button>
							
					</div>
				</div>

			</form>
		</div>
	</div>

	@if ($ngo->ngo_email || $ngo->ngo_phone)
		<div class="panel panel-default col-sm-offset-2 col-sm-8">
			
			<h3 class="page-header">Alternatively...</h3>
			<ul class="col-sm-offset-2 col-sm-8">

				@if ($ngo->ngo_email)
				
					<div class="col-sm-offset-3 col-sm-3" style="text-align: right">
						Write us at:	
					</div>
					<div style="text-align: left">
						<a href="#">
							<small><span class="glyphicon glyphicon-envelope" 
								aria-hidden="true"></span> &nbsp; {{ $ngo->ngo_email }}
		  				</small>
						</a>
					</div>
				@endif

				@if ($ngo->ngo_phone)
					<hr>
					<div class="col-sm-offset-3 col-sm-3" style="text-align: right">
						Call us at:	
					</div>
					<div style="text-align: left">
						<a href="#">
							<small><span class="glyphicon glyphicon-earphone" 
								aria-hidden="true"></span> &nbsp; {{ $ngo->ngo_phone }}
		  				</small>
						</a>
					</div>
				@endif

			</ul>
			<br>
		</div>
	@endif
@endsection