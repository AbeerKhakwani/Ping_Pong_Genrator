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
        function test_generatePrintPingPong ()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input =15 ;

            $result = $test_PingPongGenerator->generatePingPongArray($input);


            $array=array(1,2,'ping',4,'pong','ping',7,8,'ping','pong',11,'ping',13,14,'ping pong');
            $this->assertEquals($array, $result);
        }






    }
?>
