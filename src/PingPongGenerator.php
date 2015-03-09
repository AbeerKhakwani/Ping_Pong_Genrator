<?php
class PingPongGenerator
{
    function generatePingPongArray($input_number)
    {   $array_of_numbers=array();
        $count = 1;
        while ($count <= $input_number) {
            if($count % 15 == 0){

                $pingPong= "ping pong";
                array_push($array_of_numbers, $pingPong);

            }
            elseif ($count % 3 == 0)
            {
            $ping= "ping";
            array_push($array_of_numbers, $ping);
            }

            elseif ($count % 5 == 0)
            {
            $pong= "pong";
            array_push($array_of_numbers, $pong);
            }

            else {
                array_push($array_of_numbers, $count);
            }
            $count++;
        }
        return $array_of_numbers;
    }
}

?>
