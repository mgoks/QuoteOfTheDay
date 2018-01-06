<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">
		<title>Quote submission form</title>
		<style type="text/css">
			p
			{
				margin: 0px;
			}

			.error
			{
				color: red;
			}

			p.head
			{
				font-weight: bold; 
				margin-top:10px;
			}

			label
			{
				width: 5em; 
				float: left;
			}
		</style>
	</head>

	<body>
		<?php
			// variables
			$quote 		= isset($_POST["quote"]) ? $_POST["quote"] : "";
			$by 		= isset($_POST["by"]   ) ? $_POST["by"]    : "";
			$year 		= isset($_POST["year"] ) ? $_POST["year"]  : "";
			$from 		= isset($_POST["from"] ) ? $_POST["from"]  : "";
			$imagelink 	= isset($_POST["image"]) ? $_POST["image"] : "";
			$iserror	= false;
			$formerrors = array("quoteerror" => false, "byerror" => false, "yearerror" => false, "fromerror" => false, "imageerror" => false);

			// array of name values for the text/number input fields
			$inputlist = array("quote" => "Quote", "by" => "By", "year" => "Year", "from" => "From", "image" => "Image Link");

			// ensure all fields have been filled correctly
			if ( isset($_POST["submit"]) )
			{
				if ($quote == "")
				{
					$formerrors["quoteerror"] = true;
					$iserror = true;
				}

				if ($by == "")
				{
					$formerrors["byerror"] = true;
					$iserror = true;
				}

				if ($year == "")
				{
					$formerrors["yearerror"] = true;
					$iserror = true;
				}

				if ($from == "")
				{
					$formerrors["fromerror"] = true;
					$iserror = true;
				}

				if ($imagelink == "")
				{
					$formerrors["imageerror"] = true;
					$iserror = true;
				}

				if (!$iserror)
				{
					// build INSERT query
					$query = "INSERT INTO candidates (quote, by, `from`, year, `image-link`) VALUES ('$quote', '$by', '$year', '$from', '$imagelink')";

					// Connect to MySQLi
					$link = mysqli_connect("localhost", "root", "", "quote_of_the_day");
			
					// check connection
					if ( mysqli_connect_errno() )
					{
						printf("Connect failed: %s\n", mysqli_connect_error());
						exit();
					}

					// execute query in candidates DB
					if ( !( $result = mysqli_query($query, $link) ) )
					{
						print( "<p>Could not execute query!</p>" );
						die(mysqli_error());
					}

					mysqli_close($link);

					print("
						<p>
							Thank you for sending a quote. We will add it to our database
							so that others can to read it after it gets approved by the moderator.
						</p>

						<p class='head'>
							Here is the information we've just received from you.
						</p>

						<p>Quote: 		$quote 		</p>
						<p>By:	  		$by 		</p>
						<p>From:		$from 		</p>
						<p>Year: 		$year 		</p>
						<p>Image link:	$imagelink 	</p>

						</body>
						</html>
					");

					die(); // finish the page
				}
			}

			print("
				<h1>Quote submission form</h1>
				<p>Please fill in all fields (or as many as you can) and click Submit.</p>
			");

			if ($iserror)
			{
				print("<p class = 'error'>Fields with * need to be filled in properly.</p>");
			}

			print("
				<!-- post form data to dynamicForm.php -->

				<form method = 'post' action='dynamicForm.php'>
					<!-- create four text boxes and a number box for user input -->
					Quote: 									<br/>
					<input type='text' 		name='quote'>	<br/>
					By:										<br/>
					<input type='text'		name='by'> 		<br/>
					Year:									<br/>
					<input type='number'	name='year'>	<br/>
					From:									<br/>
					<input type='text'		name='from'>	<br/>
					Image link:								<br/>
					<input type='text'		name='image'>	<br/>
															<br/>
					<input type='submit' 	value='Submit'>
				</form>
			");
		?>
	</body>
</html>
