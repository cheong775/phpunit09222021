<?php declare(strict_types=1);

class ChiffresRomains
{
    public static function DecimalToRoman(int $num): string
    {
        if ($num >= 0 && <= 3000) {
        $n = intval($num);
        $result = '';
        $lookup = array(
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        );
        foreach ($lookup as $roman => $value)

        {



            $matches = intval($n / $value);





            $result .= str_repeat($roman, $matches);





            $n = $n % $value;
            return $result;
        }



        }


    }
}
?>