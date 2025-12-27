<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Определить выполнен ли план по продаже товара за день.</h1>
		<form method="POST">
			<div class="form-group">
				<label for="exampleInputB">План продажи (в рублях)</label>
				<input type="number" class="form-control" name="A" id="exampleInputB" placeholder="Введите значение">
				<label for="exampleInputB">Количество проданного товара</label>
				<input type="number" class="form-control" name="B" id="exampleInputB" placeholder="Введите значение">
				<label for="exampleInputB">Цена товара</label>
				<input type="number" class="form-control" name="C" id="exampleInputB" placeholder="Введите значение">
			</div>
			<p></p>
			<div>
				<button type="submit" class="btn btn-primary" name="submit" id="button_rez">Вычислить</button>
			</div>
		</form>
		<div class="mydiv1">
			<h2>
				<?php
					if (isset($_POST['submit'])){
						$A = floatval($_POST['A']);
						$B = floatval($_POST['B']);
						$C = floatval($_POST['C']);
						if (($A <= 0) || ($B < 0) || ($C <= 0)){
							echo "Значения не могут быть отрицательными и не могут равняться нулю";
						}else if($A <= ($C * $B)){
							echo "План выполнен";
						}else{
							echo "План не выполнен";
						}
					}
				?>
			</h2>
		</div>
    </main>

    <footer class="footer">

    </footer>
	
</body>

</html>