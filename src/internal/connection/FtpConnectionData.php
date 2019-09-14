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
 * @package  Subsession\Ftp
 * @author   Cristian Moraru <cristian.moraru@live.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  GIT: &Id&
 * @link     https://github.com/Subsession/FtpClient
 */

namespace Subsession\Ftp\Internal\Connection;

use Subsession\Ftp\FtpConnectionMode;
use Subsession\Ftp\FtpServerType;

/**
 * Holds the FTP connection details, like the URL,
 * port and Connection Type
 *
 * @uses Subsession\Ftp\FtpConnectionMode
 * @uses Subsession\Ftp\FtpServerType
 *
 * @category Ftp
 * @package  Subsession\Ftp
 * @author   Cristian Moraru <cristian.moraru@live.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Subsession/FtpClient
 */
class FtpConnectionData
{
    /**
     * The FTP connection url
     *
     * @access private
     * @var    string
     */
    private $url;

    /**
     * The FTP connection port
     *
     * @access private
     * @var    integer
     */
    private $port;

    /**
     * The FTP connection server type
     *
     * @access private
     * @var    string
     */
    private $serverType;

    /**
     * The FTP connection mode
     *
     * @access private
     * @var    string
     */
    private $connectionMode;

    /**
     * Default port mappings for different
     * connection types
     *
     * @access private
     * @var    array
     */
    private $defaultPortMappings;

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
        $this->url = $url;
        $this->port = $port;
        $this->serverType = $serverType ?? FtpServerType::FTP;
        $this->connectionMode = $connectionMode ?? FtpConnectionMode::ACTIVE;

        $this->defaultPortMappings = [
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
        return $this->url;
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
        $this->url = $url;

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
        return $this->port;
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
        $this->port = $port;

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
        return $this->serverType;
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
        $this->serverType = $serverType;

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
        return $this->connectionMode;
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
        $this->connectionMode = $connectionMode;

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
    private function getDefaultPort($serverType)
    {
        return $this->defaultPortMappings[$serverType];
    }
}
