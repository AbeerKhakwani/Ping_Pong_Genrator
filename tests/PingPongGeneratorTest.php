<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray ()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            $result = $test_PingPongGenerator->generatePingPongArray($input);
            $array=array(1);
            $this->assertEquals($array, $result);
        }


        function test_generatePingPongArrayCount ()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input =2 ;

            $result = $test_PingPongGenerator->generatePingPongArray($input);


            $array=array(1,2);
            $this->assertEquals($array, $result);
        }





    }
?>
