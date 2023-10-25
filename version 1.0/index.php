
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Box Office</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="http://bleepinghost.online/uploads/nemo.jpeg">

    <!-- Logo -->
    <link rel="icon" type="image/x-icon" href="http://bleepinghost.online/uploads/bleepinghost.png">


    
    
</head>
<body >
    



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-1">
            
        <div class="container-fluid">

            <a class="navbar-brand fw-bold" href="http://bleepinghost.online/">
                <img src="http://bleepinghost.online/uploads/bleepinghost.png" alt="the-bleeping-host-logo" height="50" class="d-inline-block">
                The Bleeping Host
                <p class="fs-1 text-white ms-5 d-none d-md-block d-lg-block"><span style="color: red;">Box</span> Office</p>
            </a>

            

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-center nav-text-size" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-decoration-underline" aria-current="page" href="http://bleepinghost.online/">Back to Home</a>
                    </li>
                </ul>
            </div>
            
        </div>
        
    </nav>

    




    
        
        
        
        


<?php

$dir = "../External/Movies/";

if (!file_exists($dir)) {

    echo "<div class=' container my-5 p-5 text-center'>";
    echo "<img height='100' src='http://bleepinghost.online/images/repair.png' alt='repair-logo'>";
    echo "<p class='text-center fw-bold fs-3'>Sorry, this page is under maintenance.</p>";
    echo "</div>";


} else {

    $files = scandir($dir);


    if(count($files) <= 2) {

        echo "<div class='container border' style='padding-bottom: 100px;' >";


        echo "<div class='mt-5 bg-dark text-white p-3 fw-bold fs-2'> Movies Today</div>";

        
        echo "<div class='container mt-5 fw-bold white-text text-center' > No movies today, come back tomorrow! :)</div>";

        echo "</div>";
        echo "</div>";
        
        


    } else {


        echo "<div class='container' >";
        echo "<div class='row justify-content-center bg-dark m-1 rounded-1'>";
        
        echo "<div class='text-white fw-bold fs-1 d-md-none' > <span style='color: red;'>Box</span> Office </div>";

        echo "<div class='bg-dark px-5 col-12 rounded' style='padding-bottom: 150px;'>";
        echo "<div class='text-white mb-5 fw-bold fs-1 mt-5' > Movies Today </div>";
        
        foreach($files as $file) {


            if(preg_match("/.mp4/", $file)) {


                $file_with_ext = pathinfo($file);
                $no_ext = $file_with_ext['filename'];
                

                echo "<a style='color: red;' class='text-decoration-none fw-bold  fs-5' ' href='play-movie.php?movie=../External/Movies/" . $file . "'> $no_ext </a> <hr class='text-white'> <br> <br>";
            }

        }

        echo "</div>";
        echo "</div>";
        echo "</div>";
        
    }

}

?>





    <!-- Request a Movie -->
    <p class="lead text-center fs-5 mt-5">Do you have a movie in mind that you want to watch here? <br><span class="fs-5">Request at <span style="color: red; font-weight: bold;">gulf121909@gmail.com</span> </span> </p>



    <!-- Footer Sect -->
    <footer id="footer" style="margin-top: 500px;">
        
        <div class="container-fluid bg-dark p-4">
            
            <div class="container text-center">
                
                <div class="row justify-content-center">
                    
                    
                    <!-- Site Navigation -->
                    <div class="col-12 text-center">
                        
                        <h2 class="mb-5 text-white fs-3 fw-bold">Site Navigation</h2>
                        <a href="http://bleepinghost.online/" class="fs-5 text-white">Back to Home</a><br>
                        
                        
                    </div>
                    
                    
                    <div class="col-12 text-white text-center" style="margin-top: 100px;">
                        
                        <h2 class="fw-bold">The Clever Dev</h2>
                        <p class="lead">Copyright &copy; 2023. Designed by Jess Bugs</p>
                        
                    </div>
                    
                    
                    
                    
                </div> <!-- row -->
                
                
                
            </div>
            
        </div>
        
        
    </footer>
    
    
    
    
    
    
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
