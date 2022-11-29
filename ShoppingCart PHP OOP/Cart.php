<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items

    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product)
    {

        
        /* Sara :exempel fredrik= ["id"] => cartitem,
                            //["id"] => cartitem,
                            //["id"] => cartitem,
        vi gör oss en tjänst om vi gör det som en 
        associativ array enligt Fredrik. Se tidigare övning.
        hur lägger vi til nya värden i en sån..36 min i Fredriks förklaring29/11*/
    }


    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {

    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
    }
}
