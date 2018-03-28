$(document).ready(function(){

  $('#send').click(function(){

      $.ajax({
          url: "../enter.php",
          type: "POST",
          data:({send: 'send'}),
          dataType: "html",
          success: function(data){
            alert(data);
          }
        });

    });

});
