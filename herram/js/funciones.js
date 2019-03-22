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

function crearParrafo(){
	parrafo = document.createElement('p');
	parrafo.setAttribute("class", "lead");
	return parrafo;
}

function crearSpan(titulo,traduccion,pronunciacion) {
	span = document.createElement('span');
	span.setAttribute("data-toggle", "tooltip");
	span.setAttribute("data-placement", "top");
	span.setAttribute("title", traduccion);
	span.appendChild(document.createTextNode(titulo));
	return span;
}
function crearSpan2(titulo) {
	span = document.createElement('span');
	span.setAttribute("data-toggle", "tooltip");
	span.setAttribute("data-placement", "top");
	span.setAttribute("title", titulo);
	span.appendChild(document.createTextNode(titulo));
	return span;
}



//---------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------