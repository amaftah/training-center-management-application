<?php 
            try{
              $db_connection = new PDO("mysql:host=https://mafghal-zany-fortnight-p6w75996pxxc6vvg-8081.preview.app.github.dev:8081;dbname=centre;charset=utf8mb4;", 'root', 'rootpass');
            }
            catch(PDOException $e){
              echo 'Erreur : ' . $e->getMessage();
            }
    ?>