<!-- 
	HOME PAGE
	shows a random quote from the database,
	has a button which regerates the page (show a different random quote),
	has link to a page on which users can send quotes.
-->
<html>
	<head>
		<meta charset="utf-8">
		<title>Quote of the day</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>

	<style>
		body
		{
			background-image: url(http://marketingland.com/wp-content/ml-loads/2014/08/books-library-legal-ss-1920.jpg);
			background-size: 50%;
		}
		div
		{
			border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 20px;
		}
	</style>

	<body>
		<div class="main">
			<p>The quote of the day is</p>

			<?php
				// Connect to quote of the day DB
				$link = mysqli_connect("localhost", "root", "", "quote_of_the_day");
				
				// check connection
				if ( mysqli_connect_errno() )
				{
					printf("Connect failed: %s\n", mysqli_connect_error());
					exit();
				}

				if ($result = mysqli_query($link, "SELECT * FROM quotes"))
				{
					/* determine number of rows result set */
					$row_cnt = mysqli_num_rows($result);

					// printf("Result set has %d rows.\n", $row_cnt);
				}

				// Get a random number between 1 and row count (inclusive)
				$randomID = rand(1, $row_cnt);
				// printf("Random ID is %d.\n", $randomID);

				if ($result = mysqli_query($link, "SELECT * FROM quotes WHERE `id`=$randomID"))
				{
					// get an array containing the fields of the associated row
					$row = mysqli_fetch_assoc($result);

					// print quote info
					echo "<h1 class='quote'>\"{$row['quote']}\"</h1>";
					echo "<h2 class='by'>– {$row['by']}</h2>";
					echo "<p class='from'>from {$row['from']}";

					// if year is not 0, print it
					$year = $row['year'];
					if ($year != 0) echo ", {$year}</p>";
					else echo "</p>";

					//display image
					echo "<img src=\"{$row['image']}\" alt=\"{$row['by']}\"";
				}

				/* close result set */
				mysqli_free_result($result);
				mysqli_close($link);
			?>
		</div>

		<br/><br/>

		<div class="footer">
			<p>Read this one already? Or just feeling like a different quote today?</p>
			<form>
				<button formaction="index.php">Get another quote!</button>
			</form>

			<p>Want to add your favourite quote to our database and share it with everybody?</p>
			<form>
				<button formaction="add.html">Click here</button>
			</form>
		</div>

	</body>

</html>