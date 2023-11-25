@extends('layouts.app')


@section('content')
    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="{{ asset('img/profile.png') }}" class="img-fluid rounded b-shadow-a"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">
                                            <p><span class="title-s">Name: </span> <span>Tarek Hasan</span></p>
                                            <p><span class="title-s">Profile: </span> <span>Full stack web developer</span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span>tarekhn175@gmail.com</span></p>
                                            <p><span class="title-s">Phone: </span> <span>+880 1791 77-5707</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <h3 class="title-s">Skill</h3>
                                    <strong>PHP</strong> <span class="pull-right">85%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <strong>Laravel</strong> <span class="pull-right">75%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <strong>MySQL</strong> <span class="pull-right">50%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <strong>JAVASCRIPT</strong> <span class="pull-right">90%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            About me
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Hello..! I'm Tarek Hasan. I am a passionate and dedicated web developer with a focus
                                        on creating efficient and user-friendly web applications. My core skills include
                                        PHP, Laravel, MySQL, and JavaScript. I thrive on solving complex problems and
                                        turning ideas into functional, elegant, and scalable solutions.
                                    </p>
                                    <p class="lead">
                                        I am enthusiastic about contributing to innovative projects, collaborating with
                                        like-minded professionals, and continuously expanding my skill set. If you have a
                                        project that requires a blend of backend expertise with a touch of frontend finesse,
                                        I would love to hear from you. Let's build something amazing together!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="resume about-mf sect-pt4 route"">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="section-title">
                            <h2>Resume</h2>
                            <p>Hello..! I'm Tarek Hasan. I am a passionate and dedicated web developer with a focus on
                                creating efficient and user-friendly web applications. My core skills include PHP, Laravel,
                                MySQL, and JavaScript. I thrive on solving complex problems and turning ideas into
                                functional, elegant, and scalable solutions.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6" data-aos="fade-up">
                                <h3 class="resume-title">Education</h3>
                                <div class="resume-item">
                                    <h4>BECHELOR OF BUSSINESS ADMISTRATION (ACCOUNTING)</h4>
                                    <h5>2019-2020</h5>
                                    <p><em>NATIONAL UNIVERSITY, Dhaka</em></p>
                                    <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea
                                        vero voluptatum qui
                                        ut dignissimos deleniti nerada porti sand markend</p>
                                </div>
                                <div class="resume-item">
                                    <h4>HIGHER SECONDARY CERTIFICATE (SCIENCE)</h4>
                                    <h5>2017 - 2018</h5>
                                    <p><em></em></p>CCN MODEL COLLEGE, KODBARI, COMILLA.
                                    <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius
                                        vel ratione eius
                                        unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque
                                        etlon sader mart
                                        dila</p>
                                </div>
                            </div>
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <h3 class="resume-title">Professional Experience</h3>
                                <div class="resume-item">
                                    <h4>PHP | Laravel</h4>
                                    <ul>
                                        <li>Developed a dynamic web application using PHP Laravel
                                            as part of coursework, showcasing understanding of MVC
                                            architecture.</li>
                                        <li>Implemented features such as user authentication, CRUD
                                            operations, and form validation to create a fully functional
                                            application.</li>
                                        <li>Implemented RESTful API integration into Laravel projects,
                                            showcasing the ability to connect frontend and backend
                                            components.
                                        </li>
                                        <li>Handled data requests and responses, demonstrating a
                                            practical understanding of API communication.</li>
                                        <li>Created and maintained project documentation, including
                                            code comments and README files, to facilitate collabora-
                                            tion and understanding.</li>
                                    </ul>
                                </div>
                                <div class="resume-item">
                                    <h4>UX/UI DESIGNER.</h4>
                                    <h5>01-12-2022 to 01-02-2023</h5>
                                    <p><em>NIFTY IT SOLUATION, DHAKA, BANGLADESH </em></p>
                                    <ul>
                                        <li>Collaborated with clients and stakeholders to gather requirements, translating
                                            them into intuitive user interfaces for both web-based and mobile applications.
                                        </li>
                                        <li>Developed wireframes, prototypes, and mock-ups to
                                            illustrate design concepts and user flows.</li>
                                        <li>Worked closely with development teams to ensure
                                            seamless implementation of designs and adherence to
                                            UX/UI principles for various mobile applications and web pages.</li>
                                        <li>Conducted user research, usability testing, and analysis,
                                            leveraging findings to inform iterative design improvements
                                            and enhance the overall user interface design.</li>
                                    </ul>
                                </div>
                                <div class="resume-item">
                                    <h4>INTERNSHIP UX/UI DESIGNER.</h4>
                                    <h5>01-09-2022 to 30-11-2022</h5>
                                    <p><em>NIFTY IT SOLUATION, DHAKA, BANGLADESH </em></p>
                                    <ul>
                                        <li>Executed creative projects encompassing website and mobile application design,
                                            including logo design, social media posts, banners, and company flyers.</li>
                                        <li>Gained hands-on experience in professional user interface design, contributing
                                            to the enhancement of overall user experience.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ asset("download/Tarek's resume_laravel.pdf") }}"
                                download="Tarek's resume_laravel.pdf"><button type="button"
                                    class="btn btn-outline-primary">Download Resume</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
