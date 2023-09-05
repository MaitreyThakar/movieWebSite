<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="mainbox"> 
       
    <?php include 'components/top-navigation.php';?>
        <div class="mainbox2">
        <?php include 'components/left-navigation.php';?>
            <div class="middlebox"> 

               <div class="indexmiddlebox"> 
                    <h1 class="movieindextext">Movies Trailer Website</h1>
                    <h4 class="movieindextext2">Keep Visit To Latest Watch New Movies Trailer</h4>

                    <div class="moviehomemiddle2"> 
                        <a href=hollywood.php>
                                <div class="homeholly"> 
                                    <div class="homehollyd1"> 
                                        <img class="homehollypic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_D6Kz_f_yWL9xDFtS6gcY8HVIKEcFmvl14w&usqp=CAU">
                                    </div> 
                                    <div class="homehollyd2"> 
                                        <h1 class="hollytext">Hollywood</h1>
                                    </div>
                                </div> 
                        </a>


                        <a href="bollywood.php">
                                <div class="homebolly">
                                    <div class="homebollyd1"> 
                                        <img class="homebollypic2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6WMunwpw7J2zds0-Ko_dc8YKfdIl_PezM0g&usqp=CAU">
                                    </div> 
                                    <div class="homebollyd2"> 
                                        <h1 class="bollytext">Bollywood</h1>
                                    </div> 
                                </div> 
                        </a>


                        <a href="tollywood.php">
                                <div class="hometolly"> 
                                    <div class="hometollyd1"> 
                                        <img class="hometollypic2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDSaYE9nE1he6LVK20UDF-I2TMzP8S7NdVSQ&usqp=CAU">
                                    </div> 
                                    <div class="hometollyd2"> 
                                        <h1 class="tollytext">Tollywood</h1>
                                    </div> 
                                </div> 
                        </a>

                        <a href="dholywood.php">

                                <div class="homedolly"> 
                                    <div class="homedollyd1"> 
                                        <img class="homedollypic2" src="data:image/png;base64,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">
                                    </div> 
                                    <div class="homedollyd2">
                                        <h1 class="dollytext">Dhollywood</h1>
                                    </div> 
                                </div> 

                        </a>


                        
                    </div> 

               </div> 
                
            </div> 
            <?php include 'components/right-navigation.php';?>
        </div> 
        <?php include 'components/footer.php';?>   
    </div>
   
</body>
</html>