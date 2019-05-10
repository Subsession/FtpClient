<?php

namespace Comertis\Ftp;

use Comertis\Ftp\FtpConnectionType;

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
     * @var string
     */
    private $_url;

    /**
     * The FTP connection port
     *
     * @access private
     * @var int
     */
    private $_port;

    /**
     * The FTP connection type
     *
     * @access private
     * @var string
     */
    private $_connectionType;

    /**
     * Defualt port mappings for different
     * connection types
     *
     * @access private
     * @var array
     */
    private $_defaultPortMappings;

    /**
     * Create a new instance of FtpConnection
     *
     * @param string $url
     * @param int $port
     * @param string $connectionType
     */
    public function __construct($url = null, $port = null, $connectionType = null)
    {
        $this->_url = $url;
        $this->_port = $port;
        $this->_connectionType = $connectionType ?: FtpConnectionType::FTP;

        $this->_defaultPortMappings = [
            FtpConnectionType::FTP => 21,
            FtpConnectionType::SFTP => 22,
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
     * Get the FTP connection type
     *
     * @access public
     * @return string
     */
    public function getConnectionType()
    {
        return $this->_connectionType;
    }

    /**
     * Set the FTP connection type
     *
     * @param string $connectionType
     * @return FtpConnection
     */
    public function setConnectionType($connectionType)
    {
        $this->_connectionType = $connectionType;

        return $this;
    }

    /**
     * Get the default port based on a connection type
     *
     * @param string $connectionType
     * @access private
     * @return int
     */
    private function getDefaultPort($connectionType)
    {
        return $this->_defaultPortMappings[$connectionType];
    }
}
