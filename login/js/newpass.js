$(document).ready(function(){

  $("#usersignup").submit(function(){

    var password = $("#password1").val();
    var password2 = $("#password2").val();


    if((password == "")) {
      $("#message").html("<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Porfavor Ingrese su Nueva Contraseña</div>");
    }
    else {
      $.ajax({
        type: "POST",
        url: "newpass.php",
        data: "password1="+password+"&password2="+password2+"&key="+resetkey+"&id="+resetid,
        success: function(html){

			var text = $(html).text();
			//Pulls hidden div that includes "true" in the success response
			var response = text.substr(text.length - 4);

          if(response == "true"){

			$("#message").html(html);

					$('#submit').hide();
			}
		else {
			$("#message").html(html);
			$('#submit').show();
			}
        },
        beforeSend: function()
        {
          $("#message").html("<p class='text-center'><img src='images/ajax-loader.gif'></p>")
        }
      });
    }
    return false;
  });
});
