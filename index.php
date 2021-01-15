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
          public $prodottiContenuti=[];

          function __construct($nome, $location, $prodottiContenuti)
          {
            $this -> nome = $nome;
            $this -> location = $location;
            $this -> prodottiContenuti = $prodottiContenuti;
          }
        }

        class Prodotto
        {
          public $nome;
          public $peso;
          public $prezzo;

          function __construct($nome, $peso, $prezzo)
          {
            $this -> nome = $nome;
            $this -> peso = $peso;
            $this -> prezzo = $prezzo;
          }
        }


        //istanze delle due classi
        $prodotto1 = new Prodotto('motore',500, 1000);
        $prodotto2 = new Prodotto('cerchione',400, 300);


        $magazzino = new Magazzino('Primo Magazzino', 'Milano', [$prodotto1,$prodotto2]);
        var_dump($magazzino);
      ?>
    </div>

  </body>
</html>
