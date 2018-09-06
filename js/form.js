   
  var x=0, max = [1,1,1,1], horario = false, estilos='Estilo_uno';
  var cont = 1, char_n_descrp = 1, resp_form3 = true, sms_form3 = '', enviar = false;

  /*http = window.location.protocol;
  host = '//'+window.location.host;
  url = http+host+"job/includes/";*/
  
  function alert_modal(title_sms, body_sms){

    $('#title_sms').html(title_sms);
    $('#body_sms').html(body_sms);
    $("#myModal").modal(); 

  }

  function loading(mod){
    
    
    
    if (mod=='home') {
      document.getElementById('inicio').className = 'active';
      $('#form_principal').keypress(function(){
        if(event.keyCode == 13){
          validar_web();
          event.returnValue = false;
        }
      });
    }else if(mod=='new-page'){
      document.getElementsByClassName('opacit')[0].style.opacity = 1;
      $('#formulario').submit(function(){ return enviar});
      $('#formulario').keypress(function(){
        if(event.keyCode == 13){
        validar();
        event.returnValue = false;
        }
      });
      document.getElementById('stbar').style.width = '33.33%';
      document.getElementById('bar1').className = 'progres activ';  
      
    }else if(mod=='form2'){

      document.getElementById('stbar').style.width = '66.66%';
      document.getElementById('bar2').className = 'progres activ';
      document.getElementById('uno').className = 'valor';
      $('.help').hover(function(){info_mostrar(this);},function(){ocultar(this);});
      $('input[name=precio]').on('click', function(){calcular(this);});

    }else if(mod=='form3'){

      document.getElementById('stbar').style.width = '100%';
      document.getElementById('bar3').className = 'progres activ';
      document.getElementById('uno').className = 'valor';
      document.getElementById('dos').className = 'valor';
      $('.but').on('click', function(){cambiarclass(this);});
    }

  }  

  function add_dir(id_,id_agg){
    
    var valor =  document.getElementById(id_), aux;

    if(max[0] >= 4){
      alert_modal('Error al agregar Direccion', 'No se puede agregar mas campos');
    }else if(valor.value.charAt(0) == ' '){
      alert_modal('Error al agregar Direccion', 'No se pueden agregar solo espacios en blanco');
    }else if(valor.value == ''){
      alert_modal('Error al agregar Direccion', 'El campo no debe estar vacio');
    }else{
      aux='<div class="div_agregable"><input type="text" class="campo_agregado " name="'+id_+'[]" value="Dir. '+valor.value+'" onfocus = "this.blur()"></div><div class="button_div_agregable"><input type="button" class="form-control campo_agregado button_eliminar" name="" onclick="eliminar('+x+',0);" value="X"></div>';
      agregar(id_agg,aux,0);
      valor.value = ''; 
    }

  }

  function add_red(id_,id_agg){

      var tipo = document.getElementById('selet').value;
      var valor =  document.getElementById(id_), aux;

      if(max[1] >=4 ){
        alert_modal('Error al agregar Red Social', 'No se puede agregar mas campos');
      }else if(valor.value.charAt(0) == ' '){
        alert_modal('Error al agregar Red Social', 'No se pueden agregar solo espacios en blanco');
      }else if(valor.value.indexOf(' ') > -1){
        alert_modal('Error al agregar Red Social', 'No debe contener espacios');
      }else if(valor.value == ''){
        alert_modal('Error al agregar Red Social', 'El campo no debe estar vacio');
      }else{
        aux='<div class="div_agregable"><input type="text" class="campo_agregado " name="'+id_+'[]" value="'+tipo+': '+valor.value+'" onfocus = "this.blur()"></div><div class="button_div_agregable"><input type="button" class="form-control campo_agregado button_eliminar" name="" onclick="eliminar('+x+',1);" value="X"></div>';
        agregar(id_agg,aux,1);
        valor.value = ''; 
      }

  }

  function add_tlf(id_,id_agg){

      var regex = /[0-9-+]{8,15}/;
      var valor =  document.getElementById(id_), aux;
      if(max[2] >= 4){
        alert_modal('Error al agregar Telefono', 'No se puede agregar mas campos');
      }else if(valor.value == ''){ 
        alert_modal('Error al agregar Telefono', 'El campo no debe estar vacio');
      }else if(!regex.test(valor.value)){
        alert_modal('Error al agregar Telefono', 'Ingrese un telefono valido');
      }else{
          aux='<div class="div_agregable"><input type="text" class="campo_agregado " name="'+id_+'[]" value="Tlf: '+valor.value+'" onfocus = "this.blur()"></div><div class="button_div_agregable"><input type="button" class="form-control campo_agregado button_eliminar" name="" onclick="eliminar('+x+',1);" value="X"></div>';
          agregar(id_agg,aux,1);
          valor.value = ''; 
      }
  }

  function add_horario(){
    if (max[3] <=5) {
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

  function agregar(id_agg,aux,j){

    elemento = document.createElement('div');
    elemento.setAttribute('id', x);
    elemento.setAttribute('class', "row direct");
    elemento.innerHTML = aux;

    document.getElementById(id_agg).appendChild(elemento);
    x=x+1;
    max[j]=max[j]+1;

  }

  function eliminar(id_,j){

    hijo = document.getElementById(id_);
    padre = hijo.parentNode;
    padre.removeChild(hijo);
    if(j!=null){
    max[j]=max[j]-1;
    }

  }

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

  function realizaProceso(valor1, valor2){
        var parametros = {
                "valor1" : valor1,
                "valor2" : valor2
        };
        parametros['valor2'] = document.getElementById(valor1).value;
        
        $.ajax({
                data:  parametros,
                url:   'modulos/proceso.php',
                type:  'post',
                beforeSend: function () {
                        document.getElementsByTagName(parametros['valor1']).value = "Procesando, espere por favor...";
                },
                success:  function (response) {
                        
                }
          });
  
  }

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

  function info_mostrar(valor){
    elemento = document.getElementById('100'+valor.id);
    elemento.className = 'info';
  }

  function ocultar(valor){
    elemento = document.getElementById('100'+valor.id);
    elemento.className = 'ocultar';
  }
  
  function cambiarclass(valor){

    p = document.getElementsByClassName('but');

    for (var x = 0; x < p.length; x++) {
      p[x].className = 'but';
      
    }
    valor.className = 'but mostrar';
    estilos = valor.id;
  }

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

  function carga(){
    
              var dato_archivo = document.getElementById('file').files[0];
              tipo = dato_archivo.type;


              if (tipo  != 'image/jpg' && tipo != 'image/jpeg' && tipo != 'image/png') {
                          
                alert_modal('Error al subir archivo', '¡formato erroneo!');

              }else{

                var _URL = window.URL || window.webkitURL;
                       
                img = new Image();

                img.onload = function () {
                     

                    if (this.width == 320 && this.height == 320) {



                              $("#file").upload('fileup.php',
                              {
                                  nombre_archivo: ''
                              },
                              function(respuesta) {
                                  //Subida finalizada.
                                  

                                  if (respuesta.success == 1) {

                                      
                                        alert_modal('Mensaje', '¡archivo subido!');
                                        
                                          img = document.getElementById('i');
                                          logo = document.getElementById('logo');
                                          logo.className = 'carga_img';
                                          
                                          var fr = new FileReader();
                                        
                                        fr.onload = function(){
                                            img.setAttribute('src', 'uploads/'+respuesta.tmp_name+respuesta.name);
                                           
                                        };
                                        fr.readAsDataURL(dato_archivo);

                                        document.getElementById('input_file').value = JSON.stringify(respuesta);
                                      
                                      
                                  } else {
                                     alert_modal('Error al subir archivo', '¡no se subio el archivo!');
                                  }
                                  
                              }, function(progreso, valor) {

                                  bar = document.getElementById('barra_de_progreso');
                                  
                                  bar.style.width = valor+'%';
                                  if (valor == 100) {
                                    bar.style.background = '#59b0f5';
                                  }
                              });
                              

                    }else{

                          alert_modal('Error al subir archivo', '¡La resolucion no es adecuada!');

                    }              
                };
                

                img.src = _URL.createObjectURL(dato_archivo);

              }
  }

  $.fn.upload = function(remote, data, successFn, progressFn) {
      // if we dont have post data, move it along
      if (typeof data != "object") {
          progressFn = successFn;
          successFn = data;
      }
      return this.each(function() {
          if ($(this)[0].files[0]) {
              var formData = new FormData();
              formData.append($(this).attr("name"), $(this)[0].files[0]);

              // if we have post data too
              if (typeof data == "object") {
                  for (var i in data) {
                      formData.append(i, data[i]);
                  }
              }

              // do the ajax request
              $.ajax({
                  url: remote,
                  type: 'POST',
                  xhr: function() {
                      myXhr = $.ajaxSettings.xhr();
                      if (myXhr.upload && progressFn) {
                          myXhr.upload.addEventListener('progress', function(prog) {
                              var value = ~~((prog.loaded / prog.total) * 100);

                              // if we passed a progress function
                              if (progressFn && typeof progressFn == "function") {
                                  progressFn(prog, value);

                                  // if we passed a progress element
                              } else if (progressFn) {
                                  $(progressFn).val(value);
                              }
                          }, false);
                      }
                      return myXhr;
                  },
                  data: formData,
                  dataType: "json",
                  cache: false,
                  contentType: false,
                  processData: false,
                  complete: function(res) {
                      var json;
                      try {
                          json = JSON.parse(res.responseText);
                      } catch (e) {
                          json = res.responseText;
                      }
                      if (successFn)
                          successFn(json);
                  }
              });
          }
      });
  };

  function validar(formu){
   
    if (cont == 1) {

      if(validar_form_1() && comprobar()) validar_user();
      
      
    }else if(cont == 2){

        pasar(1);

    }
  }

  function validar_form_1(){

     resul = $('.validar');
     resp = true;
     cont_sms = resul.siblings('*');
     sms_list = [
            
            'Usuario Invalido',
            'Contraseña Insegura',
            'Correo Invalido',
            'Agrege un nombre porfavor',
            'agrege un apellido porfavor'

            ];


     for(var i = 0; i < resul.length; i++){

        padre = resul[i].parentNode;
        padre.removeChild(cont_sms[i]);
        elemento = document.createElement('div');

        var value_without_space = $.trim(resul[i].value);  

        resul[i].value = value_without_space;

        tes = !/^\s+|\s+$/.test(resul[i].value);

        if (resul[i].value == '') {
          tes = true;
        }
        
        if(resul[i].checkValidity() && tes){
          
          padre.className = 'form-group';
          padre.appendChild(elemento);

        }else{
          if(sms_list[i] != null){
            sms=sms_list[i];
          }else{
            sms = 'Este campo debe ser rellenado';
          }
          resp = false;
          elemento.innerHTML = '<div class="alert alert-danger alert-dismissable">'+sms+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
          padre.className = 'form-group has-error has-feedback';
          padre.appendChild(elemento);
        } 

        if (i == 1) {
          regex = /^(?=\S*\d)(?=\S*[A-ZÑ])(?=\S*[a-zñ])\S{8,16}$/;
          if (!regex.test(resul[1].value)) {
            resp = false;
            elemento.innerHTML = '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>La Contraseña es Insegura, Debe Contener: <br>* al menos 8 Caracteres Alfanumericos <br>* al menos una Mayuscula <br>* al menos una Minuscula';
            padre.className = 'form-group has-error has-feedback';
            padre.appendChild(elemento);
          }
        }
        
     }
         
     return resp;
  }

  function validar_form_3(){
    
    
    if(resp_form3){
      carga_tema();
    }else{
      alert_modal('Error de Validacion', sms_form3)
    }
  }

  function carga_tema(){
    
    dato = $('#formulario').serialize();
    estilo = document.getElementsByName('estilo');
    for (var i = 0; i < estilo.length; i++) {
      if(estilo[i].checked){
        sty_resp = estilo[i];
        break;
      }
    }
    
    $.ajax({
            
              url: 'modulos/estilos/preview.php',
              
              data: dato,
              
              type: 'post',

               
              //Si la operación tiene éxito...
              success: function(respuesta){
                  
                  v = document.getElementsByClassName('hidden_2');

                  for (var i = 0; i < v.length; i++) {
                    v[i].style.display = 'none';
                  }

                  div = document.createElement('div');
                  div.setAttribute('id', 'theme_apro');
                  div.innerHTML = respuesta;
                  document.getElementById('carga-tema').appendChild(div);
                  document.getElementById('modal').style.display = 'block';

                  css = 'modulos/estilos/'+sty_resp.value+'/estilos.css';
                  js  = 'modulos/estilos/'+sty_resp.value+'/scrips.js';

                  link = $('#carga_css');
                  link.load(css);

              },   
              //Si la operación tiene un error
              error: function(){
                  alert("Ha ocurrido un error");
              }
          });
  }

  function volver(){
      v = document.getElementsByClassName('hidden_2');
      document.getElementById('modal').style.display = 'none';
      for (var i = 0; i < v.length; i++) {
         v[i].style.display = 'block';
      }
    
      link = $('#carga_css');
      link.load('ccc.css');
      eliminar('theme_apro', null);
  }


  function validar_user(){



      email = document.getElementsByName('email')[0].value;
      user = document.getElementsByName('usuario')[0].value;
      pass = document.getElementsByName('password')[0].value;
      

      url = "includes/consult_user.php";

      $.ajax({

          type: "POST",
          url: url,
          data: "newuser="+user+"&password="+pass+"&email="+email,
          success: function(html){

            var text = $(html).text();
            //Pulls hidden div that includes "true" in the success response
            var response = text.substr(text.length - 4);

            if(response == "true"){
              $('#sms').html('<div><div/>');

              pasar(1);

            }else {

              $('#sms').html('<div class="alert alert-warning alert-dismissable sms">'+html+'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');

            }
           
          },
          error: function(){
                 alert("Ha ocurrido un error");
          }
      });    
  }

  function sms_nombre_web(bool, sms){

    if (bool) {

      class_name = 'input_principal in_principal_cheked';
    
    }else if(bool == null){

      class_name = 'input_principal';

    }else{

      class_name = 'input_principal in_principal_error';
    
    }

    document.getElementById('nombre_web').className = class_name;
    $('#sms_name_web').html(sms);

  }


  function validar_nombre_web(nun){

      name = document.getElementById('name_web').value;
      
      if (name == '') {

        if(nun == 0){sms_nombre_web(null, '');}
        
      }else if(name.indexOf(' ') > -1){
      
        if(nun == 0){sms_nombre_web(false, 'No debe contener espacios en blanco');
                }else if(nun == 1){alert_modal('Error de Validacion', 'El nombre de la web no debe contener espacios en blanco');}

        enviar = false;
        
      }else if(/[^A-Za-z0-9-_]/.test(name)){
        
        if(nun == 0){sms_nombre_web(false, 'No debe contener caracteres especiales');
                }else if(nun == 1){alert_modal('Error de Validacion', 'El nombre de la web no debe contener caracteres especiales');}
        
        enviar = false;
        
      }else{
        url = "includes/consult_web.php";

        $.ajax({

            type: "POST",
            url: url,
            data: "name_web="+name,

            success: function(response){

              //Pulls hidden div that includes "true" in the success response
              var resp = response.substr(response.length - 4);

              if(resp == "true"){
                enviar = true;
                
                if(nun == 0){sms_nombre_web(true, 'El nombre de la web esta disponible');
                }else if(nun == 1){
                  $('#formulario').submit();
                }
               
                
              }else {

                if(nun == 0){sms_nombre_web(false, 'El nombre de la web no esta disponible');
                }else if(nun == 1){alert_modal('Error de Validacion', 'El nombre de la web no esta disponible');}
                //alert_modal('Error de Validacion', response);
                enviar = false;

              }
             
            },
            error: function(){
                  alert("Ha ocurrido un error");
                  enviar = false;
            }
        });
      }
  }

  function validar_web(){

    name = document.getElementById('name_web').value;
    
    if (name == '') {
    
      sms_nombre_web(false, 'Debes ingresar un nombre');
      enviar = false;

    }

    return enviar;
    
  }