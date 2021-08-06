<?php

#### Q.13 - - ফর লুপ ইউজ করে  ১,২,৩,৪,৫,৬,৭,৮,৯ এর নামতা রেডি করুন 
$multiTab = "Multiplication Tables";
echo "<strong style = \"font-size:30px; margin-left:75px;border-bottom: 3px solid green;\">{$multiTab} <br></strong>";
for($i = 1; $i <= 10; $i++){  
    if($i <= 10){
        echo "<br><span style = \"border-bottom: 3px solid black; font-size:20px; color: #150599; margin-left:150px\"> Multiplication of {$i} <br></span></br>";       
    };   
     for($m = 1; $m <= 10; $m++){       
        $nam = $i * $m ;
        echo " <span style = \"margin-left:150px\">{$i} x {$m} = {$nam} </span><br>";        
    };  
};
?>