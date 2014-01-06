<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class DateFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'date') return false;
		$this->sql = $sql;
		$name = substr($sql, 0, strpos($sql, ' '));
		$name = str_replace('`', '', $name);
		$increments = false;
				
		$field = "->date('$name')";
		return $field;
	}
}