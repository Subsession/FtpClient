<?php

namespace Comertis\Ftp;

use Comertis\Ftp\FtpConnectionMode;
use Comertis\Ftp\FtpServerType;

/**
 * Holds the FTP connection details, like the URL,
 * port and Connection Type
 */
class FtpConnection
{
    /**
     * The FTP connection url
     *
     * @access private
     * @property string
     */
    private $_url;

    /**
     * The FTP connection port
     *
     * @access private
     * @property int
     */
    private $_port;

    /**
     * The FTP connection server type
     *
     * @access private
     * @property string
     */
    private $_serverType;

    /**
     * The FTP connection mode
     *
     * @access private
     * @property string
     */
    private $_connectionMode;

    /**
     * Defualt port mappings for different
     * connection types
     *
     * @access private
     * @property array
     */
    private $_defaultPortMappings;

    /**
     * Create a new instance of FtpConnection
     *
     * @param string $url
     * @param int $port
     * @param string $serverType
     */
    public function __construct($url = null, $port = null, $serverType = null, $connectionMode = null)
    {
        $this->_url = $url;
        $this->_port = $port;
        $this->_serverType = $serverType ?: FtpServerType::FTP;
        $this->_connectionMode = $connectionMode ?: FtpConnectionMode::ACTIVE;

        $this->_defaultPortMappings = [
            FtpServerType::FTP => 21,
            FtpServerType::SFTP => 22,
        ];
    }

    /**
     * Get the FTP connection url
     *
     * @access public
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Set the FTP connection url
     *
     * @param string $url
     * @access public
     * @return FtpConnection
     */
    public function setUrl($url)
    {
        $this->_url = $url;

        return $this;
    }

    /**
     * Get the FTP connection port
     *
     * @access public
     * @return int
     */
    public function getPort()
    {
        return $this->_port;
    }

    /**
     * Set the FTP connection port
     *
     * @param int $port
     * @access public
     * @return FtpConnection
     */
    public function setPort($port)
    {
        $this->_port = $port;

        return $this;
    }

    /**
     * Get the FTP connection server type
     *
     * @access public
     * @return string
     */
    public function getServerType()
    {
        return $this->_serverType;
    }

    /**
     * Set the FTP connection server type
     *
     * @param string $serverType
     * @return FtpConnection
     */
    public function setServerType($serverType)
    {
        $this->_serverType = $serverType;

        return $this;
    }

    /**
     * Get the FTP connection mode
     *
     * @access public
     * @return string
     */
    public function getConnectionMode()
    {
        return $this->_connectionMode;
    }

    /**
     * Set the FTP connection mode
     *
     * @param string $connectionMode
     * @access public
     * @return FtpConnection
     */
    public function setConnectionMode($connectionMode)
    {
        $this->_connectionMode = $connectionMode;

        return $this;
    }

    /**
     * Get the default port based on a connection
     * server type
     *
     * @param string $connectionType
     * @access private
     * @return int
     */
    private function getDefaultPort($serverType)
    {
        return $this->_defaultPortMappings[$serverType];
    }
}
