<?php
require_once("connect.php");

$m->setOption(Memcached::OPT_BINARY_PROTOCOL, true);

echo $m->increment("number", 1, 0);