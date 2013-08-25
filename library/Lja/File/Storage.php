<?php

class Lja_File_Storage
{
	public static function &factory($protocol='file')
	{
		$class = 'Lja_File_Storage_'.ucfirst(strtolower($protocol));
		$object = new $class();
		
		return $object;		
	}
}