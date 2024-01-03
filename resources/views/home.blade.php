

<!-- @for($counter=1; $counter<10; $counter++)
<h1>{{$counter}}</h1>
@endfor -->

@foreach($data as $name)
    <h2>{{$name}}</h2>
@endforeach

<form action="" method="get">
    <input type="text" placeholder="Email"><br/>
    <input type="text" placeholder="Password"><br/>
    <button>Submit</button>
</form>