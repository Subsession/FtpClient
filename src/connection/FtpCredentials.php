<?php

namespace Comertis\Ftp;

/**
 * Holds the FTP authentication user and password
 */
class FtpCredentials
{
    /**
     * The user to be used by the FTP connection
     *
     * @access private
     * @property string
     */
    private $_user;

    /**
     * The password to be used by the FTP connection
     *
     * @access private
     * @property string
     */
    private $_password;

    /**
     * Create a new instance of FtpCredentials
     *
     * @param string $user
     * @param string $password
     */
    public function __construct($user = null, $password = null)
    {
        $this->_user = $user;
        $this->_password = $password;
    }

    /**
     * Get the connection user
     *
     * @access public
     * @return string
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * Set the connection user
     *
     * @param string $user
     * @access public
     * @return FtpCredentials
     */
    public function setUser($user)
    {
        $this->_user = $user;

        return $this;
    }

    /**
     * Get the connection password
     *
     * @access public
     * @return string
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Set the connection password
     *
     * @param string $password
     * @access public
     * @return FtpCredentials
     */
    public function setPassword($password)
    {
        $this->_password = $password;

        return $this;
    }
}
