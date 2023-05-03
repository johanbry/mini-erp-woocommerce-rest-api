<?php

class Post
{
    public $id;
    public $permalink;
    public $title;
    public $thumb_url;

    public function __construct($id, $title, $permalink, $thumb_url)
    {
        $this->id = $id;
        $this->title = $title;
        $this->permalink = $permalink;
        $this->thumb_url = $thumb_url;
    }
}

class Order
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
}
