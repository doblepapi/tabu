<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            input{
                width: 25%;
                height: 10%;
            }
            .search-container {
                float: none;
            }
            .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 25%;
                height: 10%;
                margin: 0;
                padding: 14px;
            }
        </style>
    </head>
    <body>

            <div class="search-container">
                <form action="/action_page.php">
                <input type="text" placeholder="Writte your search" name="searching">
                <button type="submit"><i class="fa fa-search">Search now</i></button>
                </form>
            </div>

    </body>