<?php namespace Ralphowino\SQL2Migrations\Parsers;


interface parsersContract
{
	public function parse($type,$sql);
}