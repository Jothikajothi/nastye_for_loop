<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>for loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
  <body>
     <div class="container  mt-2">
        <div class="row justify-content-center ">
            <?php 
            for ($i=1;$i<=5;$i++){ 
            ?>
            <div class="col-md-6">
                <div class="card my-2">
                    <div class="card-header">
                        <h2 class="mb-0 text-center header " >class  <?php echo $i ?></h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                           <?php 
                           for ($j=1;$j<=3;$j++){ 
                           ?> 
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Section1</h4>
                                    </div>
                                    <div class="card-body">
                                      <ol>
                                        <?php 
                                        for ($k=1;$k<=10;$k++){

                                         
                                        ?>
                                        <li>student <?php echo $k ?></li>
                                         <?php } ?>
                                      </ol>  
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
     </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>