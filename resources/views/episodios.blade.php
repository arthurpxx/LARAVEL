<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
    <title>Episodios</title>
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

    <section>
        <h3>Episodios</h3>
        <div class="grid-container1">
            <div class="grid1">
                <p>Falcão e Soldado Invernal</p>
                <audio controls>
                    <source src="{{asset('assets/audio/cast1.mp3')}}" type="audio/mpeg">
                </audio>
            </div>
            <div class="grid1">
                <p>RPG Call of Cthulhu 1: O mistério de William Faraday?</p>
                <audio controls>
                    <source src="{{asset('assets/audio/cast1.mp3')}}" type="audio/mpeg">
                </audio>
            </div>
            <div class="grid1">
                <p>RPG Call of Cthulhu 2: O horror do Necronomicon</p>
                <audio controls>
                    <source src="{{asset('assets/audio/cast1.mp3')}}" type="audio/mpeg">
                </audio>
            </div>
            <div class="grid1">
                <p>RPG Call of Cthulhu 3: O despertar dos profundos</p>
                <audio controls>
                    <source src="{{asset('assets/audio/cast1.mp3')}}" type="audio/mpeg">
                </audio>
            </div>
            <div class="grid1">
                <p>RPG Call of Cthulhu 4: O último ritual</p>
                <audio controls>
                    <source src="{{asset('assets/audio/cast1.mp3')}}" type="audio/mpeg">
                </audio>
            </div>
            <div class="grid1">
                <p>Credo que delícia</p>
                <audio controls>
                    <source src="{{asset('assets/audio/cast1.mp3')}}" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </section>
</body>

</html>