<?php


function genTable() {
	$f = "products.txt";
	$product_list_array	= array();	


	if (file_exists ( $f ) == 0) {
		return null;//if the file doesn't exist, then end the script buy returning 
	}
	$lines = file ( $f, FILE_SKIP_EMPTY_LINES );//reads the file lines into an array
	$i = 1;
	$j = 0;


	foreach ( $lines as $line ) { //for looping through the file
			//Heading Variable declaration
			$headingArr = explode ( '|', substr ( $line, 1, strlen ( $line ) - 3 ) );//trim off unneed characters, then break up the current by '|'
			$imgLink = $headingArr [1];
			$heading = $headingArr [0];
			$arrow = $headingArr [2];

			//Product Variable declation
			$explode = explode ( "|", $line );//break the line up by '|'
			$product_code = $explode [0];
			$product_name = $explode [1];
			$quantity = $explode [2];

				


		if (substr ( $line, 0, 1 ) == "<") {//if the 1st character of the line is a '<' then its a section heading
		$j ++;

		echo '<tr>';
		echo '<th colspan="7" a="0" onClick="toggle(this);" class=' . $j .'>';
		echo '<img src="' . $imgLink . '" />';
		echo '<span>' . $heading . '</span>' ;
		echo '<img src="' . $arrow . '" />';
		echo "</th>";
		echo "</tr>";

		} else {// else the line is a product

			$c = "";

   			if($quantity =='QUANTITY')$c = "textboxhidden"; //checking whether QUANTITY exists in header and applying test/style to font-color/input visibility

   			$option1 = $explode [3];
   			$option2 = $explode [4];
   			$option3 = $explode [5];
   			$option4 = $explode [6];

   			//Start of Table
			echo "<tr class=c_$j style='font-size:9pt;text-align:left;'>";// $j is the count so that we can keep track of which product this is 
			echo '<td class="'.$c.' brdrchange" id="ser_' . $i . '" value="' .  $product_code . '">' . '<span style="">' . $product_code . '</span>' . '</td>';
			echo '<td class="'.$c.' brdrchange" id="name_' . $i . '" value="' . $product_name . '" >' . $product_name . '</td>';
			
		
			//Quantity input
			echo '<td class="'.$c.' brdrchange" > ' . $quantity .'<input type="number" class="test" style="width:40px;text-align:center" b="' . $i . '" a="' . substr ( $quantity, 0, - 3 ) . '" id="t_' . $i . '_q" placeholder="0" onClick="quantity(this)"></td>';
			
			//Display Options and pricing
			echo '<td class="'.$c.' brdrchange col1" id="col1_' . $i . '" > ' . $option1 .'</td>';	
			echo '<td class="'.$c.' brdrchange col2 " id="col2_' . $i . '"> '  .$option2 . '</td>';
			echo '<td class="'.$c.' brdrchange col3" id="col3_' . $i . '"> ' . $option3 .'</td>';
			echo '<td class="'.$c.' col4" id="col4_' . $i . '"> ' . $option4 . '</td>';

			echo '</tr>';
			

			 $product_array = array(
			'product code' => $product_code, 
			'product name' => $product_name,
			'product quantiy' => $quantity
			);

			array_push($product_list_array, $product_array);

			

		} //End if/else
		$i ++;

	}//End foreach


//echo "<script type='text/javascript'>var loop = $i-1;</script>";//passing the count to Javascript
	echo "<script type='text/javascript'>var head = $j;</script>";

	return $product_list_array;
}//End genTable();

?>