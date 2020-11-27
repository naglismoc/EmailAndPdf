<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            margin-top: 100px;
            margin-left: 400px;
        }
        h1{
            margin-top: 20px;
            margin-left: 400px;
        }
    </style>
</head>
<body>
    <form action="{{route('api.distance')}}" method="post">
        <label for="city1"> Atstumas nuo:</label>
        <input name ='city1' type="text"><br><br>
        <label for="city2"> Atstumas iki:</label>
        <input name ='city2' type="text"><br><br>
        @csrf
        <button type="submit">skaičiuoti</button>
    </form>
    @if(session()->has('result'))
        <h1>{{session('result')->distance}}</h1>
        {{-- <h1>{{session('result')->distances}}</h1> --}}
        <h1>{!!session('result')->stops[0]->travelGuides[0]->review!!}</h1>
    @endif

</body>
</html>