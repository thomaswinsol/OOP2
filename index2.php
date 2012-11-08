<?php
ini_set('display_errors',1);
require_once 'db.php';
session_start(); 
require_once 'includes/Winkelmand.php';


$winkelmand = new Winkelmand();
$winkelmand->toevoegenAanMand($items[0]);
$_SESSION['winkelmand']=$winkelmand;

var_dump($_SESSION['winkelmand']);

echo "<hr>";
    $winkelmand->mandWeergeven();
echo "</hr>";
echo "*******";    
echo '<table border="1">'.PHP_EOL;
        $ii=0;    
        foreach ($items as $row) {
            
            if ($ii==0) {
                echo "<tr>";
                    echo "<th>". "ID" . "</th>";
                    echo "<th>". "Titel" . "</th>";
                    echo "<th>". "Prijs" . "</th>";
      
                echo "</tr>";
            }
            echo '<tr>'. PHP_EOL;  
            
                echo '<td>'. $row['id']. '</td>'. PHP_EOL;                
                echo '<td>'. $row['titel']. '</td>'. PHP_EOL; 
                echo '<td>'. $row['prijs']. '</td>'. PHP_EOL;   
                echo '<td>'. "<a target='_blank' href='basket.php?row=".$ii. "'>" ."Bestel" ."</a>".  PHP_EOL; 
            echo '</tr>'. PHP_EOL;
            $ii++;
            
        }
 echo '</table>'.PHP_EOL;

?>
