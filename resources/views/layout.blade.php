<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo', 'Meu site')</title>
</head>
<body>
    
    @yield('conteudo')
    
    <ul>
        <li><a href="/contato">Fale com a gente</a></li>
        
        <li><a href="/home">Página principal</a></li> 
        
        <li><a href="/sobre">Sobre nós</a></li>
    </ul>

</body>
</html>