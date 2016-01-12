// Almaceno los datos de la tabla que leo, la primera posicion indica si se debe mostrar o no, y la segunda posicion contiene los datos de la fila
  var datos = new Array();
  // Almaceno la cabecera de la tabla
  var cabecera = new Array();
  // Columna seleccionada para ordenar
  var seleccionado = 0;
  // Si el orden es ascendente/descendente en cada columna
  var orden = new Array(true, true, true);
  // El contenido de cada uno de los filtros
  var filtros = new Array("", "", "", "");
  // Indice del filtro actual
  var filtrado = 0;
  
  // Lee la tabla y guarda los datos y modifica la cabecera para incluir el orden y el filtro
  function transformar() {
	// Obtengo la tabla
    var tabla = document.getElementById("tabla");
    
	// Almaceno y modifico la cabecera, añadiendo el orden y el filtro
	var cab = tabla.rows[0];
    for (var i=0; i<cab.cells.length; i++) {
		cabecera[i] = cab.cells[i].innerHTML;
		cab.cells[i].innerHTML = (i != seleccionado) ?
			'<a href="javascript:ordenar('+i+')">'+cab.cells[i].innerHTML+'</a>' :
			(orden[i]? '<a href="javascript:ordenar('+i+')">'+cab.cells[i].innerHTML+'</a>' :
			           '<a href="javascript:ordenar('+i+')">'+cab.cells[i].innerHTML+'</a>');
		cab.cells[i].innerHTML += '<br /><input type="text" id="filtro'+i+'" class="filtro" maxlength="10" onkeyup="filtro(event, '+i+')" value="'+filtros[i]+'" autocomplete="off"/>';
	}
		
	// Guardo los datos de la tabla y marco filas alternas
    for (var i=1; i<tabla.rows.length; i++) {
      if (i%2 == 0) {
        tabla.rows[i].className = "par";
	  }
	  var aux = new Array();
	  for (var j=0; j<tabla.rows[i].cells.length; j++) {
	    aux[j] = tabla.rows[i].cells[j].innerHTML;
	  }
	  datos[datos.length] = new Array(true, aux);
    }
  }
  
	// Funcion que ordena las filas segun la columna que se haya pulsado
	function organizar(a, b) {
		var signo = orden[seleccionado]? 1:-1;
		return (a[1][seleccionado] > b[1][seleccionado]) ? signo : -signo;
	}
  
  
  // Ordena y dibuja la tabla
  function ordenar(i) {
    var tabla = document.getElementById("tabla");
	
	// si es la misma col se cambia el sentido
	if (seleccionado == i) {
		orden[seleccionado] = !orden[seleccionado];
	} else {
		orden[seleccionado] = true;
		seleccionado = i;
	}
	
	// Se ordena la tabla y se dibuja
	datos.sort(organizar);
	dibujarTabla();
  }  
  
  
  // Filtra las filas segun el contenidos de los filtros de cada columna
  function filtro(evt, pos) {
	for (var i=0; i<datos.length; i++) {
		datos[i][0] = true;
		for (var j=0; j<datos[i][1].length; j++) {
			var txt = document.getElementById("filtro"+j).value;
			filtros[j] = txt;
			if (txt != "") {
				// Puede fallar si se usa una expresion regular incompleta
				try {
					datos[i][0] &= eval('datos[i][1][j].match(/'+txt+'/i) != null');
				} catch (error) {}
			}
		}
	}

	filtrado = pos;
	// dibujo la tabla
	dibujarTabla();
	// Selecciono la caja de texto del filtro actual
	var obj = document.getElementById("filtro"+filtrado);
	obj.focus();
	// Coloco el cursor al final de texto
	if (obj.createTextRange) {
		var r = obj.createTextRange();
		r.moveStart("character", obj.value.length+1);
		r.moveEnd("character", obj.value.length+1);
		r.select();
	} else if (obj.setSelectionRange) {
		obj.setSelectionRange(obj.value.length+1, obj.value.length+1);
	}

  }
  
  // Dibuja la tabla
  function dibujarTabla() {
    var _tabla = document.getElementById("tabla");
	
	// Me creo una copia de la tabla
	var tabla = document.createElement("TABLE");
	tabla.id = "tabla";
	tabla.border = "0";
	tabla.setAttribute("cellspacing","0");
	tabla.setAttribute("cellpadding", "2");
	
	// Creamos los THs
	var tr = document.createElement("TR");
	for (var i=0; i<cabecera.length; i++) {
		var th = document.createElement("TH");
		th.innerHTML = ((i != seleccionado) ?
			'<a href="javascript:ordenar('+i+')">'+cabecera[i]+ '</a>' :
			(orden[i]? '<a href="javascript:ordenar('+i+')">'+cabecera[i]+ '</a>' :
			           '<a href="javascript:ordenar('+i+')">'+cabecera[i]+ '</a>'));
		th.innerHTML += '<br /><input type="text" id="filtro'+i+'" class="filtro" maxlength="10" onkeyup="filtro(event, '+i+')" value="'+filtros[i]+'" autocomplete="off"/>';
		tr.appendChild(th);
	}
	tabla.appendChild(tr);

	// Creamos los TRs
	var cont = 0;
	for (var i=0; i<datos.length; i++) {
		if (datos[i][0]) {
			var tr = document.createElement("TR");
			tr.className = (cont%2==0)? "":"par";
			cont++;
			for (var j=0; j<datos[i][1].length; j++) {
				var td = document.createElement("TD");
				td.innerHTML = datos[i][1][j];
				tr.appendChild(td);
			}
			tabla.appendChild(tr);
		}
	}
	
	// Reemplazo la tabla actual por la nueva
	var padre = _tabla.parentNode;
	padre.replaceChild(tabla, _tabla);

	// ¿¿PERO QUE ES ESTO?? SI NO LO HAGO NO FUNCIONA EN EL INTERNET EXPLORER
	padre.innerHTML=padre.innerHTML+"<div></div>";
	
	// Situo el fondo del filtro para saber en que estado está
	for (var i=0; i<filtros.length; i++) {
		var obj = document.getElementById("filtro"+i);
		if (filtros[i].length > 3) {
			obj.style.backgroundPosition = "88px -45px";
		} else {
			obj.style.backgroundPosition = "88px -"+(filtros[i].length*15)+"px";
		}
	}
	
	
  }