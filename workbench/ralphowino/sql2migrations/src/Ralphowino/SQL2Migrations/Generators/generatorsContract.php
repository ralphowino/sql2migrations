<?php namespace Ralphowino\SQL2Migrations\Generators;


interface generatorsContract
{
	public function parse($sql);
}