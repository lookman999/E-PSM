<x-header />

<div class="container-fluid">
	<div class="row" style="margin-top: 50px; margin-bottom: 50px;">
		<div class="col-lg-3"></div>
		<div class="col-lg-6" style="text-align: center;">

			<h3>NEW ACCOUNT REGISTRATION</h3>
			<hr />
			<marquee width="100%" direction="left" height="30px">
				Your personal details will not be shared to the third party group
			</marquee>
			<!-- <small id="emailHelp" class="form-text text-muted">Maklumat peribadi anda tidak akan dikongsi bersama pihak ketiga</small> -->
			<br>
			<br>
			<form action="user_register" method="post">

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
						<label for="userID">User ID</label>
					</div>
					<div class="col-lg-8 col-md-8">
						<input type="text" class="form-control input_style" name="userID" placeholder="2010641052" value="{{old('userID')}}">

						@error('userID')
						<span style="float: right;color: red">{{$message}}</span>
						@enderror
					</div>
				</div>

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
					</div>
					<div class="col-lg-8 col-md-8">
						<label for="choose">Choose User Type:</label>
						<select name="user_type" id="user_type">
							<option value="Coordinator">Coordinator</option>
							<option value="Supervisor">Supervisor</option>
							<option value="Student">Student</option>
							<option value="Technician">Technician</option>
						</select>
					</div>
				</div>

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
						<label for="password">Password</label>
					</div>
					<div class="col-lg-8 col-md-8">
						<input type="password" class="form-control input_style" name="password" placeholder="Abc123">
						@error('password')
						<span style="float: right;color: red">{{$message}}</span>
						@enderror
					</div>
				</div>

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left;">
						<label for="password_confirmation">Retype password for confirmation</label>
					</div>
					<div class="col-lg-8 col-md-8">
						<input type="password" class="form-control input_style" name="password_confirmation" placeholder="Abc123">
						@error('password_confirmation')
						<span style="float: right;color: red">{{$message}}</span>
						@enderror
					</div>
				</div>

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
						<label for="name">Name</label>
					</div>
					<div class="col-lg-8 col-md-8">
						<input type="text" class="form-control input_style" name="name" placeholder="Nama" value="{{old('name')}}">
						@error('name')
						<span style="float: right;color: red">{{$message}}</span>
						@enderror
					</div>
				</div>

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
						<label for="email">Email</label>
					</div>
					<div class="col-lg-8 col-md-8">
						<input type="email" class="form-control input_style" name="email" placeholder="emel@gmail.com" value="{{old('email')}}">

						@error('email')
						<span style="float: right;color: red">{{$message}}</span>
						@enderror
					</div>
				</div>

				<div class="row form-group" style="padding-right: 20px;">
					<div class="col-lg-4 col-md-4 tablet" style="text-align: left; margin-top: 10px;">
						<label for="phone">Phone Number</label>
					</div>
					<div class="col-lg-8 col-md-8">
						<input type="text" class="form-control input_style" name="phone" placeholder="0192217361" value="{{old('phone')}}">
						@error('phone')
						<span style="float: right;color: red">{{$message}}</span>
						@enderror
					</div>
				</div>

				{{@csrf_field()}}

				<br>
				<div style="text-align: right; padding-right: 20px;">
					<button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>
				</div>

				<br>
				<br>

			</form>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
