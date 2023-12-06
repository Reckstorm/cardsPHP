<?php
class CardWithPhone extends Card{
    private string $Phone = '';
    public function __construct($title, $text, $date, $phone)
    {
        parent::__construct($title, $text, $date);
        $this->Phone = $phone;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->Phone;
    }
    /**
     * @param string $Phone
     */
    public function setPhone(string $Phone): void
    {
        $this->Phone = $Phone;
    }
    public function __toString()
    {
        return parent::__toString().", $this->phone";
    }
    public function jsonSerialize()
    {
        $tmp = array_merge(parent::jsonSerialize(), get_object_vars($this));
        return $tmp;
    }
}