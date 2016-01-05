@extends('layouts.app')

@section('content')

	<!-- Bootstrap boilerplate -->
	
	<!-- List of NGOs -->
	<h2 class="col-sm-offset-1 page-header">Officially listed by "{{ $causes->first()->ngo->ngo_name }}"</h2>
	@if (count($causes) > 0)
		<div class="panel panel-default col-sm-offset-2 col-sm-8">

			<div class="panel-heading col-sm-6">
				Registered Causes and Drives
			</div>

			<div class="panel-heading col-sm-2">
				<a href="/authentication/secure/dashboard/modules/ngos/{{ $causes->first()->ngo->user_id }}/contact-us">
	  			<span class="glyphicon glyphicon-envelope" 
	  				aria-hidden="true"></span> &nbsp; Contact Us
				</a>
			</div>

			<div class="panel-heading col-sm-2">
				<a href="/authentication/secure/dashboard/modules/ngos">
	  			<span class="glyphicon glyphicon-th-list" 
	  				aria-hidden="true"></span> &nbsp; View All NGOs
				</a>
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
						<th>Cause Title</th>
						<th>&nbsp;</th>
					</thead>

					<!-- Table body -->
					<tbody>
						
						@foreach ($causes as $cause)
							
							<tr>
								<!-- NGO name -->
								<td class="table-text col-sm-10">
									<div> {{ $cause->cause_title }} </div>
								</td>

								<td>
									
									<a href="/authentication/secure/dashboard/modules/ngos/cause/{{ $cause->cause_id }}" 
									class="btn btn-success" role="button">
										<i class="fa fa-eye"></i> View Details
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