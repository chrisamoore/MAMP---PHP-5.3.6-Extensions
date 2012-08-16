<pre>
<?php
	error_reporting(E_ALL);

	$redis = new Redis();
	$redis->pconnect('127.0.0.1', 6379);
	$redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);

	$redis->set('key', 'value');
	$data = $redis->get('key');

	var_dump($redis);
	echo "<br>";
	var_dump($data);
?>
<br>
<a href="https://github.com/nicolasff/phpredis">https://github.com/nicolasff/phpredis</a>