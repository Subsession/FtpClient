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

namespace Subsession\Ftp\Internal\Files;

use Subsession\Ftp\Internal\Files\FtpFileDownloader;
use Subsession\Ftp\Internal\Files\FtpFileUploader;

/**
 * Undocumented class
 *
 * @uses Subsession\Ftp\Internal\Files\FtpFileUploader
 * @uses Subsession\Ftp\Internal\Files\FtpFileDownloader
 *
 * @category Ftp
 * @package  Subsession\Ftp
 * @author   Cristian Moraru <cristian.moraru@live.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @version  Release: 1.0.0
 * @link     https://github.com/Subsession/FtpClient
 */
class FtpFileManager
{
    /**
     * Responsible for downloading files
     *
     * @access private
     * @var    FtpFileDownloader
     */
    private $downloader;

    /**
     * Responsible for uploading files
     *
     * @access private
     * @var    FtpFileUploader
     */
    private $uploader;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->downloader = new FtpFileDownloader();
        $this->uploader = new FtpFileUploader();
    }
}
