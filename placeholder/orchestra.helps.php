<?php

$p = Orchestra\Widget::make('placeholder.orchestra.helps');
$p->add('demo', function ()
{
	return View::make('preview::placeholder.orchestra-helps');
});
