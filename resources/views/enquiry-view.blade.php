<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Enquiry Data</title>
    <style>
        *
        {
            box-sizing: border-box
        }
        body{
            background-color:lightgray;
        }
        .outer-div{

            width: 100%;
            height:100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: lightgray;
            padding: 50px;
        }
        .container{
            width:80%;
            padding: 50px;
            background-color:#e7e7e7;
            font-size: 12px

        }
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
            padding: 7px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link"  href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/enquiry/form')}}">Equiry Form</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/enquiry/view')}}">Enquiry Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="outer-div">
    <div class="container">
        <h5>Enquiries Details</h5>
<table>
    
    <thead>
        <tr>
       
            <th>
                Name
            </th>
            <th>
                Company Name   
            </th>
            <th>
                Phone Number
            </th>
            <th>
                Email
            </th>
            <th>
                Details         
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($enquiryData as $item)
        <tr>
           
            <td>{{$item->name}}</td>
            <td>{{$item->cname}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->details}}</td>
            <td>
                <a href="{{route('enquiry.delete', $item->enquiry_id)}}"><button class="btn btn-danger">Delete</button></a>
                <a href="{{route('enquiry.edit', $item->enquiry_id)}}"><button class="btn btn-primary">Edit</button></a>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>  
    </div>
</div>
</body>
</html>