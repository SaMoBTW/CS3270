<?php

// Variables and arrays | Data
include_once 'src/data.view.php';

// Head section
include_once 'src/head.view.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Testing</title>
</head>
<body>

 <div class="container">
    <div class="row">
      <!-- Create Form -->
      <div class="col">
        <form method="post" action="TEST_sql.php">
          <h3 class="text-center">Create Post</h3>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Languages</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="languages">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon3">Project URL</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="project-url">
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control" type="file" id="formFile" name="project-image">
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Post</button>
        </form>
      </div>

      <!-- Delete Form -->
      <div class="col">
        <form>
          <h3 class="text-center">Delete Post</h3>
          <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">PLACEHOLDER</label>
            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail2" class="form-label">PLACEHOLDER</label>
            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea2" class="form-label">PLACEHOLDER</label>
            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon4">PLACEHOLDER</span>
              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control" type="file" id="formFile">
          </div>

          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>