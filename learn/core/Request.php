<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 9/25/18
 * Time: 7:24 AM
 */
class Request{
	public static function uri(){
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}