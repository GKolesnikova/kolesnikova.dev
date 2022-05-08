<?php 

function myAutoload($className) {
	$classPath =  __DIR__ . '/' . str_replace('\\', '/', $className) .'.php';
	if (file_exists($classPath)) {
		require_once $classPath;
	}
}

spl_autoload_register('myAutoload');

/*
MVC
Model Все классы работающие с данными (получение/сохраниен/изменение usw), что работает с данными
View  Все классы формирующие то, что будет отдано клиенту (HTML usw)
Controller Все классы, которые на ОСНОВЕ запроса от клиента понимают, что ему нужно и на основе этого получают трубуемые данные, обращаясь к Model. Эти полученные данные передает во View. View формирует результат, который возворащается Controller-у, а тот в свою очередь возвращает это клиенту.
*/