

$(document).ready(function(){

	//---------------заповнення електора куками--------------------
	$.ajax({
		url: "../enter.php",
		type: "GET",
		data:({cookie_list: 'cookie_list'}),
		dataType: "html",
		success: funcMultiselect 
	  });
	 
	$('#url,#first_name,#last_name').focus(function(){		
		$(this).val("");
	});
	
	
	function funcMultiselect(data){	  
		data = JSON.parse(data);    	
		$('#inputs_data').append(data);
	  
		$('[id^="inputs_"]').multiselect({
		numberDisplayed: 1,
		includeSelectAllOption: true,
		allSelectedText: 'All are selected',
		nonSelectedText: 'Nothing is selected',
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

		//console.log(this);

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
	}
	//---------------/заповнення електора куками--------------------
  


  $('#submit_send').click(function(){

    $('#form').attr('action',$('#url').val());
    $('#form').attr('method',$("input[name='optradio']:checked").val());	

    });

    $('#button_send').click(function(){	
		// var selected_cookies = $(".multiselect-container  li.active");
		var cookies_fields = '';
		$('.multiselect-container  li.active label').each(function(){
			
			/*console.log($(this));
			console.log($(this).text());
			console.log($(this).children('input').attr('value'));
			
			cookie_fields += $(this).children('input').attr('value') +'='*/			
			
		});
		var fields = '';
		$('#form input').each(function(){
			console.log($(this));			
			console.log($(this).attr('name'));
			console.log($(this).val());
			
				
			
		});
		
		
		//user_id=12&name=Jim&age=20
		
		
	
        $.ajax({
            url: "../enter.php",
            type: "POST",
            data:({button_send: 'button_send', first_name: $('#first_name').val(), last_name: $('#last_name').val(), url: $('#url').val(), method: $("input[name='optradio']:checked").val()}),
            dataType: "html",
            success: function(data){              
              alert(data);              
            }
          });

      });
});
