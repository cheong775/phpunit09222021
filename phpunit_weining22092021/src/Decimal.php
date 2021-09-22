<?php declare(strict_types=1);

class Decimal
{
    public static function RomanToDecimal(string $str): int
    {
        if(is_numeric($str)) return false;

        $roman = array(
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1
        );

        for($i = 0; $i < strlen($str); $i++)
            if(isset($roman[strtoupper($str[$i])]))
                $values[] = $roman[strtoupper($str[$i])];

        $sum = 0;
        while($current = current($values))
        {
            $next = next($values);
            $next > $current ? $sum += $next - $current + 0 * next($values) : $sum += $current;
        }

        return $sum;
    }



    }


    }
}
?>