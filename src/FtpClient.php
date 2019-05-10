<?php

namespace Comertis\Ftp;

use Comertis\Ftp\FtpConnection;
use Comertis\Ftp\FtpCredentials;

class FtpClient
{
    /**
     * Instance of the FtpConnection
     *
     * @access private
     * @property FtpConnection
     */
    private $_connection;

    /**
     * Instance of the FtpCredentials
     *
     * @access private
     * @property FtpCredentials
     */
    private $_credentials;

    public function __construct($connection = null, $credentials = null)
    {
        $this->_connection = $connection ?: new FtpConnection();
        $this->_credentials = $credentials ?: new FtpCredentials();
    }

    public function getConnection()
    {
        return $this->_connection;
    }

    public function setConnection($ftpConnection)
    {
        $this->_connection = $ftpConnection;

        return $this;
    }

    public function getCredentials()
    {
        return $this->_credentials;
    }

    public function setCredentials($user, $password)
    {
        $this->_credentials = new FtpCredentials($user, $password);

        return $this;
    }
}
