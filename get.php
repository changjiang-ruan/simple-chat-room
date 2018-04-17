<?php
$mem = new Memcache();
$mem->addServer('localhost',11211);
$data = $mem->get('chat_data');
if($_POST['call'] == 'one'){
	exit(json_encode($data));
}
$c = count($data);
//echo json_encode($data);
while(true){
	$data = $mem->get('chat_data');
	if(count($data) > $c){
		exit(json_encode($data));
	}
	sleep(1);
}