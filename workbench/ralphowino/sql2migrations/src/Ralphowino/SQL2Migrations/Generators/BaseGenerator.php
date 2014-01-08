<?php namespace Ralphowino\SQL2Migrations\Generators;


class BaseGenerator
{
	public function generateFields()
	{
		$this->sql = substr($this->sql, strpos($this->sql, '(')+1);
		$lines = explode(',', $this->sql);
		$fields = array();
		$fieldParsers =  getImplementors('Parsers/Fields','Ralphowino\SQL2Migrations\Parsers\parsersContract');
		foreach ($lines as $key => $value) 
		{
			// echo $value;
			$value = trim($value);
			$type = substr($value, strpos($value, ' ')+1);		
			$type = substr($type, 0,strpos($type,' '));
			if(strpos($type,'(')>0) $type = substr($type, 0,strpos($type,'('));
			foreach($fieldParsers as $parser)
			{
				if($field = $parser->parse($type, $value))
				{
					if(!in_array($field, $fields))
						$fields[] = $field;
					break;
				}
			}			
		}
		return($fields);
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