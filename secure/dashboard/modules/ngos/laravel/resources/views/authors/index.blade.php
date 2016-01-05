@extends('layouts.app')

@section('content')

	<h2 class="page-header col-sm-offset-1">Dashboard: {{ $ngo->ngo_name }} </h2>
	<ul class="nav nav-tabs col-sm-offset-1 col-sm-10">
	  <li role="presentation" class="active"><a href="#">Home</a></li>
	  <li role="presentation">
	  	<a href="/authentication/secure/dashboard/modules/ngos/author/{{ $ngo->user_id }}/message">
	  		Messages <span class="badge">{{ count($ngo->messages) }}</span>
  		</a>
  	</li>
	</ul>
	
	<div class="panel panel-default col-sm-offset-1 col-sm-10">
		<div class="panel-heading">
			Editable Causes
		</div>

		<!-- <div class="panel-heading col-sm-2">
			<a href="/envy/{{ $ngo->user_id }}">
  			<span class="glyphicon glyphicon-bookmark" 
  				aria-hidden="true"></span> &nbsp; {{ $ngo->ngo_name }}
			</a>
		</div> -->

		<div class="panel-body">
			<table class="table table-striped script-table">
				<!-- Table headings -->
				<thead>
					<th>Cause Title</th>
					<th>&nbsp;</th>
				</thead>

				<!-- Table body -->
				<tbody>
					
					@foreach ($ngo->causes->all() as $cause)
						
						<tr>
							<!-- NGO name -->
							<td class="table-text col-sm-10">
								<div> {{ $cause->cause_title }} </div>
							</td>

							<td>
								
								<a href="/authentication/secure/dashboard/modules/ngos/cause/{{ $cause->cause_id }}" 
								class="btn btn-success" role="button">
									<i class="fa fa-eye"></i>&nbsp; View Details
								</a>
									
							</td>

							<td>
								
								<a href="/authentication/secure/dashboard/modules/ngos/author/cause/{{ $cause->cause_id }}" 
								class="btn btn-info" role="button">
									<i class="fa fa-pencil-square-o"></i>&nbsp; Edit Details
								</a>
									
							</td>
						</tr>
						
					@endforeach

				</tbody>
			</table>
		</div>
	</div>

	<div class="panel panel-default col-sm-offset-1 col-sm-10">

		<div class="panel-heading">
			Add a Cause
		</div>

		<form action="/authentication/secure/dashboard/modules/ngos/add/cause/{{ $ngo->user_id }}" 
			method="POST" class="">

			{{ csrf_field() }}
		
		<hr>
		<div class="panel panel-default col-sm-offset-1 col-sm-10">
			<div class="panel-heading">
				General Details
			</div>

			<div class="panel-body">
					
				<div class="form-group">
					<label for="title" class="label-control col-sm-2" 
						style="text-align:right">
						Title
					</label>
					<div class="col-sm-offset-2">
						<input type="text" name="title" class="form-control"
							placeholder="Write your title here..."
							style="font-size: 18px">
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
							placeholder="Write your description here..."></textarea>
					</div>
				</div>

				<div class="form-group">
					<label for="venue" class="label-control col-sm-2" 
						style="text-align:right">
						Venue
					</label>
					<div class="col-sm-offset-2">
						<input type="text" name="venue" class="form-control" 
							style="font-size: 18px" placeholder="Mention the venue here...">
					</div>
				</div>

			</div>

			<div class="panel-heading">
				Items to request in the cause
			</div>

			<div class="panel-body">
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

						
						@foreach ([1, 2, 3, 4, 5] as $item)
							
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

					</tbody>
				</table>

				<input name="cause" type="submit" class="btn btn-success" 
					value="Add Cause" role="button" style="font-size: 16px">
						
			</div>
		</div>
		</form>

		<div class="panel panel-default col-sm-offset-1 col-sm-10">
			<div class="panel-heading">
				Progress of the cause:
			</div>

			<div class="panel-body col-sm-offset-1 col-sm-10">
				<h3 class="page-header">Will be 'Ongoing' by default.</h3> 
			</div>
		</div>
	</div>
@endsection