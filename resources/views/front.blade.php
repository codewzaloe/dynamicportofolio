@php
    $site_name = get_footerr_value('_site_name');
    $jumbotron = get_section_data('JUMBOTRON');
    $location = get_footerr_value('location');
    $site_description = get_footerr_value('_site_description');

    $youtube = get_footerr_value('_youtube');
    $instagram = get_footerr_value('_instagram');
    $github = get_footerr_value('_github');

    $about = get_section_data('ABOUT');
    $experiences = get_experiences();
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $site_name }}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">{{ $site_name }}</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#skill">Skill</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About Me</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#partner">Experiences</a></li>
            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#profile">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
         <!-- Masthead Heading-->
         <h1 class="masthead-heading text-uppercase mb-0">{{ $jumbotron->title }}</h1><br>
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src={{ Storage::url($jumbotron->thumbnail) }} alt="..." />
        <h2 class="text-uppercase mb-4">Sekar Ayu Nadita</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-leaf"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{!! strip_tags($jumbotron->content)!!}</p>
      </div>
    </header>

              <!-- Skill-->
              <section class="page-section-heading text-center text-uppercase text-secondary mb-0" id="skill">
                <div class="container">
                    <div class="text-center">
                        <br>
                        <br>
                        <h2 class="section-heading text-uppercase">SKILL</h2>
                        <br>
                        <br>
                        <h3 class="section-subheading text-muted text-light">  </h3>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">AR Development</h4>
                            <p class="text-muted">I possess skills in AR development, enabling me to create immersive and interactive visual experiences.</p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Programming</h4>
                            <p class="text-muted">Proficient in programming, with a focus on AR development, I excel in crafting immersive digital experiences."</p>
                        </div>
                        <div class="col-md-4">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">UI/UX Design</h4>
                            <p class="text-muted">I specialize in UI/UX design, showcasing proficiency in creating intuitive and user-friendly digital interfaces.</p>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
            </section>

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
              <!-- About Section Heading-->
              <h2 class="page-section-heading text-center text-uppercase text-white">{{ $about->title }}</h2>
              <!-- Icon Divider-->
              <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-leaf"></i></div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- About Section Content-->
              <div class="row">
                <div class="col-lg-3 ms-auto text-center"><img src="{{  Storage::url($about->thumbnail) }}" class="w-75" /></div>
                <div class="col-lg-5 me-auto justify">
                  {!! $about->content !!}
                </div>
              </div>
            </div>
          </section>
          
    <!-- Partner Section-->
    <section class="page-section portfolio" id="partner">
      <div class="container " >
        <!-- Partner Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Experiences</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <br>

        </div>
        <!-- Partner Grid Items-->
        <div class="row justify-content-center">
            @php
                $i = 1;
            @endphp

            @foreach ($experiences as $item)
                <!-- Partner Item {{ $i }}-->
                 <div class="col-md-6 col-lg-4 mb-5">
                     <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $i }}">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                             <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                         </div>
                            <img class="img-fluid" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
                    </div>
                </div>
             <!-- last partner {{ $i }}-->
             @php
            $i++;
             @endphp
            @endforeach
        
        </div>
      </div>
    </section>

    <!-- Footer-->
    <footer class="footer text-center" id="profile">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">
                {{ $location }}
            </p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Find me on</h4>
            @if($youtube)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $youtube }}" target="blank"><i class="fab fa-fw fa-youtube"></i></a>
            @endif

            @if($instagram)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $instagram }}" target="blank"><i class="fab fa-fw fa-instagram"></i></a>
            @endif

            @if($github)
            <a class="btn btn-outline-light btn-social mx-1" href="{{ $github }}" target="blank"><i class="fab fa-fw fa-github"></i></a>
            @endif
            
            
          </div>
          <!-- Footer About Text-->
          <div class="col-lg-4">
            <h4 class="text-uppercase mb-4">About Site</h4>
            <p class="lead mb-0">
                {{ $site_description }}
              .
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-light">
      <div class="container"><small>Copyright &copy; {{ $site_name }}</small></div>
    </div>
    <!-- Partner Modals-->
    @php
    $i=1;
    @endphp

    @foreach ($experiences as $item)
    <!-- Partner Modal {{ $i }}-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $i }}" tabindex="-1" aria-labelledby="portfolioModal{{ $i }}" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <!-- Partner Modal - Title-->
                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $item->title }}</h2>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                      <div class="divider-custom-line"></div>
                      <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                      <div class="divider-custom-line"></div>
                    </div>
                    <!-- Partner Modal - Image-->
                    <img class="img-fluid rounded mb-5" src="{{ Storage::url($item->thumbnail) }}" alt="..." />
                    <!-- Partner Modal - Text-->
                    {!! $item->content !!}
                    <button class="btn btn-primary" data-bs-dismiss="modal">
                      <i class="fas fa-xmark fa-fw"></i>
                      Close Window
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @php
    $i++;
    @endphp
    @endforeach
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
