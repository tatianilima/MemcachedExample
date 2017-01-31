<?php
	$memcache = new Memcache;
    $memcache->connect("localhost",11211); 
                                          
    echo "Versão Memcached : " . $memcache->getVersion();
     
    $testeArray = array('Oneide', 'Luiz', 'Schneider');
    $temp       = serialize($testeArray);
    $memcache->add("key", $temp, false, 30);
 
    echo "Dados em cache:<br />\n";
    print_r(unserialize($memcache->get("key")));
