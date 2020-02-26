</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SOAPMAKER</h3>
                <strong>SM</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </li>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-home"></i>
                        Home
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/home">Home</a>
                        </li>
                        <li>
                            <a href="/about">About</a>
                        </li>

                    </ul>
                </li>

                <li>

                    <a href="#batchSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-bong"></i>
                        Batches
                    </a>
                    <ul class="collapse list-unstyled" id="batchSubmenu">
                        <li>
                            <a href="/batches">Liste</a>
                        </li>
                        <li>
                            <a href="/batches/create">Ajouter</a>
                        </li>
                        <li>
                            <a href="#">Chercher</a>
                        </li>
                    </ul>
                </li>
                <li>
                    {{-- <a href="#">
                        <i class="fas fa-briefcase"></i>
                        Batches
                    </a> --}}
                    <a href="#productSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Produits
                    </a>
                    <ul class="collapse list-unstyled" id="productSubmenu">
                        <li>
                            <a href="/products">Liste</a>
                        </li>
                        <li>
                            <a href="/products/create">Ajouter</a>
                        </li>
                        <li>
                            <a href="#">Chercher</a>
                        </li>
                    </ul>
                </li>
                <li>
                    {{-- <a href="#">
                        <i class="fas fa-briefcase"></i>
                        Batches
                    </a> --}}
                    <a href="#ingredientSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-cannabis"></i>
                        Ingredients
                    </a>
                    <ul class="collapse list-unstyled" id="ingredientSubmenu">
                        <li>
                            <a href="/batches">Liste</a>
                        </li>
                        <li>
                            <a href="/batches/create">Ajouter</a>
                        </li>
                        <li>
                            <a href="#">Chercher</a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li> --}}
                <li>
                    <a href="/contact">
                        <i class="fas fa-paper-plane"></i>
                        Contact
                    </a>
                </li>
            </ul>

            {{-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> --}}
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>

                        <a href="{{ route('batches.index')}} " class="btn  btn-primary">PRODUCTION</a>
                    <a href="{{ route('suppliers.index')}} " class="btn  btn-secondary">APPROVISIONNEMENT</a>
                    <a href="{{ route('products.index')}} " class="btn  btn-primary">PRODUITS</a>
                    <a href="{{ route('ingredients.index')}} " class="btn  btn-warning">PRODUCTION</a>




                    <a href="{{ URL::previous() }}" class="fm-inline"><i class="fas fa-chevron-circle-left fa-2x"></i></a>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                        <!-- Right Side Of Navbar -->

                    </div> --}}
                </div>
            </nav>


