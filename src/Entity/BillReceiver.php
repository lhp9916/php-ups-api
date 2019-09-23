<?php


namespace Ups\Entity;


class BillReceiver
{
    private $accountNumber;
    private $address;

    public function __construct(\stdClass $attributes = null)
    {
        $this->accountNumber = isset($attributes->AccountNumber) ? $attributes->AccountNumber : null;
        $this->address = new Address(isset($attributes->Address) ? $attributes->Address : null);
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address|null $address
     * @return $this
     */
    public function setAddress(Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string $accountNumber
     * @return BillReceiver
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }
}
