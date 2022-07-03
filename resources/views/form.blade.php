<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enquiry form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        *
        {
            box-sizing: border-box
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
            width:50%;
            padding: 50px;
            background-color:#e7e7e7;
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
                <a class="nav-link active" aria-current="page" href="{{url('/enquiry/form')}}">Equiry Form</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/enquiry/view')}}">Enquiry Data</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>





      <div class="outer-div">
    <div class="container">
        <form method="post" action="{{$url}}">
            {{ csrf_field() }}
            {{-- <pre>
                @php
                //  $errors is superglobal varibale which larvel return from server end 
                    print_r($errors->all());                    
                @endphp
            </pre>  --}}

            <h1>{{$title}}</h1>
            <br>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="" class="form-control" placeholder="Enter your name*"
                    aria-describedby="helpId" value="{{$customer->name}}" required />
                {{-- <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span> --}}
            </div>
            <br>
            <div class="form-group">
                <label for="cName">Company Name:</label>
                <input type="text" name="cname" id="cName" class="form-control" placeholder="Company name*"
                    aria-describedby="helpId" value="{{$customer->cname}}" required />
                    {{-- <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span> --}}
            </div>
            <br>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone number*" value="{{$customer->phone}}" required>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="Email*"
                    aria-describedby="helpId" value="{{$customer->email}}" />
                    {{-- <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span> --}}
            </div>

            <br>
            <div class="form-group">
                <label for="details">Enter Details</label>
                <textarea class="form-control" name="details" id="details" placeholder="Enter your details here" cols="" rows="4" >{{$customer->details}}</textarea>
                    {{-- <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span> --}}
            </div>
            
            <br>
            <button type="submit" class="btn btn-primary">Let's Connect </button>
            <br>
        </form>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>
