<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style4.css')}}">
    <title>Noticias</title>
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
        <h3>Noticias</h3>
        <div class="grid-container">
            <div class="grid">
                <p>Novo jogo de Fable está sendo desenvolvido com motor gráfico de Forza</p>
                <div>
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2021/05/novo-jogo-de-fable-esta-sendo-desenvolvido-com-motor-grafico-de-forza.jpg" alt="">
                    <a href="{{url('noticias', ['id'=>1])}}">Ver mais</a>
                </div>

            </div>
            <div class="grid">
                <p>Xbox Series X Vs. Xbox Series S: quais as diferenças entre os consoles?</p>
                <div>
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2020/09/xbox-series-x-vs-xbox-series-s.jpg" alt="">
                    <a href="{{url('noticias', ['id'=>2])}}">Ver mais</a>
                </div>
            </div>
            <div class="grid">
                <p>Como fazer streaming na Twitch, no YouTube e no Facebook</p>
                <div>
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2020/08/como-fazer-streaming-v.jpg" alt="">
                    <a href="{{url('noticias', ['id'=>3])}}">Ver mais</a>
                </div>
            </div>
            <div class="grid">
                <p>Dica para todas as horas! Confira as recomendações do projeto #30Dias30Dicas</p>
                <div>
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2020/07/30dias30dicas-nerdbunker.jpg" alt="">
                    <a href="{{url('noticias', ['id'=>4])}}">Ver mais</a>
                </div>
            </div>
            <div class="grid">
                <p>Como começar a pintar miniaturas: opções de tintas, pincéis e dicas de conteúdo</p>
                <div>
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2020/06/como-pintar-miniaturas-smaug.jpg" alt="">
                    <a href="{{url('noticias', ['id'=>5])}}">Ver mais</a>
                </div>
            </div>
            <div class="grid">
                <p>O que é o true crime e como ele tem aparecido cada vez mais na cultura pop</p>
                <div>
                    <img src="https://uploads.jovemnerd.com.br/wp-content/uploads/2020/05/o-que-e-true-crime-1.jpg" alt="">
                    <a href="{{url('noticias', ['id'=>6])}}">Ver mais</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>