<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $midato; ?>

    <h1>{{$midato}}</h1>
    <form action="/cat5" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" >
        <input type="submit" value="Submit" >
    </form>
</body>
</html>
