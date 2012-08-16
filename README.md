#Precompiled .so files for MAMP on OSX 10.7+

##In your Terminal 
	- Brew install Pkg  
	- Start your Respective Daemon 
##Copy the . so file to the
	 /Applications/MAMP/bin//php/php5.3.6/lib/php/extensions/no-debug-non-zts-20090626/
	 	*	No-debug may be a slightly different name
##Modify your php.ini
In the following file:  **/Applications/MAMP/bin//php/php5.3.6/conf/php.ini**

add the line 
`extension=name.so`	
in the section<br>
`;;;;;;;;;;;;;;;;;;;;;;`<br>
`; Dynamic Extensions ;`<br>
`;;;;;;;;;;;;;;;;;;;;;;`

##Restart MAMP
	- you can run a phpinfo(); to see whether the Pkg loaded
	

###Redis - Implements:
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

		
###Memcache - Implements:
	<?php
		error_reporting(E_ALL);
	
		$mem = new Memcache;
		$mem->connect('localhost', 11211) or die('you suck!!');
		$mem->set('var_keyt', 'test variable', false, 3);
		$data = $mem->get('var_key');
	
		var_dump($mem);
		echo "<br>";
		var_dump($data);

