<?php 

require_once __DIR__ . "/../dati/database.php";

$db_final = $database;
    
    if (!empty($_GET)) {
        
        $query = $_GET['query'];
        
        if (!empty($query)) {
            $db_final = [];
            
            foreach ($database as $value){
                if ( strpos(strtolower($value['title']), $query) !== false || strpos(strtolower($value['author']), $query) !== false ){
                    array_push($db_final, $value);
                } 
                elseif ( strtolower($value['genre']) == $query ) {
                    array_push($db_final, $value);
                }
            }
        }
    } 

    header('Content-Type: application/json');

    echo json_encode($db_final);

?>