<?php
    echo "<h3>This page is just to learn the concept of PHP.</h3>";
    echo "<p>The number of Line is ".__LINE__."</p>";
    echo "<p>The full path and the file name of the file is :- ".__FILE__."</p>";

    class demoClassOne{
        public function demoFuncOne($user){
            echo "I'm called by $user </br>";
            echo "<h4>This is just a Demo Method, Whose name is :- ".__METHOD__." from the class name :- ".__CLASS__."</h4>";
        }
    }
    $newObj = new demoClassOne();
    $newObj->demoFuncOne("Mr. Singh...");

    function OuterFunc(){
        echo "i'm a function not a method my name is :- ".__FUNCTION__;
    }
    OuterFunc();

    echo "maximum number of integer in the PHP is : ".PHP_INT_MAX ."</br>";
    echo "Currently version of php is you are working is : ".PHP_VERSION."</br>" ;
    // phpinfo();
    var_dump($newObj);
    print_r($newObj);
    echo "<hr/>";
    $int1=10009;
    $flo1=1100.990;
    echo "Number is:- $int1"." and float is:- $flo1";
    echo "<hr/>";
    echo ceil($int1);
    echo "<hr/>";
    echo ceil($flo1);
    echo "<hr/>";
    echo floor($int1);
    echo "<hr/>";
    echo floor($flo1);
    echo "<hr/>";
    echo abs($int1);
    echo "<hr/>";
    echo abs($flo1);
    echo "<hr/>";
    echo pow(2,3);
    echo "<hr/>";
    echo exp(12.22);
    echo "this is doubt full";
    echo "<hr/>";
    echo rand(100,1000);
    echo "<hr/>";
    echo decbin(200);
    echo "<hr/>";
    echo bindec(11001000);
    echo "<hr/>";
    echo decoct(1500);
    echo "<hr/>";
    echo octdec(2734);
    echo "<hr/>";
    echo dechex(1500);
    echo "<hr/>";
    echo hexdec("5dc");
    echo "<hr/>";
    echo number_format(1000.9999);
    echo "<hr/>";
    printf(199440983);
    echo "this is also doubtfull";
    echo "<hr/>";
    echo round(123.2222);
    echo "<hr/>";
    echo sqrt(25);
    echo "<hr/>";
    // fopen("free.txt","r+");
    $fileStr = file_get_contents("free.txt");
    echo $fileStr;
    echo "<hr/>";
    $arrFile = file("free.txt");
    foreach ($arrFile as $value) {
        echo $value."</br>";
    }
    echo "</hr>";
    // mkdir("singh/jatt.txt");
?>