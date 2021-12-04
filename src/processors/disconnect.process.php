<?php

include 'session.process.php';

    // Possible car disconnecting script(?)

    // Instantiate Class

    // Running error Handlers and Disconnecting of Car

    // Destroying the session or sending it back to the connect page
session_destroy();
header("location: ../mvc/view/connect.php?disconnect=true");

