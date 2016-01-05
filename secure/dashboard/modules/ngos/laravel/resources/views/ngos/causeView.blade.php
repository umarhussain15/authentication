@extends('layouts.app')

@section('content')

	<!-- Bootstrap boilerplate -->

	<h2 class="page-header col-sm-offset-1">Details of "{{ $cause->cause_title }}" 
		<small class="col-sm-offset-7">
			@if (Auth::guest())
				<a href="/authentication/secure/dashboard/modules/ngos/{{ $cause->ngo->user_id }}">
	  			<span class="glyphicon glyphicon-chevron-left" 
	  				aria-hidden="true"></span> &nbsp; Go back
				</a>
			@else
				<a href="/authentication/secure/dashboard/modules/ngos/author/{{ $cause->ngo->user_id }}">
	  			<span class="glyphicon glyphicon-chevron-left" 
	  				aria-hidden="true"></span> &nbsp; Go back
				</a>
			@endif
		</small>
	</h2>
	
	
	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		<div class="panel-heading">
			General Details
		</div>

		<div class="panel-body">

			<div class="form-group">
				<div class="col-sm-2" style="text-align:right">
					<label for="title" class="label-control col-sm-offset-1" 
						style="text-align:right; font-size: 20px">
						Title:
					</label>
				</div>
				
				<span style="font-size: 20px">{{ $cause->cause_title }}</span>
			</div>

			<div class="form-group">
				<div class="col-sm-2" style="text-align:right">
					<label for="description" class="label-control col-sm-offset-1" 
						style="text-align:right; font-size: 20px">
						Description:
					</label>
				</div>
				<span style="font-size: 20px">{{ $cause->cause_description }}</span>
			</div>

			@if ($cause->cause_venue)
				
				<div class="form-group">
					<div class="col-sm-2" style="text-align:right">
						<label for="venue" class="label-control col-sm-offset-1" 
							style="text-align:right; font-size: 20px">
							Venue:
						</label>
					</div>
					<span style="font-size: 20px">{{ $cause->cause_venue }}</span>
				</div>

			@endif

		</div>
	</div>
	
	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		<div class="panel-heading">
			Items requested in the cause
		</div>

		<div class="panel-body col-sm-offset-1 col-sm-10">
			<table class="table table-striped script-table">
				<!-- Table headings -->
				<thead>
					<th style="text-align: center">Items</th>
					<th style="text-align: center">Required</th>
					<th style="text-align: center">Promised</th>
					<th style="text-align: center">Received</th>
				</thead>

				<!-- Table body -->
				<tbody>
					
					@foreach ($cause->items->all() as $item)
						
						<tr>
							<!-- NGO name -->
							<td class="table-text" style="text-align: center">
								<div> {{ $item->item_name }} </div>
							</td>

							<td class="table-text" style="text-align: center">
								<div> {{ $item->item_required }} </div>
							</td>

							<td class="table-text" style="text-align: center">
								<div> {{ $item->item_promised }} </div>
							</td>

							<td class="table-text" style="text-align: center">
								<div> {{ $item->item_received }} </div>
							</td>

						</tr>
						
					@endforeach

				</tbody>
			</table>
		</div>
	</div>

	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		<div class="panel-heading">
			Progress: {{ $cause->cause_title }}
		</div>

		<div class="panel-body col-sm-offset-1 col-sm-10">
			
			<span class="label label-success">Completed</span>
			<span class="label label-warning">Promised</span>
			<span class="label label-danger">Remaining</span>
			<hr>



			
			
			@foreach ($cause->items->all() as $item)

			<label class="col-sm-2">{{ $item->item_name}}</label>
				<div class="progress">

				  <div class="progress-bar progress-bar-success" 
				  	style="font-size: 14px; width: {{ ($item->item_received / 
			  		$item->item_required) * 100 }}%; font-family: monospace;">
				    <span class="sr-only">Received</span>
				    {{ round(($item->item_received / 
			  			$item->item_required) * 100) }}%
				  </div>
				  <div class="progress-bar progress-bar-warning progress-bar-striped" 
				  	style="font-size: 14px; width: {{ ($item->item_promised / 
				  	$item->item_required) * 100 }}%; font-family: monospace;">
				    <span class="sr-only">Promised</span>
				    {{ round(($item->item_promised / 
				  		$item->item_required) * 100) }}%
				  </div>
				  <div class="progress-bar progress-bar-danger" 
				  	style="font-size: 14px; width: {{ 100 - (($item->item_received / 
				  	$item->item_required) * 100) - (($item->item_promised / 
				  	$item->item_required) * 100)}}%; font-family: monospace;">
				    <span class="sr-only">Remaining</span>
				    {{ round(100 - (($item->item_received / 
				    	$item->item_required) * 100) - (($item->item_promised / 
				    	$item->item_required) * 100)) }}%
				  </div>
				  
				</div>

			@endforeach

			<hr>
			<h3 class="page-header">Overall status: 
				<small style="font-size: 22px">

					@if ($cause->is_completed)
						Completed!
					@else
						Ongoing!
					@endif

				</small>
			</h3>
		</div>
	</div>
@endsection