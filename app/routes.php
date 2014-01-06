<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('migrator.index');
});


Route::post('generate', function()
{	
	Session::put('uniqid', md5(uniqid()));	
	$path = base_path().'/sql_files/'.Session::get('uniqid').'/';
	if(!file_exists($path)) mkdir($path,0755,true);
	$file = 'input.sql';
	$sql = '';
	if(Input::has('sql'))
	{
		$sql .= Input::get('sql');		
	}
	if(Input::hasFile('sql_file'))
	{
		$sql .= file_get_contents(Input::file('sql_file')->getRealPath());
	}
	
	file_put_contents($path.$file, $sql);
	$migrator = new Ralphowino\SQL2Migrations\SQL2Migrations();	
	$migrator->make($path.$file);
	return View::make('migrator.finalize');

});

Route::get('download/migrations/{id}',function($id)
{
	$path = base_path().'/sql_files/'.$id;
	$migrations = new ZipArchive();
	if($migrations->open($path.'/migrations.zip', ZIPARCHIVE::OVERWRITE) == TRUE)
	{
		foreach (scandir($path.'/migrations') as $file)
		{
			if($file != '.' && $file != '..')
			$migrations->addFile($path.'/migrations/'.$file,$file);	
		}		
		$migrations->close();
		return Response::download($path.'/migrations.zip');
	}	
});