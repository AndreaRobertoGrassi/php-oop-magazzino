<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">
      <?php
        class Magazzino{
          //attributi
          public $nome;
          public $location;
          public $prodotti;

          public function __construct($nome, $location, $prodotti=[]){  // questi campi non possono essere vuoti
            $this -> nome = $nome;
            $this -> location = $location;
            $this -> prodotti = $prodotti;    //array
          }

          public function lista () {    //funzione che crea una lista con nome magazzino, location e prodotti
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

        class Prodotto{
          //attributi
          public $nome;
          public $peso;
          public $prezzo;

          function __construct($nome, $peso, $prezzo){  // questi campi non possono essere vuoti
            $this -> nome = $nome;
            $this -> peso = $peso;
            $this -> prezzo = $prezzo;
          }
        }

        $prodotto1 = new Prodotto('motore',500, 1000);  // istanza prodotto1
        $prodotto2 = new Prodotto('cerchione',400, 300); // istanza prodotto2

        $magazzino = new Magazzino('Primo Magazzino', 'Milano', [$prodotto1,$prodotto2]);  // istanza magazzino
        $magazzino -> lista();   //richiamo la funzione
      ?>
    </div>

  </body>
</html>
