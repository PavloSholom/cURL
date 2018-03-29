// заповнення електора куками
$.ajax({
    url: "../enter.php",
    type: "GET",
    data:({button_send: 'button_send', first_name: $('#first_name').val(), last_name: $('#last_name').val(), url: $('#url').val(), method: $("input[name='optradio']:checked").val()}),
    dataType: "html",
    success: function(data){
      data = JSON.parse(data);
      $('.multiselect-container').append(data[0]);
      $('#inputs_data').append(data[1]);
    }
  });

$(document).ready(function(){



  $('[id^="inputs_"]').multiselect({
    numberDisplayed: 1,
    includeSelectAllOption: true,
    allSelectedText: 'All cookies selected',
    nonSelectedText: 'No cookies selected',
    selectAllValue: 'all',
    selectAllText: 'Select all',
    unselectAllText: 'Unselect all',
    onSelectAll: function(checked) {
      var all = $('[id^="inputs_"] ~ .btn-group .dropdown-menu .multiselect-all .checkbox');
      all
      // get all child nodes including text and comment
        .contents()
        // iterate and filter out elements
        .filter(function() {
          // check node is text and non-empty
          return this.nodeType === 3 && this.textContent.trim().length;
          // replace it with new text
        }).replaceWith(checked ? this.unselectAllText : this.selectAllText);
    },
    onChange: function() {
        // debugger;
      var select = $(this.$select[0]);
      var dropdown = $(this.$ul[0]);
      var options = select.find('option').length;
      var selected = select.find('option:selected').length;
      var all = dropdown.find('.multiselect-all .checkbox');
      all
      // get all child nodes including text and comment
        .contents()
        // iterate and filter out elements
        .filter(function() {
          // check node is text and non-empty
          return this.nodeType === 3 && this.textContent.trim().length;
          // replace it with new text
        }).replaceWith(options === selected ? this.options.unselectAllText : this.options.selectAllText);
    }
  });


  $('#submit_send').click(function(){


    $('#form_data').attr('action',$('#url').val());
    $('#form_data').attr('method',$("input[name='optradio']:checked").val());

    });

    $('#button_send').click(function(){
console.log($("#inputs_data :selected").text());

        $.ajax({
            url: "../enter.php",
            type: "GET",
            data:({button_send: 'button_send', first_name: $('#first_name').val(), last_name: $('#last_name').val(), url: $('#url').val(), method: $("input[name='optradio']:checked").val()}),
            dataType: "html",
            success: function(data){
              // console.log('data1: '+data);
              // data = JSON.parse(data);
              // console.log('data2: '+data);
              // console.log('data2: '+data[0]);
              // console.log('data2: '+data[1]);
              // $.each(data, function(key, value) {
              //   console.log( 'Свойство: ' +key + '; Значение: ' + value );
              //
              //   $('#inputs_data').append(item);
              // });
              alert(data);
              $('#inputs_data').append(data);
            }
          });

      });
});
