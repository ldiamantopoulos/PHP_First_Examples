<?php
if (isset($_POST['submit'])){
    $valid_length = $_POST['book_isbn'];
    if (strlen($valid_length) == 10){
        $array_splitted = str_split($valid_length);
        $total_isbn_value = 0;
        for($i = 0; $i < count($array_splitted); $i++){
            $total_isbn_value += $array_splitted[$i] * ($i+1);
        }
        if ($total_isbn_value % 11 == 0){
            echo "The isbn is valid";
        }else{
            echo "The isbn is not valid";
        }
        //other way
        //foreach($array_splitted[$i] * $i;{
        //$total += $digit * $i;
        //$i++;}

    }else{
        echo "This is not valid isbn";
    }



}else{
    echo "Empty is obviously not valid";
}