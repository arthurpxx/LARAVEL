<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Home</title>
</head>

<body>
    <header>
        <div class="logo">
            <h2>Podcast</h2>
            <img src="" alt="">

            <nav class="campo">
                <ul>
                    <li::list-style:none;><a href="{{url('contato')}}">Contato</a></li>
                        <li::list-style:none;><a href="{{url('noticias')}}">Noticias</a></li>
                            <li::list-style:none;><a href="{{url('episodios')}}">Episodios</a></li>
                                <li::list-style:none;><a href="{{url('video')}}">Vídeocast</a></li>
                                    <li::list-style:none;><a href="{{url('membros')}}">Membros</a></li>
                                        <li::list-style:none;><a href="{{url('cadastro')}}">Cadastros</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="cadastro">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">

            <input type="submit" value="Conectar">
        </div>
    </form>
</body>

</html>