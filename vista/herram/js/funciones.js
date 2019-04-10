//---------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------

	/**
	* Se encarga de mostrar el modal donde puede configurar la apariencia
	*/
	function cargarConfiguracion(){
		$('#myModal').modal(); 
	}

	function ocultarTraduccion(){
		if(!$('#ocul').prop('checked') ) {
			$('#original').removeClass('col-lg-12  text-center');
			$('#original').addClass('col-lg-6');
			$('#traduccion').show(); 
		}else{
			$('#traduccion').hide(); 
			$('#original').removeClass('col-lg-6');
			$('#original').addClass('col-lg-12  text-center');
		}
	}

	function posar(span){
		if(span.className == 'bg-success'){
			$(span).removeClass('bg-success');
		}else{
			$(span).addClass('bg-success');
		}
	}

//---------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------

function crearElementoTitulo(tit){
      titulo = document.createElement('h1');
      titulo.setAttribute("class", "mt-5");
      titulo.appendChild(document.createTextNode(tit));
      return titulo;
    }

function crearElementoCuerpo(cuerpo,diccionario){
	arr_1 = cuerpo.split("%");
	res = [];
	for(let i in arr_1){
		arr_2 = arr_1[i].split(" ");
		p = crearParrafo();
		if(diccionario == undefined){
			for(let j in arr_2){
				p.appendChild(crearSpan(arr_2[j]));									
			}
		}else{
			p.appendChild(crearPlay(parseInt(i)));
			for(let j in arr_2){
				arr_3 = diccionario.split(" ");	
				if(arr_3[j] != undefined)			
				p.appendChild(crearSpan(arr_2[j],arr_3[j].toLowerCase()));													
			}
		}
		res.push(p);
	}
    return res;
}
 
/** En el mundo correcto este deberia ser el scritp a usar, pero como me da jartera usare el de arriba
function crearElementoCuerpo(cuerpo,diccionario){
	arr_1 = cuerpo.split("\n");
	res = [];
	for(let i in arr_1){
		arr_2 = arr_1[i].split(" ");
		p = crearParrafo();
		for(let j in arr_2){
			if (diccionario == undefined){
				p.appendChild(crearSpan(arr_2[j]));	
			}else{
				if(diccionario[arr_2[j].toLowerCase()] == null){
				p.appendChild(crearSpan(arr_2[j]));	
				}else{
					p.appendChild(crearSpan(arr_2[j],diccionario[arr_2[j].toLowerCase()][0],diccionario[arr_2[j].toLowerCase()][1]));	
				}
			}						
		}
		res.push(p);
	}
    return res;
}
*/

function crearParrafo(){
	parrafo = document.createElement('p');
	parrafo.setAttribute("class", "lead");
	return parrafo;
}

function crearSpan(titulo,traduccion) {
	span = document.createElement('span');	
		span.setAttribute("data-toggle", "tooltip");
		span.setAttribute("data-placement", "top");
		span.setAttribute("title", traduccion);
		span.appendChild(document.createTextNode(titulo+" "));	
	return span;
}

function crearPlay(accion) {
	span = document.createElement('span');
	span.setAttribute("onclick", "narrarFrase("+accion+")");
	span.appendChild(document.createTextNode("🔊"));	
	return span;
}

function crearSpan2(titulo) {
	span = document.createElement('span');
	span.setAttribute("data-toggle", "tooltip");
	span.setAttribute("data-placement", "top");
	span.setAttribute("title", titulo);
	span.appendChild(document.createTextNode(titulo+" "));
	return span;
}



//---------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
//------------PREGUNTAS---------------------------------------------------------------------
	function construirPreguntas(preguntas){
		res = [];
		for(let i in preguntas){
			div = crearElemento("div","row");
			col = crearElemento("div","col-lg-6");
			form = crearElemento("form");
			p = crearElemento("p","lead");
			p.appendChild(document.createTextNode(preguntas[i].enunciado));
			form.appendChild(p);
			ul = crearElemento("ul","list-unstyled");			
			alternativas = preguntas[i].alternativas;
			for(let j in alternativas){
				li = crearElemento("li");
				div2 = crearElemento("div","form-check");
				input = crearInput("checkbox","form-check-input");
				input.setAttribute("id", "alte_"+alternativas[j].key);
				label = crearElemento("label");
				label.setAttribute("for", "alte_"+alternativas[j].key);
				label.appendChild(document.createTextNode(alternativas[j].alte));
				div2.appendChild(input);
				div2.appendChild(label);
				li.appendChild(div2);
				ul.appendChild(li);
			}
			form.appendChild(ul);
			col.appendChild(form);
			div.appendChild(col);
			res.push(div);
		}
		return res;
	}

	function crearElemento(elemento,clase){
		ele = document.createElement(elemento);
		if(clase != undefined){
			ele.setAttribute("class", clase);
		}
		return ele;
	}

	function crearInput(tipo,clase){
		ele = document.createElement("input");
		if(tipo != undefined){
			ele.setAttribute("type", tipo);
		}
		if(clase != undefined){
			ele.setAttribute("class", clase);
		}
		return ele;
	}




//---------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
