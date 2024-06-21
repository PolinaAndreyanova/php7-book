<?php
$m = new Memcached();
$m->addServer("localhost", 11211);
$m->setOption(Memcached::OPT_COMPRESSION, false);