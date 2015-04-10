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
								<form class="form-horizontal" method="post" action="{{ URL::route('postLogin') }}">
								  <fieldset>
									<legend>Login</legend>
									<div class="form-group{{ Session::has('username_error') ? ' has-error' : '' }}">
									  <label for="inputUsername" class="col-md-2 control-label">Username</label>
									  <div class="col-md-10">
										<input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username" {{ Session::has('username_error') ? 'value="'.Session::get('username').'"' : '' }}>
										@if(Session::has('username_error'))
											<span class="text-danger">{{ Session::get('username_error') }}</span>
										@endif
									  </div>
									</div>
									<div class="form-group{{ Session::has('password_error') ? ' has-error' : '' }}">
									  <label for="inputPassword" class="col-md-2 control-label">Password</label>
									  <div class="col-md-10">
										<input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
										@if(Session::has('password_error'))
											<span class="text-danger">{{ Session::get('password_error') }}</span>
										@endif
									  </div>
									</div>
									<div class="form-group">
									  <div class="col-md-10 col-md-offset-2">
										<button type="submit" class="btn btn-primary">Login</button>
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