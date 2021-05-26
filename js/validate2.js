$().ready(function(){
  $('#anmeldung-form').validate({
    rules: {
      name: {
        required: true,
        minlength: 3,
      }
    },


    messages: {
      name: {
        required: "Insert Name."
      }
    }
  })
})
