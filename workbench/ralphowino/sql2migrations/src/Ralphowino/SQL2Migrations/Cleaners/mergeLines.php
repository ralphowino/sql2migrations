<?php namespace Ralphowino\SQL2Migrations\Cleaners;


class MergeLines implements cleanersContract
{
	public function clean(&$sql)
	{
		$sql = implode('', $sql);	
		$sql = explode(';', $sql);
	}
}