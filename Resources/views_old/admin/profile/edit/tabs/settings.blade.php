<div class="{{ $active?'active ':'' }}tab-pane" id="settings">
	{!! Form::bsOpen($row,'update') !!}
	{{--  <form class="form-horizontal"> 
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputName" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputName" class="col-sm-2 control-label">Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="inputExperience" class="col-sm-2 control-label">Experience</label>
			<div class="col-sm-10">
				<textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="inputSkills" class="col-sm-2 control-label">Skills</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label>
					<input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Submit</button>
			</div>
		</div>
		--}}
		{{ Form::bsText('last_name') }}
		{{ Form::bsText('first_name') }}
		{{ Form::bsText('email') }}
		{{ Form::bsPassword('passwd') }}
		{{ Form::bsPassword('passwd_confirmation') }}

	{!! Form::bsSubmit() !!}
	{!! Form::close() !!}
</div>
<!-- /.tab-pane -->