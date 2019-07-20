<?php
	date_default_timezone_set('UTC');

	$i = 1;
 
	while (true) {
    		$txt = 'Hello from Supervisor! The time is '. date('Y-m-d H:i:s') ."\n";    
		$file = '/var/log/hello.log';
		file_put_contents($file, $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    	sleep(5);
}
