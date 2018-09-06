<div class="container-fluid">
    <div class="contenedor" >

        <div class="formu" name="form"> 

          <h3 class="centrar">Registra Tus Datos</h3>
          <br>
          
          <div class="form-group" id="usuario">
            <input type="text" class="form-control input_1 validar"  name="usuario" placeholder="Usuario (*)" required>
            <div></div>
          </div>
          <div class="form-group" id="password">
            <input type="password" class="form-control input_1 validar"  name="password" placeholder="Contraseña (*)" required>
            <div></div>
          </div>

          <div class="form-group" id="email">
            <input type="email" class="form-control input_1 validar"  name="email" placeholder="Dirección de correo (*)" required pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
            <div></div>
          </div>
          
          
          
            <div class="form-group tipo_uso" id="tipo_de_uso" >
              <label for="tipo_uso"> Mi web es para:</label>
              <div class="radio" id="tipo_uso" onclick="tipo_uso();">
                <label><input type="radio" name="tipo_uso" checked value="1"> Particular</label>
                <label><input type="radio" name="tipo_uso" value="2"> Empresa</label>
              </div>
            </div>

          <div class="form-group" id="nombre">
            <input type="text" class="form-control input_1 validar"  name="nombre" required placeholder="Nombre (*)" >
            <div></div>
          </div>
          <div class="form-group" id="apellido1">
            <input type="text" class="form-control input_1 validar"  name="apellido" required placeholder="Apellido 1 (*)" >
            <div></div>
          </div>
          
            
          
          <div class="form-group" id="apellido2">
            <input type="text" class="form-control input_1 validar"  name="apellido2" placeholder="Apellido 2" >
            <div></div>
          </div>  
          
          
          
          <select class="form-control input_1" id="categoria" name="categoria">
            <option class="disabled" disabled selected>Categoria</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
          </select>
          
          <div class="form-group" id="direccion">
            <input type="text" class="form-control input_1 validar"  name="direccion_add[]" placeholder="Direccion" >
            <div></div>
          </div>  
          

          <div id="horario" class="ocultar">
            <span>Horario de Atencion:</span>
            <div class="horario" >
               
                <div class="horario">
                  <div class="form-group-inline centrar">
                    <div class="hora">
                      <input type="time" class="form-control" name="hora" ><span>a</span>
                      <input type="time" class="form-control" name="hora" >
                    </div>

                    <div class="checkbox dias"> 
                      <label><input type="checkbox" name="dias" id="chk1" value="Lu">Lu</label>
                      <label><input type="checkbox" name="dias" id="chk2" value="Ma">Ma</label>
                      <label><input type="checkbox" name="dias" id="chk3" value="Mi">Mi</label>
                      <label><input type="checkbox" name="dias" id="chk4" value="Ju">Ju</label>
                      <label><input type="checkbox" name="dias" id="chk5" value="Vi">Vi</label>
                      <label><input type="checkbox" name="dias" id="chk6" value="Sa">Sa</label>
                      <label><input type="checkbox" name="dias" id="chk7" value="Do">Do</label>
                    </div>
                  </div>
                  
                </div>
               <div class="button_right centrar">
                  <button type="button" class="btn btn-success" onclick="add_horario();">Agregar Horario</button>
                </div>
              
                 <div id="agg_horario">
                   
                 </div>

              <div class="checkbox">
                <label><input type="checkbox" name="">Tambien Dias Festivos</label>
              </div>
            </div>
          </div>
          
          
          <div class="form-group " id="telefono">
            <div>
              <div class="div_agregable">
                <input type="text" class="form-control" placeholder="Agregar Telefono" id="telefono_add" />
              </div>
              <div class="button_div_agregable">
                <button type="button" class="btn btn-success" onclick="add_tlf('telefono_add','agg_telefono');">+</button> 
              </div>
            </div>
          
            <div id="agg_telefono">
            </div>
          </div>
          <style type="text/css">

            .div_agregable{
                display: inline-block; width: 100%; margin-right: -33px;
            }

            .button_div_agregable{
                display: inline-block; float: right; position: absolute;
            }

          </style>
          <div class="form-group ocultar" id="direccion_agg">
            <div>
              <div class="div_agregable">
                <input type="text" class="form-control" placeholder="Agregar Direccion adicional" id="direccion_add" />
              </div>
              <div class="button_div_agregable">
                <button type="button" class="btn btn-success" onclick="add_dir('direccion_add','agg_direccion');">+</button> 
              </div>
            </div>
          
            <div id="agg_direccion">
            </div>
          </div>
      
          <div class="form-group" id="redes">
            <div  class="">
              <div class="div_agregable">
                
                  <div style="width: 40%; display: inline-block;">
                    <select class="form-control" id="selet" name="selet1">
                      <option value="Facebook">Facebook</option>
                      <option value="Twiter">Twiter</option>
                      <option value="Linkedin">Linkedin</option>
                    </select>
                  </div>
                  <div style="width: 59%; display: inline-block; margin-right: -20px;">
                    <input type="text" class="form-control"  id="red" placeholder="Introduce Red Social" />
                  </div>
                
              </div>
                <div class="button_div_agregable">
                  <button type="button" class="btn btn-success" onclick="add_red('red','agg_red')">+</button> 
                </div>
            </div>

            <div id="agg_red" ></div>
          </div>
          <br>
          <div id='sms'></div>
          <br>
          <div class="button_right">
            <button  type="button" class="btn btn-success centrar" onclick="validar();">Siguiente</button>
          </div>


          
        </div>
    </div>
</div>