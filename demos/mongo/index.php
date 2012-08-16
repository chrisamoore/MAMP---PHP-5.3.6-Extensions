<pre>
<?php
	error_reporting(E_ALL);

	$mongo = new Mongo();

	$db = $mongo->dbname;
	$collection = $db->collection;

	$obj = array('key'=>'value', 'key2' => 'value2');
	$collection->insert($obj);

	$data = $collection->find();


	var_dump($mongo);
	echo "<br>";
	var_dump($data);

	foreach ($data as $obj) {
	    print_r($obj);
	}