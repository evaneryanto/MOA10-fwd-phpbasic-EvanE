<?php
	$str = "Samudra Indonesia Berwarna Biru";
    $alas = 6; $tinggi= 8;
    $input_array = array(8,4,12,25,1,7,10);
    $arrayInput = array(9,3,18,25,33,30,29,66,17);
    $jumCetak = 8;
    $array1 = array(9,12,22,16,18);
    $arr2 = array(80,32,26,17);

    function reverse_text(String $str){
    	$a = explode(" ",$str);
        $b = [];
       	//echo count($a)."<br>";
        //echo strlen($str);
        
        //print_r($a);

        for($i = count($a)-1; $i >=0; $i--)
        {
           echo(strrev($a[$i])."&nbsp");
        }
        
    } 

    function hitung_segitiga_siku(int $alas, int $tinggi){
        $luas = 0.5 * $alas * $tinggi;
        echo "Luas Segitiga Siku-Siku = ". $luas;
    }

    function max_nilai_array($paramArr){
       $max = $paramArr[0];
       for($i = 0; $i < count($paramArr); $i++)
       {
            if($paramArr[$i]>$max)
            {
                $max = $paramArr[$i];
            }
       }

       return $max;

    }

    function tampil_ganjil($arrayInput){
        $arrTemp = [];
        for($i = 0; $i < count($arrayInput); $i++)
        {
            if($arrayInput[$i]%2 === 1)
            {
                array_push($arrTemp,$arrayInput[$i]);
            }
        }

        for($i = 0; $i < count($arrTemp); $i++)
        {
            echo $arrTemp[$i]. ",";
        }
    }

    function cetak_fibonaci($jumCetak){
        $arrFibbo = [];
        $bil = 0;
        for($i = 0; $i < $jumCetak; $i++)
        {
            if($i < 2)
            {
                $bil = $i;
            }
            else
            {
                $bil = $arrFibbo[$i-1] + $arrFibbo[$i-2];
            }

            array_push($arrFibbo,$bil);
        }

        return $arrFibbo;
    }

    function gabung_array($array1,$array2){
       
    }
    
    echo "No. 01 ", reverse_text($str)."<br>";
    echo "No. 02 ", hitung_segitiga_siku($alas,$tinggi)."<br>";
    echo "No. 03 -- Nilai Tertingi Array adalah ", max_nilai_array($input_array)."<br>";
    echo "No. 04 Nilai Ganjil Array =  ", tampil_ganjil($arrayInput)."<br>";
    echo "No. 05 Hasil Bil. Fibonnaci sejumlah ".$jumCetak. " adalah ".implode(" ", cetak_fibonaci($jumCetak))."<br>";
    echo "No. 06 Hasil Penggabungan Array adalah ".implode(" ", gabung_array);


?>