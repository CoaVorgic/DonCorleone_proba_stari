<?php
// loading database
require_once('db_config.php');

// SQL selecting query
$sqlMenu="SELECT * FROM menu";

// SQL execution 
$resultMenu=$connection->query($sqlMenu);

// if the query is executed
if($resultMenu){

    // getting data from row to array
    while($row=$resultMenu->fetch_assoc()){

        // printing table with results
        echo "<tr>
            <td>{$row['name']}</td>
            <td><input type=\"button\" name=\"view\" value=\"Detalji\" id=\"{$row['name']}\" class=\"btn btn-product view_data\" /></td>
            </tr>";
    }
}
?>