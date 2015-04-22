<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ HTML::style('css/paper.css') }}
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class="container">
			<div class="login_area">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<div class="panel-body">

<form class="form-horizontal" method="post" action="{{ URL::route('postchangePassword') }}">
	<fieldset>
	    <legend>Change Password</legend>
		
		{{ Session::has('password_error') ? '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>'. Session::get('password_error') .'</div>' : '' }}

		{{ Session::has('username_error') ? '<div class="alert alert-dismissible alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>'. Session::get('username_error') .'</div>' : '' }}

		{{ Session::has('message') ? '<div class="alert alert-dismissible alert-success"><button type="button" class="close" data-dismiss="alert">×</button>'. Session::get('message') .'</div>' : '' }}

		<div class="form-group">
	      <label for="inputUsername" class="col-md-2 control-label">Username</label>
	      <div class="col-md-10">
	        <input name="username" type="text" class="form-control" id="inputUsername" placeholder="enter username">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputCurrentPassword" class="col-md-2 control-label">Current Password</label>
	      <div class="col-md-10">
	        <input name="old_password" type="password" class="form-control" id="inputCurrentPassword" placeholder="enter your current password">
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="inputNewPassword" class="col-md-2 control-label">New Password</label>
	      <div class="col-md-10">
	        <input name="new_password" type="password" class="form-control" id="inputNewPassword" placeholder="enter your new password">
	      </div>
	    </div>
	    
		<div class="form-group">
	      <div class="col-md-10 col-md-offset-2">
	        <button type="submit" class="btn btn-primary">Change password</button>
	        <a class="btn btn-primary" href="{{ URL::route('getHome') }}">Return Home</a>
	      </div>
	    </div>

	</fieldset>
</form>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		
        {{ HTML::script('js/vendor/jquery-1.10.2.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}

    </body>
</html>
