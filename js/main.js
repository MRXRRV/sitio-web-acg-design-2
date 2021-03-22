let ubicacionPrincipal = window.pageYOffset;

//indica en donde esta la posicion del usuario al momento de dar scroll
window.addEventListener("scroll",function() {
	console.log(ubicacionPrincipal);
	//anima la etiqueta nav al dar escroll subir y bajar con el estilo de nav en el transition da ese efecto mas  lento y no ser tan brusco
	let desplazamientoActual = window.pageYOffset;
	if (ubicacionPrincipal>=desplazamientoActual) {
		document.getElementsByTagName('nav')[0].style.top="0px";
	}else{
		document.getElementsByTagName('nav')[0].style.top="-100px";
	}

	ubicacionPrincipal = desplazamientoActual;
})

//funcionalidad del menu

let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;

document.querySelectorAll(".hamburger")[0].addEventListener("click", function() {
	//este if cambia el color del icono del menu en blanco o negro o viseversa
	if (semaforo) {
		document.querySelectorAll(".hamburger")[0].style.color="#fff";
		semaforo = false;
	}else{
		document.querySelectorAll(".hamburger")[0].style.color="#000";
		semaforo = true;
	}
	enlacesHeader.classList.toggle("menudos");
})