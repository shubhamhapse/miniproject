<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>The Game of Shares</title>
    </head>
	<body>
		
<?php
		
include "conn.inc.php";
		
if(isset($_GET['id']) && !empty($_GET['id']))
{
	$company_id = $_GET['id'];
	$query_company_data = "SELECT * FROM companies WHERE id = '$company_id'";
	if($run_company_data = mysqli_query($conn, $query_company_data))
	{
		while($array_company_data = mysqli_fetch_assoc($run_company_data))
		{
			$name = $array_company_data['name'];
			$description = $array_company_data['description'];
			$abbr = $array_company_data['abbrivation'];
			$total_shares = $array_company_data['total_shares'];
			$price = $array_company_data['stock_price'];
			
			echo "<h2>$name</h2><h4>$abbr</h4><hr><br>$description<br><br>Total number of shares in the market: $total_shares<br><br>Price of a share: $price points<br>";
			
		}
	}
}
		
		
		
?>
	
	</body>
</html>