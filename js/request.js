$(document).ready(function(){

  $('#button_send').click(function(){

      $.ajax({
          url: "../enter.php",
          type: "GET",
          data:({button_send: 'button_send', first_name: $('#first_name').val(), last_name: $('#last_name').val(), url: $('#url').val()}),
          dataType: "html",
          success: function(data){
            alert(data);
          }
        });

    });

});
