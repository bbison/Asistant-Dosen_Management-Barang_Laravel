<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="\bootstrap-5.3.0-alpha1\bootstrap-5.3.0-alpha1\dist\css\bootstrap.css">
    <link rel="stylesheet" href="\bootstrap-5.3.0-alpha1\bootstrap-5.3.0-alpha1\dist\js\bootstrap.js">
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="col-6">
            <br>
            <br>
            <form action="/" method="post">
                @csrf
                 <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                 <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                 <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                </div>
                 <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>
</html>