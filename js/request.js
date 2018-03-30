

$(document).ready(function(){

	// $('#url,#first_name,#last_name').focus(function(){
	// 	$(this).val("");
	// });

	//---------------заповнення електора куками--------------------
	$.ajax({
		url: "../index.php",
		type: "GET",
		data:({cookie_list: 'cookie_list'}),
		dataType: "html",
		success: funcMultiselect
	});

	$.ajax({
		url: "../index.php",
		type: "GET",
		data:({session_list: 'session_list'}),
		dataType: "html",
		success: funcMultiselect
	  });

	function funcMultiselect(data){

		data = JSON.parse(data);

		if (data[0]=='#cookie_list') $('#cookie_list').append(data[1]);
		if (data[0]=='#session_list') $('#session_list').append(data[1]);

		$(data[0]).multiselect({
		numberDisplayed: 1,
		includeSelectAllOption: true,
		allSelectedText: 'All are selected',
		nonSelectedText: 'Nothing is selected',
		selectAllValue: 'all',
		selectAllText: 'Select all',
		unselectAllText: 'Unselect all',
		onSelectAll: function(checked) {
			var all = $(data[0]+' ~ .btn-group .dropdown-menu .multiselect-all .checkbox');
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

			var cookies_fields = '';
			$('#cookie_list + div.btn-group li.active:not(:first-child) label ').each(function(){
				 cookies_fields += $.trim($(this).children('input').attr('value')) +'='+ $.trim($(this).text()) +'&';
			});
			cookies_fields = cookies_fields.slice(0, - 1).replace(/ /g,'+');
			// alert(cookies_fields);

			var session_fields = '';
			$('#session_list + div.btn-group li.active:not(:first-child) label').each(function(){
				 session_fields +=  $.trim($(this).children('input').attr('value')) +'='+ $.trim($(this).text())+'&';
			});
			session_fields = session_fields.slice(0, - 1).replace(/ /g,'+');
			// alert(session_fields);

			var fields = '';
			$('#form  input:not(.multiselect-container input, [type=button],[type=submit],[type=radio])').each(function(){
				console.log($(this).attr('name'));
				console.log($(this).val());
				 fields +=  $.trim($(this).attr('name')) +'='+ $.trim($(this).val())+'&';
			});
			fields = fields.slice(0, - 1).replace(/ /g,'+');
			// alert(fields);

      $.ajax({
          url: "../index.php",
          type: "POST",
          data:({button_send: 'button_send', method: $("input[name='optradio']:checked").val(), url: $('#url').val(),
								fields: fields, cookies_fields: cookies_fields, session_fields: session_fields}),
          dataType: "html",
          success: function(data){
            alert(data);
          }
        });

    });

});
