<?php
/**
 * @author      Fatih ÇAPAK <fatihcapak7@gmail.com>
 */

class Class_Payment_Base_Bank {

    /**
     * @var
     */
    protected $_bankId;

    /**
     * @return mixed
     */
    public function getBankId()
    {
        return $this->_bankId;
    }

    /**
     * @param mixed $bankId
     */
    public function setBankId($bankId)
    {
        $this->_bankId = $bankId;
    }
}
