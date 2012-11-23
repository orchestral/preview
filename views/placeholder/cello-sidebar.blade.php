
<p>Creating a widget using <code><i>@</i>placeholder("cello.sidebar")</code> is simple:</p>
<p>See <code>{{ Bundle::path('preview') }}<br>placeholder/cello.sidebar.php</code></p>

<pre>
$p = Orchestra\Widget::make('placeholder.cello.sidebar');
$p->add('demo', function()
{
	return View::make('preview::placeholder.cello-sidebar');
});
</pre>
{{ HTML::style('laravel/css/style.css') }}
