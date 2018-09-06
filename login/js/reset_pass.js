
  
    $("#reset").click(function(){enviar_email();});
    $("#form_reset").keypress(function(){
        if(event.keyCode == 13){
        enviar_email();
        event.returnValue = false;
        }

    });

 function enviar_email(){

        var email = $("#email_user").val();

        if (email === "") {
        
            $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Por favor, ingrese su E-mail</div>");
        
        }else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email)) {

            $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>El correo ingresado no es valido</div>");

        } else {
            $.ajax({
                type: "POST",
                url: "check-user.php",
                data: "email_user=" + email,
                success: function (response) {
                    //console.log(html.response + ' ' + html.username);
                    if (response == 'true') {
                        //location.assign("../index.php")
                        $("#message").html('<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Acabamos de enviar un enlace para restablecer tu contraseña</div><div id="returnVal" style="display:none;">true</div>');
                        
                    } else {
                        $("#reset").removeAttr("disabled");
                        $("#message").html('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+response+'</div><div id="returnVal" style="display:none;">false</div>');
                    }
                },
                error: function (textStatus, errorThrown) {
                    console.log(textStatus);
                    console.log(errorThrown);
                },
                beforeSend: function () {
                    $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>");
                    $("#reset").attr('disabled','disabled');
                }
            });
        }
        return false;
    }