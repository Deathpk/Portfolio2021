<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/f2e8edb79e.js"></script>
        <!-- Lightbox Bootstrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
        <!-- CSS CUSTOM-->
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')
        <script src="{{asset('js/scripts.js')}}"></script>
        <section>
            <footer>
                <div class="footer-content">
                    <p>Copyrights &copy; 2020, Michel Versiani Dev - Todos os direitos reservados.</p>
                    <div class="social-list">
                        <ul>
                         <li><a href="https://www.linkedin.com/in/michel-versianidev"><i class="fab fa-linkedin-in"></i></a></li>
                         <li><a href="https://github.com/Deathpk"><i class="fab fa-github"></i></a></li>
                         <li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5531995411115"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
            <a href="#inicio" id="link-topo"><i class="fas fa-arrow-up"></i></a>
        </section>
    </body>
</html>
