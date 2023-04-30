<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LV3</title>

 
        
    </head>
    <body>

        <h1>Please, log in!</h1>
            <form action="/form-login">

                <input type="text" placeholder="Enter Email" name="email" id="email" required>
                <br><br>    
                <input type="text" placeholder="Enter Password" name="password" id="password" required>
                <br><br>
                <button>Login</button>
            </form>

    </body>
</html>