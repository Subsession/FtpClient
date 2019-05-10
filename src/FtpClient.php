<?php

namespace Comertis\Ftp;

use Comertis\Ftp\FtpConnection;
use Comertis\Ftp\FtpCredentials;

class FtpClient
{
    private $_ftpConnection;

    private $_ftpCredentials;

    public function __construct()
    {
        $this->_ftpConnection = new FtpConnection();
        $this->_ftpCredentials = new FtpCredentials();
    }
}
