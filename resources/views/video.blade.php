<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/style5.css')}}">
    <title>Videocast</title>
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
        <h3>Videocast</h3>
        <div class="grid-container2">
            <div class="grid2">
                <video width="320" height="240" controls>
                    <source src="{{asset('assets/vidiu/video.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="grid2">
                <video width="320" height="240" controls>
                    <source src="{{asset('assets/vidiu/video1.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="grid2">
                <video width="320" height="240" controls>
                    <source src="{{asset('assets/vidiu/video2.mp4')}}" type="video/mp4">

                </video>
            </div>
            <div class="grid2">
                <video width="320" height="240" controls>
                    <source src="{{asset('assets/vidiu/video3.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="grid2">
                <video width="320" height="240" controls>
                    <source src="{{asset('assets/vidiu/video4.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div class="grid2">
                <video width="320" height="240" controls>
                    <source src="{{asset('assets/vidiu/video5.mp4')}}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
</body>

</html>