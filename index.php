<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AshishkrGoyal</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <style>
        body,html
        {
            height: 100%;
        }
        h1,h4,footer
        {
            font-family: 'Nunito', sans-serif;
            font-weight:  bolder;
        }
        img
        {
            display: block;
            margin: 0 auto;
            height: 50vh;
        }

    </style>
</head>
<body>

<h1 class="text-center">Ashish kumar Goyal Jaypee</h1>

<img src="assets/images/github.png" alt="Ashish Goyal">

<!--php script goes here-->
<h4 class="text-center">
    <?php
    echo 'https://github.com/AshishkrGoyal';
    ?>

        <br>

        <br>
    <?php
        echo '<em>Last Modification: </em> ' , date('d/m/Y H:i:s', getlastmod());
        #echo time();
    ?>
    <br><br>
    <?php
        echo '<em>Current date:</em> ' , date('d/m/y H:i:s')
    ?>
</h4>

<!--<footer class="text-center">
    <?php
/*        echo date('Y'), 'Ashish Kumar Goyal';
    */?>
</footer>-->

</body>
</html>