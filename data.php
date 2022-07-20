<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LIST ORDER</title>
	<link rel="stylesheet" type="text/css" href="font.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<style>
		body {
			background-color: black;
		}
	</style>
</head>
<body>
    <div class="d-flex justify-content-end ms-auto p-2">
        <a type="button" class="btn btn-outline-light" style="margin-top: 10px; margin-right: 10px;" href="index.html">Home</a>
    </div>
	<div style="margin-top: 100px; margin-left: 20%; margin-right: 20%;">
		<div>
			<p class="text-center fs-1 fw-bold lh-1" style="color: aliceblue;  font-family: Slaytanic;">LIST ORDER</p>
		</div>
		<div>
			<table class="table text-center bg-dark rounded" style="color: aliceblue;">
				<thead>
				  <tr>
					<th scope="col">Name</th>
					<th scope="col">Whatsapp Number</th>
					<th scope="col">Requested Service</th>
					<th scope="col">Booking Date & Time</th>
				  </tr>
				</thead>
				<tbody>
					<?php
						$fp = fopen("order.txt", "r");
						while ($isi = fgets($fp)) {
							$pisah = explode('|', $isi);
							echo "<tr>";
							echo "<td>$pisah[0]</td>";
							echo "<td>$pisah[1]</td>";
							echo "<td>$pisah[2]</td>";
							echo "<td>$pisah[3] | $pisah[4]</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			  </table>
		</div>
	</div>
</body>
</html>