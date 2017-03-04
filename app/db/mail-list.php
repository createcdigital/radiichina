<?php

    session_start();

    header('Content-type: text/html; charset=utf-8');

    include_once 'connect.php';

    printf('<title>Subscribe List</title>');

    printf('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">');
    printf('<style>*{font-size: 12px;}</style>');

    printf("<table class='table table-bordered table-hover'>");
    printf("<tr><th>Email</th><th>Date</th></tr>");
    if ($result = $conn->query("SELECT email, adate FROM subscribes")) {

        /* fetch value */
        while($row = mysqli_fetch_array($result)){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['email'], $row['adate']);
        }

    }

    printf("</table>");
?>