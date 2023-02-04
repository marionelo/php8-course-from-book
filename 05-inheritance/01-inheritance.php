<?php

/**
 * Este producto estamos con el problema de la herencia donde queremos hacer que un producto
 * Pueda responder a un CD y al mismo tiempo un libro
 * dando como resultadp que en getSummerayLine hay una validacion para cada tipo
 * El problemo es si quiero agregar mas tipos de productos
 */

// class ShopProduct
// {
//     public function __construct(
//         public string $title,
//         public string $producerFirstName = '',
//         public string $producerMainName,
//         public float $price = 0,
//         public int $numPages = 0,
//         public int $playLength = 0,
//         public string $type
//     ){}

//     public function getNumberOfpages(): int
//     {
//         return $this->numPages;
//     }

//     public function getPlayLength(): int
//     {
//         return $this->playLength;
//     }

//     public function getProducer(): string
//     {
//         return "{$this->producerFirstName} {$this->producerMainName}";
//     }

//     public function geSummaryLine(): string
//     {
//         $base = "{$this->title} {$this->producerMainName} {$this->producerFirstName}";

//         if ($this->type == 'book') {
//             $base .= ": page count - {$this->numPages}";
//         } elseif($this->type == 'book') {
//             $base .= ": page count - {$this->numPages}";
//         }

//         return $base;
//     }
// }

/**
 * Ahora resolviendo este problema lo podemos ver como clases que estienden de una papa
 * 
 */
class ShopProduct
{
    public function __construct(
        public string $title,
        public string $producerFirstName = '',
        public string $producerMainName,
        public float $price = 0,
        public int $numPages = 0,
        public int $playLength = 0
    ){}

    public function getProducer(): string
    {
        return "{$this->producerFirstName} {$this->producerMainName}";
    }

    public function getSummaryLine(): string
    {
        return"{$this->title} {$this->producerMainName} {$this->producerFirstName}";
    }
}

class CDProduct extends ShopProduct
{
    public function getPlayLength(): int
    {
        return $this->playLength;
    }

    public function getSummaryLine(): string
    {
        return parent::getSummaryLine().": playing time {$this->playLength}";
    }
}

class BookProduct extends ShopProduct
{
    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        return parent::getSummaryLine().": page count {$this->numPages}";
    }
}

// ahora instanciamos las clases
$product2 = new CDProduct(
    title: 'Exline on Coldharbour Lnae',
    producerFirstName: 'The',
    producerMainName: 'Alabama 3',
    price: 10.99,
    numPages: 0,
    playLength: 60.33
);

echo "Artist: {$product2->getSummaryLine()}\n";
