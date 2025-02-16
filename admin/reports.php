<?php
$page_title = "Reports";
include 'partials/header.php';
include 'config/loggedin.php';
?>
<div class="grid-container">
	<div class="grid-item1">
		<?php include 'partials/nav.php'; ?>
	</div>
	<div class="grid-item2">
		<table width="100%" height="115" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td height="24">
					<div >Hotel Reports</div>
				</td>
			</tr>
			<tr>
				<td>
					<div style="border:1px solid red;"><iframe src="reports/hotel_reports.php" name="iframe" width="100%" id="iframe"></iframe></div></iframe>
				</td>
			</tr>
		</table>

		<table width="100%" height="115" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td height="24">
					<div >Food Reports</div>
				</td>
			</tr>
			<tr>
				<td>
					<div style="border:1px solid red;"><iframe src="reports/food_reports.php" name="iframe" width="100%" id="iframe"></iframe></div>
				</td>
			</tr>
		</table>

		<div id="apDiv23">
			<table width="100%" height="115" border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td height="24">
						<div >Shikara Reports</div>
					</td>
				</tr>
				<tr>
					<td>
						<div style="border:1px solid red;"><iframe src="reports/shikara_reports.php" name="iframe" width="100%" id="iframe"></iframe></div>
					</td>
				</tr>
			</table>