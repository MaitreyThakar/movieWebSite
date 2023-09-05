<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="mainbox"> <!-- mainbox start --> 

    <?php include 'components/top-navigation.php';?>

        <div class="mainbox2"> <!-- mainbox2 start-->
        <?php include 'components/left-navigation.php';?>
            <div class="middlebox"> <!-- middlebox start-->

                <div class="movie-video">
                    <?php 
                      $youtubeUrl = $_GET['movieurl'];

                      echo '<iframe
                      width="560" 
                      height="315" 
                      src="'.$youtubeUrl.'" 
                      title="YouTube video player" 
                      frameborder="0" 
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                      allowfullscreen></iframe>'             
                    ?>
                    
                </div>
                
            </div> <!-- middlebox end -->
            <?php include 'components/right-navigation.php';?>
        </div> <!-- mainbox2 end--> 
        <?php include 'components/footer.php';?>       
    </div><!-- mainbox end -->
</body>
</html>