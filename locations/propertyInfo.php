
	<?php
		include "../helpers/conn.php";
		//$servername = "wwydh-mysql.cqqq2sesxkkq.us-east-1.rds.amazonaws.com";
		//$username = "wwydh_a_team";
		//$password = "nzqbzNU3drDhVsgHsP4f";

		//$conn = new mysqli($servername, $username, $password, "wwydh");
		$theQuery = "SELECT * FROM locations WHERE `id`='{$_GET["id"]}'";
		$result = $conn->query($theQuery);
		$rowcount = mysqli_num_rows($result);
		$row = @mysqli_fetch_array($result);
		$str = $row['building_address'];
		$cit = $row['city'];
		$addURL = rawurlencode("$str $cit");
  ?>

<!DOCTYPE html>
<html>

    <link href="styles.css" type="text/css" rel="stylesheet" />

    <head>
		    <title><?php echo $row["building_address"] ?></title>
    </head>
		<body>
	     <div class="imgViewer" style="background-image: url(https://maps.googleapis.com/maps/api/streetview?size=1200x600&location=<?php echo $addURL ?>&key=AIzaSyBHg5BuXXzfu2Wiz4QTiUjCXUTpaUCWUN0)";></div>
       <div class="name"><?php echo $row["building_address"] ?></div>
       <div class="info">
          <div class="generalInfo">
						<div class="description">
									<br>
									<!-- <h1>Description </h1> -->
										<p>This section includes a general description about this specific lot and </p>
										<p>will include details provided by the creator of this location's page. </p>
									</br>
								</div>
						<br>
		           	<h1>Lot Information</h1>
          	<ul>
							<li><b>Type: </b><?php echo $row["use"] ?></li>
		          <li><b>City: </b><?php echo $row["city"] ?></li>
							<li><b>Zip Code: </b><?php echo $row["zip_code"] ?></li>
              <li><b>Neighborhood: </b><?php echo $row["neighborhood"] ?></li>
							<li><b>Block: </b><?php echo $row["block"] ?></li>
							<li><b>Lot: </b><?php echo $row["lot"] ?></li>
              <li><b>Police District: </b><?php echo $row["police_district"] ?></li>
							<li><b>Council District: </b><?php echo $row["council_district"] ?></li>
          	</ul>
					</br>
					<br>
						<h1>Owner Information</h1>
						<ul>
							<li><b>Lot Owner: </b><?php echo $row["owner"] ?></li>
							<li><b>Owner Mailing Address: </b> <?php echo $row["mailing_address"] ?></li>
						</ul>
					</br>
					<!-- <div class="specInfo">
						<br>
						<h1>Specific Property Information</h1>
								<ul>
          		</ul>
						</br> -->
            <br>
            	<h1>Coordinates</h1>
            	<ul>
              	<li><b>Longitude: </b><?php echo $row["longitude"] ?></li>
              	<li><b>Latitude: </b><?php echo $row["latitude"] ?></li>
            	</ul>
						</br>
					</div>
						<div style="clear: both;"></div>
          </div>
    </body>
</html>
