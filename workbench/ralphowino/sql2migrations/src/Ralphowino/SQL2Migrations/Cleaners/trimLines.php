<?php namespace Ralphowino\SQL2Migrations\Cleaners;


class trimLines implements cleanersContract
{
	public function clean(&$sql)
	{
		foreach ($sql as $key => $value) 
		{
			$sql[$key] = trim($value);			
		}
	}
}