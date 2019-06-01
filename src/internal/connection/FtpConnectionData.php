<?php
/**
 * PHP Version 7
 *
 * LICENSE:
 * Permission is hereby granted, free of charge, to any
 * person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the
 * Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall
 * be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category Ftp
 * @package  Comertis\Ftp
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Comertis/FtpClient
 */

namespace Comertis\Ftp\Internal\Connection;

use Comertis\Ftp\FtpServerType;
use Comertis\Ftp\FtpConnectionMode;

/**
 * Holds the FTP connection details, like the URL,
 * port and Connection Type
 *
 * @uses Comertis\Ftp\FtpConnectionMode
 * @uses Comertis\Ftp\FtpServerType
 *
 * @category Ftp
 * @package  Comertis\Ftp
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Comertis/FtpClient
 */
class FtpConnectionData
{
    /**
     * The FTP connection url
     *
     * @access private
     * @var    string
     */
    private $_url;

    /**
     * The FTP connection port
     *
     * @access private
     * @var    integer
     */
    private $_port;

    /**
     * The FTP connection server type
     *
     * @access private
     * @var    string
     */
    private $_serverType;

    /**
     * The FTP connection mode
     *
     * @access private
     * @var    string
     */
    private $_connectionMode;

    /**
     * Default port mappings for different
     * connection types
     *
     * @access private
     * @var    array
     */
    private $_defaultPortMappings;

    /**
     * Create a new instance of FtpConnection
     *
     * @param string  $url            Url
     * @param integer $port           Port
     * @param string  $serverType     Server type
     * @param string  $connectionMode Connection mode
     */
    public function __construct($url = null, $port = null, $serverType = null, $connectionMode = null)
    {
        $this->_url = $url;
        $this->_port = $port;
        $this->_serverType = $serverType ?? FtpServerType::FTP;
        $this->_connectionMode = $connectionMode ?? FtpConnectionMode::ACTIVE;

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
     * @param string $url URL
     *
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
     * @return integer
     */
    public function getPort()
    {
        return $this->_port;
    }

    /**
     * Set the FTP connection port
     *
     * @param integer $port Port
     *
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
     * @param string $serverType Server type
     *
     * @access public
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
     * @param string $connectionMode Connection mode
     *
     * @access public
     * @see    FtpConnectionMode
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
     * @param string $serverType Server type
     *
     * @access private
     * @return integer
     */
    private function _getDefaultPort($serverType)
    {
        return $this->_defaultPortMappings[$serverType];
    }
}
