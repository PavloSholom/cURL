<?php
  include '/request.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">

    <title>cURL</title>
  </head>
  <body >
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>

    <div class="container">
          <div class="row centered-form">
          <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          	<div class="panel panel-default">
          		<div class="panel-heading">
  			    		<h3 class="panel-title">PHP cURL request</h3>
  			 			</div>
  			 			<div class="panel-body">

  			    		<form id="form">
  			    			<div class="row">
  			    				<div class="col-xs-6 col-sm-6 col-md-6">
  			    					<div class="form-group">
  			                <input type="text" name="first_name" id="first_name" class="form-control input-sm form_input" placeholder="First Name">
  			    					</div>
  			    				</div>
  			    				<div class="col-xs-6 col-sm-6 col-md-6">
  			    					<div class="form-group">
  			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm form_input" placeholder="Last Name">
  			    					</div>
  			    				</div>
  			    			</div>

  			    			<div class="form-group">
  			    				<input type="url" name="url" id="url" class="form-control input-sm form_input" placeholder="URL">
  			    			</div>

                	<div class="form-group">
                    <label>Request method:</label>
                    <div class="radio_row">
                      <div class="radio_group">
                        <input  type="radio" name="optradio" value="GET" class="form_input" checked>
                        <label class="input_label" for="radio1">GET</label>
                      </div>
                      <div class="radio_group">
                        <input  type="radio" name="optradio" value="POST" class="form_input">
                        <label class="input_label" for="radio2">POST</label>
                      </div>
                    </div>
                  </div>


                  <div class="select_group">

                      <div class="form-group">

                          <select name="inputs" id="inputs_data" multiple="multiple">
                            <option value="1">Area, Ethnic</option>
                             <option value="2">123456</option>
                             <option value="3">rg1r1gr1</option>
                             <option value="4">Science</option>
                             <option value="5">Engineering</option>
                          </select>

                      </div>

                      <div class="form-group">
                          <select name="inputs" id="inputs_" multiple="multiple">
                          </select>
                      </div>

                  </div>






                  <div class="button_row">
                    <label class="input_label" for="submit_send">Sending by submit button (without coocies):</label>
                    <input id="submit_send" type="submit" value="Send" class="input-md">
                  </div>

                  <div class="button_row">
                    <label class="input_label" for="button_send">Sending by PHP cURL:</label>
                    <input id="button_send" type="button" value="Send" class="input-md">
                  </div>


  			    		</form>
  			    	</div>
  	    		</div>
      		</div>
      	</div>


      </div>


      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
      <script src="/js/request.js"></script>
  </body>
</html>
