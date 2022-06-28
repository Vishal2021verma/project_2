<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form method="post" action="{{url('/')}}/register">
            {{ csrf_field() }}
            <pre>
                @php
                //  $errors is superglobal varibale which larvel return from server end 
                    print_r($errors->all());
                    
                @endphp
            </pre> 
            <h1>Registration</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" />
                <span class="text-danger">
                    @error('name')
                    {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" />
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder=""
                    aria-describedby="helpId" />
                    <span class="text-danger">
                        @error('password')
                             {{$message}}
                        @enderror
                    </span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>
