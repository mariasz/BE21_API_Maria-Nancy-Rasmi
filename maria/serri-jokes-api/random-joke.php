<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jokes API</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <?php
                require_once 'RESTful.php';
                               
                $url = 'http://api.serri.codefactory.live/random/';
                $randomJoke;

                for( $i=0; $i<10; $i++)
                {
                    $result = curl_get($url);
                    $randomJoke = json_decode($result); // turn the json into an object
                    echo "
                    <div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
                        <p class='card-title'> {$randomJoke->id_joke} </p>
                        <div class='card-body'>
                            <p class='card-text'> {$randomJoke->joke} </p>
                        </div>
                    </div>";
                }
 
                ?>
            </div>
        </div>
    </body>
</html>