<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>
<body>
<h1>Page 3</h1>
<a href="page-1">URL 1</a>
    <a href="page-2">URL 2</a>
    <a href="page-3">URL 3</a>
    <h2>
        FROM : {{URL::previous()}}
</h2>
<h2>
    my current url is : {{URL::current()}}
</h2>
</body>
</html>
