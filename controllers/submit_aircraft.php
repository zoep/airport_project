<?php
    include 'models/database.php';
    include 'models/aircraft.php';
    include 'models/aircraft_model.php';

    if ( (isset( $_POST[ 'regnum' ] ) ) && (isset( $_POST[ 'carrier' ] ) ) && (isset( $_POST[ 'condate' ] ) ) && (isset( $_POST[ 'mname' ] ) ) ) {
        insertaircraft( $_POST[ 'regnum' ], $_POST[ 'carrier' ], $_POST[ 'condate' ], $_POST[ 'mname' ] );
        header( 'Location: planes_tabs.php' );
    }
?>

