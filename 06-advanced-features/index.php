<?php


/**
 * Static methods and classes
 */
class ShopProduct
{
    public static function getInstance()
    {
        $product = new Product(
            title: 'Mariossan',
            firstName: 'Sanchez',
        );

        return $product;
    }
}

# ahora la llamada de  hace de la siguiente manera
# NO es necesario crear una instancia de la misma
$product = ShopProduct::getInstance();



/**
 * CONSTANT PROPERTIES
 */
class ShopProduct2
{
    public const AVAILABLE = 0;
    public const OUT_OF_STOCK = 1;
}

# el acceso es parecido al que se hace con static
echo ShopProduct2::AVAILABLE;

/**
 *  ABSTRACT CLASSES
 */

# una clase abstracta no se puede instancias. puede definir metodos 
# incluso puede dejar implementacion parcial

abstract class ShopProductWritter
{
    protected array $products = [];

    public function addProduct(ShopProduct $product):void
    {
        $this->products = $product;
    }

    # para los metodos solo se queda en la definicion y solo eso
    abstract public function write(): void;

}

/**
 * INTERFACES
 * 
 * La sineterfaces son meramente un template que no pueden definir 
 * funcionalidad
 */
interface Chargeable
{
    /**
     * @return mixed int|float
     */
    public function getPrice(): int|float;
}


# para el caso de herencia PHP solo permite extender de una clase y poder implementar
# de multiples interfaces, por ejemplo

class Consultancy extends TimeServices implements Bookable, Chargeable
{
    // . . . 
}




/**
 * TRAITS
 * 
 * Un trait es un elemento que permite poder compartir flujos de trabajo para compensar
 * que solo se puede hacer una herencia en PHP para compartir funcioanlidad
 * 
 * Los traits no puede ser instanciados pero si comparten sus metodos
 */

trait PriceUtilities
{
    private $taxrate = 20;

    public function calculateTax(float $price): float
    {
        return ($this->taxrate / 100) * $price;
    }
}

# para poder utilizar el trait simplemente se hace de la siguiente manera

use ruta\del\trait\PriceUtilities;

class ShopProduct3
{
    use PriceUtilities;
}

# tambien se puede usar e otro de servicio por ejempo
class UtilityService extends UtilityService
{
    use PriceUtilities;
}

# y ahora al momento de invocar

$p = new ShopProduct();
print $p->calculateTax(100);

$u = new UtilityService();
print $p->calculateTax(100);

# y tambien se pueden usar multiples traits
class ShopProduct3
{
    use PriceUtilities, PriceUtilities2;
}

