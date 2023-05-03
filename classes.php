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

class Product
{
    public $id;
    public $permalink;
    public $title;
    public $thumb_url;
    public $price;
    public $category;


    public function __construct($id, $title, $permalink, $thumb_url, $price, $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->permalink = $permalink;
        $this->thumb_url = $thumb_url;
        $this->price = $price;
        $this->category = $category;
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
