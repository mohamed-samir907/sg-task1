<?php
//Bahaa Mohamed
// question 1
/**
 * Calculate age in years and months and days from a given birthday and current date
 *
 * @param string $birthDate in format (yyyy-mm-dd)
 * @param string $currentDate in format (yyyy-mm-dd)
 *
 */
function calculateAge(string $birthDate,string $currentDate)
{
    $birthYear=substr($birthDate,0,4);
    $birthMonth=substr($birthDate,5,2);
    $birthDay=substr($birthDate,8,2);

    $currentYear=substr($currentDate,0,4);
    $currentMonth=substr($currentDate,5,2);
    $currentDay=substr($currentDate,8,2);

    if($currentDay<$birthDay)
    {
        $currentMonth--;
        $currentDay+=30;
    }

    if($currentMonth<$birthMonth)
    {
        $currentYear--;
        $currentMonth+=12;
    }
    echo ($currentYear - $birthYear)." years ".($currentMonth-$birthMonth)." Month ".($currentDay-$birthDay)." days";
}
//----------------------------------------------------------------------------------------------------------------------------------------------------

//question 2

/**
 * count words in string
 * @param string $sentence
 */

function countWords(string $sentence)
{
    $count=1;
    for($i=0 ; $i<strlen($sentence)-1;$i++)
    {
        if($sentence[$i]==" " and $sentence[$i+1] != " ")
        {
            $count++;
        }
    }
    echo $count;
}

//-----------------------------------------------------------------------------------------------------------------------------------------------------

// question 3
// first script will print Undefined variable user that inside the print function because the assignment out side the scope of the function
// and it will print mohamed

// second script will print mohamed because the global keyword allows you to see all the global variables and it will print ahmed because global
// keyword also allows you to alter the global variable

// third script will print ali because variable user inside the function is local and it will print mohamed because the global keyword
// also print ahmed because global keyword allows you to alter global variables

//-----------------------------------------------------------------------------------------------------------------------------------------------------

// question 4

/**
 * find word in array
 *
 * @param array $array
 * @param string $word
 * @return array
 */

function searchWord(array $array,string $word)
{
    $pos=array_search($word,$array);
    return array("position"=>$pos?$pos:"not found","length"=>strlen($word));
}

//-----------------------------------------------------------------------------------------------------------------------------------------------------
// Question 5

/**
 * return the total price of items in the shopping cart
 *
 * @param array $items 2d associative array
 *
 *$items=array(
 *"item1"=>array("name"=>"cola","quantity"=>3,"price"=>10),
 *"item3"=>array("name"=>"sas","quantity"=>5,"price"=>20),
 *"item4"=>array("name"=>"aaa","quantity"=>10,"price"=>5),
 * );
 */
function shoppingCart(array $items)
{
    if (count($items)!=0)
    {
        $totalPrice=0;
        foreach ($items as $item)
        {
            $itemPrice=$item["quantity"]*$item["price"];
            if($itemPrice>1000)
                $itemPrice*=0.1;
            $totalPrice+=$itemPrice;
        }
        echo "Thanks For Using Our Service <br>";
        echo $totalPrice;
    }
    else
    {
        echo "Cart is empty";
    }
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------
// question 6
/**
 * sorting associative array in descending order by key then print it
 *
 * @param array $array
 */
function sortAssociativeArrayKeyDESC(array $array)
{
    krsort($array);

    foreach ($array as $key=>$value)
    {
        echo $key." = ".$value."<br>";
    }
}

/**
 *
 * sort array in ascending order then print it
 *
 * @param array $array
 */
function arraySortASC(array $array)
{
    sort($array);
    foreach ($array as $value)
    {
        echo $value."<br>";
    }
}

//------------------------------------------------------------------------------------------------------------------------------------------------------

// Question 7
/**
 * print the factorial of a given number
 * @param int $number
 */
function Factorial(int $number)
{
    $factorial = 1;
    for ($i=1; $i<=$number; $i++)
    {
        $factorial*=$i;
    }
    echo "Factorial is $factorial";
}
//------------------------------------------------------------------------------------------------------------------------------------------------------

//Question 8
/**
 * print the even numbers untill the given number
 *
 * @param int $number
 */
function evenNumbers(int $number)
{
    for ($i=1; $i<=$number; $i++)
    {
        if ($i%2==0)
            echo $i." ";
    }
}

//------------------------------------------------------------------------------------------------------------------------------------------------------

// Question 9
/**
 * print random value from a given array
 *
 * @param array $array
 */

function randArray(array $array)
{
    echo $array[rand(0,count($array)-1)];
}










