var fecha;
$(document).ready(function () {
	window.onload = function(){
        var contador = 0;
        var restador = 2;
		fecha = new Date();


        document.getElementById("rojo1").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo1").style.visibility='hidden';
            comprobador(restador,contador);
        }

        document.getElementById("rojo2").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo2").style.visibility='hidden';
            comprobador(restador,contador);
        }


        document.getElementById("azul1").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("azul2").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

    }
	
});


function comprobador(restador, contador) {
    if (restador==0) {
        setTimeout(function(){
			var datos=new Array(contador, fecha.getHours(), fecha.getMinutes(), fecha.getSeconds());
			
			$.ajax({                       
				data:{dato: datos},                
				url: "pasaPuntosFacil.php", 
				type: "post", 
				
				success: function(data){
					window.location="fin.php" 
				},
				error: function( jqXHR, textStatus, errorThrown ) {
					alert("ERROR: " + textStatus);
				}
			});
		 
		}, 100);
          
    } else {

    }
}