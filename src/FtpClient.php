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

namespace Subsession\Ftp;

use Subsession\Ftp\Internal\Connection\FtpConnection;
use Subsession\Ftp\Internal\Connection\FtpConnectionManager;
use Subsession\Ftp\Internal\Files\FtpFileManager;

/**
 * Undocumented class
 *
 * @uses Subsession\Ftp\Internal\Files\FtpFileManager
 * @uses Subsession\Ftp\Internal\Connection\FtpConnection
 * @uses Subsession\Ftp\Internal\Connection\FtpConnectionManager
 *
 * @category Ftp
 * @package  Subsession\Ftp
 * @author   Cristian Moraru <cristian.moraru@live.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Subsession/FtpClient
 */
class FtpClient
{
    /**
     * Responsible for handling the FTP connection
     *
     * @access private
     * @var    FtpConnectionManager
     */
    private $connectionManager;

    /**
     * Responsible for managing file uploads and downloads
     *
     * @access private
     * @var    FtpFileManager
     */
    private $fileManager;

    /**
     * Constructor
     *
     * @param string  $url      FTP URL
     * @param integer $port     FTP Port
     */
    public function __construct($url = null, $port = null)
    {
        $this->connectionManager = new FtpConnectionManager();
        $this->fileManager = new FtpFileManager();

        if (!is_null($url)) {
            $this->connectionManager->setUrl($url);
        }

        if (!is_null($port)) {
            $this->connectionManager->setPort($port);
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
        return $this->connectionManager->getConnection();
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
        $this->connectionManager->setConnection($ftpConnection);

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
        return $this->connectionManager->getCredentials();
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
        $this->connectionManager->setCredentials($user, $password);

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
        return $this->connectionManager->getConnectionMode();
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
        $this->connectionManager->setConnectionMode($connectionMode);

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
        return $this->connectionManager->getUrl();
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
        $this->connectionManager->setUrl($url);

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
        return $this->connectionManager->getPort();
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
        $this->connectionManager->setPort($port);

        return $this;
    }
}
