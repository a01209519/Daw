
    <?php 
    session_start();
    include ("_header.html");
    include ("_body.html");
    include ("_saludo.php");
    include ("_footer.html");
    session_destroy();
    session_unset();
    ?>