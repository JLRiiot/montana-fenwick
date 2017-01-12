<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class CubeSummation extends Model {

    public function processInput($input){
		$input_file = 'testcase.in';
		$output_file = 'output.txt';

		File::delete($output_file);
		File::put($input_file, $input);
		echo exec('./a.out < testcase.in');

		try
		{
			$content = File::get($output_file);
            return $content;
		}
		catch (Illuminate\Filesystem\FileNotFoundException $exception)
		{
            return 'No results...';
		}
    }
}
