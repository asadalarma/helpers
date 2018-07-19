<?php

class GeneralClass
{


    /*
     *
     *  Contain the specific methods
     *
     *
     */

    function addFunction($num1, $num2) {
        $sum = $num1 + $num2;
        echo "Sum of the two numbers is : $sum";
    }


    function addFive($num) {
        $num += 5;
    }

    function addSix(&$num) {
        $num += 6;
    }


    function printMe($param = NULL) {
        print $param;
    }


    function whatIsToday(){
        echo "Today is " . date('l', mktime());
    }

    function customFont($font, $size=1.5){
        echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
    }

    function divideNumbers($dividend, $divisor){
        $quotient = $dividend / $divisor;
        $array = array($dividend, $divisor, $quotient);
        return $array;
    }


    function selfMultiply(&$number){
        $number *= $number;
        return $number;
    }

    function calcAverage() {
        // initialize value to be used in calculation
        $total = 0;

        // find out how many arguments were given
        $arguments = func_num_args();

        // loop to process each argument separately
        for ($i = 0; $i < $arguments; $i++) {
            // add the value in the current argument to the total
            $total += func_get_arg($i);
        }

        // after adding all arguments, calculate the average
        $average = $total / $arguments;

        // return the average
        return $average;
    }



    function get_total(){
        $num = func_num_args();
        $total = 0;
        for($i = 0;$i < $num; $i++){
            $arg = func_get_arg($i);
            if(is_numeric($arg)){
                $total += $arg;
            }
        }
        return $total;
    }

    function increase(&$x,$inc = 1){
        $x = $x + $inc;
        return $x;
    }


    function find_max($a,$b){
        if ($a > $b)
        {
            return $a;
        }
        else
        {
            return $b;
        }

    }


    function find_max_three($a,$b,$c){

        // find max of two arguments
        function max($x,$y){
            return $x > $y ? $x : $y;
        }

        return max(max($a,$b),$c);
    }

    function find_min($a,$b){
        return $a < $b ? $a : $b;
    }

    function findmax($a,$b){
        return $a > $b ? $a : $b;
    }



    function displayVersion() {

        echo "this is PHP " . phpversion();
        echo "\n";
    }

    function FTC($c) {

        return $c * 9/5 + 32;
    }

    function power($number, $power) {

        if ($power == 0) {

            return 1;
        }

        if ($power == 1) {

            return $number * 1;
        }

        if ($power == 2) {

            return $number * $number;
        }

        $value = 1;

        for ($i = 0; $i < $power; $i++) {

            $value *= $number;
        }

        return $value;
    }


    function sum(...$nums) {

        $sum = 0;

        foreach ($nums as $n) {
            $sum += $n;
        }

        return $sum;
    }

    function sum_arguments() {

        $args = func_get_args();

        $sum = 0;
        foreach ($args as $n) {
            $sum += $n;
        }

        return $sum;
    }

    function nonstatic() {

        $value = 0;
        $value += 1;

        return $value;
    }

    function staticfun() {

        static $value = 0;
        $value += 1;

        return $value;
    }


    function swap($a, $b) {

        $temp = $a;
        $a = $b;
        $b = $temp;
        echo "inside swap function:\n";
        echo "\$a is $a \n";
        echo "\$b is $b \n";
    }


    function factorial($n) {

        if ($n == 0) {

            return 1;

        } else {

            return $n * factorial($n - 1);
        }
    }

    function factorialnumber($number)
    {
        if($number > 0)
        {

            $fact=1;

            for($i=$number; $i > 0; $i--)
            {

             $fact = $fact * $i;


            }
            return $fact;


        }
        else
        {
            return 0;
        }

    }


    function even_odd($num)
    {

        if($num%2 == 0)
        {
            return "Even number";
        }
        else
        {
            return "Odd number";
        }

    }


    function table_num($num)
    {
        echo "************** Table of $num **********************";

        for($i=1 ;$i<=10; $i++)
        {
            $table = $num * $i;
            echo "</br>";
            echo "$num * $i = $table";
            echo "</br>";
        }
        echo "</br>";
        echo "************** End Table **********************";

    }

    function factorialnum($n)
    {

        $x = 1;
        for($i=1;$i<=$n-1;$i++)
        {
            $x*=($i+1);


        }
        echo "The factorial of  $n = $x"."\n";
    }


    function check_amstrong_number($num)
    {

        $sum=0;
        $temp=$num;
        while($temp!=0)
        {
            $rem=$temp%10;
            $sum=$sum+$rem*$rem*$rem;
            $temp=$temp/10;
        }
        if($num==$sum)
        {
            echo "Armstrong number";
        }
        else
        {
            echo "not an armstrong number";
        }


    }



    function check_palindrome($num)
    {
        $p=$num;
        $revnum = 0;
        while ($num != 0)
        {
            $revnum = $revnum * 10 + $num % 10;
        //below cast is essential to round remainder towards zero
            $num = (int)($num / 10);
        }

        if($revnum==$p)
        {
            echo $p," is Palindrome number";
        }
        else
        {
            echo $p." is not Palindrome number";
        }

    }


    function check_prime_number()
    {
        $num =23;

        for( $j = 2; $j <= $num; $j++ )
        {
            for( $k = 2; $k < $j; $k++ )
            {
                if( $j % $k == 0 )
                {
                    break;
                }

            }
            if( $k == $j )
            {
                echo 'Prime Number : '.$j;
            }

        }
    }


    function printFibonacci($n)
    {

        $first = 0;
        $second = 1;

        echo "Fibonacci Series ";

        echo $first.' '.$second.' ';

        for($i = 2; $i < $n; $i++){

            $third = $first + $second;

            echo $third.' ';

            $first = $second;
            $second = $third;

        }
    }


    function fibonacci_series($num)
    {

        $a = 0;
        $b = 1;

        echo "$a $b "; // 0 1

        for($i=1   ; $i<= $num-2 ;  $a=$b, $b=$c, $i++ )
        {
            echo $c = $a+$b;
            echo " ";
        }
    }




    function reverse_number($num)
    {

        $revnum = 0;
        while ($num != 0)
        {
            $revnum = $revnum * 10 + $num % 10;
    //below cast is essential to round remainder towards zero
            $num = (int)($num / 10);
        }

    }


    function reversenumber($number)
    {

        /* Typecast the number into string. */

        $snum = (string) $number;

        /* Reverse the string. */

        $revstr = strrev($snum);

        /* Typecast string into int. */

        $reverse = (int) $revstr;

        return $reverse;
    }



    function reverse_string($string)
    {


        $length = strlen($string);

        for ($i=($length-1) ; $i >= 0 ; $i--)
        {
            echo $string[$i];
        }

    }





    function factorial_using_while($number) {
        if ($number < 0) {
            throw new InvalidArgumentException('Number cannot be less than zero');
        }
        $factorial = 1;
        while ($number > 0) {
            $factorial *= $number;
            $number --;
        }
        return $factorial;
    }




    function find_in_arr($key, $arr) {
        foreach ($arr as $k => $v) {
            if ($k == $key) {
                return $v;
            }
            if (is_array($v)) {
                foreach ($v as $_k => $_v) {
                    if ($_k == $key) {
                        return $_v;
                    }
                }
            }
        }
        return false;
    }


    function getinfomemory()
    {
        echo "Initial: ".memory_get_usage()." bytes \n";
        /* prints
        Initial: 361400 bytes
        */

// let's use up some memory
        for ($i = 0; $i < 100000; $i++) {
            $array []= md5($i);
        }

// let's remove half of the array
        for ($i = 0; $i < 100000; $i++) {
            unset($array[$i]);
        }

        echo "Final: ".memory_get_usage()." bytes \n";
        /* prints
        Final: 885912 bytes
        */

        echo "Peak: ".memory_get_peak_usage()." bytes \n";
        /* prints
        Peak: 13687072 bytes
        */
    }

    function generate_unique_ids()
    {
        $unique_ids = uniqid();

        return $unique_ids;
    }

    function generate_unique_id_with_prefix($prefix){

        $unique_ids = uniqid($prefix);

        return $unique_ids;
    }

    function serialize_array($array){

       $serialized_array = serialize($array);

        return $serialized_array;
    }


    function unserialize_array($string){


    // you can reproduce the original variable
        $newvar = unserialize($string);

        print_r($newvar);


    }


    function json_encode_array($array)
    {


        // convert to a string
        $string = json_encode($array);

        return  $string;
    }


    function json_decode_string($string)
    {
        $string = json_decode($string);

        print_r($string) ;
    }

    function max_value_array($array)
    {

        $max 	= max($array);

        return $max;

    }

    function min_value_array($array)
    {
        $min 	= min($array);
        return $min;
    }

    function reverse_array($array)
    {

        $reversed	= array_reverse($array);

        print_r($reversed);

    }

    function arraypop($vehicle)
    {

        $pop = array_pop ($vehicle);

        print_r($vehicle);
    }

    function arraypush($array,$pushed_value)
    {
        if(is_array($pushed_value))
        {
            foreach($pushed_value as $value)
            {
                array_push ($array, $value);
            }
        }
        else
        {
            array_push ($array, $pushed_value);
        }


        print_r($array);
    }


    function mergearray($array1,$array2)
    {

        $merged_array = array_merge($array1, $array2);

        print_r($merged_array);
    }

    function arrayslice($array,$offset,$len,$inserted_string)
    {
        array_splice($array, $offset, $len, $inserted_string);

        print_r($array);
    }

    function arrayshift($array)
    {


        $shifted_value = array_shift($array);

        print_r($array);
    }

    function arrayunshift($array,$shifted_value)
    {

        array_unshift($array, $shifted_value);

        print_r($array);
    }
}