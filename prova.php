<?php 
    
    include('index.html');

    if(isset($_POST['size'])){

        
        $size = $_POST['size'];
        
        $size = (int)$size;

        $table = "";
        $table = "<table class='tabela'>";
        

        for($row = 1; $row <= $size; $row++ ){
            if($row == 1){
                $table .= "<tr><td class='num-white bg-black'>". $row .'</td>';    
            }
            else{
                $table .= "<tr><td class='num-black'>". $row .'</td>';    
            }
            
            for($col = 1; $col < $row; $col++){
                if($row>1){
                    if($col == $row-1){
                        $table .= "<td class='bg-black'></td>" ;
                    }
                    else {
                        $table .= "<td></td>" ;
                    }
                }    
            } 
            $table .= "</tr>";
        }    

        $table .= "</table>";
        echo $table;
    }    
    
?>