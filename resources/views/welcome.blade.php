<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Botani</title>

        <!-- Browser's tab icon -->
        <link rel="icon" href="{{ asset('/images/logos/folha.svg') }} ">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">

    </head>
    <body>

    <header class="header-welcome">
            <img src="images/logos/logo-svg.svg" alt="logo-botani"
                class="logo-image-welcome">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">
                            <button>Login</button>
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button>Register</button>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </header>

        <main>
            <section class="cover-image"></section>

            <div class="welcome__container">
                <img class="welcome__detalhe" src="/images/logos/detalhe.png" alt="detail">
                <h2>Cultive suas plantas</h2>
                <h2>Cultive sua comunidade</h2>
                <img class="welcome__detalhe" src="/images/logos/detalhe.png" alt="detail">
            </div>

            <div class="welcome__container--about">
                <p> 
                    A semente do Botani começou a brotar durante o curso de Full Stack da Digital House, em 2019, mas logo suas raízes se fortaleceram e o Botani se tornou um projeto pessoal, regado pelos hobbies de jardinagem e pelo amor às plantas. O objetivo do Botani é ser um local online em que as pessoas possam acompanhar o desenvolvimento de suas plantas e compartilhar suas conquistas com amigos e colegas.
                    <br>
                    <br>
                    No momento, Botani ainda está em desenvolvimento, nas mãos de Yolanda Moretto e Deborah Happ.
                </p>
                <img src="/images/growing-plant-unscreen.gif" alt="">
            </div>

            <div class="welcome__container--bullets">
                <div class="welcome__container--bullets-item">
                    <i>
                        <img src="/images/logos/folha.png" alt="">
                    </i>
                    <p>
                        Crie linhas do tempo para suas plantas e compartilhe o crescimento delas.
                    </p>
                </div>
                <div class="welcome__container--bullets-item">
                    <i>
                        <img src="/images/logos/folha.png" alt="">
                    </i>
                    <p>
                        Compartilhe suas conquistas de jardinagem com seus amigos.
                    </p>
                </div>
                <div class="welcome__container--bullets-item">
                    <i>
                        <img src="/images/logos/folha.png" alt="">
                    </i>
                    <p>
                        Organize suas plantas em seu perfil da forma como achar melhor.
                    </p>
                </div>
        </main>
        <footer class="welcome__footer">
            <p>Botani | 2020</p>
            <p>Feito por ymoretto e deeeehapp</p>
        </footer>

    </body>
</html>
