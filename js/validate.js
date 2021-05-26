$().ready(function(){
  $("#anmeldung-form").validate({
    rules: {
      name: {
        required: true,
      },
      lastname: {
        required: true,
      },
      email: {
        required: true,
        remote: {
          url: "php/ajax_handler.php",
          type: "get",
          },
        data: {
          email: function(){
            return $('#email').val(),
            }
        },
      agb: {
        required: true,
      },
      password: {
        required: true,
        minlength: 6,
      },
      password2:{
        required: true,
        minlength: 6,
        equalTo: "#password",
      },



      messages: {
        name: {
          required: "Please enter your firstname."
        },
        lastname:{
          required: "Pleas enter your lastname."
        },
        agb: {
          required: "Plead accept the terms",
        },


      }
    }
  })
})
