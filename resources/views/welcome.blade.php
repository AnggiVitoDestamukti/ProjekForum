<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
    crossorigin="anonymous">

    </head>
    <body>
        <header>
            <div class="menu-bar">
                <ul>
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#kategori">KATEGORI</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="#"> Sport </a></li>
                                <li><a href="#"> Games </a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="forum">FORUM</a></li>
                
                </ul>
            </div>
            <ul>
            <a class="" href="#login"><button>Login</button></a>
                <a class="" href="{{ url('user/create') }}"><button>Sign Up</button></a>
            </ul>



            
                
                
            <div class="welcome" >
            Welcome to the IForum
            </div>  
            <div class="search-box">
                <input class="search-txt" type"text" name"" placeholder="search your forum or topic here">
                <a class="search-btn" href="#">search</a>
            </div>
        </header>
    </body>
</html>
