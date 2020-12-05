<!doctype html>

<html lang="pl">
<head>
  <meta charset="utf-8">

  <title>docker-compose lab</title>
<style>

body {
    background-color: rgb(200, 200, 200);
}

#container {
    display: grid;
    grid-template-columns: 1fr;
}

.username {
    margin-left: 20px;
    margin-top: 20px;
    margin-right: 50px;
    font-family: Courier New;
}

.created_at {
    font-family: Courier New;
}

#label {
    display: block;
    font-size: 2em;
}


</style>
</head>

<body>
<div id="container">
    <div id="label">Użytkownicy od najnowszych do nastarszych</div>
    <hr/>
    <div id="users">
        <?php
            $conn = mysqli_connect("mysql", "root", "r0o0ot", "lampdb");

            if( mysqli_connect_errno() ){
                die('Błąd połączenia z bazą danych [' . mysqli_connect_error() . ']');
            }

            // mysqli_select_db($conn, 'lampdb');

            $query = "SELECT username, created_at FROM users ORDER BY created_at DESC";
            // echo $query;
            $results = mysqli_query($conn, $query) or die(mysqli_error($conn));
            // var_dump($results);
            while( $row = mysqli_fetch_assoc($results) ){
                $username = $row["username"];
                $created_at = $row["created_at"];

                echo '<div class="user">';
                echo '<span class="username">Username: '. $username .'</span>';
                echo '<span class="created_at">Zarejestrowany: '. $created_at .'</span>';
                echo "</div>\n";
            }
        ?>
    </div>
</div>
</body>
</html>