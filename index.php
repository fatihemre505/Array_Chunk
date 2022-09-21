<?php declare(strict_types=1) ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PHP || Arrays </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card bg-light">
                    <div class="card-header">
                        <h1 class="text-center fw-bold">PHP Array</h1>
                    </div>
                    <div class="card-body">

                        <?php   

                    $languages = array("Php","javascript","nodejs","html","css","c#","phyton","React","angulary");

                    $arrSplit = array_chunk($languages,3);

                 //   echo "<pre>";
                 //   print_r($arrSplit);
        
                    echo    "<hr>";
                    
                    for ($i=0; $i < count($arrSplit) ; $i++) { 
                        
                        echo "<p class='alert alert-danger py-3 text-center fw-bold'>".($i+1) .". dizi elemenları "."</p>";

                        for ($x=0; $x < count($arrSplit[$i]) ; $x++) { 
                            
                            echo "<p class='alert alert-primary'>".$arrSplit[$i][$x]."</p>";
                            
                        }
                    }




                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>