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


    <div class="col-sm-4">
      <div class="form-group">
        <label for="cURL" class="cols-sm-2 ">cURL-запит</label>
        <div class="">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-send" aria-hidden="true"></i></span>
            <input type="text" class="form-control" name="cURL" id="cURL" placeholder="Введіть запит"/>
          </div>
        </div>
      </div>
      <div class="form-group">
  			<button id="send" type="button" class="btn btn-primary btn-lg">Надіслати</button>
  		</div>
    </div>

  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="/js/request.js"></script>
  </body>
</html>
