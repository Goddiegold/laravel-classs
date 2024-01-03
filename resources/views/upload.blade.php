<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <form style="width: 300px;"
    enctype="multipart/form-data"
    {{-- enctype="application/x-www-form-urlencoded" --}}
      method="POST"
    action="handle-upload">
    {{-- @method('PUT') --}}
    @csrf()
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Select File</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>