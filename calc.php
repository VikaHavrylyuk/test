<center>
	<h1>Калькулятор</h1>
<form method="POST">
    <input type="text" name="x1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
    </select>
    <input type="text" name="x2">
    <input type="submit" value="Посчитать" name="sub">
</form>
</center>


<? 

if (isset($_POST['sub'])) {
	if ($_POST['operation'] == "+"){
		$res = $_POST['x1'] + $_POST['x2'];
	}
	
	if ($_POST['operation'] == "-"){
		$res = $_POST['x1'] - $_POST['x2'];
	}
	
	if ($_POST['operation'] == "*"){
		$res = $_POST['x1'] * $_POST['x2'];
	}
	
	if ($_POST['operation'] == "/"){
		$res = $_POST['x1'] / $_POST['x2'];
	}
	
	echo '<center>';
	echo '<br>';
	echo "Результат обрахунку:";
	echo '<br>';
	$expression = $_POST['x1'] . ' ' . $_POST['operation'] . ' ' . $_POST['x2'] . ' = ';
	echo $expression . $res;
	echo '</center>';
}
?>