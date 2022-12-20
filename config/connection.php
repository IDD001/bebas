<?php  
class Data {
    public function Konek(){
        $conn = mysqli_connect("localhost", "root", "", "data-mhs");
        return $conn;
    }

    
    
}