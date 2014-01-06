<?php namespace Ralphowino\SQL2Migrations\Cleaners;


class removePrefix implements cleanersContract
{
	public function clean(&$sql)
	{
		$prefix = \Input::get('prefix');
		if(!$prefix) return;
		foreach ($sql as $key => $value) 
		{			
			$sql[$key] = str_replace($prefix, '', $value);
		}
	}
}