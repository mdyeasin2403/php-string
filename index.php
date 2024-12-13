<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Document</title>
    </head>
    <body>
    	<div class="container">
    	<?php

        $data = "Hello world";
        echo chunk_split($data,5, "...");
        echo "<hr>";

        $data1 = "Hello world";
        echo "$data1". "<br>";
        print_r(explode(" ", $data1));
        echo "<hr>";

        $data2 = "md5 string";
        echo md5($data2);
        echo "<hr>";
        
        $data3 = "str";
        echo str_repeat($data3, 3);
        echo "<hr>";

        $data4 = "replace it";
        echo str_replace("it","here", $data4);
        echo "<hr>";

        $data5 = "shuffle";
        echo str_shuffle($data5);
        echo "<hr>";

        $data6 = "splite";
        print_r(str_split($data6));
        echo "<hr>";
    	
        $data7 = "word count";
        echo str_word_count($data7);
        echo "<hr>";

        $data8 = "stri pos";
        echo stripos($data8, "pos");
        echo "<hr>";

        $data9 = "str len";
        echo strlen($data9);
        echo "<hr>";


        $a = addcslashes("Hello World", "o");
        echo $a."<hr>";

        $b = addslashes("Hello 'and' Bye");
        echo $b."<hr>";
       
        $c = "Hello 'and' Bye";
        echo bin2hex($c). "<br>";
        echo pack("H*", bin2hex($c)). "<hr>";
  
        $d = "Hello World";
        echo $d . "<br>";
        echo chop($d, "World"). "<hr>";

        echo chr(52);
        echo chr(052);






    	?>
    	</div>
    </body>
</html>