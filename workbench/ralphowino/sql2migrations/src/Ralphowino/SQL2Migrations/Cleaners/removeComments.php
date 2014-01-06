<?php namespace Ralphowino\SQL2Migrations\Cleaners;


class removeComments implements cleanersContract
{
	public function clean(&$sql)
	{
		foreach ($sql as $key => $value) 
		{
			if(starts_with($value,'--') || starts_with($value,'/*') || ($value == PHP_EOL))
			{		
				unset($sql[$key]);				
			}
		}		
	}
}