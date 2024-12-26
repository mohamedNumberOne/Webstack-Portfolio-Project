<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_por.css">

    <title>Laravel</title>


</head>

<body class="antialiased">
    @include('layouts.navigation')

    @if (session()->has('success'))
        <div class=" container m-auto text-center alertl alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg mb-5"> </div>



    <main class="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route ">
            <div class="container  m-auto">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-shadow-full">
                            <div class="row p-5  justify-content-between">
                                <div class="col-md-5">
                                    <div class="row ">
                                        <div class="col-sm-6 col-md-5">
                                            <div class="about-img">
                                                <img src=" {{ asset('css/testimonial-2.jpg') }}"
                                                    class="img-fluid rounded b-shadow-a" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-7">
                                            <div class="about-info">
                                                <p>
                                                    <span class="title-s">Name: </span>
                                                    <span> Mohamed </span>
                                                </p>
                                                <p>
                                                    <span class="title-s">Profile: </span>
                                                    <span>Full stack web developer</span>
                                                </p>
                                                <p>
                                                    <span class="title-s">Email: </span>
                                                    <span>mohamedmld954@gmail.com</span>
                                                </p>
                                                <p>
                                                    <span class="title-s">Phone: </span>
                                                    <span>(+213) 555-47-92-53</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="skill-mf">
                                        <p class="title-s">Skills</p>
                                        <span>HTML5 , CSS3 </span>
                                        <span class="pull-right">85%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span>JAVASCRIPT</span>
                                        <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>PHP</span> <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>MySql</span> <span class="pull-right">75%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>jQuery</span> <span class="pull-right">70%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span>Laravel</span> <span class="pull-right">65%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>bootstrap</span> <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Ajax</span> <span class="pull-right">80%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>Photoshop, Illustrator</span>
                                        <span class="pull-right">50%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span>React JS </span>
                                        <span class="pull-right">50%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <span> Python  </span>
                                        <span class="pull-right">30%</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 30%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about-me pt-4 pt-md-0">
                                        <div class="title-box-2">
                                            <h5 class="title-left mb-3">About me</h5>
                                        </div>
                                        <p class="lead">
                                            My name is <b> Mohamed</b>, I was born in 1994
                                            <br>
                                            And I am a web developer...
                                        </p>
                                        <p class="lead">
                                            Since my childhood, I have liked the field of
                                            programming, and I have always been curious to
                                            understand those codes that I used to see on computer
                                            screens.
                                        </p>

                                        <p class="lead">
                                            The story began when I enrolled in the institute to learn this field, which
                                            I had
                                            dreamed of since my childhood.
                                            <br />
                                            I studied for two years and then worked in a company for
                                            6 months as an application of what I learned, and I
                                            graduated first in the batch.
                                        </p>

                                        <p class="lead">
                                            Since my graduation, I have worked in several private
                                            companies, and I have also worked for myself as a
                                            Freelancer, where I have created several websites and
                                            Web applications. Now, I work for the National Agency
                                            for Digitization in Health, and I programmed and
                                            designed their website, in addition to creating a
                                            digital library for them.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route mb-5 mt-5">
            <div class="container m-auto">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">Services</h3>
                            <p class="subtitle-a">
                                I can Do ...
                            </p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-box p-5">
                            <div class="service-ico">
                                <span class="ico-circle"> <i class="fa-solid fa-pen-nib"></i> </span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title mt-3">Web Design</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"> <i class="fa-solid fa-code"></i> </span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title mt-3">Web Development</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"> <i class="fa-solid fa-mobile"></i> </span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title mt-3">Responsive Design</h2>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Products Section ======= -->
        <section id="Products" class="portfolio-mf pt-5 route mb-5 mt-5">
            <div class="container m-auto">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">Our Products</h3>
                        </div>
                    </div>
                </div>

                <div class="row  ">

                    @foreach ($all_products as $pro)
                        <div class="col-md-4 col-sm-12">
                            <div class="card m-3 p-0" style="min-height: 380px; position:relative">
                                <img src="{{ asset('storage/' . $pro->product_photo) }}" class="card-img-top" 
                                style=" height:200px ;"
                                    alt="photo" width="100%">
                                <div class="card-body p-3">
                                    <h6 class="card-title ">
                                        <i class="fa-solid fa-file-code"></i> {{ $pro->product_name }}
                                    </h6>
                                    <hr class="mt-4 mb-1">

                                    <p class="card-text mt-1 mb-1">
                                        {{ Str::limit($pro->product_details, 50) }}
                                    </p>

                                    <span class="btn btn-secondary text-sm  mt-2  p-1 ">
                                        <p>
                                            {{ $pro->price }} $
                                        </p>
                                    </span>

                                    <a href="{{ route('display_product', $pro->id) }}"
                                        class="btn btn-primary  p-1 mt-2 ">
                                        <p> <i class="fa-solid fa-circle-info"></i> View More ... </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- End Products Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route mb-4">
            <div class="container m-auto">
                <div class="row mt-5 mb-4">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a mt-2">Our Works</h3>

                        </div>
                    </div>
                </div>
                <div class="row mb-5">


                    @foreach ($all_projects as $project)
                        <div class="col-md-4">
                            <div class="work-box mb-2" style="   min-height: 360px; " >
                                <a href="{{ asset('storage/' . $project->project_photo) }}"
                                    data-gallery="portfolioGallery" class="portfolio-lightbox">
                                    <div class="work-img">
                                        <img src="{{ asset('storage/' . $project->project_photo) }}" alt="img"
                                            class="img-fluid" width="100%"  style="   height: 250px; " />
                                    </div>
                                </a>
                                <div class="work-content">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h2 class="w-title"> {{ $project->project_name }} </h2>
                                            <div class="w-more">
                                                <span class="w-date"> {{ $project->created_at }} </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
                <center>
                    <a href="{{ route('show_all_projects') }}" class="btn p-1 w-50 text-white "
                        style="background : #01d28e !important"> <span class="display-6 "> show all works </span>
                    </a>
                </center>
            </div>
        </section>
        <!-- End Portfolio Section -->



    </main>
    {{-- contact  --}}
    <footer>
        <h1 class="h1 text-center mt-4 mb-4" id="contact_section"> Contact Us </h1>


        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                {{-- form  --}}
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm"
                                    action="{{ route('add_msg') }} ">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    id="name" placeholder="Name">
                                            </div>
                                            @error('name')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email"
                                                    id="email" placeholder="Email">
                                            </div>
                                            @error('email')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject"
                                                    id="subject" placeholder="Subject">
                                            </div>
                                            @error('subject')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label class="label" for="about">About:</label>
                                                <select class="form-control p-1" name="about" id="about">
                                                    <option> </option>
                                                    @foreach ($all_products as $pro)
                                                        <option class="p-1" value="{{ $pro->product_name }}">
                                                            {{ $pro->product_name }} , {{ $pro->price }} $ </option>
                                                    @endforeach

                                                </select>

                                            </div>
                                            @error('about')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                            @error('message')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message"
                                                    class="btn btn-primary p-1">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>Contact Us Now!</h3>
                                <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                <div class="dbox w-100 d-flex align-items-start  mb-2">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Address:</span> Algeria
                                        </p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center mb-2">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Phone:</span> <a href=" ">+213 555 47 92 53</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center mb-2">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><span>Email:</span> <a> mohamedmld954@gmail.com</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </footer>

</body>

</html>
