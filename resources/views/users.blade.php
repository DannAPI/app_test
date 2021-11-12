<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Test</title>
  </head>
  <body>


    <div class="justify-content-center row m-5">
        <div class="col-md-7"> <table class="table table-dark table-striped">
        <thead>
          <tr>
            <td>
              Name
            </td>
            <td>
              Departments
            </td>
          </tr>
        </thead>
        <tbody>
        @foreach($user as $one)
          <tr>
            <td>
                <a href="{{ route('user_by_id', ['user_by_id' => $one->id]) }}">{{$one->name ?? ""}}</a>
            </td>
              <td>
                  {{$one->department ? $one->department->name : ""}}
              </td>

          </tr>
        @endforeach
        </tbody>
      </table>
        </div>
        <div class="col-md-2">
            <a class="btn btn-primary" href="{{ route('all-for-index')}}">Начальная страница</a>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
