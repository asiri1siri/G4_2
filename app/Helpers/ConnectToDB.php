<?php namespace App\Helpers;

class ConnectToDB
{
    public static function connect()
    {
        $host = "DATABASE_HOST"; 
        $username = "DATABASE_USERNAME"; 
        $password = "DATABASE_PASSWORD"; 
        $database = "DATABASE_NAME";

        try
        {
            $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password); 
            
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;
        }
        catch (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

?>