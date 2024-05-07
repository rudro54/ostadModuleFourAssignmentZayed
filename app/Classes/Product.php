<?php


namespace app\Classes;

class Product
{

    protected $id;
    protected $name;

    protected $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice()
    {

        $formattedPrice = "$" . number_format((float) $this->price, 2, '.', '');

        $this->price = $formattedPrice;
    }


    public function showDetails()
    {

        $this->getFormattedPrice();

        echo "Product Details :  \n";
        echo "Id :" . $this->id . "\n";
        echo "Name :" . $this->name . "\n";
        echo "Price :" . $this->price . "\n";

        echo "\n\n";
    }



}