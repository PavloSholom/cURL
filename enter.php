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


    <div class="container">
          <div class="row centered-form">
          <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          	<div class="panel panel-default">
          		<div class="panel-heading">
  			    		<h3 class="panel-title">PHP cURL request</h3>
  			 			</div>
  			 			<div class="panel-body">
  			    		<form>
  			    			<div class="row">
  			    				<div class="col-xs-6 col-sm-6 col-md-6">
  			    					<div class="form-group">
  			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
  			    					</div>
  			    				</div>
  			    				<div class="col-xs-6 col-sm-6 col-md-6">
  			    					<div class="form-group">
  			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
  			    					</div>
  			    				</div>
  			    			</div>

  			    			<div class="form-group">
  			    				<input type="url" name="url" id="url" class="form-control input-sm" placeholder="Url">
  			    			</div>

                	<div class="form-group">
                    <label>Request method:</label>
                    <div class="input-droup">
                      <label class="radio-inline"><input type="radio" name="optradio">GET</label>
                      <label class="radio-inline"><input type="radio" name="optradio">POST</label>
                    </div>

                  </div>

                  <div class="row">
                    <label class="col-sm-6" for="submit_send">Sending by submit button</label>
                    <div class="col-sm-6">
                      <input id="submit_send" type="submit" value="Send" class="input-md">
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-6" for="submit_send">Sending by PHP cURL</label>
                    <div class="col-sm-6">
                        <input id="button_send" type="button" value="Send" class="input-md">
                    </div>
                  </div>


  			    		</form>
  			    	</div>
  	    		</div>
      		</div>
      	</div>
      </div>


  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="/js/request.js"></script>
  </body>
</html>
