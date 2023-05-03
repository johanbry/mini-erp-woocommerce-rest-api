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
    public $status;
    public $amount;
    public $date;

    public function __construct($id, $status, $amount, $date)
    {
        $this->id = $id;
        $this->status = $status;
        $this->amount = $amount;
        $this->date = $date;
    }
}

class Media
{
    public $id;
    public $alt;
    public $thumb_url;
    public $full_url;


    public function __construct($id, $alt, $thumb_url, $full_url)
    {
        $this->id = $id;
        $this->alt = $alt;
        $this->thumb_url = $thumb_url;
        $this->full_url = $full_url;
    }
}
