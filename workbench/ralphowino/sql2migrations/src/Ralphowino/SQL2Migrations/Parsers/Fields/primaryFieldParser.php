<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class PrimaryFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{	
		// die($sql);
		if(!str_contains($sql,'PRIMARY KEY')) return false;		
		$name = substr($sql, strpos($sql, '(')+1, strpos($sql, ')') - strpos($sql, '(') - 1);			
		$name = preg_replace('/[(|)|`|\n]/', '', $name);		
		$field = "->primary('$name')";
		return $field;
	}
}