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
    <form class="col-md-4 m-5">
      <div class="mb-3">
        <label for="emailInput" class="mb-0 form-label">Email address</label>
        <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="nameInput" class="mb-0 form-label">Name</label>
        <input type="text" class="form-control" id="nameInput" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="addressInput" class="mb-0 form-label">Address</label>
        <input type="text" class="form-control" id="addressInput" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="phoneInput" class="mb-0 form-label">Phone</label>
        <input type="tel" class="form-control" id="phoneInput" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="commentInput" class="mb-0 form-label">Comment</label>
        <textarea class="form-control" id="commentInput" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="sel" class="mb-0 form-label">Departments</label>
        <select id="sel" class="form-select">
          <option>Departments</option>
          <option>Departments1</option>
          <option>Departments4</option>
          <option>Departments65</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>