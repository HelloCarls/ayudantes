    <section class="main">
      <div class="container">    
        <div class="description">
          <h1>Construye tu Sitio en Tres Simples Pasos...</h1>
        </div>
             
        <form class="princ form-group" action="?mod=new-page" method="post" id="form_principal" autocomplete="off" onsubmit="return validar_web()">
        <div class="input_principal" id="nombre_web">
          <input type="text" class="form-control" name="nombre_web" id="name_web" placeholder="Ingresa el nombre de tu web" onkeyup="validar_nombre_web(0)">
          <p id="sms_name_web"> </p><i class="icon"></i>
        </div>
          <button type="submit" class="btn-lg btn-success">Crear Web</button>  

        </form>
        
    </section>
    <style type="text/css">
      
      .input_principal{
        max-width: 450px;
        margin: auto;
        height: 70px;
        color: #fff;
        border-radius: 7px; 
      }

      .input_principal > p{
        text-align: left;
        margin: 0px;
        padding: 8px;
        width: 90%;
        display: inline-block;

      }

      .in_principal_error{
        background: #f4433691;
      }
      
      .in_principal_error .icon:before{
        font-family: 'Glyphicons Halflings';
        content: "\e014";
      }

      .in_principal_cheked{
        background: #5cb85bc2;
      }
      
      .in_principal_cheked .icon:before{
        font-family: 'Glyphicons Halflings';
        content: "\e013";
      }

    </style>
