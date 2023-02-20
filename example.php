<html>
<head>
    <title>PRG-Pattern - PHP Demo</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/prg.css" type="text/css"/>
</head>
<body>
<ul>
    <li>
        <a href="example.html">First Link to static demo</a>
    </li>
    <li>
        <?php

        require_once('libs/prglib.php');

        echo(createPRGTag('http://localhost/example.php','saltvalue','Secound Link as PRG-Pattern',''));

        ?>
    </li>
</ul>
<!-- PRG-Form Start -->
<span class="prgform" style="display:none">
    <form action="/prg.php" method="post" id="prgform">
        <input>
        <input type="hidden" id="prgu" name="u" value="">
        <input type="hidden" id="prgh" name="h" value="">
    </form>
</span>
<!-- PRG-Form End -->

<script src="js/prgs.js"></script>
</body>
</html>
