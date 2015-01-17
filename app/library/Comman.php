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
	
	public static function getImage($id){
		$image =  ProductImage::where('product_id','=',$id)->first();
		if(!is_null($image)){
			return $image->image_name;
		}
		else {
			return 'no_preview.png';	
		}
	}
	
	
}