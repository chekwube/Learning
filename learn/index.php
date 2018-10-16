<?php
	// require 'functions.php';

	//require 'task.php';

	//$router = new Router();

	//require 'routes.php';

	//require $router->direct('about/culture');

	require 'core/bootstrap.php';

	require Router::load('routes.php')->direct(Request::uri());