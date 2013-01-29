<h1>Välkommen till Dexiti!</h1>
<?php
if(login() == true){

} else {
	?>
	<h3>Logga in.</h3>
	<h5><?php $Error->show(); ?></h5>
	<h5><?php $Success->show(); ?></h5>
	<form action="?page=process&action=login" method="POST">
		<table>
			<tr>
				<td><input type="text" name="username" placeholder="Användernamn"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Lösenord"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Logga in"></td>
			</tr>
		</table>
	</form>
	<p>Undrar du vad spelet handlar om så läs det <a href="?page=about">här</a>, är du här för att registrera dig för att få tillgång till första betan så gör du det <a href="?page=register">här</a>.</p>
	<?php
}
?>