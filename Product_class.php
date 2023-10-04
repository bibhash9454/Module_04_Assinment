<?php
class Product {
    // TODO: Add properties
    private int  $id;
    private string $name;
    private float $price;
 
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
    }
    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(){
        // echo "Product Price is: {$this->price}\n";      
         return sprintf('%.2f',$this->price);
    }
    // TODO: Add showDetails method
    public function showDetails(){
        
        echo "Product Details:\n -ID: {$this->id}\n -Name: {$this->name}\n -Price: $".$this->getFormattedPrice();
    }
}
// Test the Product class
$product = new Product(5, 'T-shirt', 18.99);
$product->showDetails();


?>