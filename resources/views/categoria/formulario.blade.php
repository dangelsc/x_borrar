<?php 
use Illuminate\Support\Js;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $midato;
        $datos=['nombre'=>'juan','edad'=>'22','sexo'=>'H'];
        $t=12;
    ?>
    {{"hi"}}
    <br>
    {{8*65}}
    <br>
    <?php for($i=0;$i<10;$i++){?>
    <div style="display:inline-block;width:100px;border:1px solid gray">
        holas como estas
    </div>
    <?php } ?>
        <hr>
    @for($i=0;$i<10;$i++)
        @if($i%2==0)
    <div style="display:inline-block;width:100px;border:1px solid gray">
        holas como {{$i}}
    </div>
        @endif
    @endfor
    @foreach($datos as $key=>$item)
        <p><strong>{{$key}}</strong> {{$item}}</p>
    @endforeach

    @if($t>55)
        <h1>Es mayor</h1>
    @else
        <h1 style="color:red">Es menor</h1>
    @endif

    @include('layout/template',['m'=>$midato])
    <h1>{{$midato}}</h1>
    <form action="/cat5" method="post">
        @csrf
        <input type="text" name="nombre" id="nombre" >
        <input type="submit" value="Submit" >
    </form>
    <?php
    //esto esooasdasda
     ?>
    @php
    @endphp 

    {{-- el comentario --}}
    {{json_encode($datos)}}
    {{print_r($datos)}}
    <script type="text/javascript">
        var js_dato=JSON.parse('{{json_encode($datos)}}');
        var js_dato2=1{{--Illuminate\Support\Js::From($datos) --}};
    </script>
</body>
</html>
