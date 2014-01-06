<?php namespace Ralphowino\SQL2Migrations\Parsers\Fields;

use Ralphowino\SQL2Migrations\Parsers\parsersContract;
use Ralphowino\SQL2Migrations\Parsers\BaseParser;

class IntegerFieldParser extends BaseParser implements ParsersContract
{
	public function parse($type, $sql)
	{		
		if($type != 'int') return false;
		$this->sql = $sql;
		$name = substr($sql, 0, strpos($sql, ' '));
		$name = str_replace('`', '', $name);
		$increments = false;
		$size = substr($sql, strpos($sql, $type.'(')+strlen($type)+1, strpos($sql, ')')-strpos($sql, $type.'(')-strlen($type)-1);
		if(!is_numeric($size) || $size == '11')
			$size = null;
		if(strpos($sql, 'NOT NULL') !==0)
		{
			$nullable = false;
		}
		if(strpos($sql, 'AUTO_INCREMENT') > 0)
		{
			$increments = true;
		}
		if($increments)
			$field = "->increments('$name')";
		else
		{
			$field = "->integer('$name'".(!is_null($size)?",$size)":")");
			if($nullable)
			{
				$field.='->nullable()';
			}
		}
			
		return $field;
	}
}