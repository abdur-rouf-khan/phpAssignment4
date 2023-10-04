<?php 

class Product{
    private $id;
    private $name;
    private $price;

    public function __construct($product_id, $product_name, $product_price){ 
        $this->id = $product_id;
        $this->name = $product_name;
        $this->price = $product_price;
    }

    public function getFormattedPrice(){
        return number_format($this->price,2);
    }

    public function showDetails(){
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: $" . $this->getFormattedPrice() . "\n";
    }

}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
















