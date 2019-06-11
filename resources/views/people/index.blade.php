<html>

<head>
    <title>第一回Laravel勉強会</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
            margin: 5px;
        }

        h1 {
            font-size: 50pt;
            text-align:right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }

        hr {
            margin: 25px 100px;
            border-top: 1px dashed #ddd;
        }

        .content {
            margin: 10px;
        }

        th {
            background-color: #999;
            color: fff;
            padding: 5px 10px;
        }

        td {
            border: solid 1px #aaa;
            color: #999;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h1>第一回Laravel勉強会</h1>
    <hr size="1">
    <div class="content">
        <table>
            <tr>
                <th>Name</th>
                <th>Mail</th>
                <th>Age</th>
            </tr>
            @foreach ($people as $person)
            <tr>
                <td>{{$person->name}}</td>
                <td>{{$person->mail}}</td>
                <td>{{$person->age}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>