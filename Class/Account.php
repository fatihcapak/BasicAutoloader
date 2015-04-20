<?php
/**
 * @author      Fatih ÇAPAK <fatihcapak7@gmail.com>
 */

class Class_Account {

    /**
     * @var
     */
    protected $_playerName;

    /**
     * @var
     */
    protected $_playerSsn;

    /**
     * @return mixed
     */
    public function getPlayerName()
    {
        return $this->_playerName;
    }

    /**
     * @param mixed $playerName
     */
    public function setPlayerName($playerName)
    {
        $this->_playerName = $playerName;
    }

    /**
     * @return mixed
     */
    public function getPlayerSsn()
    {
        return $this->_playerSsn;
    }

    /**
     * @param mixed $playerSsn
     */
    public function setPlayerSsn($playerSsn)
    {
        $this->_playerSsn = $playerSsn;
    }
}
