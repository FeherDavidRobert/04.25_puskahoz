<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rgbSzinrogzito</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    <div class="div">
    
    <div class="row">
      <div class="col"><h1>RGB szinrogzito</h1></div>
      <div class="col"><img src="https://preview.redd.it/erju9yvyp3581.jpg?width=458&format=pjpg&auto=webp&s=868450a31b4c4ab52f838c89f4ca09a3de52921a"></div>
    </div>
    <table class="table table-striped text-white">
        <tr>
            <td>ID</td>
            <td>Red</td>
            <td>Green</td>
            <td>Blue</td>
            <td>RogzitesIdeje</td>
            <td>SZÍN</td>
        </tr>
    </table>
    <table class="table table-striped">
            @foreach ($tablazat as $item) {{-- tablazat= a controller neve --}}
            
        <tr>
            <td>{{$item->szid}}</td>
            <td>{{$item->red}}</td>
            <td>{{$item->green}}</td>
            <td>{{$item->blue}}</td>
            <td>{{$item->rogzitesIdeje}}</td>
            <td style="background-color: rgb({{$item->red}}, {{$item->green}}, {{$item->blue}})"></td>
        </tr>
        @endforeach
        </table>
    </div>
</body>
</html>