<?php namespace Ralphowino\SQL2Migrations;

class SQL2Migrations
{
	private $sql;

	public function make($file)
	{
		$this->sql = file($file, FILE_SKIP_EMPTY_LINES);		
		$this->clean();
		$this->generateFiles();
		
	}	

	protected function clean()
	{		
		$cleaners = array(
				'Ralphowino\SQL2Migrations\Cleaners\removeComments',
				'Ralphowino\SQL2Migrations\Cleaners\MergeLines',				
    			'Ralphowino\SQL2Migrations\Cleaners\trimLines',
    			'Ralphowino\SQL2Migrations\Cleaners\removePrefix',
    		);
		foreach ($cleaners as $cleaner) 
		{
			$cleaner = new $cleaner();
			$cleaner->clean($this->sql);
		}		
	}

	protected function generateFiles()
	{
		$generators = getImplementors('Generators','Ralphowino\SQL2Migrations\Generators\generatorsContract');		
		
		foreach ($this->sql as $key => $line) 
		{
			foreach ($generators as $generator)
			{
				if($generator->parse($line)) break;
			}
		}
	}

	
}