<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class TimestampsFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'datetime') return false;
		if(!str_contains($sql, 'created_at') &&  !str_contains($sql, 'updated_at')) return false;
		
		$field = "->timestamps()";
		return $field;
	}
}