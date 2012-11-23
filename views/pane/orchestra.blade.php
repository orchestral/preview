<p>
	This code is made available from <code>{{ Bundle::path('preview') }}pane/orchestra.php</code>:
</p>
<pre>
Event::listen('orchestra.started: backend', function ()
{
	$p = Orchestra\Widget::make('pane.orchestra');

	$p->add('demo')->title('Demo for `pane.orchestra`')
		->attr(array('class' => 'span12'))
		->content(View::make('preview::pane.orchestra'));

	$p->add('small')->title('Small widget')
		->attr(array('class' => 'span3'))
		->content('Use span3 class');

	$p->add('large')->title('Large widget')
		->attr(array('class' => 'span8'))
		->content('Use span8 class');
});</pre>
