<?php
namespace Psr\Log;

interface LoggerInterface
{
    public function emergency($message, array $arContext = []);
    public function alert($message, array $arContext = []);
    public function critical($message, array $arContext = []);
    public function error($message, array $arContext = []);
    public function warning($message, array $arContext = []);
    public function notice($message, array $arContext = []);
    public function info($message, array $arContext = []);
    public function debug($message, array $arContext = []);
    public function log($level, $message, array $arContext = []);
}
