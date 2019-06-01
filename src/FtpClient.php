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

namespace Comertis\Ftp;

use Comertis\Ftp\Internal\Connection\FtpConnection;
use Comertis\Ftp\Internal\Connection\FtpConnectionManager;
use Comertis\Ftp\Internal\Files\FtpFileManager;

/**
 * Undocumented class
 *
 * @uses Comertis\Ftp\Internal\Files\FtpFileManager
 * @uses Comertis\Ftp\Internal\Connection\FtpConnection
 * @uses Comertis\Ftp\Internal\Connection\FtpConnectionManager
 *
 * @category Ftp
 * @package  Comertis\Ftp
 * @author   Cristian Moraru <cristian@comertis.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Comertis/FtpClient
 */
class FtpClient
{
    /**
     * Responsible for handling the FTP connection
     *
     * @access private
     * @var    FtpConnectionManager
     */
    private $_connectionManager;

    /**
     * Responsible for managing file uploads and downloads
     *
     * @access private
     * @var    FtpFileManager
     */
    private $_fileManager;

    /**
     * Constructor
     *
     * @param string  $url      FTP URL
     * @param integer $port     FTP Port
     */
    public function __construct($url = null, $port = null)
    {
        $this->_connectionManager = new FtpConnectionManager();
        $this->_fileManager = new FtpFileManager();

        if (!is_null($url)) {
            $this->_connectionManager->setUrl($url);
        }

        if (!is_null($port)) {
            $this->_connectionManager->setPort($port);
        }
    }

    /**
     * Get the configured FTP connection
     *
     * @access public
     * @return FtpConnection
     */
    public function getConnection()
    {
        return $this->_connectionManager->getConnection();
    }

    /**
     * Set the FTP connection instance
     *
     * @param FtpConnection $ftpConnection FtpConnection instance
     *
     * @access public
     * @return FtpClient
     */
    public function setConnection(FtpConnection $ftpConnection)
    {
        $this->_connectionManager->setConnection($ftpConnection);

        return $this;
    }

    /**
     * Get the configured FTP credentials
     *
     * @access public
     * @return FtpCredentials
     */
    public function getCredentials()
    {
        return $this->_connectionManager->getCredentials();
    }

    /**
     * Set the FTP credentials
     *
     * @param string $user     Username
     * @param string $password Password
     *
     * @access public
     * @return FtpClient
     */
    public function setCredentials($user, $password)
    {
        $this->_connectionManager->setCredentials($user, $password);

        return $this;
    }

    /**
     * Get the configured connection mode: Active/Passive
     *
     * @access public
     * @return string
     */
    public function getConnectionMode()
    {
        return $this->_connectionManager->getConnectionMode();
    }

    /**
     * Set the FTP connection mode: Active/Passive
     *
     * @param string $connectionMode Connection mode
     *
     * @access public
     * @see    FtpConnectionMode
     * @return FtpClient
     */
    public function setConnectionMode($connectionMode)
    {
        $this->_connectionManager->setConnectionMode($connectionMode);

        return $this;
    }

    /**
     * Get the FTP connection URL
     *
     * @access public
     * @return string
     */
    public function getUrl()
    {
        return $this->_connectionManager->getUrl();
    }

    /**
     * Set the FTP connection URL
     *
     * @param string $url URL
     *
     * @access public
     * @return FtpClient
     */
    public function setUrl($url)
    {
        $this->_connectionManager->setUrl($url);

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
        return $this->_connectionManager->getPort();
    }

    /**
     * Set the FTP connection port
     *
     * @param integer $port Port
     *
     * @access public
     * @return FtpClient
     */
    public function setPort($port)
    {
        $this->_connectionManager->setPort($port);

        return $this;
    }
}
