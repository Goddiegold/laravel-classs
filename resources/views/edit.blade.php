<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
@if(session()->has('success'))
    <div class="alert alert-success"
         x-data="{show:true}"
         x-init="setTimeout(()=>show=false,3000)"
         x-show="show">
        {{session()->get('success')}}
    </div>
@endif
<form style="width:300px; margin: 20px auto;"
      method="POST"
      action="{{"/update/".$user->id}}">
     @method('PUT')
    @csrf()
    <h3 class="text-center text-danger">Welcome Admin</h3>
    <hr/>
    <h4 class="text-center">Update Record</h4>
    <hr/>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text"
               name="name"
               class="form-control"
               id="exampleInputEmail1"
               aria-describedby="emailHelp"
               value="{{old('name', $user->name)}}">
        @error('name') <span style="color:red;">{{$message}}</span>@enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email"
               readonly
               name="email"
               class="form-control"
               id="exampleInputEmail1"
               aria-describedby="emailHelp"
               value="{{old('email', $user->email)}}">
        @error('email') <span style="color:red;">{{$message}}</span>@enderror
    </div>
{{--    <div class="mb-3">--}}
{{--        <label for="exampleInputPassword1" class="form-label">Password</label>--}}
{{--        <input--}}
{{--            name="password"--}}
{{--            type="password" class="form-control" id="exampleInputPassword1"--}}
{{--            value="{{old('password')}}">--}}
{{--        @error('password') <span style="color:red;">{{$message}}</span>@enderror--}}
{{--    </div>--}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
