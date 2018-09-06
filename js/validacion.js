/* funcionalidades*/


/*ventana modal - muestra errores*/

function alert_modal(title_sms, body_sms){

    $('#title_sms').html(title_sms);
    $('#body_sms').html(body_sms);
    $("#myModal").modal();

}


/*funcion para agregar campos*/

function agregar(id_agg,aux,j){

    elemento = document.createElement('div');
    elemento.setAttribute('id', x);
    elemento.setAttribute('class', "row direct");
    elemento.innerHTML = aux;

    document.getElementById(id_agg).appendChild(elemento);
    x=x+1;
    max[j]=max[j]+1;

  }


/*funcion para eliminar campos*/

 function eliminar(id_,j){

    hijo = document.getElementById(id_);
    padre = hijo.parentNode;
    padre.removeChild(hijo);
    if(j!=null){
    max[j]=max[j]-1;
    }

}


/*campos a agregar*/

function add_dir(id_,id_agg){

    if(max[0]<=4){
      var valor =  document.getElementById(id_), aux;
      if(valor.value!=''){
        aux='<div class="col-xs-10 col-sm-11"><input type="text" class="campo_agregado " name="'+id_+'[]" value="Dir. '+valor.value+'" onfocus = "this.blur()"></div><div class="col-xs-1"><input type="button" class="form-control campo_agregado button_eliminar" name="" onclick="eliminar('+x+',0);" value="X"></div>';
        agregar(id_agg,aux,0);
        valor.value = ''; 
      }else{

        alert_modal('Error al agregar Direccion', 'El campo no debe estar vacio');
              
        }
      
    }else{
      alert_modal('Error al agregar Direccion', 'No se puede agregar mas campos');
    }

}

function add_red(id_,id_agg){

      if(max[1]<=4){
        var valor =  document.getElementById(id_), aux;

        tipo = document.getElementById('selet').value;

        if(valor.value!=''){
          aux='<div class="col-xs-10 col-sm-11"><input type="text" class="campo_agregado " name="'+id_+'[]" value="'+tipo+': '+valor.value+'" onfocus = "this.blur()"></div><div class="col-xs-1"><input type="button" class="form-control campo_agregado button_eliminar" name="" onclick="eliminar('+x+',1);" value="X"></div>';
          agregar(id_agg,aux,1);
          valor.value = ''; 
        }else{
          alert_modal('Error al agregar Red Social', 'El campo no debe estar vacio');
        }
        
      }else{
      alert_modal('Error al agregar Red Social', 'No se puede agregar mas campos');
      }

}

function add_horario(){
     if (max[2] <=5) {
      var aux='';
      var d = document.getElementsByName('dias');
      var h = document.getElementsByName('hora');
     
      if (h[0].value != '' & h[1].value != '') {
        if(h[0].value<h[1].value){
          for (var i = 0; i < d.length; i++) {
            if(d[i].checked){
              aux = aux+', '+d[i].value;
              d[i].checked = false;  
            }
        
          }

          if (aux != '') {
            aux = h[0].value+' a '+h[1].value+aux;

            aux = '<div class="col-xs-10 col-sm-11"><input type="text" class="campo_agregado " name="agg_horario[]" value="Horario: '+aux+'" onfocus = "this.blur()"></div><div class="col-xs-1"><input type="button" class="form-control campo_agregado button_eliminar" name="" onclick="eliminar('+x+',2);" value="X"></div>';
            h[0].value = null;
            h[1].value = null;

            agregar('agg_horario',aux,2);
          }else{

            alert_modal('Error al agregar horario', 'Debe seleccionar almenos 1 dia');
           
          }
        }else{
          alert_modal('Error al agregar horario', 'No hay concordancia entre hora 1 y hora 2');
     
        }
      }else{
        alert_modal('Error al agregar horario', 'El campo hora no debe estar vacio');
      
      }
      }else{
      alert_modal('Error al agregar horario', 'No se puede agregar mas campos');
   
     }

}

/*configuracion del uso del formulario*/

function tipo_uso(){
      var i;
      
      ap1 = document.getElementById('apellido1');
      input_ap1 = document.querySelector('#apellido1 input');
      ap2 = document.getElementById('apellido2');
      input_ap2 = document.querySelector('#apellido2 input');
      horario = document.getElementById('horario');
      hora_io = document.querySelectorAll('#horario input');
      dir_agg = document.getElementById('direccion_agg');
      dir_input = document.querySelector('#direccion input');
      tlf_input = document.querySelector('#telefono input');


      for (i=0;i<document.getElementsByName('tipo_uso').length;i++){ 
          if (document.getElementsByName('tipo_uso')[i].checked) 
            break; 
      }
      if(i == 0){

        ap1.style.display = 'block';
        input_ap1.disabled = false;
        ap2.style.display = 'block';
        input_ap2.disabled = false;
        horario.style.display = 'none';

        for (var i = 0; i < hora_io.length; i++) {
          hora_io[i].disabled = true;
        }
        
        dir_agg.style.display = 'none';
        dir_input.required = false;
        dir_input.placeholder = 'Direccion';
        tlf_input.required = false;
        tlf_input.placeholder = 'Telefono';
        horario = false;

      }else{

        ap1.style.display = 'none';
        input_ap1.disabled = true;
        ap2.style.display = 'none';
        input_ap2.disabled = true;
        horario.style.display = 'block';

        for (var i = 0; i < hora_io.length; i++) {
          hora_io[i].disabled = false;
        }

        dir_agg.style.display = 'block';
        dir_input.required = true;
        dir_input.placeholder = 'Direccion (*)';
        tlf_input.required = true;
        tlf_input.placeholder = 'Telefono (*)';
        horario = true;

      }    
      
  }  

/*calculo de precio de servicios*/

function calcular(){
    a = document.getElementsByName('precio[]');
    suma = 0.00;
    for (var i = 0; i < a.length; i++) {
          
        if(a[i].checked){
            aux = a[i].value;
            suma = suma+parseFloat(aux); 
        }
        
    }
    $('#precio').text(suma.toFixed(2));
}

/*ventana de informacion*/

	/*mostrar*/

		function info_mostrar(valor){
		    elemento = document.getElementById('100'+valor.id);
		    elemento.className = 'info';
	  	}
  	

	/*ocultar*/

		function ocultar(valor){
		    elemento = document.getElementById('100'+valor.id);
		    elemento.className = 'ocultar';
	  	}


/*selecionador de temas*/

	function cambiarclass(valor){

	    p = document.getElementsByClassName('but');

	    for (var x = 0; x < p.length; x++) {
	      p[x].className = 'but';
	      
	    }
	    valor.className = 'but mostrar';
	    estilos = valor.id;
	}

/*animacion y configuracion de paso de formularios*/

	 function pasar(rest){
          a = document.getElementById('form_1');
          b = document.getElementById('form_2');
          c = document.getElementById('form_3');
          cont=cont+parseInt(rest);

          if(cont <= 0){
            cont = 1;
          }else if(cont > 3){
            cont = 3;
          }

          if(cont==1){
            a.className = 'sect focus';
            b.className = 'sect no-focus';
            c.className = 'sect no-focus';
            tipo_uso();
            document.getElementById('stbar').style.width = '33.33%';
            document.getElementById('bar1').className = 'progres activ';
            document.getElementById('bar2').className = 'progres';  
            document.getElementById('uno').className = 'uno';
            $('body, html').animate({scrollTop: '0px'}, 1000);
          }else if (cont==2) {
            a.className = 'sect no-focus traslate';
            b.className = 'sect focus';
            c.className = 'sect no-focus';

            document.getElementById('stbar').style.width = '66.66%';
            document.getElementById('bar2').className = 'progres activ';
            document.getElementById('bar1').className = 'progres'; 
            document.getElementById('bar3').className = 'progres';
            document.getElementById('uno').className = 'valor';
            document.getElementById('dos').className = 'dos';
            $('.help').hover(function(){info_mostrar(this);},function(){ocultar(this);});
            $("input[name='precio[]']").on('click', function(){calcular(this);});
            $('body, html').animate({scrollTop: '0px'}, 1000);

          }else if(cont==3){
            a.className = 'sect no-focus';
            b.className = 'sect no-focus traslate';
            c.className = 'sect focus';
            document.getElementById('stbar').style.width = '100%';
            document.getElementById('bar3').className = 'progres activ';
            document.getElementById('bar2').className = 'progres';
            document.getElementById('uno').className = 'valor';
            document.getElementById('dos').className = 'valor';
            $('.but').on('click', function(){cambiarclass(this);});
            $('body, html').animate({scrollTop: '0px'}, 1000);
          }
  }

/*cuenta los caracteres en la descripcion*/

	 function cuenta(){ 
          $('#conta_char').html(char_n_descrp = $('#txt_descripcion').val().length);

          if (char_n_descrp < 20 && char_n_descrp != 0) {
            document.getElementById('conta_char').style.color = 'rgba(255, 0, 0, 0.61)';
            resp_form3 = false;
            sms_form3 = 'La descripcion debe tener almenos 20 caracteres';

          }else{
            document.getElementById('conta_char').style.color = '#777';
            resp_form3 = true;
          }
  	}

/*carga las imagenes*/

	function carga(){
	      var dato_archivo = document.getElementById('file').files[0];
	      tipo = dato_archivo.type;
	      if (tipo  != 'image/jpg' && tipo != 'image/jpeg' && tipo != 'image/png') {
	        
	        alert_modal('Error al subir archivo', '¡formato erroneo!');

	      }else{

	        var form_data = new FormData();

	        form_data.append("file", dato_archivo);

	        $.ajax({
	              //La url que se encargara de procesar la subida del archivo
	              url: 'fileup.php',
	              //El tipo de respuesta que me devolverá la página en mi caso será un texto indicando el estado de la subid
	              processData: false,
	              //El dato pasado a la solicitud
	              data: form_data,
	              //El tipo que será la solicitud
	              contentType:false,

	              type: 'POST',

	              cache:false,
	              //Si la operación tiene éxito...
	              success: function(respuesta){

	                 var resp = JSON.parse(respuesta);
	                  img = document.getElementById('i');
	                  logo = document.getElementById('logo');
	                logo.className = 'carga_img';
	                  var fr = new FileReader();
	              
	              fr.onload = function(){
	                  img.setAttribute('src', 'uploads/'+resp.tmp_name+resp.name);
	              };
	              fr.readAsDataURL(dato_archivo);

	              document.getElementById('input_file').value = respuesta;

	              },


	              //Si la operación tiene un error
	              error: function(){
	                  alert("Ha ocurrido un error");
	              }
	          });
	      }
	}

/*validacions*/

	/*validacion del horario*/

		function comprobar(){
		    
		    var ok = true;

		    if (horario) {
		      if (max[2] <= 1) {

		        alert_modal('Error de Validacion', 'Por favor, debe ingresar almenos un horario');

		        ok = false;
		      }
		    }
		    return ok;
		  }