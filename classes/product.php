<?php
// Create Class Book
class Book {
    // Properties
    protected $author;
    protected $title;
    protected $editor;
    protected $price;

    // Constructor
    function __construct($author, $title, $editor, $price) {
        $this->author = $author;
        $this->title = $title;
        $this->editor = $editor;
        $this->price = $price;
    }

    // Methods
    public function getFullInfo() {
        $fullInfo = $this->author . '<br>' . '<strong>' . $this->title . '</strong>' . '<br>' . $this->editor . '<br>' . $this->price . '€';
        return $fullInfo;
    }

    public function getPrice() {
        return $this->price;
    }
};

class AudioBook extends Book {
    //properties
    protected $duration;
    protected $main_voice;
    protected $musics;

    // Constructor
    function __construct($author, $title, $editor, $price, $duration, $main_voice) {
        parent::__construct($author, $title, $editor, $price);
        $this->duration = $duration;
        $this->main_voice = $main_voice;
    }
}