<?php

$leftMenu = Menu::instance('admin-menu');

$rightMenu = Menu::instance('admin-menu-right');

/**
 * @see https://github.com/pingpong-labs/menus
 * 
 * @example adding additional menu.
 *
 * $leftMenu->url('your-url', 'The Title');
 * 
 * $leftMenu->route('your-route', 'The Title');
 */
 
 Menu::create('home-menu', function ($menu)
{    
	$categories = Category::select('id','name','slug','level')->get()->toArray();
	$tree = Comman::createTree($categories);
	//$tree[1]['childs'] = array();
	
	foreach($tree as $key => $item){
		$obj = $menu->route('category', $item['name'],$item['slug']);
		//$obj->child($item['childs']);
		
		if(isset($item['childs'])){
			
			foreach($item['childs'] as $child){
			$obj->route('category', $child['name'],$child['slug']);
			}		
			
		}
	 	
	}
	$obj = $menu->route('category', 'All','all');
   /* $menu->dropdown('Articles', function ($sub)
    {
        $sub->route('admin.articles.index', 'All Articles');
        $sub->route('admin.articles.create', 'Add New');
        $sub->divider();
        $sub->route('admin.categories.index', 'Categories');
    });*/
	//$menu->route('admin.categories.index', 'Categories');
	
   /* $menu->dropdown('Pages', function ($sub)
    {
        $sub->route('admin.pages.index', 'All Pages');
        $sub->route('admin.pages.create', 'Add New');
    });*/
   // $menu->dropdown('Users', function ($sub)
//    {
//        $sub->route('admin.users.index', 'All Users');
//        $sub->route('admin.users.create', 'Add New');
//       /* $sub->divider();
//        $sub->route('admin.roles.index', 'Roles');
//        $sub->route('admin.permissions.index', 'Permissions');*/
//    });
});