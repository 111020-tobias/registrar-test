<?php

	$message = '';
	$dbname = '';/*

	if (isset($_POST['create_db'])) {
		$dbname = $_POST['dbname'];

		if ($dbname != null) {
			$link = mysql_connect('localhost', 'root', '');

			if (!$link) {
			    $message = 'Could not connect: ' . mysql_error();
			}

			$sql = 'CREATE DATABASE ' . $dbname;
			if (mysql_query($sql, $link)) {
			    $message = "Database " . $dbname . " created successfully\n";
			} else {
			    $message = 'Error creating database: ' . mysql_error() . "\n";
			}
		}
		else{
			$message = "Database name is required.";
		}
	}*/
	if (isset($_POST['create_table'])) {
		if ($_POST['tablename'] != null) {
			$link = mysql_connect('localhost', 'root', '');
			mysql_select_db('registrar_test');

			if (!$link) {
			    $message = 'Could not connect: ' . mysql_error();
			}

			$sql = 'CREATE TABLE ' . $_POST['tablename'] . 
			'(
				id INT NOT NULL AUTO_INCREMENT,
				PRIMARY KEY(id)
			)';
			if (mysql_query($sql, $link)) {
			    $message = "Table " . $_POST['tablename'] . " created successfully\n";
			} else {
			    $message = 'Error creating table: ' . mysql_error() . "\n";
			}
		}
		else{
			$message = "Table name is required.";
		}
	}

?>
<html>
	<head>
		<title>Login | Registrar</title>
	</head>
	<body>
		<div id="message">
			<div class="message">
				<?php
					if ($message) {
						echo $message;
					}
				?>
			</div>
		</div>
		<form method="post">
			<h2>Create database</h2>
			Database name: <input type="text" name="dbname" />
			<input type="submit" name="create_db" value="Create" />
		</form>
		<form method="post">
			<h2>Create table</h2>
			Table name: <input type="text" name="tablename" />
			<input type="submit" name="create_table" value="Create" />
		</form>
		<form method="post">
			<h2>Create column</h2>
			Column name: <input type="text" name="colname" />
			Data type: <select name="datatype">
							<option>INT</option>
							<option>VARCHAR</option>
							<option>TEXT</option>
							<option>DATE</option>
							<optgroup label="Numeric">
							 	<option>INT</option>
							 	<option>DECIMAL</option>
							 	<option>FLOAT</option>
							 	<option>DOUBLE</option>
						 		<option>BOOLEAN</option>
							</optgroup>
							<optgroup label="Sting">
							 	<option>CHAR</option>
							 	<option>VARCHAR</option>
							 	<option>TEXT</option>
							</optgroup>
							</optgroup>
							<optgroup label="Date and Time">
							 	<option>DATE</option>
							 	<option>DATETIME</option>
							 	<option>TIMESTAMP</option>
							 	<option>TIME</option>
							 	<option>YEAR</option>
							</optgroup>
						 </select>
			Value/Length: <input type="text" name="length" />
			<input type="submit" name="create_column" value="Create" />
		</form>
			asdnamdnsamdamsndamsndansdkasndkajsdn
			asdasdb
			ansdasbd
	</body>
</html>