<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Document</title>
</head>
<body>

{{--topo --}}
<nav>
    <div class="container">
        <div class="nav-container">
            <a href="/" class="brand-logo"> Best Imoveis</a>
            <ul class="right">
                <li>
                    <a href="">Imoveis</a>
                </li>
                <li>
                    <a href="">Cidades</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{--princial --}}
    <div class="container">
        @yield('conteudo-principal')
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>