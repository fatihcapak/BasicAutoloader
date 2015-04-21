<?php
/**
 * @author      Fatih ÇAPAK <fatihcapak7@gmail.com>
 */

class Class_Db_Connection {

    /**
     * @var
     */
    protected $_ip;

    /**
     * @var
     */
    protected $_pass;

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->_ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->_ip = $ip;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->_pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->_pass = $pass;
    }
}
