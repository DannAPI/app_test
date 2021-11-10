<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Test</title>
  </head>
  <body>

          <div class="form-group row">
              <form action="{{route('add')}}" method = "POST" class="col-md-4 m-5">
      <div class="mb-3">
          @csrf
          <label for="nameInput" class="mb-0 form-label">Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
          <label for="emailInput" class="mb-0 form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="addressInput" class="mb-0 form-label">Address</label>
        <input type="text" class="form-control" name="user_address" id="user_address" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="phoneInput" class="mb-0 form-label">Phone</label>
        <input type="tel" class="form-control" name="phone_number" id="phone_number" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="commentInput" class="mb-0 form-label">Comment</label>
{{--        <textarea class="form-control" name="comment" id="comment" rows="3" required></textarea>--}}
          <input type="tel" class="form-control" name="comment" id="comment" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
        <label for="sel" class="mb-0 form-label">Departments</label>
        <select id="sel" class="form-select" name="department_id">
            {{$departments = \App\Models\Department::all()}}
            @foreach($departments as $department)
          <option id="department_id" name="department_id" value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
          </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>
