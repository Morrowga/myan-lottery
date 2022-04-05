<?php

namespace MyanLottery\Lottery;

class Twod
{

    public function numbers(){
        return [
            '00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15',
            '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31',
            '32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47',
            '48','49','50','51','52','53','54','55','56','57','58','59','60','61','62','63',
            '64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79',
            '80','81','82','83','84','85','86','87','88','89','90','91','92','93','94','95',
            '96','97','98','99'
        ];
    }
    
    public function reverse_array(Array $number){   
        $res = [];
        foreach($number as $num){
            if(strlen($num) === 2){
                array_push($res,strrev($num));
            } else {
                throw new \ErrorException("Expected string length is 2.  ". strlen($num) ."  given. Called reverse_array() function.");
            }
        }
        return response()->json([ "data" => $res ],200);

    }

    public function reverse_string(String $number){   
        if(strlen($number) === 2){
            $res = strrev($number);
            return response()->json([ "data" => $res ],200);
        }
        throw new \ErrorException("Expected string length is 2.  ". strlen($number) ."  given. Called reverse_string() function.");
    }

    public function natkhat(){
        $data = [
            "data" => [ "18","24","35","69", "70" ]
        ];
        return response()->json($data,200);
    }

    public function power(){
        $data = [
            "data" => [ "05","16","27","38", "49" ]
        ];
        return response()->json($data,200);
    }

    public function nyiko(){
        $data = [
            "data" => [ "01","12","23","34", "45",'56','67','78','89','90' ]
        ];
        return response()->json($data,200);
    }

    public function salpyae(){
        $data = [
            "data" => [ "10","20","30","40", "50",'60','70','80','90' ]
        ];
        return response()->json($data,200);
    }

    public function apuu(){
        $data = [
            "data" => [ "00","11","22","33", "44",'55','66','77','88','99' ]
        ];
        return response()->json($data,200);
    }

    public function break_round(String $number){
        $res = [];
        $array = [
            '0' => [
                '00'
            ],
            '1' => [
                '01','10'
            ],
            '2' =>  [
                '02','11','20'
            ],
            '3' => [
                '03','12','21','30',
            ],
            '4' => [
                '04','13','22','31','40',
            ],
            '5' => [
                '05','14','23', '32','41','50',
            ],
            '6' => [
                '06','15','24','33','42','51','60'
            ],
            '7' => [
                '07','16','25','34','43','52','61','70'
            ],
            '8' =>  [
                '08','17','26','35','44','53','62','71','80'
            ],
            '9' => [
                '09','18','27','36','45','54','63','72','81','90'
            ],
            '10' => [
                '19','28','37','46','55','64','73','82','91'
            ],
            '11' => [
                '29','38','47','56','65','74','83','92'
            ],
            '12' => [
                '39','48','57','66','75','84','93'
            ],
            '13' => [
                '49','58','67','76','85','94'
            ],
            '14' => [
                '59','68','77','86','95'
            ],
            '15' => [
                '69','78','87','96'
            ],
            '16' => [
                '79','88','97'
            ],
            '17' =>  [
                '89','98'
            ],
            '18' =>  [
                '99'
            ]
        ];
        if((int) $number <= 18){
            foreach($array as $key => $data){
                if($key == $number){
                    return response()->json([ "data" => $data ],200);
                }
            }
        }
        

        throw new \ErrorException("Can't be 'Break Round' more than 18. Called break_round() function.");

    }

    public function break(String $number){
        $res = [];
        $array = [
            '0' => [
                '00'
            ],
            '1' => [
                '01'
            ],
            '2' =>  [
                '02','11'
            ],
            '3' => [
                '03','12'
            ],
            '4' => [
                '04','13','22'
            ],
            '5' => [
                '05','14','23'
            ],
            '6' => [
                '06','15','24','33'
            ],
            '7' => [
                '07','16','25','34'
            ],
            '8' =>  [
                '08','17','26','35','44'
            ],
            '9' => [
                '09','18','27','36','45'
            ],
            '10' => [
                '19','28','37','46','55'
            ],
            '11' => [
                '29','38','47','56'
            ],
            '12' => [
                '39','48','57','66'
            ],
            '13' => [
                '49','58','67'
            ],
            '14' => [
                '59','68','77'
            ],
            '15' => [
                '69','78'
            ],
            '16' => [
                '79','88'
            ],
            '17' =>  [
                '89'
            ],
            '18' =>  [
                '99'
            ]
        ];
        if((int) $number <= 18){
            foreach($array as $key => $data){
                if($key == $number){
                    return response()->json([ "data" => $data ],200);
                }
            }
        }
        

        throw new \ErrorException("Can't be 'Break' more than 18. Called break() function.");

    }

    public function even(){
        $data = [
            "data" => [
                '00', '02', '04', '06', '08', '20', '22', '24', '26', '28','40','42', '44',
                '46', '48', '60', '62', '64', '66', '68', '80','82','84','86','88'
            ]
        ];

        return response()->json($data,200);
    }

    public function odd(){
        $data = [
            "data" => [
                '11','13','15','17','19','31','33','35','37','39','51','53','55','57','59','71',
                '73','75','77','79', '91','93','95','97','99'
            ]
        ];

        return response()->json($data,200);
    }

    public function evenodd(){
        $data = [
            "data" => [
                '01','03','05','07','09','21','23','25','27','29','41','43','45','47','49','61',
                '63','65','67','69', '81','83','85','87','89'
            ]
        ];

        return response()->json($data,200);
    }

    public function oddeven(){
        $data = [
            "data" => [
                '10','12','14','16','18','30','32','34','36','38','50','52','54','56','58','70','72','74','76','78','90',
                '92','94','96','98'
            ]
        ];

        return response()->json($data,200);
    }

    public function sameeven(){
        $data = [
            "data" => [
                '00', '22','44','66','88'
            ]
        ];

        return response()->json($data,200);
    }

    public function sameodd(){
        $data = [
            "data" => [
                '11','33','55','77','99'
            ]
        ];

        return response()->json($data,200);
    }

    public function bigNumber(){
        $data = [
            "data" => [
                '50','51','52','53','54','55','56','57','58','59','60','61','62','63','64','65',
                '66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81',
                '82','83','84','85','86','87','88','89','90','91','92','93','94','95','96','97',
                '98','99'
            ]
        ];

        return response()->json($data,200);
    }

    public function smallNumber(){
        $data = [
            "data" => [
                '00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15',
                '16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31',
                '32','33','34','35','36','37','38','39','40','41','42','43','44','45','46','47',
                '48','49'
            ]
        ];

        return response()->json($data,200);
    }

    public function htatesee(String $number){
        $nums = $this->numbers();
        $res = [];
        
        if(strlen($number) === 1){
            foreach($nums as $num){
                $split = str_split($num);
                if($split[0] == $number){
                    array_push($res, $num);
                }
            }
            return response()->json([ "data" => $res ],200);
        }

        throw new \ErrorException("Expected string length is 1.  ". strlen($number) . " given. Called htatesee() function.");

    }

    public function naukpate(String $number){
        $nums = $this->numbers();
        $res = [];
        if(strlen($number) === 1){
            foreach($nums as $num){
                $split = str_split($num);
                if($split[1] == $number){
                    array_push($res, $num);
                }
            }
            return response()->json([ "data" => $res ],200);
        }

        throw new \ErrorException("Expected string length is 1.  ". strlen($number) . " given. Called naukpate() function.");

    }

    public function oneround(String $number){
        $nums = $this->numbers();
        $res = [];
        if(strlen($number) === 1){
            foreach($nums as $num){
                if(str_contains($num, $number)){
                    array_push($res, $num);
                }
            }
            return response()->json([ "data" => $res ],200);
        }

        throw new \ErrorException("Expected string length is 1.  ". strlen($number) . " given. Called oneround() function.");
    }

    public function number_arrange(String $num1,String $num2){
        $nums = $this->numbers();
        $res = [];
        if(strlen($num1) <= 2 && strlen($num2) <= 2){
            $res = range($num1, $num2);

            return response()->json([ "data" => $res ],200);
        } 

        throw new \ErrorException("Expected string length is 2. Called number_arrange() function.");
    }
}