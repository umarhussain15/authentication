@extends('layouts.app')

@section('content')

	<!-- Bootstrap boilerplate -->
	
	<!-- List of NGOs -->
	<h2 class="col-sm-offset-1 page-header">Messages for: "{{ $ngo->ngo_name }}"</h2>	

	<ul class="nav nav-tabs col-sm-offset-1 col-sm-10">
	  <li role="presentation">
	  	<a href="/authentication/secure/dashboard/modules/ngos/author/{{ $ngo->user_id}}">Home</a>
  	</li>
	  <li role="presentation" class="active">
	  	<a href="/authentication/secure/dashboard/modules/ngos/author/{{ $ngo->user_id }}/message">
	  		Messages <span class="badge">{{ count($ngo->messages) }}</span>
  		</a>
  	</li>
	</ul>

	
	@foreach ($ngo->messages as $message)
		<div class="panel panel-default col-sm-offset-1 col-sm-10">
			<div class="panel-heading col-sm-5">
				Sent by: {{ $message->sender }}
			</div>
			<div class="panel-heading col-sm-offset-3" style="text-align:right">
				@ {{ $message->sent_date }}
			</div>
		
		
			<div class="panel-body">
				
				<div class="form-group">
					<div class="col-sm-2" style="text-align:right">
						<label for="subject" class="label-control col-sm-offset-1" 
							style="text-align:right; font-size: 20px">
							Subject:
						</label>
					</div>
					<span style="font-size: 20px">{{ $message->message_subject }}</span>
				</div>
					
				<div class="form-group">
					<div class="col-sm-2" style="text-align:right">
						<label for="body" class="label-control col-sm-offset-1" 
							style="text-align:right; font-size: 20px">
							Body:
						</label>
					</div>
					<span style="font-size: 20px">{{ $message->message_body }}</span>
				</div>
			</div>
		</div>
	@endforeach

@endsection