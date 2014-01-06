<?php namespace Ralphowino\SQL2Migrations\Generators;


class createTable extends BaseGenerator implements generatorsContract
{
	private $table;

	public function parse($sql)
	{
		if(starts_with($sql, 'CREATE TABLE'))
		{
			$this->sql = $sql;
			$this->getTableName();
			$fields = $this->generateFields($sql);
			$ouput = "Schema::create('$this->table',function(".'$table)'.PHP_EOL."\t\t{".PHP_EOL;
			foreach ($fields as $field)
			{
				$ouput .= "\t\t\t".'$table'.$field.';'.PHP_EOL;
			}
			$ouput .= "\t\t});".PHP_EOL;

			$down = "Schema::drop('$this->table');";
			$this->make(snake_case($this->table),$ouput,$down);
			return true;
		}
		return false;
	}


	function getTableName()
	{
		$this->table = substr($this->sql, 13);
		if(starts_with($this->table, 'IF NOT'))
			$this->table = substr($this->table, 13);
		$this->table = trim($this->table);
		if(starts_with($this->table, '`'))
			$this->table = substr($this->table, 1, strpos($this->table, '`',1)-1);
		else
			$this->table = substr($this->table, 0, strpos($this->table, ' '));
	}

	function make($name,$up,$down)
	{
		$content = file_get_contents(__DIR__.'/../Templates/migrations.php');
		$content = str_replace('{{classname}}', studly_case($name), $content);
		$content = str_replace('{{upmigrations}}', $up, $content);
		$content = str_replace('{{downmigrations}}', $down, $content);

		$path = base_path().'/sql_files/'.\Session::get('uniqid').'/migrations';
		if(!file_exists($path)) mkdir($path,0755, true);
		file_put_contents($path.'/'.date('Y_m_d_hms_').$name.'.php', $content);
	}
}