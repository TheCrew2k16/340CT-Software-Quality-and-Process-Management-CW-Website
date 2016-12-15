<!DOCTYPE html>
<html>
	<head>
		<title>Submission Status Page</title>
	</head>
	<body>
		<div>
			<?php
				$action = "submission status";
				include "includes\boostrap.php";
				include "includes\header.php";
			?>
		</div>
		
		<div class="container-fluid" style="padding-left:100px;padding-top:20px;">
			<br><br><br><br>
			<h1>Submission Status</h1>
			<br><br><br><br>
			<table style="width:50%">
				<tr>
					<th>Coursework Title</th>
					<th>Submitted</th>
				</tr>
				<tr>
					<td>The Joy of Painting</td>
					<td>Submitted</td>
				</tr>
				<tr>
					<td>Art and design</td>
					<td>Not Submitted</td>
				</tr>
				<tr>
					<td>Cubic Art</td>
					<td>Submitted</td>
				</tr>
			</table>
			<?php
				include "includes\dbconnect.php";
				$sql = "SELECT * FROM submissiontable,cwTable WHERE submissiontable.coursework_ID=cwTable.coursework_ID";
			?>
		</div>
	</body>
</html>