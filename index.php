<?php include "header.php" ?>

<body>
<div class="container main">
	<div class="row menu">
		<ul>
			<li><a href="#">Главная</a></li>
			<li><a href="#">О нас</a></li>
			<li><a href="#">Заказать машину</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
	</div>
</div>
<div class="container maincontent">
	<div class="row">
		<div class="col-md-4">

		</div>
		<div class="col-md-8">
			<form class="form-horizontal order">
  <div class="form-group">
		<label for="from">Адрес отправления</label>
		<input type="text" name="from" value="" class="form-control from" placeholder="Например: улица Чкалова 17">
  </div>
	<div class="form-group">
		<label for="from">На какое время</label>
		<select class="form-control">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select> <span>:</span>
		<select class="form-control">
		  <option>1</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select>
  </div>
  <div class="form-group">
		<label for="to">Адрес прибытия</label>
		<input type="text" name="to" value="" class="form-control to" placeholder="Например: проулок Старовка 15">
  </div>

	<button type="button" name="button" class="priceorder">Узнать цену</button>
</form>
<div id="map" style="width: 600px; height: 400px"></div>
		</div>
	</div>
</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
