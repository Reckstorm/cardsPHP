<?php
class BaseCard implements JsonSerializable{
    private string $Title = '';
    public function __construct($title)
    {
        $this->Title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     */
    public function setTitle(string $Title): void
    {
        $this->Title = $Title;
    }

    public function __toString(){
        return "$this->Title";
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}