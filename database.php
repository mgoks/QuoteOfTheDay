<!-- Querying a database and displaying the results -->
<html>
	<head>
		<meta charset = "utf-8">
		<title>Search results</title>
		<style>
			
		</style>
	</head>

	<body>
		<?php
			$select = $_POST["select"];	// creates variable $select

			// build SELECT query
			$query = "SELECT" . $select . " FROM quotes";

			// Connect to MySQL
			if( !($database = mysqli_connect("localhost", "root", "", "quote_of_the_day")) )
				die("Could not connect to database </body></html>");

			// open quote of the day database
			// if (!mysqli_select_db("quote_of_the_day", $database))
			// 	die("Could not connect to database </body></html>");

			// query quote_of_the_day database
			if (!($result = mysqli_query($database, $query))){
				print("<p>Could not execute query!</p>");
				die(mysqli_error($database) . "</body></html>");
			}

			mysqli_close($database);
		?>

		<table>
			<caption>Results of "SELECT <?php print("$select")?> FROM quotes</caption>
			<?php
				// fetch each record in result set
				while ($row = mysqli_fetch_row($result))
				{
					// build table to print results
					print("<tr>");
					foreach ($row as $key => $value) 
						print("<td>$value</td>");
					print("</tr>");
				}
			?>
		</table>
	</body>
</html>