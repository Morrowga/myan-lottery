<?php

namespace MyanLottery\Lottery;

class Threed
{

    public function numbers(){
        $data = [];
        $result = [];
        for($i = 0; $i < 1000; $i++) {
            array_push($data, $i);
        }

        foreach($data as $datum){
            if(strlen((string)$datum) === 1){
                $one = '00' . (string)$datum;
                array_push($result,$one);
            } 
            if(strlen((string)$datum) === 2){
                $two = '0' . (string)$datum;
                array_push($result,$two);
            } 

            if(strlen((string)$datum) === 3){
                $three = (string)$datum;
                array_push($result,$three);
            } 
        }

        return $result;
    }

    public function r_origin_array(Array $number){
        $first = $second = $third = $array = [] ;
        $data = $this->numbers();
        
        foreach($number as $num){
            if(strlen($num) === 3){
                $split = str_split($num);
                if($split[0] === $split[1] && $split[0] === $split[2]){
                    array_push($array, $num);
                } else if($split[0] === $split[1]) {
                    $res = [
                        $split[0] . $split[1] . $split[2],
                        $split[0] . $split[2] . $split[1],
                        $split[2] . $split[1] . $split[0],
                    ];

                    foreach($res as $s){
                        array_push($array, $s);
                    }
                }  else if($split[0] === $split[2]){
                    $res = [
                        $split[0] . $split[1] . $split[2],
                        $split[0] . $split[2] . $split[1],
                        $split[1] . $split[2] . $split[0],
                    ];

                    foreach($res as $s){
                        array_push($array, $s);
                    }
                } else if($split[1] === $split[2]){
                    $res = [
                        $split[0] . $split[1] . $split[2],
                        $split[1] . $split[0] . $split[2],
                        $split[1] . $split[2] . $split[0],
                    ];

                    foreach($res as $s){
                        array_push($array, $s);
                    }
                } else {
                    foreach($data as $datum){
                        if(strpos($datum, $split[0]) !== false){
                            array_push($first,$datum);
                        }
                    }
        
                    foreach($first as $f){
                        if(strpos($f, $split[1]) !== false){
                            array_push($second,$f);
                        }
                    }
        
                    foreach($second as $s){
                        if(strpos($s, $split[2]) !== false){
                            array_push($third,$s);
                        }
                    }

                    foreach($third as $t){
                        array_push($array, $t);
                    }

                    unset($first);
                    unset($second);
                    unset($third);
                    $first = [];
                    $second = [];
                    $third = [];
                }
                return response()->json(['data' => $array],200);
            } else {
                throw new \ErrorException("Expected string length is 3.  ". strlen($num) . " given. Called r_origin_array() function.");
            }
        }
    }

    public function r_origin_string(String $number){
        $first = $second = $third = [] ;
        $data = $this->numbers();
        if(strlen($number) === 3){
            $split = str_split($number);

            if($split[0] === $split[1] && $split[0] === $split[2]){
                return response()->json(["data" => $number],200);
            } else if($split[0] === $split[1]) {
                $res = [
                    $split[0] . $split[1] . $split[2],
                    $split[0] . $split[2] . $split[1],
                    $split[2] . $split[1] . $split[0],
                ];
                return response()->json(['data' => $res],200);
            }  else if($split[0] === $split[2]){
                $res = [
                    $split[0] . $split[1] . $split[2],
                    $split[0] . $split[2] . $split[1],
                    $split[1] . $split[2] . $split[0],
                ];
                return response()->json(['data' => $res],200);
            } else if($split[1] === $split[2]){
                $res = [
                    $split[0] . $split[1] . $split[2],
                    $split[1] . $split[0] . $split[2],
                    $split[1] . $split[2] . $split[0],
                ];
                return response()->json(['data' => $res],200);
            } else {
                foreach($data as $datum){
                    if(strpos($datum, $split[0]) !== false){
                        array_push($first,$datum);
                    }
                }
    
                foreach($first as $f){
                    if(strpos($f, $split[1]) !== false){
                        array_push($second,$f);
                    }
                }
    
                foreach($second as $s){
                    if(strpos($s, $split[2]) !== false){
                        array_push($third,$s);
                    }
                }
    
                return response()->json(['data' => $third],200);
            }
        }
        throw new \ErrorException("Expected string length is 3.  ". strlen($number) . " given. Called r_origin_string() function.");
    }

    public function r_no_origin_array(Array $number){
        $first = $second = $third = $array = [] ;
        $data = $this->numbers();
       
        foreach($number as $num){
            if(strlen($num) === 3){
                $split = str_split($num);
                if($split[0] === $split[1] && $split[0] === $split[2]){
                    array_push($array, $num);
                } else if($split[0] === $split[1]) {
                    $res = [
                        $split[0] . $split[2] . $split[1],
                        $split[2] . $split[1] . $split[0],
                    ];

                    foreach($res as $s){
                        array_push($array, $s);
                    }
                }  else if($split[0] === $split[2]){
                    $res = [
                        $split[0] . $split[2] . $split[1],
                        $split[1] . $split[2] . $split[0],
                    ];

                    foreach($res as $s){
                        array_push($array, $s);
                    }
                } else if($split[1] === $split[2]){
                    $res = [
                        $split[1] . $split[0] . $split[2],
                        $split[1] . $split[2] . $split[0],
                    ];

                    foreach($res as $s){
                        array_push($array, $s);
                    }
                } else {
                    foreach($data as $datum){
                        if(strpos($datum, $split[0]) !== false){
                            array_push($first,$datum);
                        }
                    }
        
                    foreach($first as $f){
                        if(strpos($f, $split[1]) !== false){
                            array_push($second,$f);
                        }
                    }
        
                    foreach($second as $s){
                        if(strpos($s, $split[2]) !== false){
                            array_push($third,$s);
                        }
                    }

                    foreach($third as $t){
                        if($t !== $num){
                            array_push($array, $t);
                        }
                    }

                    unset($first);
                    unset($second);
                    unset($third);
                    $first = [];
                    $second = [];
                    $third = [];
                }
            } else {
                throw new \ErrorException("Expected string length is 3.  ". strlen($num) . " given. Called r_no_origin_array() function.");
            }
        }
        return response()->json(['data' => $array],200);
         
    }

    public function r_no_origin_string(String $number){
        $first = $second = $third = $res_array = [];
        $data = $this->numbers();
        if(strlen($number) === 3){
            $split = str_split($number);

            if($split[0] === $split[1] && $split[0] === $split[2]){
                return response()->json(["data" => $number],200);
            } else if($split[0] === $split[1]) {
                $res = [
                    $split[0] . $split[1] . $split[2],
                    $split[0] . $split[2] . $split[1],
                    $split[2] . $split[1] . $split[0],
                ];
                return response()->json(['data' => $res],200);
            }  else if($split[0] === $split[2]){
                $res = [
                    $split[0] . $split[1] . $split[2],
                    $split[0] . $split[2] . $split[1],
                    $split[1] . $split[2] . $split[0],
                ];
                return response()->json(['data' => $res],200);
            } else if($split[1] === $split[2]){
                $res = [
                    $split[0] . $split[1] . $split[2],
                    $split[1] . $split[0] . $split[2],
                    $split[1] . $split[2] . $split[0],
                ];
                return response()->json(['data' => $res],200);
            } else {
                foreach($data as $datum){
                    if(strpos($datum, $split[0]) !== false){
                        array_push($first,$datum);
                    }
                }
    
                foreach($first as $f){
                    if(strpos($f, $split[1]) !== false){
                        array_push($second,$f);
                    }
                }
    
                foreach($second as $s){
                    if(strpos($s, $split[2]) !== false){
                        array_push($third,$s);
                    }
                }

                foreach($third as $t){
                    if($t !== $number){
                        array_push($res_array, $t);
                    }
                }
    
                return response()->json(['data' => $res_array],200);
            }
        }
        throw new \ErrorException("Expected string length is 3.  ". strlen($number) . " given. Called r_no_origin_string() function.");
    }
       
    public function took_string(String $num,String $lucky){
        if(strlen($lucky) === 3 && strlen($num) === 3){
            $split = str_split($num);
            $calculate_process = (int) $lucky;
            $calculate_res_one = $calculate_process + 1;
            $calculate_res_two = $calculate_process - 1;
            
        
            if($num === (string) $calculate_res_one || $num === (string) $calculate_res_two){
                return response()->json(true);
            } else if(str_contains($lucky, $split[0]) && str_contains($lucky, $split[1]) && str_contains($lucky, $split[2])) {
                return response()->json(true);
            } else {
                return response()->json(false);
            }
        }
        throw new \ErrorException("Expected string length is 3. More given. Called took_string() function.");
    }
    
    public function took_array(Array $num,String $lucky){
        if(strlen($lucky) === 3){
            $calculate_process = (int) $lucky;
            $calculate_res_one = $calculate_process + 1;
            $calculate_res_two = $calculate_process - 1;
            $res_array = [];
            foreach($num as $datum){
                if(strlen($datum) === 3){
                    $split = str_split($datum);
                    if($datum === (string) $calculate_res_one || $num === (string) $calculate_res_two){
                        array_push($res_array, $datum);
                    } else if(str_contains($lucky, $split[0]) && str_contains($lucky, $split[1]) && str_contains($lucky, $split[2])){
                        array_push($res_array, $datum);
                    }
                } else {
                    throw new \ErrorException("Expected string length is 3.  ". strlen($datum) . " given. Called took_array() function.");
                }
            }
            return response()->json([
                "data" => $res_array
            ],200);
        }
        throw new \ErrorException("Expected string length is 3.  ". strlen($lucky) . " given. Called too_array() function.");
    }

    public function apuu(){
        $data = $this->numbers();
        $res_array = [];
        foreach($data as $datum){
            $split = str_split($datum);
            if($split[0] === $split[1] && $split[0] === $split[2]){
                array_push($res_array, $datum);
            }
        }

        return response()->json([
            "data" => $res_array
        ],200);
    }

    public function shaepuu_all(){
        $data = $this->numbers();
        $res_array = [];
        foreach($data as $datum){
            $split = str_split($datum);
            if($split[0] === $split[1] && $split[0] !== $split[2]){
                array_push($res_array, $datum);
            }
        }

        return response()->json([
            "data" => $res_array
        ],200);
    }

    public function shaepuu(String $num){
        $data = $this->numbers();
        $res_array = [];
        if(strlen($num) === 1){
            foreach($data as $datum){
                $split = str_split($datum);
                if($split[0] == $num && $split[1] == $num && $split[2] !== $num){
                    array_push($res_array, $datum);
                }
            }
    
            return response()->json([
                "data" => $res_array
            ],200);
        }
        throw new \ErrorException("Expected string length is 1.  ". strlen($num) . " given. Called shaepuu() function.");
    }

    public function naukpuu_all(){
        $data = $this->numbers();
        $res_array = [];
        foreach($data as $datum){
            $split = str_split($datum);
            if($split[1] === $split[2] && $split[0] !== $split[2]){
                array_push($res_array, $datum);
            }
        }

        return response()->json([
            "data" => $res_array
        ],200);
    }

    public function naukpuu(String $num){
        $data = $this->numbers();
        $res_array = [];
        if(strlen($num) === 1){
            foreach($data as $datum){
                $split = str_split($datum);
                if($split[1] == $num && $split[2] == $num && $split[0] !== $num){
                    array_push($res_array, $datum);
                }
            }
    
            return response()->json([
                "data" => $res_array
            ],200);
        }
        throw new \ErrorException("Expected string length is 1.  ". strlen($num) . " given. Called naukpuu() function.");
    }

    public function shaenaukpuu_all(){
        $data = $this->numbers();
        $res_array = [];
        foreach($data as $datum){
            $split = str_split($datum);
            if($split[0] === $split[2] && $split[1] !== $split[2]){
                array_push($res_array, $datum);
            }
        }

        return response()->json([
            "data" => $res_array
        ],200);
    }

    public function shaenaukpuu($num){
        $data = $this->numbers();
        $res_array = [];
        if(strlen($num) === 1){
            foreach($data as $datum){
                $split = str_split($datum);
                if($split[0] === $num && $split[2] === $num && $split[1] !== $num){
                    array_push($res_array, $datum);
                }
            }
            return response()->json([
                "data" => $res_array
            ],200);
        }
        throw new \ErrorException("Expected string length is 1.  ". strlen($num) . " given. Called shaenaukpuu() function.");
    }

}