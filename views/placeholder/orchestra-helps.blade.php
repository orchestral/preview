
<p>Creating a widget using <code><i>@</i>placeholder("orchestra.helps")</code> is simple:</p>
<p>See <code>{{ Bundle::path('preview') }}<br>placeholder/orchestra.helps.php</code></p>

<pre>
$p = Orchestra\Widget::make('placeholder.orchestra.helps');
$p->add('demo', function ()
{
	return View::make('preview::placeholder.orchestra-helps');
});
</pre>
