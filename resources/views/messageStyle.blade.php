<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
    <style>
        table,
        td,
        th {
            border: 1px solid rgb(177, 177, 177);
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 15px;
        }
    </style>
</head>

<body>

<h5>User Details</h5>
<table>
    <tr>
        <th>
            Name
        </th>
        <td>
            {{$name}}
        </td>
    </tr>
    <tr>
        <th>
            Company Name
        </th>
        <td>
            {{$cname}}
        </td>
    </tr>
    <tr>
        <th>
            Phone Number
        </th>
        <td>
            {{$phone}}
        </td>
    </tr>
    <tr>
        <th>
            Details
        </th>
        <td>
            {{$details}}
        </td>
    </tr>
</table>

</body>

</html>
