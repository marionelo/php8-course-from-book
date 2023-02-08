<?php

/** 
 * Class with 
 * "constructor property promotion"
*/
class ShopProduct
{
    public function __construct(
        public string $title = '',
        private $name = "",
        private $age = 0
    ){
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getTotalInfo():string
    {
        return "title: \t$this->title\nedad: \t$this->age\n";
    }
}

$shop = new ShopProduct("CP Shop",'asd',35);
echo $shop->getTotalInfo();



