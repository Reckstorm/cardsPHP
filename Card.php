<?php
include 'BaseCard.php';
class Card extends BaseCard implements JsonSerializable {
    private string $Text = '';
    private string $Date = '';

    public function __construct($title, $text, $date)
    {
        parent::__construct($title);
        $this->Text = $text;
        $this->Date = $date;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     */
    public function setText(string $Text)
    {
        $this->Text = $Text;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->Date;
    }

    /**
     * @param string $DateTime
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }
    public function __toString()
    {
        return parent::__toString().", $this->Text, $this->Date";
    }

    public function jsonSerialize()
    {
        $tmp = array_merge(parent::jsonSerialize(), get_object_vars($this));
        return $tmp;
    }
}
