<?php

class Model
{
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/

	// метод выборки данных
	public function get_data()
	{
		// todo
	}
	public function db_connect()
	{
		$conn = new PDO("mysql:host=localhost;dbname=mvc", "root", "190687");
		return $conn;
	}
}