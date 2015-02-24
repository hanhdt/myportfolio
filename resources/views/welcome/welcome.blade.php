<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hanh D. TRAN Portfolio">
    <meta name="author" content="Hanh D. TRAN">

    <title>Hanh D. TRAN Portfolio</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Hi I'm Hanh D. TRAN</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                @if (Auth::guest())
                    <li>
                        <a class="page-scroll" href="#services">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#subscribe">Subscribe</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a href="/auth/login">Login</a>
                    </li>
                    <li>
                        <a href="/auth/register">Register</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('skills')}}">Skills</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('projects')}}">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('about')}}">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('team')}}">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('contact')}}">Contact</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To My Studio!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
            <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>

@if(Session::has('message'))
    <div class="alert alert-success">
        {{Session::get('message')}}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-warning">
        {{Session::get('error')}}
    </div>
    @endif

            <!-- Services Section -->
    <section id="services">
        <div class="container">
            @include('welcome.skill_brief')
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            @include('welcome.project')
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            @include('welcome.about')
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            @include('welcome.team')
        </div>
    </section>

    <!-- Subscribe Aside -->
    <section id="subscribe">
        <aside class="clients">
            <div class="container">
                <div class="col-md-pull-12">
                    <div class="row-fluid subcribe-form">
                        @if ($errors->any())
                            <div class="alert alert-error">
                                <ul>
                                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                                </ul>
                            </div>
                        @endif

                        <div class="subscribe-content col-sm-12">
                            {!! Form::open(array('method' => 'post', 'url' => 'subscribes/storing')) !!}
                            {!! Form::label('something', 'Sign Up for Our Newsletter and Updates!', array('style' =>
                            'margin: 10px 0px 10px 0px')) !!}
                            {!! Form::text('email', null, array('class' => 'input-large form-control', 'placeholder' =>
                            'your email here!'))
                            !!}
                            {!! Form::submit('Subscribe', array("class" => 'btn btn-primary', "style" => 'margin: 10px
                            0px 10px 0px')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            @include('welcome.contact')
        </div>
    </section>

    <footer>
        <div class="container">
            @include('welcome.footer')
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>

                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive" src="img/portfolio/roundicons-free.png" alt="">

                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                nostrum, reiciendis facere nemo!</p>

                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of
                                them for free, courtesy of <a
                                        href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>,
                                or you can purchase the 1500 icon set <a
                                        href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.
                            </p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Heading</h2>

                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/startup-framework-preview.png"
                                 alt="">

                            <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder
                                for professionals. Startup Framework contains components and complex blocks (PSD+HTML
                                Bootstrap themes and templates) which can easily be integrated into almost any design.
                                All of these components are made in the same style, and can easily be integrated into
                                projects, allowing you to create hundreds of solutions for your future projects.</p>

                            <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>

                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/treehouse-preview.png" alt="">

                            <p>Treehouse is a free PSD web template built by <a
                                        href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright
                                and spacious design perfect for people or startup companies looking to showcase their
                                apps or other projects.</p>

                            <p>You can download the PSD template in this portfolio sample item at <a
                                        href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>

                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/golden-preview.png" alt="">

                            <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by
                                <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and
                                clean one page web template that was made exclusively for Best PSD Freebies. This
                                template has a great portfolio, timeline, and meet your team sections that can be easily
                                modified to fit your needs.</p>

                            <p>You can download the PSD template in this portfolio sample item at <a
                                        href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>

                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/escape-preview.png" alt="">

                            <p>Escape is a free PSD web template built by <a
                                        href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one
                                page web template that was designed with agencies in mind. This template is ideal for
                                those looking for a simple one page solution to describe your business and offer your
                                services.</p>

                            <p>You can download the PSD template in this portfolio sample item at <a
                                        href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Project Name</h2>

                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-responsive img-centered" src="img/portfolio/dreams-preview.png" alt="">

                            <p>Dreams is a free PSD web template built by <a
                                        href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a
                                modern one page web template designed for almost any purpose. It’s a beautiful template
                                that’s designed with the Bootstrap framework in mind.</p>

                            <p>You can download the PSD template in this portfolio sample item at <a
                                        href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.
                            </p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                        class="fa fa-times"></i> Close Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    {{--<script src="js/contact_me.js"></script>--}}

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
