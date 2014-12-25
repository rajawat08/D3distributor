<?php namespace Pingpong\Menus\Presenters\Bootstrap;

class NavbarRightPresenter extends NavbarPresenter {

	/**
	 * {@inheritdoc }
	 */
	public function getOpenTagWrapper()
	{
		return  PHP_EOL . '<ul class="nav pull-right top-menu">' . PHP_EOL;
	}

	/**
	 * {@inheritdoc }
	 */
	public function getMenuWithDropDownWrapper($item)
	{
		return '<li class="dropdown">
			      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="username" >
					'.$item->getIcon().' '.$item->title.'
					</span>
			      	<b class="caret"></b>
			      </a>
			      <ul class="dropdown-menu extended logout">
			      	'.$this->getChildMenuItems($item).'
			      </ul>
		      	</li>'
		      	. PHP_EOL;
		;
	}
	
}
