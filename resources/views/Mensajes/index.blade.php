<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col">
        @foreach($msj as $value)

            <spam>{{$loop->iteration}} : </spam><b>{{$value->usuario}} </b><spam> {{$value->mensaje}}</spam><br>            
            @endforeach
           <?php header("Refresh:1"); ?>
        </div>
    </div>
</div>
</body>
</html>


