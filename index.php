<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="jumbotron jumbotron-fluid" style="background-color: #FFE4E1;">
                    <div class="container" >
                        <h1 class="display-4">Calculo de monedas criptomonedas</h1>
                        <form method="post" onsubmit="return calcular()" id="moneda">
                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <label for="cantidad">Monto a gastar: </label>
                                <input type="text"  id="monto" name="monto" pattern="[0-9]+">
                                <label for="">MXN</label>
                            </div>
                        </div>
                        <hr>
                        <h3>Moneda a comprar</h3>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="radio" name="moneda" id="bitcoin" value="bitcoin"> 
                                <label for="bitcoin">Bitcoin (800,000 MXN)</label>
                            </div>
                            <div class="col">
                                <input type="radio" name="moneda" id="mana" value="mana"> 
                                <label for="mana">Mana (24 MXN)</label>
                            </div>
                            <div class="col">
                                <input type="radio" name="moneda" id="bat" value="bat"> 
                                <label for="bat">Bat (21 MXN)</label>
                            </div>
                            <div class="col" >
                                <input type="radio" name="moneda" id="etherium" value="etherium">
                                <label for="etherium">Etherium (70,000 MXN)</label>
                            </div>
                            <div class="col">
                                <input type="radio" name="moneda" id="XRP" value="XRP">
                                <label for="XRP">XRP (30 MXN)</label>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                <button class="btn btn-outline-success" >Calcular</button>
                                <span class="btn btn-info" onclick="limpiarFormulario()">Limpiar</span>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" id="cantidadPagar"  class="form" readonly size="45">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>