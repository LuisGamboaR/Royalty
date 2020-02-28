/**************************************\
*             VALIDACIONES             *
/**************************************/
/*    ESTILOS & VALIDACIONES EXTRAS   */
/**************************************/


$.validator.setDefaults({

  highlight: function(element){
    $(element)
      .closest(".form-control")
      .addClass('is-invalid')
  },
  unhighlight: function(element){
    $(element)
      .closest(".form-control")
      .removeClass('is-invalid')
      .addClass('is-valid');
  }
}); 

jQuery.validator.addMethod("notNumber", function(value, element, param) {
  var reg = /[0-9]/;
  if(reg.test(value)){
        return false;
  }else{
          return true;
  }
}, "Los números no son permitidos");


jQuery.validator.addMethod("lettersonly", function(value, element) 
{
return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Solo son permitidos las letras y los espacios");



 $("#formulario_registro_clientes").validate({
  
       rules:{
           nombre:{
                required: true, 
                notNumber: true,
                lettersonly: true,
                minlength: 3
           },
           rif:{
                required: true,
                minlength: 1
           },
           direccion:{
                required: true, 
                alphanumeric: true,
                minlength: 1
           },
           telefono:{
             required: true,
             number: true,
             minlength: 11
           },
           correo:{
             required: true,
             email: true,
             minlength: 1
           }      
       },

       messages:{

         nombre:{
           required: 'Por favor ingresa el nombre del cliente',
           minlength: 'Por favor ingresa mas de 3 caracteres',
           lettersonly: 'Solo se permiten letras'
         },
         rif:{
             required: 'Por favor ingresa el rif del cliente',
             minlength: 'Por favor ingresa al menos 1 caracter'
           },
         direccion:{
             required: 'Por favor ingresa la dirección del cliente',
             minlength: 'Por favor ingresa al menos 1 caracter'
           },
           telefono:{
             required: 'Por favor ingresa el numero de teléfono',
             minlength: 'Por favor ingresa un numero de teléfono valido (11 digitos)',
             number: 'Solo se permiten números'
           },
           correo:{
             required: 'Por favor ingresa el correo del cliente',
             minlength: 'Por favor ingresa al menos 1 caracter',
             email: 'Por favor ingresa un correo valido'
           },
       }


 });



 $("#formulario_registro_productos").validate({
  
  rules:{

      nombre:{
           required: true, 
           minlength: 3,
           lettersonly: true
      },
      stock_actual:{
           required: true,
           number: true,
           minlength:1
      },
      descripcion:{
           required: true, 
           lettersonly: true,
           minlength: 1
      },
     precio:{
        required: true,
        number: true,
        minlength: 1
      },   
  },

  messages:{

    nombre:{
      required: 'Por favor ingresa el nombre del producto',
      minlength: 'Por favor ingresa mas de 3 caracteres',
      lettersonly: 'Solo se permiten letras'
    },
    stock_actual:{
        required: 'Por favor ingresa el rif del producto',
        number: 'Solo se permiten números',
        minlength: 'Por favor ingresa al menos 1 digito'
      },
    descripcion:{
        required: 'Por favor ingresa la descripción del producto',
        minlength: 'Por favor ingresa al menos 1 caracter',
        lettersonly: 'Solo se permiten letras'

      },
     precio:{
        required: 'Por favor ingresa el precio del producto',
        minlength: 'Por favor ingresa al menos 1 digitos)',
        number: 'Solo se permiten números'
      },
  }


});






 $("#formulario_registro_gastos").validate({
  
       rules:{

           cantidad:{
                required: true, 
                number: true,
                minlength: 1
           }, 
           descripcion:{
                required: true, 
                alphanumeric: true,
                minlength: 1
           }, 
       },

       messages:{

         cantidad:{
             required: 'Por favor ingresa la cantidad',
             number: 'Solo se permiten números',
             minlength: 'Por favor ingresa al menos 1 digito'
           },
           descripcion:{
           required: 'Por favor ingresa la descripcion del producto',
           minlength: 'Por favor ingresa mas de 3 caracteres'
         },
          

       }


 });

 

$("#formulario_registro_usuarios").validate({
  
  rules:{


      email:{
      }, 
      name:{
        required: true,
        minlength: 3,
      },

      lastname:{
        required: true,
        minlength: 3,
      },
      identification:{
        required: true,
        number: true,
        minlength: 7
      },
      password:{
        required: true,
        minlength: 5,
     
      },
      password_confirmation:{
        required: true,
        minlength: 5,
     
      },
  },

  messages:{

      email:{
        required: 'Por favor ingresa un correo',
        email: 'Por favor ingresa un correo valido'
      },
      name:{
        required: 'Por favor ingresa un nombre',
        minlength: 'Por favor ingresa al menos 3 caracteres',
      },

      identification:{
        required: 'Por favor ingresa una cedula',
        minlength: 'Por favor ingresa una cedula valida de al menos 7 digitos',
        number: 'Solo se permiten numeros'
     
      },

      password:{
        required: 'Por favor ingresa un contraseña',
        minlength: 'Por favor ingresa una contraseña de 5 caracteres o superior'
     
      },
      password_confirmation:{
        required: 'Por favor confirma la contraseña',
        minlength: 'Por favor ingresa una contraseña de 5 caracteres o superior'
     
      },
      lastname:{
        required: 'Por favor ingresa un apellido',
        minlength: 'Por favor ingresa al menos 3 caracteres',
      },
    },
     




});

