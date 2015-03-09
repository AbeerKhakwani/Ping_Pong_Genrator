<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray ()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals(1, $result);
        }
    }
?>
