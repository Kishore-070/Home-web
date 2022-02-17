<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Teacher table</title>
</head>
<body>
 
<div>

<h1 class="d-flex justify-content-center">Teachers Table</h1>

<table class=" table table-dark table-bordered table-striped table-hover">
    <tr>
        <td>Id</td>
        <td>Teacher name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>

    @foreach($teachers as $teacher)
    <tr>
        <td>{{$teacher['id']}}</td>
        <td>{{$teacher['teacher name']}}</td>
        <td>{{$teacher['email']}}</td>
        <td>{{$teacher['Address']}}</td>
    </tr>
    @endforeach
    
</table>

</div>

</body>
</html>
