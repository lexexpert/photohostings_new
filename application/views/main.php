<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>photohostings.com</title>
	<style>
		.well {
			min-height: 20px;
			padding: 19px;
			margin-bottom: 20px;
			margin-top: 20px;
			background-color: #f5f5f5;
			border: 1px solid #e3e3e3;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
			-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
		}
		.fp {
			font-weight: bold;
		}
		label {
			display: block;
			margin-bottom: 5px;
		}
		label, input, button, select, textarea {
			font-size: 14px;
			font-weight: normal;
			line-height: 20px;
		}
		textarea, input[type="text"], input[type="file"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
			background-color: #fff;
			border: 1px solid #ccc;
			-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
			-webkit-transition: border linear .2s,box-shadow linear .2s;
			-moz-transition: border linear .2s,box-shadow linear .2s;
			-o-transition: border linear .2s,box-shadow linear .2s;
			transition: border linear .2s,box-shadow linear .2s;
		}

		select, textarea, input[type="text"], input[type="file"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
			display: inline-block;
			height: 20px;
			padding: 4px 6px;
			margin-bottom: 10px;
			font-size: 14px;
			line-height: 20px;
			color: #555;
			vertical-align: middle;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
		}
		.btn-primary {
			color: #fff;
			text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
			background-color: #006dcc;
			background-image: -moz-linear-gradient(top,#08c,#04c);
			background-image: -webkit-gradient(linear,0 0,0 100%,from(#08c),to(#04c));
			background-image: -webkit-linear-gradient(top,#08c,#04c);
			background-image: -o-linear-gradient(top,#08c,#04c);
			background-image: linear-gradient(to bottom,#08c,#04c);
			background-repeat: repeat-x;
			border-color: #04c #04c #002a80;
			border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff0088cc',endColorstr='#ff0044cc',GradientType=0);
			filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
		}
		.btn {
			border-color: #c5c5c5;
			border-color: rgba(0,0,0,0.15) rgba(0,0,0,0.15) rgba(0,0,0,0.25);
		}
		.btn {
			display: inline-block;
			padding: 4px 12px;
			margin-bottom: 0;
			font-size: 14px;
			line-height: 20px;
			color: #333;
			text-align: center;
			text-shadow: 0 1px 1px rgba(255,255,255,0.75);
			vertical-align: middle;
			cursor: pointer;
			background-color: #f5f5f5;
			background-image: -moz-linear-gradient(top,#fff,#e6e6e6);
			background-image: -webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
			background-image: -webkit-linear-gradient(top,#fff,#e6e6e6);
			background-image: -o-linear-gradient(top,#fff,#e6e6e6);
			background-image: linear-gradient(to bottom,#fff,#e6e6e6);
			background-repeat: repeat-x;
			border: 1px solid #bbb;
			border-color: #e6e6e6 #e6e6e6 #bfbfbf;
			border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
			border-bottom-color: #a2a2a2;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			border-radius: 4px;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff',endColorstr='#ffe6e6e6',GradientType=0);
			filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
			-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
			-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
			box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
		}
		input, button, select, textarea {
			font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		}

		select, input[type="file"] {
			height: 20px;
			line-height: 0px;
			margin-top: 10px;
		}


	</style>

</head>
<body>

<div id="container">
	<h1 style="font-size: 22px; font-weight: bold; color: #009900; text-transform: uppercase">photohostings.com - <span style="font-weight: normal; color: #0000FF; text-transform: lowercase">Хостинг фотографий</span></h1>

	<? if($error){echo $error;} ?>
	<div id="body">
		<div class="tab-pane active well">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="file" id="realfileinput" name="photo" class="span3" />
				<input type="submit" value="Загрузить" class="btn btn-primary" />
			</form>
		</div>

		<div class="well">
			<label class="fp">6 Прямая ссылка на картинку<br><input type="text" value="<? if(isset ($direct_link)){echo $direct_link;}?>" size="100" class="code_fields"></label>
			<label class="fp">BB-код картинки<br><input type="text" value="<? if(isset ($bb_link)){echo $bb_link;}?>" size="100" class="code_fields"></label>
			<label class="fp">HTML-код картинки<br><input type="text" value="<? if(isset ($img_link)){echo $img_link;}?>" size="100" class="code_fields"></label>
			<br>
		</div>


	</div>


</div>

</body>
</html>
