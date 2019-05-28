<?php
require_once dirname(dirname(__DIR__)) . '/app/init.php';
use App\Controllers\StockController as Stock;

$log = array();
if($_GET['action'] == 'additem'){
	// print_r($_POST);
$items = (int) $_POST['stack'];

	for ($i=1; $i <= $items; $i++) { 
		$category = $_POST['category'];
		$subcategory = $_POST['subcategory'];
		$item = $_POST['item_'.$i];
		$quantity = $_POST['quantity_'.$i];
		$cost = $_POST['cost_'.$i];
		$price = $_POST['price_'.$i];
		$profit = $_POST['profit_'.$i];
		$reorder = $_POST['reorder_'.$i];
	
		/*if(Stock::addStockItem($subcategory, $item, $quantity, $cost, $price, $profit, $reorder)){
			$log['code'] = "200";
			$log['message'] = "Great! Stock item has been added successfully";
		}else{
			$log['code'] = "404";
			$log['message'] = "Sorry, we encountered an error adding new stock item";
		}*/

		$log['message'] = Stock::addStockItem($subcategory, $item, $quantity, $cost, $price, $profit, $reorder);
	}	
}




// foreach ($cat as $i => $dt) {
// 	if(Stock::addStockSubCategory($cat_id, $dt)){
// 		$log['code'] = "200";
// 		$log['message'] = "Great! Your category has been added successfully";
// 	}else{
// 		$log['code'] = "404";
// 		$log['message'] = "Great! Your category has been added successfully";
// 	}
// }

echo json_encode($log);

?>