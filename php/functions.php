<?php
    function DBConection(){
        $servername = "localhost";
        $username = "root";
        $password = "KupsaSQL";
        $database = "PosGamp";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            echo $conn . "<br>" . $e->getMessage();
        }
        $conn = null;
    }

    function regristrieren($username, $vorname, $nachname, $email, $password, $wiederholung){
    $Muster = "/^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/";
        if(isset($username) && isset($vorname) && isset($nachname) && isset($email) && isset($password) && isset($wiederholung) && preg_match($Muster, $email) && $password == $wiederholung){
            $servername = "localhost";
            $uname = "root";
            $pwd = "KupsaSQL";
            $dbname = "PosGamp";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $pwd);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO login (username, vorname, nachname, email, passwort)
                    VALUES ('$username', '$vorname', '$nachname', '$email', '$password')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
        } else {
            echo "Eingabe falsch";
        }
    }

    function login($user, $pswd){
        $check = 0;
        $servername = "localhost";
        $uname = "root";
        $pwd = "KupsaSQL";
        $dbname = "PosGamp";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $uname, $pwd);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM login WHERE username='$user'";
            // use exec() because no results are returned
            while($check == 0){
                foreach ($conn->query($sql) as $row) {
                    if($row['passwort'] == $pswd){
                        $check = 1;
                        break;
                    }
                }
            }
            //echo "successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        return $check;
    }
    
    function aPoem(){
        $poem = array("poem", "poem", "poem", "poem", "poem", "poem", "poem", "poem", "poem", "poem", "poem");
        /**
         * foreach ($colors as $value) {
         * echo "$value <br>";
         * }
         *
         * @return void
         */
        echo '<ol>';
        for($i=0;$i<(count($poem));$i++){
            if(($i%19)){
                echo '</br>';
            }
            
            echo '<li>' . $poem[$i] . '</li>';
            

        }
        echo '</ol>';
    }

    function ePoemRight($poem){
        if(strlen($poem) > 20){
            return substr($poem, 0, 20);
        } 
        return $poem;
    }

    function csscall(){
        if(isset($GET_['css'])){
            echo '<style> body{background-colour: black;} </style>';
        } else {
        echo '<style> body{background-colour: white;} </style>';
        }
    }

    function gamp(){
        echo "© by Michael Gamper, 2020 ";
    }

    /**
     * Die Funktion als HTML-Ausgabe 
     * erzeugt eine unsortierte Liste
     * mit den Inhalten der superglobalen
     * Variable $_SESSION
     *
     * @return void
     */
    function printServerDetails(){
        echo '<ul>';
        foreach($_SERVER as $key => $value){
            echo '<li>';
            echo $key . ': ' . $value;
            echo '</li>';
        }
        echo '</ul>';
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    function getBrowser(){
        $browsername = 'Unknown';

        if(preg_match('/Firefox/i',$_SERVER['HTTP_USER_AGENT'])){
            $browsername = 'ff';
        }elseif(preg_match('/Chrome/i',$_SERVER['HTTP_USER_AGENT']) && !preg_match('/Edge/i',$_SERVER['HTTP_USER_AGENT'])){
            $browsername = 'chromium';
        }elseif(preg_match('/Safari/i',$_SERVER['HTTP_USER_AGENT']) && !preg_match('/Edge/i',$_SERVER['HTTP_USER_AGENT'])){
            $browsername = 'safari';
        }elseif(preg_match('/Trident/i',$_SERVER['HTTP_USER_AGENT'])){
            $browsername = 'ie';
        }else{
            $browsername = 'other';
        }
        echo 'Browser: ' . $browsername;
    }

    function email($email){
        $Muster = "/^((?!\.)[\w-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/";

        if(preg_match($Muster, $email)){
            return true;
        }
        return false;
    }

    function checkname1($eingabe){
        if ($eingabe == trim($eingabe) && strpos($eingabe, ' ') !== false) {
            return true;
        } 
        return false;
    }

    function chekcname2(&$eingabe){
        if ($eingabe == trim($eingabe) && strpos($eingabe, ' ') !== false) {
            return true;
        }
        return false;
    }

    function sortierarray(){

    }

    function datetime($tag, $mon, $jah){
        $jetzt = mktime(0, 0, 0, date('m'), date('d'), date('Y')); 
        $gebur = mktime(0, 0, 0, $mon, $tag, $jah); 
        $age   = intval(($jetzt - $gebur) / (3600 * 24 * 365)); 

        echo $age . ' Jahre alt'; 
    }
?>