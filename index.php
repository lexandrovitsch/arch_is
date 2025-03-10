<html>
	<head>
		<title>Страница лаб. работ (Арх. ИС)</title>
	</head>
	<body>
		<p style="font-weight: bold; color: red;">Лабораторная работа №1</p>
		<?php
			echo 'Выполнил студент Прохоров А.А.<br>';
			echo '------------------------------<br>';
			echo "Вычисление площади сегмента круга по заданному углу и радиусу круга<br>";
			$r=5.2;
			$alpha=10;
			
			if($r<=0 or $alpha<=0) {
				echo "Радиус или угол <= 0";
			}
			else {
				echo "Радиус круга = $r <br>";
				echo "Угол = $alpha <br>";
				echo "S = ", 0.5*pow($r, 2)*($alpha-sin($alpha)), "<br>";
			}

			echo '------------------------------<br>';
			echo 'Изменение значений параметров<br>';
			echo '------------------------------<br>';
			$r=$r+10;
			$alpha*=4;

			if($r<=0 or $alpha<=0) {
				echo "Радиус или угол <= 0";
			}
			else {
				echo "Радиус круга = $r <br>";
				echo "Угол = $alpha <br>";
				echo "S = ", 0.5*pow($r, 2)*($alpha-sin($alpha)), "<br>";
			}
		?>
	</body>
</html>