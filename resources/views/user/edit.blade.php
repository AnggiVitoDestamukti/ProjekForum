<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

    <style>
        .box{
          width: 600px;
          padding: 80px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #241663;
          text-align: center;
        }

        h1{
            color:#ffffff;
            font-size:20px;
        }
    </style>

</head>
<body>
    <form method="POST" action="{{ url('user/'.$model->id) }}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="box">
            <div class="mb-3">
                <h1>Nama Lengkap</h1>
                <input type="text" name="name" value="{{ $model->name }}" class="form-control">
            </div>
            <div class="mb-3">
                <h1>Email</h1>
                <input type="email" name="email" value="{{ $model->email }}" class="form-control">
            </div>
            <div class="mb-3">
                <h1>Password</h1>
                <input type="password" name="password" value="{{ $model->password }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>