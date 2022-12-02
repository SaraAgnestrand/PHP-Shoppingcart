<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items

    public function getItems()
{
    return $this->items;
}
    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product)
    {
        $cartItem = new CartItem($product, 1);
       

        if(isset($this->items[$product->getId()])){
            $this->items[$product->getId()]->increaseQuantity();
             $cartItem->getQuantity();
        }else{
            $this->items[$product->getId()] = $cartItem;
        }
         return $cartItem;
    }
        /*
        För G är det bara ovan tre rader för VG är det 3-4 rader kod till.
        vi gör oss en tjänst om vi gör det som en 
        associativ array enligt Fredrik. */
   
    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
   
    unset($this->items[$product->getId()]);
     return $this->product;
    }
   
    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
        $count= 0;
        foreach($this->items as  $cartItem){
            $count += $cartItem->getQuantity();
        }
        
        return $count;
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    
    //Samma logik som i techstoreinlämningen för att räkna ut pris
    public function getTotalSum(){
             $sum = 0;
//$key kan också skrivas $item och cartItem som $value
         foreach($this->items as $cartItem) {
            $sum += $cartItem->getProduct()->getPrice()*$cartItem->getQuantity();    
         }
        return $sum;
        
        }

  
}
