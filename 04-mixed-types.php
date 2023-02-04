<?php


class ShopProduct
{
    public string $name = 'algo';
}

class Storage 
{
    public function add(string $key, $value)
    {
        // do something
    }

    public function add2(string $key, mixed $value)
    {
        //do something
    }

    public function some(string $key, string|bool $value): bool
    {
        return false;
    }

    public function another(ShopProduct|null $product): void
    {
        echo $product == null ?: $product->name;
    }

    public function another2(ShopProduct|false $product): false|null|string
    {
        return !$product ?: $product->name;
    }
    
}

$storage = new Storage();

// $storage->add('llave', 'valor');
// $storage->add('llave', 20);
// $storage->add('llave', []);

// $storage->add2('llave', 'valor');
// $storage->add2('llave', 20);
// $storage->add2('llave', []);

// $storage->some('llave', 'valor');
// $storage->some('llave', 20);
// $storage->some('llave', []);

$storage->another(new ShopProduct());
$storage->another(null);

$storage->another2(new ShopProduct());
print_r($storage->another2(false));

