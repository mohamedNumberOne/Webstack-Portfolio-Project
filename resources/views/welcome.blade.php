<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="css/style.css">

    <title>Laravel</title>


</head>

<body class="antialiased">
    @include('layouts.navigation')


    <div class="bg mb-5"> </div>


    <h1 class="h1 text-center mt-4 mb-4"> Our Works </h1>

    <section class="  container bg-success row">

        <div class="col-md-4"> f </div>
        <div class="col-md-4"> g</div>
        <div class="col-md-4"> h </div>

    </section>


    <hr>

    <h1 class="h1 text-center mt-4 mb-4"> Our Products </h1>

    <section class="  container bg-success row">

        <div class="col-md-4"> f </div>
        <div class="col-md-4"> g</div>
        <div class="col-md-4"> h </div>

    </section>



    <footer>
        <h1 class="h1 text-center mt-4 mb-4"> Contact Us </h1>

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
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" >
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name"
														placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email"
														placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject"
														placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30"
														rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
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
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-map-marker"></span>
										</div>
										<div class="text pl-3">
											<p><span>Address:</span> Algeria 
											</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-phone"></span>
										</div>
										<div class="text pl-3">
											<p><span>Phone:</span> <a href="tel://1234567920">+213 555 47 92 53</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-center">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-3">
											<p><span>Email:</span> <a
													href="mailto:info@yoursite.com">mohamedmld954@gmail.com</a></p>
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
