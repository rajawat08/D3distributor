<?php

class Comman
{
	
	public static function createTree($items){
		$childs = array();
		foreach($items as &$item) $childs[$item['level']][] = &$item;
		unset($item);
	
		foreach($items as &$item) if (isset($childs[$item['id']]))
				$item['childs'] = $childs[$item['id']];
	
		return $childs[0];
    }
	
	
}