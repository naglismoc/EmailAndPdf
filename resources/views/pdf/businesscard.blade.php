<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            vertical-align: top;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,'Trebuchet MS', sans-serif;
            width: 700px;
            margin-left:  calc(50% - 350px);
            background-color: rgb(240, 230, 146);
        }
        #header,#main{
            
            background-color: rgb(175, 168, 105);
            display: block;
            width: 100%;
           
        }
        #header{
            height:240px;
        }
    .left{
        display: inline-block;
        float: left;
        width: 45%;
    }
    .right{
        display: inline-block;
        float: right;
        width: 55%;
    }
    .right>img{
        width:90%;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    </style>
</head>
<body>
    
    <div id="header">
        <div class="left">
            <H1>UAB BITE</H1>
            <h2>Saskaitu skyrius</h2>
            <h2>+37063500626</h2> 
        </div>
        <div class="right">
            <img src="https://placeimg.com/320/240/any " alt="img">
        </div>
    </div>
    <div id="main">
        <table>
            <tr>
              <th>Paslaugu gavejas</th>
              <th>laikotarpis</th>
              <th>saskaita</th>
            </tr>
            <tr>
              <td>{{$details['n1']}}</td>
              <td>{{$details['t1']}}</td>
              <td>{{$details['p1']}}€</td>
            </tr>
            <tr>
                <td>{{$details['n2']}}</td>
                <td>{{$details['t2']}}</td>
                <td>{{$details['p2']}}€</td>
              </tr>
            
          </table>
    </div>
   
    
</body>
</html>