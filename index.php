<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<style>
	    body{
		padding-top: 20px;
	    }
	</style>
    </head>
    <body>
	<div class="container">
	    <div class="row">
		<div class="col-md-6 col-md-offset-3">
		    <div class="well well-sm">
			<form class="form-horizontal" action="" method="post">
			    <fieldset>
				<legend class="text-center">Contact us</legend>

				<!-- Name input-->
				<div class="form-group">
				    <label class="col-md-3 control-label" for="name">Name</label>
				    <div class="col-md-9">
					<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
				    </div>
				</div>

				<!-- Email input-->
				<div class="form-group">
				    <label class="col-md-3 control-label" for="email">Your E-mail</label>
				    <div class="col-md-9">
					<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
				    </div>
				</div>

				

				<!-- Form actions -->
				<div class="form-group">
				    <div class="col-md-12 text-right">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
				    </div>
				</div>
			    </fieldset>
			</form>
		    </div>
		</div>
	    </div>
	</div>
    </body>
</html>
