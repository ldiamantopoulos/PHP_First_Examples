<?php
//way of the course for connecting to the db is not very smart so I wont waste time figuring that out
//require_once('../db_config.php');
//
//$query = "SELECT * FROM books";
//
//$db_connection = NULL;
//$results = $db_connection->query($query);
//
//
//?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>List of Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/28419aae13.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>GENRE</th>
            <th>HEIGHT</th>
            <th>PUBLISHER</th>
            <th>EDIT</th>
            <th>DELETE</th>

        </tr>
        </thead>
        <tbody>
        <!--    --><?php
        //    //supposing that the connection to the db was successful
        //    foreach ($results as $result) {
        //        ?>
        <!--        <tr>-->
        <!--            <td> --><?php //echo $result['id'] ?><!--</td>-->
        <!--            <td> --><?php //echo $result['title'] ?><!--</td>-->
        <!--            <td> --><?php //echo $result['author'] ?><!--</td>-->
        <!--            <td> --><?php //echo $result['genre'] ?><!--</td>-->
        <!--            <td> --><?php //echo $result['height'] ?><!--</td>-->
        <!--            <td> --><?php //echo $result['pub'] ?><!--</td>-->
        <!--            <td><a><A href="EditBooks.php?id=<?php //echo $result['id']?>"> <i class="fas fa-edit"></i></a></td>-->
        <!--        </tr>-->
        <!--        --><?php
        //    }
        //    ?>
        <tr>
            <td>1</td>
            <td>5 am</td>
            <td>Robin Shaman</td>
            <td>Motivational</td>
            <td>350</td>
            <td>Happy Life</td>
            <td><a><A href="edit.php"> <i class="fas fa-edit"></i></a></td>
            <td><a><A href="delete.php"> <i class="fas fa-trash-alt"></i></a></td>

        </tr>


        </tbody>
    </table>
    <form action="create.php" method="post">
        <p><input type="submit" name="submit" value="Insert New" /></p>
    </form>
</div>
</body>
</html>
