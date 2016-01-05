
@extends('layouts.app')

@section('content')

	<!-- Bootstrap boilerplate -->
	
	<!-- List of NGOs -->
	@if (count($ngos) > 0)
		<div class="panel panel-default col-sm-offset-2 col-sm-8">
			<div class="panel-heading col-sm-10">
				Registered NGOs
			</div>

			<div class="panel-heading col-sm-2">
				<a href="/authentication/secure/dashboard/modules/ngos/causes/all">
	  			<span class="glyphicon glyphicon-th-list" 
	  				aria-hidden="true"></span> &nbsp; View All Causes
				</a>
			</div>

			<div class="panel-body">
				<table class="table table-striped script-table">
					<!-- Table headings -->
					<thead>
						<th>Official NGO Title</th>
						<th>&nbsp;</th>
					</thead>

					<!-- Table body -->
					<tbody>
						
						@foreach ($ngos as $ngo)
							
							<tr>
								<!-- NGO name -->
								<td class="table-text col-sm-10">
									<div> {{ $ngo->ngo_name }} </div>
								</td>

								<td>
									
									<a href="/authentication/secure/dashboard/modules/ngos/{{ $ngo->user_id }}" 
									class="btn btn-success" role="button">
										<i class="fa fa-eye"></i> View NGO
									</a>
										
								</td>
							</tr>
							
						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	@endif
@endsection