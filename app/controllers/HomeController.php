<?php

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function process(){
		$test_case = Input::get('test_case');
		$input_file = 'testcase.in';
		$output_file = 'output.txt';

		File::delete($output_file);
		File::put($input_file, $test_case);
		echo exec('./a.out < testcase.in');

		try
		{
			$content = File::get($output_file);
			return View::make('hello')->with('result', $content);
		}
		catch (Illuminate\Filesystem\FileNotFoundException $exception)
		{
			return View::make('hello')->with('result', 'No results...');
		}
	}

}
