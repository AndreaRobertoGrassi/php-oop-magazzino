<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">

      <?php

        class Magazzino
        {
          public $nome;
          public $location;
          public $prodotti=[];

          public function __construct($nome, $location, $prodotti)
          {
            $this -> nome = $nome;
            $this -> location = $location;
            $this -> prodotti = $prodotti;    //array
          }

          public function lista () {
            ?>
              <ul>
                <li> <?php echo $this-> nome; ?> </li>
                <li> <?php echo $this-> location; ?> </li>
                <?php
                  for ($i=0; $i < count($this-> prodotti) ; $i++) {
                    ?> <li> Prodotto <?php echo $i + 1 ?> </li> <?php
                    foreach ($this-> prodotti[$i] as $value) {
                      ?>
                        <ul>
                          <li> <?php echo $value; ?>  </li>
                        </ul>
                      <?php
                    }
                  }
                ?>
              </ul>
            <?php
          }
        }

        class Prodotto
        {
          public $nome;
          public $peso;
          public $prezzo;

          function __construct($nome, $peso, $prezzo)    // questi valori non saranno mai vuoti
          {
            $this -> nome = $nome;
            $this -> peso = $peso;
            $this -> prezzo = $prezzo;
          }
        }

        //istanze delle due classi
        $prodotto1 = new Prodotto('motore',500, 1000);  // primo prodotto
        $prodotto2 = new Prodotto('cerchione',400, 300); // secondo prodotto

        $magazzino = new Magazzino('Primo Magazzino', 'Milano', [$prodotto1,$prodotto2]);
        $magazzino -> lista();
      ?>
    </div>

  </body>
</html>
