<?php

require_once __DIR__ . '/vendor/autoload.php';

use Thrift\Transport\TPhpStream;
use Thrift\Transport\TBufferedTransport;

$transport = new TBufferedTransport(new TPhpStream(TPhpStream::MODE_R | TPhpStream::MODE_W));