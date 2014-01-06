<?php


 function getImplementors($folder,$interface)
	{		
		foreach (scandir(__DIR__.'/'.$folder) as $file)
		{
			if ($file !='.' && $file != '..')
			{
				require_once($folder.'/'.$file);
			}
		}		
		$implementors = array_filter( get_declared_classes(), function ($className) use ($interface)
	    {
	        return in_array($interface, class_implements($className));
	    });

	    foreach ($implementors as $key => $implementor) 
		{
			$implementors[$key] = new $implementor();			
		}
		return $implementors;
	}