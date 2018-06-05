<h1 class="text-center">Login</h1>
<form class="col-md-8 m-auto" method="POST" action="<?php echo site_url('process/login') ?>">
	<div class="form-group">
		<label for="Username">Username</label>
		<input type="text" class="form-control" placeholder="username" name="username" id="Username">
	</div>
	<div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" placeholder="password" name="password" id="Password">
	</div>
	<div class="text-right">
		<button type="submit" class="btn btn-primary btn-lg">Login</button>
	</div>
</form>