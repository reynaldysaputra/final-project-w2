<!DOCTYPE html>
  <html>
    <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="stylesheet" href="<?= $this->config->base_url()?>/assets/style/global.css">

        <title>Cavenady</title>
    </head> 
  <body>

        <nav class="navigation navbar-fixed">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#" class="headerFontNav">Cavenady</a>

                    <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>

                    <ul class="right hide-on-med-and-down "  >
                        <li><a href="">Beranda</a></li>
                        <li><a href="">Gejala</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Tentang kami</a></li>
                        <li><a href="">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <ul class="sidenav" id="mobile-nav">
            <li><a href="">Beranda</a></li>
            <li><a href="">Gejala</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Tentang kami</a></li>
            <li><a href="">Kontak</a></li>
        </ul>
        <!-- Akhir navbar -->