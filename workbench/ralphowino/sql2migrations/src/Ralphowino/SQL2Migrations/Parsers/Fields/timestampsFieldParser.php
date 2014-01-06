<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class TimestampsFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'datetime' &&  (strpos($sql, 'created_at') == 0 ||  strpos($sql, 'updated_at') == 0)) return false;
		$field = "->timestamps()";
		return $field;
	}
}