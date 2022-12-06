<?php
class CartItem
{
    private $product;
    private int $quantity;

    // Konstruktor för alla properties

    public function __construct($product, $quantity) 
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    //Getters för alla properties
    public function getProduct()
    {
        return $this->product;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    /*Metod för att öka på antal av ett cartItem med 1, 
    det går ej att utöka så att antalet överstiger produktens inStock.*/
    public function increaseQuantity()
    {

        if ($this->quantity < $this->product->getInStock()){    
            $this->quantity++;

        } else {
            echo "Kan inte lägga till. Slut i lager";
        }
    }
}
?>