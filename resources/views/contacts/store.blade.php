<html>
<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta 
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>
        Document
    </title>
    <body>
    
    @foreach ($inputs as $key => $input)

    <h3>key</h3>{{ $key }} 
    <h3>input</h3>{{ $input }}

    @endforeach
    
    </body>

</html>
