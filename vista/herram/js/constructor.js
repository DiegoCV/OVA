
function constructor(elemento) {
	var e = document.createElement(elemento.tipo);
	if(elemento.hasOwnProperty('contenido')){
		e.appendChild(document.createTextNode(elemento.contenido));
	}
	if(elemento.hasOwnProperty('atributos')){
		agregarAtributos(e,elemento.atributos);
	}
	if(elemento.hasOwnProperty('hijos')){
		agregarHijos(e,elemento.hijos);
	}
	return e;
}

function agregarAtributos(e,atributos) {
	keys = Object.keys(atributos);
	for(let i in keys){
		e.setAttribute(keys[i], atributos[keys[i]]);
	}
}

function agregarHijos(e,hijos) {
	for(let i in hijos){
		e.appendChild(constructor(hijos[i]));
	}
}
