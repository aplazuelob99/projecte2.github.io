

//cronometro cuenta regresiva

window.onload = updateClock;
var totalTime = 60;
function updateClock() {
document.getElementById('countdown').innerHTML = totalTime;
if(totalTime==0){
alert('Se acabo el tiempo, puntuacion 100');
}else{
totalTime-=1;
setTimeout("updateClock()",1000);
}
}

//puzzle

/* creamos las variables de piezas que son las que se podran mover y dos variables mas que seran arrays el cual 
le indicaremos el tamaño de las piezas que se moveran y una variable de reinciar*/

var piezas = document.getElementsByClassName('movil');

var tamWidh = [200,200,200,200,200,200,200,200,200];
var tamHeight = [180,180,180,180,180,180,180,180,180];
var siguiente = document.getElementById("siguiente");


/*añadiremos un bucle for para decirle que que nos seleccione una pieza movil y que añadiremos atributos de tamaño,y que cada vez que
carguemos la pagina las piezas se moveran al azar*/ 

for(var i=0;i<piezas.length;i++){
	piezas[i].setAttribute("width", tamWidh[i]);
	piezas[i].setAttribute("height",tamHeight[i]);
	piezas[i].setAttribute("x", Math.floor((Math.random() * 10) + 1));
	piezas[i].setAttribute("y", Math.floor((Math.random() * 409) + 1));
	piezas[i].setAttribute("onmousedown","seleccionarElemento(evt)");
}

/*creamos las variables y las ponemos en posicion 0*/ 
var elementSelect = 0;  
var currentX = 0;
var currentY = 0;
var currentPosX = 0;
var currentPosY = 0;

/*crearemos una funcion en el cual seleccionaremos las piezas y las pasaremos a float guardando el atributo x , y ,reordenar las
piezas*/ 
function seleccionarElemento(evt) {
	elementSelect = reordenar(evt);
	currentX = evt.clientX;        
	currentY = evt.clientY;
	currentPosx = parseFloat(elementSelect.getAttribute("x"));     
	currentPosy = parseFloat(elementSelect.getAttribute("y"));
	elementSelect.setAttribute("onmousemove","moverElemento(evt)");
}

/* creamos otra funcion donde moveremos las piezas creando dos nuevas variables y por ultimo añadiendo el atributo de 
deseleccionar elemento y introduciremos un iman*/

function moverElemento(evt){
	var dx = evt.clientX - currentX;
	var dy = evt.clientY - currentY;
	currentPosx = currentPosx + dx;
	currentPosy = currentPosy + dy;
	elementSelect.setAttribute("x",currentPosx);
	elementSelect.setAttribute("y",currentPosy);
	currentX = evt.clientX;        
	currentY = evt.clientY;
	elementSelect.setAttribute("onmouseout","deseleccionarElemento(evt)");
	elementSelect.setAttribute("onmouseup","deseleccionarElemento(evt)");
	iman();
}

/* creamos otra funcion para deseleccionar elementos quitando o removiendo los atributos,para mover el elemento olevantar el raton 
de la pieza*/

function deseleccionarElemento(evt){
	testing();
	if(elementSelect != 0){			
		elementSelect.removeAttribute("onmousemove");
		elementSelect.removeAttribute("onmouseout");
		elementSelect.removeAttribute("onmouseup");
		elementSelect = 0;
	}
}

/*crearemos una nueva variable donde le indicaremos la ubicaccion del tag entorno de nuestro html.*/

var entorno = document.getElementById('entorno');

/* creamos una funcion para reordenar las piezas*/
function reordenar(evt){
	var padre = evt.target.parentNode;
	var clone = padre.cloneNode(true);
	var id = padre.getAttribute("id");
	entorno.removeChild(document.getElementById(id));
	entorno.appendChild(clone);
	return entorno.lastChild.firstChild;
}

var origX = [200,304,466,200,333,437,200,304,466];   
var origY = [100,100,100,233,204,233,337,366,337];

/* crearemos una funcion de nombre iman donde pondremos un for para decirle que cuando se junten las piezas se peguen unas a otras. */

function iman(){
	for(var i=0;i<piezas.length;i++){
		if (Math.abs(currentPosx-origX[i])<15 && Math.abs(currentPosy-origY[i])<15) {
			elementSelect.setAttribute("x",origX[i]);
			elementSelect.setAttribute("y",origY[i]);
		}
	}
}
		
/*con esta variable le decimos que cuando ganemos se oiga una musica de victoria*/ 
var win = document.getElementById("win");

/* con esta funcion probaremos si funcionan las piezas y el juego */
function testing() {
	var bien_ubicada = 0;
	var padres = document.getElementsByClassName('padre');
	for(var i=0;i<piezas.length;i++){
		var posx = parseFloat(padres[i].firstChild.getAttribute("x"));    
		var posy = parseFloat(padres[i].firstChild.getAttribute("y"));
		ide = padres[i].getAttribute("id");
		if(origX[ide] == posx && origY[ide] == posy){
			bien_ubicada = bien_ubicada + 1;
		}
	}
	if(bien_ubicada == 9){
		win.play();
	}

	
}



function victoria(){
	if(piezas == elementSelect*bien_ubicada) {
		alert("true");
		document.location.reload();
	}
}

siguiente.addEventListener ("click", function(){ //funcion para pasar a siguiente juego 
	juego = false;
	siguiente.style.visibility = "hidden";
	window.location.href = "juego.php";

})