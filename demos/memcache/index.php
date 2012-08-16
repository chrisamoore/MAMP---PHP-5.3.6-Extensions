<?php
	error_reporting(E_ALL);

	$mem = new Memcache;
	$mem->connect('localhost', 11211) or die('you suck!!');
	$mem->set('var_key_set', 'test variable set', false, 3);
	$data = $mem->get('var_key_set');

	var_dump($mem);
	echo "<br>";
	var_dump($data);

