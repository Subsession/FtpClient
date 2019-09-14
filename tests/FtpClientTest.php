<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Subsession\Ftp\FtpClient;

class FtpClientTest
{
    /**
     * @var FtpClient
     */
    private $_ftpClient;

    public function __construct()
    {
        $this->_ftpClient = new FtpClient();
    }

    public function init()
    {
        echo "<p>connect -> " . $this->connect() . "</p>";
    }

    public function connect()
    {
        return true;
    }
}

$ftpClientTest = new FtpClientTest();
$ftpClientTest->init();
