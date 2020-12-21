<!DOCTYPE html>
<html>
<body>
<h1>Task 1</h1>
<?php

// start calculating age Function
function calculating_age ($birthdate) {
$bdate = new DateTime($birthdate);
$current_date   = new DateTime('today');
$age = $bdate->diff($current_date)->y;
echo "your age is: $age years";
};
calculating_age ('1980-07-01');

/******* another function ************/
function get_age( int $birthdate){
	$year = getdate();
	echo $year[year] - $birthdate. "<br/>";
}
get_age(1996);
// End Getting age Functiona


//**************************************************************************************//



// start Getting words count Functions
function words_count(string $string) {
	$new_string = explode(" ", $string);
	echo count($new_string). "<br/>";
}
words_count("hello world, this is my world");

/******* another function ************/

function get_words_count(string $string) {
	$pattern = "/\s/i";
	echo preg_match_all($pattern, $string) + 1 . "<br/>";
}
get_words_count("hello world, this is my world");
// End Getting words count Functions

//**************************************************************************************//

/******* first example ************/
echo "the output will be : 'ohamed' as in the function echo returns undefined variable as it has't been declared locally yet, it has been declared after printing <br/>";

/******* second example ************/
echo "the output will be : 'mohamed ahmed' as in the function; echo returns the global variable $user after declaring the variable with global keyword, so the first output was 'mohamed',
then it modified the global variable with a new value, as by using echo after declaring function it returned 'ahmed' <br/>";
/******* third example ************/
echo "the output will be : 'Ali 
mohamed ahmed' as in the function; static keyword declaring a local variable with value 'ali', then declaring the global variable with global keyword and modifying it like the prev. function <br/>";
//**************************************************************************************//
// Start searching for a word in an array
function word_in_array($array, string $word) {
	foreach ($array as $array_word ) {
		if ($array_word == $word) {
			$new_array = array(array_search($word, $array) => strlen($word));
			echo $new_array[1];
		};
	}
}
word_in_array(["hello", "welcome", "hi"], "welcome");
// End searching for a word in an array

//**************************************************************************************//



echo "<br/>";

// start shopping cart function
function shopping_cart(int $fields_id, string $name, int $quantity, int $price){
	$cart = array("fields_id" => $fields_id,"name" => $name, "quantity" => $quantity,"price" => $price);
	$item_name = $cart["name"];
	$item_price = ($cart["quantity"] * $cart["price"]);

	if($item_price > 1000){
		 $item_price = $item_price * 0.9;
	} else {
		$item_price = $item_price;
	};

	
	if ($cart["quantity"] == 0){
		echo '<script>alert("cart is empty")</script>'; 

	} else {
		echo '<script>alert("thanks for using our service")</script>'; 
		echo "the total price of $item_name $is: $item_price. <br/>";
	}
}


shopping_cart(1, "orange", 4, 500);
shopping_cart(2, "apple", 0, 500);
shopping_cart(3, "strawberry", 2, 500);

echo "<br/>";
// End shopping cart function


//**************************************************************************************//


// start sorting an associative array

function sorting_array($sorting, $ass_array) {
	 $sorting($ass_array);
	 foreach ($ass_array as $key => $value) {
		echo "the value is: $value, belongs to the key: $key .<br/>";
	 }
};
$ass_array = array("a" => "cat", "f" => "dog", "b" => "camel", "e" => "elephant"); 
echo "*******sorting array in descending order, according to key ********* <br/>";
sorting_array(krsort, $ass_array);
echo "*******sorting array in ascending order, according to key ********* <br/>";
sorting_array(ksort, $ass_array);

// End sorting an associative array

//**************************************************************************************//



// start print factorial of a givin number 
$factorial = 1;
function factorial_number(int $number) {
	for ($x= 1; $x <= $number; $x++) {
		global $factorial;
		$factorial = $factorial * $x;
			};
}
factorial_number(7);
echo $factorial;
// End print factorial of a givin number 


//**************************************************************************************//


// start calculating even numbers
$start_number= 0;
function even_numbers(int $number){
	for($x=1; $x <= $number; $x=$x+2){
		$start_number += $x;
	}
	echo $start_number;
}
even_numbers(10);
// End calculating even numbers


//**************************************************************************************//



// Start printing a random number from an array
function random_num($arr) {
	$random = rand(0, (count($arr) -1));
	echo $arr[$random];
}
random_num(array(1, 2, 3, 4, 7, 120, 180, 15665));
// End printing a random number from an array
echo "<br/>";

?>


</body>
</html>

