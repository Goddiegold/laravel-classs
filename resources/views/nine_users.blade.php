<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
@if(session()->has('message'))
    <div class="alert alert-success text-center"
         x-data="{show:true}"
         x-init="setTimeout(()=>show=false,3000)"
         x-show="show">
        {{session()->get('message')}}
    </div>
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <h3>All Users</h3>
                <hr/>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                      <tr>
                          <th scope="row">{{$user['id']}}</th>
                          <td>{{$user['name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td><a href="{{"edit/".$user->id}}">Edit</a></td>
                          <td><a href="{{"delete/".$user->id}}">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>
