<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class FloatFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if(!str_contains($type,'float')) return false;
		
		$this->sql = $sql;
		$name = substr($sql, 0, strpos($sql, ' '));
		$name = str_replace('`', '', $name);

		$size = substr($sql, strpos($sql, '(')+1);
		$size = substr($size, 0,strpos($size, ')'));
		
		$field = "->float('$name',$size)";
		return $field;
	}
}