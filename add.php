<!DOCTYPE html>

<!-- Insert information sent from add_quote.html to candidates table and display it-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>Quote validation</title>
		<style type="text/css">
			body
			{
				margin: auto;
				width: 50%;
				font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
				border-left: 3px solid;
				border-right: 3px solid;
				border-bottom: 3px solid;
				padding: 10px;
				background-image: url(http://marketingland.com/wp-content/ml-loads/2014/08/books-library-legal-ss-1920.jpg);
				background-size: 50%;
			}

			div {
			    border-radius: 5px;
			    background-color: #f2f2f2;
			    padding: 20px;
			}

			p.title{
				font-weight: bold;
			}
		</style>
	</head>

	<body>

		<!-- insert the quote to candidates table -->
		<?php
			$quote 	   = $_POST["quote"];
			$by  	   = $_POST["by"];
			$year  	   = $_POST["year"];
			$from  	   = $_POST["from"];
			$imagelink = $_POST["image"];

			// Connect to quote of the day DB
			$link = mysqli_connect("localhost", "root", "", "quote_of_the_day");
			
			// check connection
			if ( mysqli_connect_errno() )
			{
				printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
			}

			// build INSERT query
			$insertquery = "INSERT INTO candidates (`quote`, `by`, `from`, `year`, `image-link`) ".
						   "VALUES ('$quote', '$by', '$year', '$from', '$imagelink')";

			// select queries return a resultset
			if ($result = mysqli_query($link, $insertquery))
			{
				// printf("Query successful! :)");
			}
			else
			{
				printf("Could not execute query :'(<br/><br/>");
			}

			mysqli_close($link);
		?>
		
		<div>
			<p>Thank you for sending a quote. We received your quote and it will be added to our database after it is approved by the administrator.</p>

			<p>Here is the information we have received from you.</p>

			<p class="title">Quote</p>
			<p>"<?php print($_POST["quote"]); ?>"</p>
			<br/>
			<p class="title">By </p>
			<p><?php print($_POST["by"]); 	 ?></p>
			<br/>
			<p class="title">Year</p>
			<p> <?php print($_POST["year"]);  ?></p>
			<br/>
			<p class="title">From</p>
			<p><?php print($_POST["from"]);  ?></p>
			<br/>
			<p class="title">Image</p>
			<p><img src="<?php print($_POST["image"]); ?>"></p>
			<br/>

			<a href="add.html">Submit another quote</a><br/>
			<br/>
			<a href="index.php">I want to get more inspired. Give me another quote!</a>
		</div>
	</body>

</html>