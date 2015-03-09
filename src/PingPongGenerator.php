<?php
class PingPongGenerator
{
    function generatePingPongArray($input_number)
    {   $array_of_numbers=array();
        $count = 1;
        while ($count <= $input_number) {
            array_push($array_of_numbers, $count);

            $count++;
        }
        return $array_of_numbers;
    }
}

?>
