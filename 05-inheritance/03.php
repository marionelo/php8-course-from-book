<?php

class ShopProduct
{
    private int|float $discount = 0;

    public function __construct(
        public string $title,
        public string $producerFirstName = '',
        public string $producerMainName,
        public int|float $price = 0,
    ){}

    public function getProducerFirstname(): string
    {
        return $this->producerFirstName;
    }

    public function getProducermainName(): string
    {
        return $this->producerMainName;
    }

    public function setDiscount(int|float $discount): void
    {
        $this->discount = $discount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }

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
    public function __construct(
        string $title,
        string $firstName = '',
        string $MainName = '',
        float $price = 0,
        public int $playLength
    )
    {
        parent::__construct(
            $title,
            $firstName,
            $MainName,
            $price
        );
    }

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
    public function __construct(
        string $title,
        string $firstName = '',
        string $MainName = '',
        float $price = 0,
        public int $numPages
    )
    {
        parent::__construct(
            $title,
            $firstName,
            $MainName,
            $price
        );
    }

    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        return parent::getSummaryLine().": page count {$this->numPages}";
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }
}

// ahora instanciamos las clases
$product2 = new CDProduct(
    'Exline on Coldharbour Lnae',
    'The',
    'Alabama 3',
    10.99,
    60.33
);

echo "Artist: {$product2->getSummaryLine()}\n";
