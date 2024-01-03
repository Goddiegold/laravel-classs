<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
<h1>Page 1</h1>
<x-headercomponent title="Header Component from Page 1, Temi is a goat, from Ondo"/>
<a href="page-1">URL 1</a>
    <a href="page-2">URL 2</a>
    <a href="page-3">URL 3</a>
    <h2>
        FROM : {{URL::previous()}}
</h2>
<h2>
    my current url is : {{URL::current()}}
</h2>
<script>
        console.log("Hello world");
        const people = [];
        @foreach ($data as $person)
            people.push("<?php echo $person; ?>");
        @endforeach
        console.log(people);
    </script>

</body>
</html>
