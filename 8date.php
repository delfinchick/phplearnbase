<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Функция date</title>
</head>

<body>

<?php 

$d = date("r");//Присваиваем переменной текущую дату в выбранном формате
//$d = date("d-m-Y");
echo "Сегодня: $d";

?>

</body>
</html>

<!-- date()
Возвращает строку, отформатированную в соответствии со строкой формата.
В строке формата распознаются следующие символы: 
•	a - "am" или "pm" 
•	A - "AM" или "PM" 
•	B - время Swatch Internet 
•	d - день (число) месяца, 2 цифры с ведущим нулём, если необходимо; т. е. от "01" до "31" 
•	D - день недели, буквенный, 3 буквы; например, "Fri" 
•	F - месяц, буквенный, long; например, "January" 
•	g - час, 12-часовой формат без ведущих нулей; т.е. от "1" до "12" 
•	G - час, 24-часовой формат без ведущих нулей; т.е. от "0" до "23" 
•	h - час, 12-часовой формат; т.е. от "01" до "12" 
•	H - час, 24-часовой формат; т.е. от "00" до "23" 
•	i - минуты; т.е. от "00" до "59" 
•	I (заглавная i) - "1", если Daylight Savings Time, "0" - в противном случае. 
•	j - день (число) месяца без ведущих нулей; т.е. от "1" до "31" 
•	l ('L' в нижнем регистре) - день недели, буквенный, long; например, "Friday" 
•	L - boolean, указывающее, високосный ли год; т.е. "0" или "1" 
•	m - месяц; т.е. от "01" до "12" 
•	M - месяц, буквенный, 3 буквы; например, "Jan" 
•	n - месяц без ведущих нулей; т.е. от "1" до "12" 
•	O - Разница с временем по Гринвичу, в часах; например, "+0200" 
•	r - RFC 822 формат даты; например, "Thu, 21 Dec 2000 16:01:07 +0200" (введён в PHP 4.0.4) 
•	s - секунды; т.е. от "00" до "59" 
•	S - простой английский суффикс для дня (числа) месяца, 2 символа; т.е. "st", "nd", "rd" или "th" 
•	t - количество дней в данном месяце; т.е. от "28" до "31" 
•	T - установка Timezone/Часовой пояс на данной машине; например, "EST" или "MDT" 
•	U - секунды эпохи Unix Epoch (начиная с January 1 1970 00:00:00 GMT) 
•	w - день недели, числовой, т.е. от "0" (Sunday) до "6" (Saturday) 
•	W - ISO-8601 номер недели в году, недели начинаются с понедельника/Monday (введено в PHP 4.1.0) 
•	Y - год, 4 цифры; например, "1999" 
•	y - год, 2 цифры; например, "99" 
•	z - день года; т.е. от "0" до "365" 
•	Z - смещение часового пояса, в секундах (т.е. от "-43200" до "43200"). Смещение часовых поясов к западу от UTC всегда отрицательное, а для поясов в востоку от UTC - всегда положительное.
Нераспознаваемые символы в строке формата печатаются как есть. -->