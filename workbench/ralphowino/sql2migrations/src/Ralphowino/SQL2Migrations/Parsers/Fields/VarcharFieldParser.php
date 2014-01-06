<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class VarcharFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'varchar') return false;
		$this->sql = $sql;
		$name = substr($sql, 0, strpos($sql, ' '));
		$name = str_replace('`', '', $name);
	
		$size = substr($sql, strpos($sql, $type.'(')+strlen($type)+1, strpos($sql, ')')-strpos($sql, $type.'(')-strlen($type)-1);
		if(!is_numeric($size) || $size == '255')
			$size = null;
				
		$field = "->string('$name'".(!is_null($size)?",$size)":")");
		return $field;
	}
}