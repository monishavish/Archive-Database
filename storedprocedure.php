<?php
    require_once('db_connection.php');
    $conn=OpenCon();

if (!($mysqli->query("DROP PROCEDURE IF EXISTS p")) ||
    !($mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT count(*) INTO num FROM badges; DBMS_Output.Put_Line("num") END;'))) {
    echo "Stored procedure creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->multi_query("CALL p()")) {
    echo "CALL failed: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($res = $mysqli->store_result()) {
        printf("---\n");
        var_dump($res->fetch_all());
        $res->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());
?>