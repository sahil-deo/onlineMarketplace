<?php
try{
    require_once "inc/database.php";

    $query = "SELECT * FROM appdata WHERE Featured = 1;";
    $stmt = $pdo->prepare($query);
    
    $stmt->execute();

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);


        foreach($results as $result){

            echo "<div class='app'>";
            echo "<div class='appimg'><img src='{$result['imglink']}'></div>";
            echo "<div class='appname'><a href='{$result['link']}' target='_blank'>{$result['name']}</a></div>";
            echo "</div>";
            
        }

    $pdo = null;
    $stmt = null;
}

catch(PDOException $e){
    echo "Query Error: ". $e;
}
?>

