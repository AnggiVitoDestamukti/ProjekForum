<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h2>Daftar User</h2>
        <table class="table-bordered table">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th colspan="2">Aksi</th>
            </tr>
            @foreach($datas as $key=>$value)
                <tr>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td><a class="btn btn-info" href="{{ url('user/'.$value->id.'/edit') }}">Update</a></td>
                    <td>
                        <form action="{{ url('user/'.$value->id) }}" method="POST">
                            @csrf 
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>