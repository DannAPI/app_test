<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Test</title>
</head>
<body>


<div class="row m-5">
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <td>
                Email
            </td>
            <td>
                Name
            </td>
            <td>
                Address
            </td>
            <td>
                Phone
            </td>
            <td>
                Comment
            </td>
            <td>
                Departments
            </td>
        </tr>
        </thead>
        <tbody>
<tr>
        <td>
            {{$user->email ?? ""}}
        </td>
        <td>
             {{$user->name ?? ""}}
        </td>
        <td>
            {{$user->user_address ?? ""}}
        </td>
        <td>
            {{$user->phone_number ?? ""}}
        </td>
        <td>
            @foreach($comment as $two)
                {{$two->comment ?? ""}}
            @endforeach
        </td>
        <td>
            {{$user->department ? $user->department->name : ""}}
        </td>
    </tr>
        </tbody>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>