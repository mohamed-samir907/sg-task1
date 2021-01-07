<?php
// No. 1:-
/** 
 *print the age with year, month, date format.
 *
 *param string $date_of_birth
 */
function calculate_age($date_of_birth){
  $today = date("Y-m-d");
  // calculate age from date_diff() func.
  $diff = date_diff(date_create($date_of_birth), date_create($today));
  echo 'Age is '.$diff->format('%y').' years, '.$diff->format('%m').' months, '.$diff->format('%d').' days.';
}

calculate_age('1997-01-22');

//End No. 1

//No. 2:-
/** 
 *print count of words in a sentense.
 *
 *param string $sentence
 */
function count_words_in_sentence($sentence){
  // match space pattern in string param
  $pattern = "/\s/i";
  preg_match_all($pattern, trim($sentence), $match);
  // take number of spaces and add it with 1 to match word counts
  $res = (int)count($match[0]) + 1;
  echo "<br>".$res;
}

count_words_in_sentence('The rain in SPAIN falls mainly on the plains and print count of words in a sentense..');

//End No. 2

//No. 3:-
/** 
 *1. a. undefiend. because it declared after logging.
 *   b. 'mohamed'. because it globally declared.
 *
 *2. a. 'mohamed'. because of global keyword.
 *   b. 'ahmed'. because it is edited.
 *
 *3. ali mohamed ahmed. because of local var and global keyword.
 */
//End No. 3

//No. 4:-
/** 
 *search in array of string
 *
 *param string $word, array $arr
 */
function search_in_array($word, $arr){
  $res = array_search($word, $arr);
  print_r(array("position"=>($res!=-1)?$res:"not found","length"=>strlen($word)));
}

search_in_array('BMW', array("BMW", "Volvo", "Toyota"))

//End No. 4

//No. 5 & 8:-
/** 
 *represent shopping cart items
 *
 *param array $items(id, name, quantity, price)
 */
function show_shopping_cart_items($items){
  if (count($items)==0) {
    echo "cart is empty, please pick some products.";
  } else {
    $total=0;
    foreach ($items as $item) {
      $price_of_item = $item["quantity"] * $item["price"];
      if($price_of_item>1000)
        $price_of_item*=0.1;
      $total += $price_of_item;
    }
    echo "Thank you for using our services<br>
          you're bought ".count($items)." items with 
          $total pound.";
  }
  
}

show_shopping_cart_items(array(
    array("id"=>1, "name"=>"pepsi", "quantity"=>3, "price"=>720),
    array("id"=>2, "name"=>"cola", "quantity"=>1, "price"=>180),
    array("id"=>3, "name"=>"fox", "quantity"=>2, "price"=>220)
));

//End No. 5 & 8


//No. 6:-
/** 
 *sorting array (asc, desc)
 *
 *param array $arr
 */
function desc_sort_array($arr){
  krsort($arr);
  foreach ($arr as $key => $value) {
    echo $key." => ".$value."<br>";
  }
}

desc_sort_array(array("Peter"=>"35","Ben"=>"37","Joe"=>"43"));


function asc_sort_array($arr){
  ksort($arr);
  foreach ($arr as $key => $value) {
    echo $key." => ".$value."<br>";
  }
}

asc_sort_array(array("Peter"=>"35","Ben"=>"37","Joe"=>"43"));

//End No. 6

//No. 7:-
/** 
 *factorial number by recursion
 *
 *param int $num
 */

function factorial_number($num) {
  if ($num == 0) return 1;
  return $num * factorial_number($num - 1);
}

echo factorial_number(6);

//End No. 7

//No. 9:-
/** 
 *calculate even numbers
 *
 *param int $num
 */

function calculate_even_numbers($num) {
  $total=0;
  for ($i=2; $i<=$num; $i++)
  {
      if ($i%2==0)
            $total+=$i;
  }
  echo $total;
}

echo calculate_even_numbers(6);

//End No. 9

//No. 10:-
/** 
 *print random array
 *
 *param array $num
 */

function rand_arr($arr) {
  echo $arr[rand(0,count($arr)-1)];
}

rand_arr(array('first', 'second', 'third'));

//End No. 10
?>
