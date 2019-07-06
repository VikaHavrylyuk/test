<style>
table {
   margin: 20px;
}
</style>

<center>
	<h1>Таблиця множення</h1>

	<table>
		<? for ($a=2, $c = 0; $a <= 9; $a++, $c++): ?>
			<? if ($c == 0) echo "<tr>"; ?>
			<td>
				<? include 'table.php';?>
			</td>
			<? if ($c == 3):?>
				<?="</tr>";?>
				<? $c = -1; ?>
			<? endif; ?>
		<? endfor;?>
			
	</table>
	
</center>