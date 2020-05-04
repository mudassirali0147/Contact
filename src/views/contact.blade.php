<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
</head>
<body>
    <h1>Contact Us For Package Detail</h1>

    <form class="form-group" action="/contact/store" method="post">
     @csrf 
    <input class="form-control" type="text" name="name" />
    <input type="text" name="email" />
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Submit">
    </form>
    
</body>
</html>