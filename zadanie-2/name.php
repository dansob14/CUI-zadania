<?php
    $first_name = $_POST['fname'];
    $last_name= $_POST['lname'];
    $user_age= $_POST['age'];
    echo "Dzień Dobry $first_name $last_name !!! <br>";

    // Dodawanie do bazy danych
    //MsSQL
    /*
    try {  
        $conn = new PDO( "sqlsrv:Server=localhost;Database=zadaniaDB");   
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
    }  
           
    catch( PDOException $e ) {  
        echo "". $e->getMessage();
        die( "Error connecting to SQL Server" );   
    }  
           
    $query = "INSERT INTO dbo.users (imie,nazwisko,wiek) VALUES($first_name,$last_name,$age)";   
    $result = $conn->query( $query );   
    while ( $row = $result->fetch( PDO::FETCH_ASSOC ) ){   
        print_r( $row );   
    }  
    $query = "SELECT * FROM users";
    */

    //MySQL
    $fname = is_null($first_name) ? "NULL" : "$first_name";
    $lname = is_null($last_name) ? "NULL" : "$last_name";
    if(!$user_age > 0){
        $age = NULL;
    }else{
        $age = $user_age;
        
    }
    require_once "connect.php";
    mysqli_report(MYSQLI_REPORT_STRICT);
    
    try
    {
        $conn=new mysqli($host,$db_user,$db_password,$db_name);
        if($conn->connect_errno!=0)
        {
            throw new Exception(mysqli_connect_errno());
        }
        else
        {                     
            if($conn->query("INSERT INTO users VALUES (NULL,'$fname','$lname',$age)"))
            {
                echo "Dodano użytkownika do Bazy Danych";
            }
            else 
            {    
                echo "Wprowadzono nieprawidłowe dane <br>";
                throw new Exception($conn->error);
            }
            $conn->close();
        }
    }
    catch(Exception $e)
    {
        //echo "<span style='color: red;'>Błąd serwera! Przepraszamy za niedogodności. Wróć pózniej!</span>";
        echo "Info: $e";
    }
?>