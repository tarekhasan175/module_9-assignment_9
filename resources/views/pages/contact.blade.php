@extends('layouts.app')


@section('content')
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url('{{ asset('img/overlay-bg.jpg') }}')">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Send Message
                                        </h5>
                                    </div>
                                    <div>
                                        <form action="forms/contact.php" method="post" role="form"
                                            class="php-email-form">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center my-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span>Adabor, Mohammadpur, Dhaka-1207</li>
                                            <li><span class="bi bi-phone"></span>+880 1791 77-5707</li>
                                            <li><span class="bi bi-envelope"></span>tarekhn175@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://github.com/tarekhasan175"><span class="ico-circle"><i
                                                            class="bi bi-github"></i></span></a></li>
                                            <li><a href="https://www.facebook.com/mohammadtarekhasan175"><span
                                                        class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                                            <li><a href="https://www.linkedin.com/in/tarek-hasan-661023289/"><span class="ico-circle"><i
                                                            class="bi bi-linkedin"></i></span></a></li>
                                            <li><a href="https://twitter.com/Tarek_H_62"><span class="ico-circle"><i
                                                            class="bi bi-twitter"></i></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
