<?php include "header.php" ?>

<body>
<div class="container main">
	<div class="row menu">
		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="?page=about">О нас</a></li>
			<li><a href="?page=taxi">Заказать машину</a></li>
			<li><a href="?page=contacts">Контакты</a></li>
		</ul>
	</div>
</div>
<div class="container maincontent">
	<?php
	if($_GET['page']){
		switch($_GET['page']){
			case 'about': include "include/about.php";break;
			case 'taxi': include "include/taxi.php";break;
			case 'contacts': include "include/contacts.php";break;
		}

	}else{
		include "include/index.php";
	}

	?>
</div>
<div id="parentpop">
	<div class="popup">
<h2>Регистрация</h2>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputsurname" class="col-sm-2 control-label">Фамилия</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputsurname" placeholder="Какая у вас фамилия?" placeholder>
			<p class="showerr err1"></p>
    </div>
  </div>
	<div class="form-group">
    <label for="inputame" class="col-sm-2 control-label">Имя</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputname" placeholder="Какая у вас фамилия?" placeholder>
			<p class="showerr err2"></p>
    </div>
  </div>
	<div class="form-group">
    <label for="inputmobile" class="col-sm-2 control-label">Телефон</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputmobile" placeholder="+38(095)123 45 69" placeholder>
			<p class="showerr err3"></p>
    </div>
  </div>
	<div class="form-group">
    <label for="inputpassword" class="col-sm-2 control-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputpassword" placeholder="" placeholder>
			<p class="showerr err2"></p>
    </div>
  </div>
	<div class="form-group">
    <label for="inputpassword" class="col-sm-2 control-label">Повторите Пароль</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputpassword" placeholder="" placeholder>
			<p class="showerr err2"></p>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-default btnregist">Зарегистрироваться</button>
    </div>
  </div>
</form>



<a class="close" title="Закрыть" href="#close"></a>
</div>
</div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
