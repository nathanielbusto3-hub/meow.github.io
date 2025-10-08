       <?php
       $host = 'localhost';
       $port = 3308;
       $dbname = 'crud_system';
       $username = 'root';
       $password = '';

       try {
           $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
       } catch (PDOException $e) {
           
       }
       ?>
       