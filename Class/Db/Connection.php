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
    public function getİp()
    {
        return $this->_ip;
    }

    /**
     * @param mixed $ip
     */
    public function setİp($ip)
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
