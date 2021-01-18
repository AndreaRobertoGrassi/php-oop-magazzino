<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
      <?php

        class Magazine {
          public $name;
          public $location;
          public $products;
          public function __construct($name, $location, $products = []) {
              $this -> name = $name;
              $this -> location = $location;
              $this -> products = $products;
          }
          public function __toString() {    //mi ritorna una strina senza richiamre questa funzione (non stampa a schermo)
              return 'name: ' . $this -> name . '<br>'
                  . 'location: ' . $this -> location . '<br>'
                  . 'products: ' . count($this -> products);
          }
        }
        class Product {
          public $name;
          public $weight;
          public $price;
          public function __construct($name, $weight, $price) {
              $this -> name = $name;
              $this -> weight = $weight;
              $this -> price = $price;
          }
          public function __toString() {
              return 'name: ' . $this -> name . '<br>'
                  . 'weight: ' . $this -> weight . '<br>'
                  . 'price: ' . $this -> price;
          }
        }
        class EdibleProduct extends Product {
          public $expireDate;
          public $temperature;
          public function __construct($name, $weight, $price, $expireDate, $temperature) {  //ridefiniamo tutti i valori
              parent::__construct($name, $weight, $price);   //ci riferiamo al __construct di Product
              $this -> expireDate = $expireDate;
              $this -> temperature = $temperature;
          }
          public function __toString() {
              return parent::__toString() . '<br>'   //ci riferiamo al __toString di Product
                  . 'expireDate: ' . $this -> expireDate . '<br>'
                  . 'temperature: ' . $this -> temperature;
          }
        }

        class ElettronicProduct extends Product {

          public $type;
          public $guarantee;
          public function __construct($name, $weight, $price, $type, $guarantee) {
              parent::__construct($name, $weight, $price);
              $this -> type = $type;
              $this -> guarantee = $guarantee;
          }
          public function __toString() {
              return parent::__toString() . '<br>'
                  . 'type: ' . $this -> type . '<br>'
                  . 'guarantee: ' . $this -> guarantee;
          }
        }

        $prodEdible = new EdibleProduct('prod1', 10, 100, '10-05-2022', 20);
        $prodElettronic = new ElettronicProduct('prod2', 20, 100, 'type1', 'guar1');


        echo $prodEdible . '<br> <br>'
          . $prodElettronic;


      ?>

    </div>

  </body>
</html>
