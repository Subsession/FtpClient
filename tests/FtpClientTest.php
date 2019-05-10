<?php

require_once "../vendor/autoload.php";

use Comertis\Ftp\FtpClient;

class FtpClientTest
{
    private $_ftpClient;

    public function __construct()
    {
        $this->_ftpClient = new FtpClient();
    }

    public function init()
    {

    }
}

$test = new FtpClientTest();
$test->init();
