<?php namespace Ralphowino\SQL2Migrations\Cleaners;


interface cleanersContract
{
	public function clean(&$sql);
}