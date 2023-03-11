<!DOCTYPE html>
<html>
<head>
	<title>HTML Table</title>
	<style>
		td {
			vertical-align: Top;
			text-align: center;
		}
	</style>
	
</head>
<body>
	<table border="1" cellspacing="0px" width="400px">

		<tr >
			<th  colspan="3">
				<h1>First HTML Site</h1>
			</th>
		</tr>

		<tr height="300px">
			<td width="20%" >
				<span><b>Links</b></span>
				<a href="page1.php"> page-1 </a>
				<a href="page2.php"> page-2 </a>
			</td>
			<td>
				<div style="font-size: 28px;"><b>Page-1</b></div>
				<div> I am at page 1 </div>
			</td>
			<td width="30%">
				<span><b>External links</b></span>
				<div><a href="www.google.com"> Google </a></div>
				<div><a href="www.google.com"> Yahoo </a></div>
				<div><a href="www.google.com"> Microsoft </a></div>			
			</td>
		</tr>
		<tr>
			<td colspan="3">copyrite</td>
		</tr>

<!-- 	<tr >
			<th  colspan="3">
				<center>
					<h1>First HTML Site</h1>
				</center>
			</th>
		</tr>
		 -->

	</table>
</body>