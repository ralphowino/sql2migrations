<?php namespace Ralphowino\SQL2Migrations\Parsers;

class BaseParser
{
	protected $sql;

	protected $fields;

	function standard()
	{
		return false;
	}

	
}