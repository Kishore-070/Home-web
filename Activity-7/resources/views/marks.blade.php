<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Marks table</title>
</head>
<body>
 
<div>

<h1 class="d-flex justify-content-center">Student Marks</h1>

<table class=" table table-dark table-bordered table-striped table-hover">
    <tr>
        <td>Id</td>
        <td>Mark 1</td>
        <td>Mark 2</td>
        <td>Mark 3</td>
    </tr>

    @foreach($marks as $mark)
    <tr>
        <td>{{$mark['id']}}</td>
        <td>{{$mark['mark 1']}}</td>
        <td>{{$mark['mark 2']}}</td>
        <td>{{$mark['mark 3']}}</td>
    </tr>
    @endforeach
    
</table>

</div>

</body>
</html>
