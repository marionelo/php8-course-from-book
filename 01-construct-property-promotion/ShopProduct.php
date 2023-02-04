<?php

class ShopProduct 
{
    public string $title;
    
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle():string
    {
        return $this->title;
    }
}

/** 
 * Class with 
 * "constructor property promotion"
*/
class ShopProduct2 
{
    
    public function __construct(
        public $title
    ){
    }

    public function getTitle():string
    {
        return $this->title;
    }
}

$shop = new ShopProduct("CP Shop\n");
echo $shop->getTitle();

$shop2 = new ShopProduct2("CP Shop\n");
echo $shop2->getTitle();


