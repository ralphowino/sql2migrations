<?php namespace Ralphowino\SQL2Migrations\Generators;


class createTable extends BaseGenerator implements generatorsContract
{
	private $table;

	private $checkExists = FALSE;

	public function parse($sql)
	{
		if(starts_with($sql, 'CREATE TABLE'))
		{
			$this->sql = $sql;
			$this->getTableName();
			$fields = $this->generateFields($sql);
			$tabs = "\t\t";
			$up = '';

			if($this->checkExists)
			{
				$up .="if (!Schema::hasTable('$this->table'))".PHP_EOL.$tabs."{".PHP_EOL.$tabs."\t";
				$tabs = "\t\t";
			}
				
			
			$up .= "Schema::create('$this->table',function(".'$table)'.PHP_EOL.$tabs."\t{".PHP_EOL;
			
			foreach ($fields as $field)
			{
				$up .= $tabs."\t\t".'$table'.$field.';'.PHP_EOL;
			}
			
			$up .= $tabs."\t});".PHP_EOL;

			if($this->checkExists)
				$up .=$tabs."}";

			$down = "Schema::drop('$this->table');";
			$this->make(snake_case($this->table),$up,$down);
			return true;
		}
		return false;
	}


	function getTableName()
	{
		$this->table = substr($this->sql, 13);
		if(starts_with($this->table, 'IF NOT'))
		{
			$this->checkExists = TRUE;
			$this->table = substr($this->table, 13);
		}
		$this->table = trim($this->table);
		if(starts_with($this->table, '`'))
			$this->table = substr($this->table, 1, strpos($this->table, '`',1)-1);
		else
			$this->table = substr($this->table, 0, strpos($this->table, ' '));
	}

}