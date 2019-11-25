<!DOCTYPE html>
<html>
    <title>PHP MySQL MVC</title>
    <script src="view/jquery-1.9.1.js" ></script>
    <script src="view/list.js" ></script>
    <script src="Views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="Views/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="Views/style.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <div class="container">
        
        <legend class="header">
            <h3 class="pull text-success text-center">Students Management</h3>
            <hr>
        </legend>
        
        <?php
        include "Views/" . $data['page'] . ".php";
        ?>     
    </div>

</body>
</html>


