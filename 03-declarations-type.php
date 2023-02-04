<?php

/** 
 * Class with 
 * "constructor property promotion"
*/
class ShopProduct
{
    
    public function __construct(
        public string $title = "",
        private string $name = "",
        private int $age = 0
    ){
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getTotalInfo(): string
    {
        return "title: \t$this->title\nedad: \t$this->age\n";
    }
}

$shop = new ShopProduct(title: "CP Shop", age: 35);
echo $shop->getTotalInfo();
