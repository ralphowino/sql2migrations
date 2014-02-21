<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class TinyIntFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'tinyint') return false;		
		
		$name = substr($sql, 0, strpos($sql, ' '));
		$name = str_replace('`', '', $name);
		
		$size = substr($sql, strpos($sql, $type.'(')+strlen($type)+1, strpos($sql, ')')-strpos($sql, $type.'(')-strlen($type)-1);
		
		if(!is_numeric($size) || $size == '1')
			$size = null;
		if(strpos($sql, 'NOT NULL') !==0)
		{
			$nullable = false;
		}		
		
		$field = "->boolean('$name'".(!is_null($size)?",$size)":")");

		if($nullable)
		{
			$field.='->nullable()';
		}
		
			
		return $field;
	}
}