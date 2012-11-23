<?php

$p = Orchestra\Widget::make('placeholder.cello.sidebar');
$p->add('demo', function()
{
	return View::make('preview::placeholder.cello-sidebar');
});
