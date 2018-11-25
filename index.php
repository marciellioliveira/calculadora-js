<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Calculadora JS</title>
  </head>
  <body>
    <h3>Calculadora JS</h3>

    <div class="container">

      <div class="row">

        <div class="col-sm-6">

          <div class="row" id="btnTop">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-light"  id="AC" onclick="clicado(this.id)">AC</button>
              <button type="button" class="btn btn-light"  id="/" onclick="clicado(this.id)">/</button>
              <button type="button" class="btn btn-light"  id="x" onclick="clicado(this.id)">x</button>
              <button type="button" class="btn btn-light"  id="<" onclick="clicado(this.id)"><</button>
            </div>
          </div> <!-- Fim btnTop -->

          <div class="row" id="btn789">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-light" id="7" onclick="clicado(this.id)">7</button>
              <button type="button" class="btn btn-light" id="8" onclick="clicado(this.id)">8</button>
              <button type="button" class="btn btn-light" id="9" onclick="clicado(this.id)">9</button>
              <button type="button" class="btn btn-light" id="%" onclick="clicado(this.id)">%</button>
            </div>
          </div> <!-- Fim btn789 -->

          <div class="row" id="btn456">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-light"  id="4" onclick="clicado(this.id)">4</button>
              <button type="button" class="btn btn-light"  id="5" onclick="clicado(this.id)">5</button>
              <button type="button" class="btn btn-light"  id="6" onclick="clicado(this.id)">6</button>
              <button type="button" class="btn btn-light"  id="-" onclick="clicado(this.id)">-</button>
            </div>
          </div> <!-- Fim btn456 -->

          <div class="row" id="btn123">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-light"  id="1" onclick="clicado(this.id)">1</button>
              <button type="button" class="btn btn-light"  id="2" onclick="clicado(this.id)">2</button>
              <button type="button" class="btn btn-light"  id="3" onclick="clicado(this.id)">3</button>
              <button type="button" class="btn btn-light"  id="+" onclick="clicado(this.id)">+</button>
            </div>
          </div> <!-- Fim btn123 -->

          <div class="row" id="btnBottom">
            <div class="btn-group btn-group-lg">
              <button type="button" class="btn btn-light"  id="0" onclick="clicado(this.id)">0</button>
              <button type="button" class="btn btn-light"  id="," onclick="clicado(this.id)">,</button>
              <button type="button" class="btn btn-light"  id="()" onclick="clicado(this.id)">( )</button>
              <button type="button" class="btn btn-light"  id="=" onclick="clicado(this.id)">=</button>
            </div>
          </div> <!-- Fim btnBottom -->

        </div> <!-- Fim col-sm-6 -->


        <!-- Mostrar Resultado da Calculadora -->
        <div class="col-sm-6">
          <h4>Resultado:</h4>
          <h4 id="mostrarValores"></h4>

        </div>
      </div>


      





    </div>






    <script type="text/javascript">

      function clicado(id) {

        console.log(id);

        /*switch (id) {
        
          case "btn7":
            console.log("Botão 7");
          case "btn8":
            console.log("Botão 8");
          case "btn9":
            console.log("Botão 9");
          default:
            console.log("Estranho");

        }*/


      }
   



       /* var btn7 = document.getElementById("btn7").value;
        var btn8 = document.getElementById("btn8").value;
        var btn9 = document.getElementById("btn9").value;
        var btnPorcentagem = document.getElementById("btnPorcentagem").value;
        console.log(btn7);
        console.log(btn8);
        console.log(btn9);
        console.log(btnPorcentagem);*/
      


    </script>



    <!-- CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>