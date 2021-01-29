<?php 
if (isset($_POST["index"])) {
	
	$connect=new mysqli('localhost','root','root','hex') or die("Не подключилось..");
	$result=$connect->query("INSERT INTO `hex_status` (`id`, `index`, `status`) VALUES (NULL, '{$_POST[`index`]}', '{$_POST[`status`]}');");
	if ($result) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error('localhost') . '</p>';
    }
}
 ?>