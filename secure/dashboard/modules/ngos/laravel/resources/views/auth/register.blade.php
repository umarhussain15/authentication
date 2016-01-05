@extends('layouts.app')

@section('content')

	<style>
	
	.form-control
	{
		font-size: 18px;
	}


	</style>

	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					NGO Registration
				</div>
				<div class="panel-body">
					<!-- Display validation errors. -->
					@include('common.errors')

					<form action="/authentication/secure/dashboard/modules/ngos/auth/register" method="POST" 
						class="form-horizontal">
						{{ csrf_field() }}

						<!-- Username -->
						<!-- <div class="form-group">
							<label for="name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-6">
								<input type="text" name="name" class="form-control" />
							</div>
						</div> -->

						<!-- Email ID -->
						<div class="form-group">
							<label for="email" class="col-sm-3 control-label">
								Email ID
							</label>
							<div class="col-sm-6">
								<input type="email" name="email" class="form-control" 
									placeholder="Email ID that you used for main system." />
							</div>
						</div>

						<!-- Password -->
						<!-- <div class="form-group">
							<label for="password" class="col-sm-3 control-label">
								Password
							</label>
							<div class="col-sm-6">
								<input type="password" name="password" class="form-control" />
							</div>
						</div> -->

						<!-- Confirm Password -->
						<!-- <div class="form-group">
							<label for="password_confirmation" 
								class="col-sm-3 control-label">
								Confirm Password
							</label>
							<div class="col-sm-6">
								<input type="password" name="password_confirmation" 
									class="form-control" />
							</div>
						</div> -->
						
						<hr>
						<br>

						<div class="form-group">
							<label for="ngo-name" class="col-sm-3 control-label">
								Official NGO Name
							</label>
							<div class="col-sm-6">
								<input type="text" name="ngo-name" class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label for="ngo-desc" class="col-sm-3 control-label">
								Short Description
							</label>
							<div class="col-sm-6">
								<textarea rows="5" placeholder="Briefly define your NGO."
									name="ngo-desc" class="form-control" 
									></textarea>
							</div>
						</div>

						<div class="form-group">
							<label for="ngo-email" class="col-sm-3 control-label">
								Official NGO Email
							</label>
							<div class="col-sm-6">
								<input type="email" name="ngo-email" class="form-control" />
							</div>
						</div>

						<div class="form-group">
							<label for="ngo-phone" class="col-sm-3 control-label">
								Official NGO Phone
							</label>
							<div class="col-sm-6">
								<input type="text" name="ngo-phone" class="form-control" 
									placeholder="Insert your ngo's number here. (optional)"/>
							</div>
						</div>

						<hr>
						<!-- Register button -->
						<div class="form-group" style="text-align:center">
							<div>
								<button type="submit" class="btn btn-default" style="font-size: 20px">
									<i class="fa fa-btn fa-sign-in"></i> &nbsp;Register NGO
								</button>	
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>

@endsection