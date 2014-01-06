<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class SoftDeletesFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'datetime' &&  strpos($sql, 'delete_at') == 0 ) return false;
		$field = "->softDeletes()";
		return $field;
	}
}