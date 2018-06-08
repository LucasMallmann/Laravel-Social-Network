@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
					<form action="" method="POST">
							<div class="form-group">
									<label for="email">Email</label>
									<input class="form-control" type="text" name="email" id="email">
							</div>
							<div class="form-group">
									<label for="first_name">First Name</label>
									<input class="form-control" type="text" name="first_name" id="first_name">
							</div>
							<div class="form-group">
									<label for="password">Email</label>
									<input class="form-control" type="password" name="password" id="password">
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
					</form>
			</div>
		</div>		

		<div class="row">
				<div class="col-md-6">
						<form action="" method="POST">
								<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control" type="text" name="email" id="email">
								</div>
								<div class="form-group">
										<label for="first_name">First Name</label>
										<input class="form-control" type="text" name="first_name" id="first_name">
								</div>
								<div class="form-group">
										<label for="password">Email</label>
										<input class="form-control" type="password" name="password" id="password">
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
						</form>
				</div>
			</div>	
			
	</div>
@endsection