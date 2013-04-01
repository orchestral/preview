<?php

Event::listen('orchestra.started: backend', function ()
{
	$p = Orchestra\Widget::make('pane.orchestra');

	$p->add('demo')->title('Demo for `pane.orchestra`')
		->attributes(array('class' => 'span12'))
		->content(View::make('preview::pane.orchestra'));

	$p->add('small')->title('Small widget')
		->attributes(array('class' => 'span3'))
		->content('Use span3 class');

	$p->add('large')->title('Large widget')
		->attributes(array('class' => 'span8'))
		->content('Use span8 class');

});
