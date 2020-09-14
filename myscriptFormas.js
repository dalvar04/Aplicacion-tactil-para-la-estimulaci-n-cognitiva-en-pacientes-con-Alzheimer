var fecha;
$(document).ready(function () {
	window.onload = function(){
        var contador = 0;
        var restador = 5;
		fecha = new Date();

        document.getElementById("rojo1").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("rojo2").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("rojo3").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo3").style.visibility='hidden';
            comprobador(restador, contador);
        }

        document.getElementById("rojo4").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo4").style.visibility='hidden';
            comprobador(restador, contador);
        }

        document.getElementById("rojo5").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo5").style.visibility='hidden';
            comprobador(restador, contador);
        }

        document.getElementById("rojo6").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo6").style.visibility='hidden';
            comprobador(restador, contador);
        }

        document.getElementById("rojo7").onclick = function(){
            contador++;
            restador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            document.getElementById("rojo7").style.visibility='hidden';
            comprobador(restador, contador);
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

        document.getElementById("azul3").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("azul4").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("azul5").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("azul6").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("azul7").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }
        

        document.getElementById("amarillo1").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("amarillo2").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("amarillo3").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("amarillo4").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("amarillo5").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("amarillo6").onclick = function(){
            contador--;
            document.getElementById('clicks').innerHTML="PUNTUACIÓN: " + contador;
            document.getElementById('regre').innerHTML="Circulos rojos restantes: " + restador;
            comprobador(restador, contador);
        }

        document.getElementById("amarillo7").onclick = function(){
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
				url: "pasaPuntosFormas.php", 
				type: "post", 
				
				success: function(data){
					window.location="fin.php" 
				},
				error: function( jqXHR, textStatus, errorThrown ) {
					alert("estoy dentro de la funcion patata en error: " + textStatus);
				}
			});
		 
		}, 100);
          
    } else {

    }
}
