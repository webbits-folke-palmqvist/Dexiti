<?php
$id = secure($_GET['id']);
if(empty($id)){
	?>
	<div class="user">
		<table>
			<tr>
				<td><strong>Användarnamn</strong></td>
				<td>Folke</td>
			</tr>
			<tr>
				<td><strong>Företga</strong></td>
				<td>Folke</td>
			</tr>
		</table>
	</div>
	<?php
} else {
	echo "annan användare";
}
?>