<?php
        try {
            // Configuración de la base de datos
            $host = 'carbonzero.lat';
            $port = '3306';
            $dbname = 'carbrxww_panaloto';
            $user = 'carbrxww_produccion';
            $password = 'produccion$123';
        
            // Crear una conexión
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa a la base de datos.<br>";
    
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    
?>