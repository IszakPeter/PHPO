<?php
require_once('conection.php');
if (isset($_GET['om'])){
    $om=$_GET['om'];
    $sql="SELECT nev, om, osztaly from tanulok where not om = $om  and om not in (select baratOM from kapcsolatok where om= $om) and osztaly=(SELECT osztaly from tanulok where om=$om limit 1) order by om";
    $result=$conn->query($sql);
   
    while($osztaly[] = $result->fetch_assoc());
    
    echo "<p>Osztálya: ".$osztaly[0]['osztaly']."</p>";
    echo "<select id='barat'>";
    echo "<option></<option>";
    for($i=0;$i<count($osztaly)-1;$i++)
        echo "<option value=".$osztaly[$i]['om'].">".$osztaly[$i]['nev']."</option>";
    echo "</select>";
                }

?>