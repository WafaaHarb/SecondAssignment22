<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>
<center>

    <body>

        <h1>Hello, my name is <?php echo $name; ?></h1>


        <form action="about" mehod="post">
            @csrf
            <input type="text" name="name" id="name" required>
            <input type="submit" value="send">


        </form>




    </body>
</center>

</html>
