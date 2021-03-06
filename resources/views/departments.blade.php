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
        <div class="col-md-7"><table class="offset-2 table table-dark table-striped">
        <thead>
          <tr>
            <td>
              Department
            </td>
            <td>

            </td>
          </tr>
        </thead>
        <tbody>
        @foreach($department as $one)
            <form action="{{route('delete', ['id' => $one->id])}}" method ="POST">
                @method('DELETE')
                @csrf
            <tr>
                <td>
                    {{$one->name ?? ""}}
                </td>
                <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </form>
        @endforeach
        </tbody>
      </table>
        </div>
        <div class="offset-1 col-md-2">
            <a class="btn btn-primary" href="{{ route('all-for-index')}}">Начальная страница</a>
        </div>
    </div>

    <div class="row justify-content-center"> <form action="{{route('depart')}}" method = "POST" class="col-md-4 m-5">
      <div class="mb-3">
          @csrf
        <label for="departmentInput" class="mb-0 form-label">Department name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
          @error('name')
          <div class = "alert alert-danger">{{ 'Name already exists' }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form> </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>

</html>
