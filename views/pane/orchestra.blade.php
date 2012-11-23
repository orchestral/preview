<p>
	This code is made available from <code>{{ Bundle::path('preview') }}pane/orchestra.php</code>:
</p>
<pre>
Event::listen('orchestra.started: backend', function ()
{
	$p = Orchestra\Widget::make('pane.orchestra');
	$p->add('demo')->title('Demo for `pane.orchestra`')
		->content(View::make('preview::pane.orchestra'));

});</pre>
