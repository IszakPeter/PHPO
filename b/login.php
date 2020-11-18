<?php
require("conection.php");
if(isset($_GET['om'])){
   
    $x=$_GET['om'];
    $sql="select nev, baratOM from tanulok inner join kapcsolatok on tanulok.om=kapcsolatok.om where tanulok.om=".$x;
    $result=$conn->query($sql);
    if($result->num_rows > 0) {
        while($rows[] = $result->fetch_assoc());
    
        $json="{\"om\":".$x.",\"nev\":\"".$rows[0]['nev']."\", \"baratai\":[ ";
        foreach ($rows as $row) {
            $b=($row["baratOM"]).",";
            $json= $json."".$b;  
        }
        $json=$json."]}";
        $json=str_replace(",]","]",$json);
        $json=str_replace(",]","]",$json);
        echo $json;

    }
    else{

    echo"{\"om\": ".$x.", \"baratai\":[]}";
    }
}
else {echo "hazudsz";}
?>
