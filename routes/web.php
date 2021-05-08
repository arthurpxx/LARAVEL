<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [usercontroller::class, 'index']);
Route::post('/login', [usercontroller::class, 'login'])->name('login');

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/episodios', function () {
    return view('episodios');
});

Route::get('/membros', function () {
    return view('membros');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/noticias/{id}', function ($id) {
    if ($id == 1) {
        $titulo = 'Novo jogo de Fable está sendo desenvolvido com motor gráfico de Forza';
        $img = 'https://uploads.jovemnerd.com.br/wp-content/uploads/2021/05/novo-jogo-de-fable-esta-sendo-desenvolvido-com-motor-grafico-de-forza.jpg';
        $conteudo = 'A Microsoft publicou recentemente uma nova vaga de emprego — disponível aqui — que revelou mais detalhes sobre o próximo Fable. As informações são do IGN.

        Segundo as descrições da vaga, eles estão à procura de um engenheiro de software que possa ajudar no desenvolvimento de três títulos de grande orçamento, sendo dois deles de franquias conhecidas do Xbox, com o motor gráfico ForzaTech.
        
        Além dos três projetos, o candidato também precisa topar trabalhar com o motor no mundo aberto do novo Fable, dando uma mãozinha em recursos como ray tracing.
        
        O ForzaTech é usado em jogos das franquias Forza Motorsport e Forza Horizon, que são altamente aclamados pelos seus visuais — o que significa que os fãs que estão ansiosos pelo próximo capítulo de Fable já podem esperar por gráficos na mesma altura.';
       
    } else if ($id == 2) {
        $titulo = 'Xbox Series X Vs. Xbox Series S: quais as diferenças entre os consoles?';
        $img = 'https://uploads.jovemnerd.com.br/wp-content/uploads/2020/09/xbox-series-x-vs-xbox-series-s.jpg';
        $conteudo = 'A Microsoft oferecerá duas opções diferentes para os jogadores que estiverem interessados na marca na próxima geração de consoles, são elas: Xbox Series X e Xbox Series S.

        Pode não parecer a princípio, mas as máquinas se diferenciam em vários quesitos, desde especificações básicas até no visual. Então, para não restar dúvidas, montamos um comparativo com as principais diferenças entre o Xbox Series X e Xbox Series S:';
    } else if ($id == 3) {
        $titulo = 'Como fazer streaming na Twitch, no YouTube e no Facebook';
        $img = 'https://uploads.jovemnerd.com.br/wp-content/uploads/2020/08/como-fazer-streaming-v.jpg';
        $conteudo = 'A forma como as pessoas consomem entretenimento está sempre mudando, e uma tendência que vem crescendo ao longo dos últimos anos, principalmente em tempos de distanciamento social e pandemia de COVID-19, é o streaming. 

        Enquanto reuniões e convenções particulares são feitas através de plataformas para conferências fechadas como o Zoom e o Google Meet, o streaming é mais amplo, algo como um programa de televisão com interação online em tempo real. A maior diferença é que geralmente o streamer é o responsável por dirigir, roteirizar e apresentar o “programa” em questão, e pode decidir até não interagir com o chat — embora boa parte da graça seja justamente falar ao vivo com o público e reagir aos comentários.
        
        As transmissões ao vivo também ganham espaço ao assumirem o papel de apresentarem novidades que normalmente seriam reveladas durante grandes eventos, festivais e outras atividades. Com o cancelamento das versões presenciais, muitas empresas estão optando pelas lives que, além de entregarem as informações necessárias, ainda possuem um alcance global.';
    } else if ($id == 4) {
        $titulo = 'Dica para todas as horas! Confira as recomendações do projeto #30Dias30Dicas';
        $img = 'https://uploads.jovemnerd.com.br/wp-content/uploads/2020/07/30dias30dicas-nerdbunker.jpg';
        $conteudo = 'Durante 30 dias, a redação do NerdBunker se reuniu para dar dicas de séries, filmes, games, HQs, livros, anines e mangás. Do dia 5 de junho ao dia 4 de julho, falamos de obras para todos os gostos: de comédia romântica ao terror.';
    } else if ($id == 5) {
        $titulo = 'Como começar a pintar miniaturas: opções de tintas, pincéis e dicas de conteúdo';
        $img = 'https://uploads.jovemnerd.com.br/wp-content/uploads/2020/06/como-pintar-miniaturas-smaug.jpg';
        $conteudo = 'Pintar miniaturas é um hobby divertido que pode servir a diversas funções. Ele pode ser excelente para quem quer um RPG ou jogo de tabuleiro cheio de miniaturas coloridas, um passatempo para quem quer uma atividade sem sair de casa ou apenas uma desculpa para colecionadores encherem ainda mais as próprias estantes.

        “Antigamente, conseguir as miniaturas e os jogos, bem como o material correto, sempre foi muito difícil e a gente se virava como podia”, conta Silvio Martins, que cultiva este hobby desde 1993.';
    } else if ($id == 6) {
        $titulo = 'O que é o true crime e como ele tem aparecido cada vez mais na cultura pop';
        $img = 'https://uploads.jovemnerd.com.br/wp-content/uploads/2020/05/o-que-e-true-crime-1.jpg';
        $conteudo = '“O conteúdo a seguir contém cenas fortes e de violência”. Este é um aviso recorrente em obras de true crime, gênero cada vez mais presente no mundo do entretenimento. O termo significa algo como “crime de verdade” ou “crime real”, mas costuma ser utilizado em inglês mesmo, sem ser traduzido.

        Diferente de filmes e livros baseados em histórias reais, a intenção do true crime é trazer casos verdadeiros, expor os detalhes dos crimes e o passo a passo das investigações. Esse estilo de não-ficção atrai cada vez mais fãs, mesmo que o tema aborde atrocidades, crimes hediondos e finais não muito felizes.
        
        Os títulos de true crime acompanham casos reais e não apenas “baseado em fatos reais”: eles fazem parte de um gênero literário e cinematográfico de não-ficção no qual o autor examina um crime real e detalha as ações de pessoas verdadeiras.';
    } else {
        $titulo = '';
        $conteudo = '';
    }
    return view('noticias2', [
        'titulo' => $titulo,
        'conteudo' => $conteudo,
        'image' => $img
    ]);
});
