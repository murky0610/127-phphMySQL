<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <title>Movie Theater | Seat Reservation</title>

        <link src="admin/font-awesome/css/all.js"/>

        <script src="admin/vendor/jquery/jquery.min.js"></script>

        <script src="admin/font-awesome/js/all.js"></script>
       
        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body id="page-top">


        <!-- important part idk -->

       <?php
       $page = isset($_GET['page']) ? $_GET['page'] : 'home';
       include($page.'.php');
       ?>
       
      <!-- 
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Movie Theater Seat Reservation System</div></div>
        </footer>
         -->
         
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/scripts.js"></script> 

    </body>
</html>
