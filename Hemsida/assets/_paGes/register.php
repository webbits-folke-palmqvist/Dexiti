<h3>Registrera dig här</h3>
<h5><?php $Error->show(); ?></h5>
<h5><?php $Success->show(); ?></h5>
<form action="?page=process&action=register" method="POST">
	<table>
		<tr>
			<td><input type="text" name="username" placeholder="Användarnamn"></td>
		</tr>
		<tr>
			<td><input type="password" name="password" placeholder="Lösenord"></td>
		</tr>
		<tr>
			<td><input type="password" name="password2" placeholder="Lösenordet igen"></td>
		</tr>
		<tr>
			<td><input type="text" name="email" placeholder="Email"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Skapa konto"></td>
		</tr>
	</table>
</form>