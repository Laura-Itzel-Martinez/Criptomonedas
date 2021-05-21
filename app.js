function calcular(){
    
    //obtenemos el valor de la cantidad del monto a gastar y lo convertimos a numero
    let monto = parseInt($('#monto').val());
    if (monto < 1) {
        swal("La cantidad debe ser mayor a cero");
        return false;
    }
    
    //obtenemos el valor del radio
    let moneda = $('input:radio[name=moneda]:checked').val();
    if (moneda == undefined) {
        swal("Debes seleccionar la moneda a comprar ");
        return false;
    }
    //calculamos el resultado
    obtenerResultado = calcularCompra(monto,moneda);
    $('#cantidadPagar').val("Total de compra es : " + obtenerResultado + " monedas");
    return false;
}


function calcularCompra(monto,moneda) {
    let resultado = 0;

        switch (moneda) {
            case "bitcoin":
                resultado =monto / 800000;
                resultado.toFixed(4)
                break;
            case "mana":
                resultado = monto / 24;
                resultado.toFixed(4)
                break;
            case "bat":
                resultado = monto / 21;
                resultado.toFixed(4)
                
            case "etherium":
                resultado = monto / 70000;
                resultado.toFixed(4)
                break;
            case "XRP":
                resultado= monto / 30;
                resultado.toFixed(4)
            break;
        }

    return resultado;
}

function limpiarFormulario(){
    $('#moneda')[0].reset();
}