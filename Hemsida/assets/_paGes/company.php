<?php
$id = secure($_GET['id']);
if(empty($id)){
	?>
	<div class="company">
		<table>
			<tr>
				<td><strong>#</strong></td>
				<td><strong>Namn</strong></td>
				<td><strong>Pengar</strong></td>
			</tr>
			<tr>
				<td>1</td>
				<td><a href="?page=company&id=1">Webbits</a></td>
				<td>0 SEK</td>
			</tr>
		</table>
	</div>
	<?php
} else {
	?>
	<div class="company">
		<table>
			<tr>
				<td><strong>Namn</strong></td>
				<td>Webbits</td>
			</tr>
			<tr>
				<td><strong>Ägare</strong></td>
				<td>Folke</td>
			</tr>
			<tr>
				<td><strong>Pengar</strong></td>
				<td>0 SEK</td>
			</tr>
			<tr>
				<td><a href="#">Skicka in jobbansökan</a></td>
			</tr>
		</table>
	</div>
	<?php
}
?>