<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class TextFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'text') return false;
		$this->sql = $sql;
		$name = substr($sql, 0, strpos($sql, ' '));
		$name = str_replace('`', '', $name);
					
		$field = "->text('$name')";
		return $field;
	}
}