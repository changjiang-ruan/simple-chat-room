<?php
$mem = new Memcache();
$mem->addServer('localhost',11211);

$data = $mem->get('chat_data');
$data[] = $_POST['content'];

$mem->set('chat_data',$data,MEMCACHE_COMPRESSED,0);
$mem->close();