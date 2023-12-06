<?php
class CardWithBGColor extends Card{
    private string $BGColor = '';
    public function __construct($title, $text, $date, $bgcolor)
    {
        parent::__construct($title, $text, $date);
        $this->BGColor = $bgcolor;
    }

    /**
     * @return string
     */
    public function getBGColor(): string
    {
        return $this->BGColor;
    }

    /**
     * @param string $bgcolor
     */
    public function setBGColor(string $bgcolor): void
    {
        $this->BGColor = $bgcolor;
    }
    public function __toString()
    {
        return parent::__toString().", $this->BGColor";
    }
    public function jsonSerialize()
    {
        $tmp = array_merge(parent::jsonSerialize(), get_object_vars($this));
        return $tmp;
    }
}