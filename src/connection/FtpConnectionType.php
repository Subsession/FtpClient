<?php

namespace Comertis\Ftp;

class FtpConnectionType
{
    /**
     * File transfer protocol
     */
    const FTP = "FTP";

    /**
     * SSH File transfer protocol
     */
    const SFTP = "SFTP";

    /**
     * FTP over implicit TLS/SSL
     */
    const FTPS = "FTPS";

    /**
     * FTP over explicit TLS/SSL
     */
    const FTPES = "FTPES";
}
