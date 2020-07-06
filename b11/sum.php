<?php
class sumNumber{
    private function totalNumber($a,$b){//thuc te ham nay la linh hon cua chuong trinh cho nen phai dau di
        return $a+$b;
    }
    public function result(){//n1 n2 la gia tri o input nhap vao
//        return $this->totalNumber($data[0],$data[1]);
        $data =  $this->inputData();
//        return $this->totalNumber($n1,$n2);
        if(empty($data[0]) || empty($data[1])) {
                header("Location: index4.php?state=fail")  ;
            }else{
               $nghiem = $this->totalNumber($data[0],$data[1]);
               header("Location: index4.php?state=ok&result={$nghiem}");
            }

    }
    private function inputData(){//vi khong cho nguoi dung nhap vao
        if(isset($_POST['btnSum'])){
            $a = $_POST['number1'] ?? '';
            $a = is_numeric($a) ? $a : '';

            $b = $_POST['number2'] ?? '';
            $b = is_numeric($b) ? $b : '';
            return [$a, $b];
        }
        return false;
    }

}
$number = new SumNumber;
$number->result();
