

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<style>
    body, h1, p, form {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
    }

    .bg-red {
        background-color: #ff0000;
        color: #fff;
        padding: 20px;
    }

    .bg-dark {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    form {
        margin-top: 20px;
    }

    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        cursor: pointer;
    }

    .alert {
        text-align: center;
        margin-top: 20px;
        padding: 10px;
        background-color: #3498db;
        color: #fff;
    }
</style>

<body class="bg-red">


    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    hey mr <div class="bg-dark"><h1>{{auth()->user()->name}}</h1></div>




what is ur reclamation <br>

<br>
<form method="POST" action="{{ route('createNewReclamation') }}">
    @csrf
    <textarea name="reclamation" id="" cols="30" rows="10"></textarea><br>
    <input type="submit" value="effectuer" name="" id="">
</form>

    @if (session('status'))
    <script>
        alert("{{session('status')}}")
    </script>
    @endif
</body>
</html>



