@extends('layouts.app')

@section('content')

	<h2 class="page-header col-sm-offset-1">Dashboard: Details of "{{ $cause->cause_title }}" 
		<small class="col-sm-offset-6">
			<a href="/authentication/secure/dashboard/modules/ngos/author/{{ $cause->ngo->user_id }}">
  			<span class="glyphicon glyphicon-chevron-left" 
  				aria-hidden="true"></span> &nbsp; Go back
			</a>
		</small>
	</h2>

	<div class="col-sm-offset-2 col-sm-8">
	<!-- Display validation errors. -->
	@include('common.errors')
	</div>
	
	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		<div class="panel-heading">
			General Details
		</div>

		<div class="panel-body">
			
			<form action="/authentication/secure/dashboard/modules/ngos/update/cause/{{ $cause->cause_id }}" 
				method="POST" class="">

				{{ csrf_field() }}
				
				<div class="form-group">
					<label for="title" class="label-control col-sm-2" 
						style="text-align:right">
						Title
					</label>
					<div class="col-sm-offset-2">
						<input type="text" name="title" class="form-control" 
							style="font-size: 18px" value="{{ $cause->cause_title }}">
					</div>
				</div>

				<div class="form-group">
					<label for="description" class="label-control col-sm-2" 
						style="text-align:right">
						Description
					</label>
					<div class="col-sm-offset-2">
						<textarea rows="5" type="text" name="description" 
							style="font-size: 18px" class="form-control"
							placeholder="">{{ $cause->cause_description }}</textarea>

					</div>
				</div>

				<div class="form-group">
					<label for="venue" class="label-control col-sm-2" 
						style="text-align:right">
						Venue
					</label>
					<div class="col-sm-offset-2">
						<input type="text" name="venue" class="form-control" 
							style="font-size: 18px" value="{{ $cause->cause_venue }}">
					</div>
				</div>
<!-- 
				<div class="form-group">
					<label for="closing-date" class="label-control col-sm-2" 
						style="text-align:right">
						Closing Date
					</label>
					<div class="col-sm-offset-2">
						<input type="datetime" name="closing-date" class="form-control" 
							style="font-size: 18px" value="{{ $cause->finised }}">
					</div>
				</div> -->

				<input name="general" type="submit" class="btn btn-success" 
					value="Update General Info" role="button" style="font-size: 16px">

			</form>
		</div>
	</div>

	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		<div class="panel-heading">
			Items requested in the cause
		</div>

		<div class="panel-body">

		<form action="/authentication/secure/dashboard/modules/ngos/update/cause/{{ $cause->cause_id }}" 
			method="POST" class="">

			{{ csrf_field() }}

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
									<!-- <div> {{ $item->item_name }} </div> -->
									<input type="text" name="name-{{ $item->item_id }}"
										value="{{ $item->item_name }}">
								</td>

								<td class="table-text" style="text-align: center">
									<input type="text" name="required-{{ $item->item_id }}" 
										value="{{ $item->item_required }}">
								</td>

								<td class="table-text" style="text-align: center">
									<input type="text" name="promised-{{ $item->item_id }}" 
										value="{{ $item->item_promised }}">
								</td>

								<td class="table-text" style="text-align: center">
									<input type="text" name="received-{{ $item->item_id }}" 
										value="{{ $item->item_received }}">
								</td>

							</tr>
							
						@endforeach

						@if (count($cause->items->all()) <= 5)
							@foreach ([1, 2, 3] as $item)
								
								<tr>							
									<!-- NGO name -->
									<td class="table-text" style="text-align: center">
										<input type="text" name="new-name-{{ $item }}"
											placeholder="Insert item name">
									</td>

									<td class="table-text" style="text-align: center">
										<input type="text" name="new-required-{{ $item }}" 
											placeholder="Insert units required">
									</td>

									<td class="table-text" style="text-align: center">
										<input type="text" name="new-promised-{{ $item }}" 
											placeholder="Insert units promised">
									</td>

									<td class="table-text" style="text-align: center">
										<input type="text" name="new-received-{{ $item }}" 
											placeholder="Insert units received">
									</td>

								</tr>
								
							@endforeach
						@endif

					</tbody>
				</table>

				<input name="details" type="submit" class="btn btn-success" 
					value="Update Details" role="button" style="font-size: 16px">
					
			</form>
		</div>
	</div>

	<div class="panel panel-default col-sm-offset-2 col-sm-8">
		<div class="panel-heading">
			Progress: {{ $cause->cause_title }}
		</div>

		<div class="panel-body col-sm-offset-1 col-sm-10">
			
			@if ($cause->is_completed)
				<h3 class="page-header">Already completed. Can not change it. </h3> 
			@else
				<h3 class="page-header">Change Overall Status </h3> 

				<form action="/authentication/secure/dashboard/modules/ngos/update/cause/{{ $cause->cause_id }}" 
					class="form-horizontal" method="POST">
					<div class="checkbox">
				    <label>
				      <input type="checkbox" name="completed" value="1"> Completed
				    </label>
				  </div>
				  <br>
					<input name="status" type="submit" class="btn btn-success" 
						value="Update Status" role="button" style="font-size: 16px">
			  </form>
			@endif


			

		</div>
	</div>

@endsection