@extends('frontEnd.layouts.master')

@section('title', 'Contact Us - FinSphere Expo Kuwait')

@section('content')

<!--=================== PAGE-TITLE ===================-->
	<div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
		<div class="container">
			<h1 class="title-line-left">Contacts</h1>
			<div class="breadcrumbs">
				<ul>
					<li><a href="{{ url('/') }}">Home</a></li>
					<li>Contacts</li>
				</ul>
			</div>
		</div>
	</div>
	<!--================= PAGE-TITLE END =================-->

	<!--================= PAGE-CONTACTS =================-->
	<section class="page-contacts">
		<div class="container">
			<h2 class="title-line-left">Get in Touch</h2>
			<div class="row">
				<div class="col-12 col-sm-8">
					<form id='contactform' action="php/contact.php" name="contactform">
						<ul class="form-cover">
							<li class="inp-name"><input id="name" type="text" name="your-name" placeholder="Name"></li>
							<li class="inp-name"><input id="last-name" type="text" name="your-last-name"
									placeholder="Last Name"></li>
							<li class="inp-phone"><input id="phone" type="tel" name="your-phone" placeholder="Phone">
							</li>
							<li class="inp-email"><input id="email" type="email" name="your-email" placeholder="E-mail">
							</li>
							<li class="inp-text"><textarea id="comments" name="your-text"
									placeholder="Message"></textarea></li>
						</ul>
						<div class="checkbox-wrap">
							<div class="checkbox-cover">
								<input type="checkbox">
								<p>By using this form you agree with the storage and handling of your data by this
									website.</p>
							</div>
						</div>
						<div class="btn-form-cover">
							<button id="#submit" type="submit" class="btn">Sign up now</button>
						</div>
					</form>
					<div id="message"></div>
				</div>
				<div class="col-12 col-sm-4 page-cont-info">
					<div class="cont-info-item">
						<i class="fas fa-map-marker-alt"></i>
						<h5>Address</h5>
						<p>7100 Athens Place <br>Washington, DC 20521</p>
					</div>
					<div class="cont-info-item">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<h5>Phones</h5>
						<ul class="cont-phone">
							<li><a href="tel:18001234567">1-800-1234-567</a></li>
							<li><a href="tel:18008763765">1-800-8763-765</a></li>
						</ul>
					</div>
					<div class="cont-info-item">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<h5>Email</h5>
						<ul class="cont-email">
							<li><a href="mailto:informex@info.mail">informex@info.mail</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================= PAGE-CONTACTS END =================-->

	<!--===================== S-MAP =====================-->
	<section class="s-map">
		<div id="map" class="cont-map google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1611963.4017222193!2d46.360681996579856!3d29.30998302837021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!5e1!3m2!1sen!2sae!4v1766997235333!5m2!1sen!2sae"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
	</section>
	<!--==================== S-MAP END ===================-->

@endsection