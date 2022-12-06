<?php


class Cart
{
    private array $items = [];

    //Getter för items

    public function getItems()
{
    return $this->items;
}
    /*
     Metod som skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.
     Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */

    public function addProduct($product)
    {
        $cartItem = new CartItem($product, 1);
       //Om produkten finns i kundevagnen ska quantity ökas
        if(isset($this->items[$product->getId()])){
            $this->items[$product->getId()]->increaseQuantity();
        }else{
            /*Om produkten inte finns kundvagnen sedan 
            tidigare ska den läggas till*/
            $this->items[$product->getId()] = $cartItem;
        }
         return $cartItem;
    }
   
    //Metod för att ta bort en produkt ur kundvagnen
    public function removeProduct($product)
    {
   
        unset($this->items[$product->getId()]);
        
        return $this->product;
    }
   
    //Metod som returnerar totala antalet produkter i kundvagnen
    public function getTotalQuantity()
    {
        $count= 0;
        foreach($this->items as  $cartItem){
            $count += $cartItem->getQuantity();
        }

        return $count;
    }

    //Metod som räknar ihop totalsumman för alla produkter i kundvagnen
    public function getTotalSum()
    {
             $sum = 0;

         foreach($this->items as $cartItem) {
            $sum += $cartItem->getProduct()->getPrice()*$cartItem->getQuantity();    
         }
        return $sum;
    
    }

  
}
