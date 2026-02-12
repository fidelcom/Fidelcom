@extends('layouts.main')

@section('main')
    <section class="hero-section page-section scroll-to-page" id="home">

        <div class="custom-container">
            <div class="hero-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-home"></i> Introduce
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Hi from <span>Fidelis</span>, Senior Software Engineer</h1>
                </div>
                <p class="scroll-animation" data-animation="fade_from_bottom">I design and code beautifully simple things and i love what i do. Just simple like that!</p>
                <a href="#portfolio"
                   class="go-to-project-btn scroll-to scroll-animation"
                   data-animation="rotate_up">
                    <img src="{{ asset('assets/images/round-text.png') }}" alt="Rounded text">
                    <i class="las la-arrow-down"></i>
                </a>

                <div class="facts d-flex">
                    <div class="left scroll-animation" data-animation="fade_from_left">
                        <h1>10+</h1>
                        <p>Years of <br>Experience</p>
                    </div>
                    <div class="right scroll-animation" data-animation="fade_from_right">
                        <h1>182+</h1>
                        <p>projects completed on <br>15 countries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area page-section scroll-to-page" id="about">
        <div class="custom-container">
            <div class="about-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="lar la-user"></i> About
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Every great system begin with<br>
                        an even <span>better story and innovation</span></h1>
                </div>
                <p class="scroll-animation" data-animation="fade_from_bottom">My journey into software engineering began at 16,
                    driven by curiosity about how applications actually work behind the scenes. Over the past 10+ years, that
                    curiosity has grown into a career building and leading scalable SaaS platforms across fintech, EduTech, and emergency services.</p>

                <p class="scroll-animation" data-animation="fade_from_bottom">    Today, I’m a Senior Full-Stack Developer specializing in Laravel, Vue.js 3, and Flutter, designing secure
                    RESTful APIs, high-performance multi-tenant systems, and responsive frontends. I care deeply about clean
                    architecture, SOLID principles, and writing modular, testable code that scales with real-world demands.</p>
            </div>
        </div>
    </section>


    <section class="resume-area page-section scroll-to-page" id="resume">
        <div class="custom-container">
            <div class="resume-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-briefcase"></i> Resume
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Education & <span>Experience</span></h1>
                </div>

                <div class="resume-timeline">
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2021 - Present</span>
                        <h2>Software Engineer</h2>
                        <p>LoyaltyView, Ltd, United Kingdom</p>
                        <h2></h2>
                        <p>
                            •	Led development of a scalable fintech SaaS platform using Laravel and Vue.js 3, delivering 8+ projects focused on secure payment processing, user authentication, and transaction scalability.
                            •	Designed secure RESTful APIs with JWT/OAuth authentication and session management, integrating fintech APIs (Paystack, Stripe, Flutterwave), reducing transaction processing times by 30%.<br>
                            •	Built responsive frontend interfaces with Vue.js 3, Vuex/Pinia, Vue Router, and Tailwind CSS, improving user experience and reducing page load times by 25%.<br>
                            •	Managed a team of 12 developers in an agile environment, defining project scopes, allocating tasks, and achieving 95% on-time delivery for critical fintech features.<br>
                            •	Implemented caching (Redis) and optimized MySQL queries, enhancing platform performance by 35% for high-volume transactions.<br>
                            •	Conducted code reviews, wrote unit/integration tests with PHPUnit and Jest (90% coverage), and improved legacy fintech systems, reducing security vulnerabilities by 20%.<br>
                            •	Leveraged Docker and CI/CD pipelines to streamline deployments, ensuring compliance with fintech security standards.

                        </p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2020 - 2022</span>
                        <h2>Software Engineer</h2>
                        <p>Kidyview Limited, Lagos</p>
                        <p>
                            •	Developed a multi-tenant school management SaaS platform using Laravel and Flutter, delivering 5+ projects with role-based access control and seamless module communication.<br>
                            •	Built RESTful APIs and responsive web interfaces using Vue.js, HTML, JavaScript, and CSS, supporting multiple tenants and improving user engagement by 30%.<br>
                            •	Optimized MySQL databases with complex SQL queries for multi-tenant data isolation, reducing data retrieval time by 40%.<br>
                            •	Integrated APIs (Flutterwave for payments, Google Maps for location services) and ensured scalability and security through modular, Repository-pattern-based components.<br>
                            •	Contributed to agile workflows, including sprint planning, debugging, and performance optimization, enhancing platform reliability.

                        </p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2019 - 2021</span>
                        <h2>Software Engineer / Project Manager</h2>
                        <p>SecureView Limited, Lagos</p>
                        <p>
                            •	Led a team of 10 developers in building a SaaS platform for emergency and home warranty management using Laravel, Vue.js, Android, and Swift, delivering 6+ projects. <br>
                            •	Designed secure RESTful APIs and responsive frontends with role-based access control, applying Repository and Service Layer patterns to ensure maintainability and scalability.<br>
                            •	Conducted functional testing across the development lifecycle, achieving 98% defect-free releases for critical emergency response features.<br>
                            •	Collaborated with product managers to align project goals with business objectives, meeting all milestones on schedule.<br>
                            •	Optimized legacy systems, reducing bug-related downtime by 15% through debugging and code refactoring, ensuring reliable warranty and emergency service delivery.

                        </p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2018 - 2019</span>
                        <h2>IT Support Engineer</h2>
                        <p>Edgewood College, Lagos, Nigeria </p>
                        <p>
                            •	Managed and updated the school’s online portal using HTML, JavaScript, AJAX, and JSON, enhancing functionality and user experience.<br>
                            •	Maintained and troubleshooted network infrastructure and ICT systems, ensuring reliable connectivity and system performance for staff and students.<br>
                            •	Provided Tier 1 IT support, resolving technical issues across systems and applications, improving operational efficiency.
                        </p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2017 – 2018</span>
                        <h2>Junior Software Developer</h2>
                        <p>SLATECUBE, Lagos, Nigeria </p>
                        <p>
                            •	Contributed to multiple web applications and internal tools using Laravel, Bootstrap/Vue, and MySQL.<br>
                            •	Refactored legacy PHP codebases into modern Laravel structures with MVC and repository patterns.<br>
                            •	Collaborated with senior engineers to integrate APIs and optimize data flow across services.
                        </p>
                    </div>
                    <div class="item scroll-animation" data-animation="fade_from_right">
                        <span class="date">2012 – 2017</span>
                        <h2>B.Eng., Electronics and Computer Engineering</h2>
                        <p>Nnamdi Azikiwe University, Awka, Anambra State, Nigeria</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="services-area page-section scroll-to-page" id="services">
        <div class="custom-container">
            <div class="services-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-stream"></i> Services
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Specializations</span></h1>
                </div>

                <div class="services-items">
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-bezier-curve"></i>
                        <h2>Backend Engineering</h2>
                        <p>I design and build secure, scalable backend systems using Laravel, Node.js, and RESTful APIs,
                            with caching, queues, and multi-tenant architecture in mind.</p>
                        <span class="projects">24 Projects</span>
                    </div>
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-code"></i>
                        <h2>Frontend Development</h2>
                        <p>I craft responsive, high-performance interfaces using Vue.js 3, React, Tailwind CSS, and modern
                            tooling like Vite and Webpack.</p>
                        <span class="projects">126 Projects</span>
                    </div>
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-bezier-curve"></i>
                        <h2>Database & System Design</h2>
                        <p>I model and optimize databases using MySQL, PostgreSQL, MongoDB, and Redis, focusing on performance,
                            reliability, and scalability.</p>
                        <span class="projects">8 Projects</span>
                    </div>
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-bezier-curve"></i>
                        <h2>DevOps & Deployment</h2>
                        <p>I ship production-ready applications using Docker, Git, CI/CD, and Nginx, ensuring smooth deployments
                            and reliable environments.</p>
                        <span class="projects">8 Projects</span>
                    </div>
                    <div class="service-item scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-bezier-curve"></i>
                        <h2>SaaS & Architecture</h2>
                        <p>I build multi-tenant SaaS platforms with clean architecture, applying SOLID principles and proven design
                            patterns for long-term maintainability.</p>
                        <span class="projects">8 Projects</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="skills-area page-section scroll-to-page" id="skills">
        <div class="custom-container">
            <div class="skills-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-shapes"></i> my skills
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">My <span>Advantages</span></h1>
                </div>

                <div class="row skills text-center">
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/flutter.png') }}" height="49" alt="Flutter">
                                <h1 class="percent">92%</h1>
                            </div>
                            <p class="name">Flutter</p>
                        </div>
                    </div>
                    {{--                            <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">--}}
                    {{--                                <div class="skill">--}}
                    {{--                                    <div class="skill-inner">--}}
                    {{--                                        <img src="assets/images/framer.png" alt="Framer">--}}
                    {{--                                        <h1 class="percent">85%</h1>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p class="name">Laravel</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_top">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/js.webp') }}" height="49" alt="Webflow">
                                <h1 class="percent">80%</h1>
                            </div>
                            <p class="name">JavaScript</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_right">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/react.png') }}" alt="React">
                                <h1 class="percent">90%</h1>
                            </div>
                            <p class="name">React</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/Node.js_logo.svg') }}" height="49" alt="Laravel/PHP">
                                <h1 class="percent">70%</h1>
                            </div>
                            <p class="name">Node Js</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel/PHP">
                                <h1 class="percent">70%</h1>
                            </div>
                            <p class="name">Laravel/PHP</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/sql.svg') }}" height="49" alt="Laravel/PHP">
                                <h1 class="percent">70%</h1>
                            </div>
                            <p class="name">MySql</p>
                        </div>
                    </div>
                    <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">
                        <div class="skill">
                            <div class="skill-inner">
                                <img src="{{ asset('assets/images/vue.png') }}" height="49" alt="Laravel/PHP">
                                <h1 class="percent">70%</h1>
                            </div>
                            <p class="name">Vue js</p>
                        </div>
                    </div>
                    {{--                            <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">--}}
                    {{--                                <div class="skill">--}}
                    {{--                                    <div class="skill-inner">--}}
                    {{--                                        <img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel/PHP">--}}
                    {{--                                        <h1 class="percent">70%</h1>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p class="name">Git</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="col-md-3 scroll-animation" data-animation="fade_from_bottom">--}}
                    {{--                                <div class="skill">--}}
                    {{--                                    <div class="skill-inner">--}}
                    {{--                                        <img src="{{ asset('assets/images/laravel.png') }}" alt="Laravel/PHP">--}}
                    {{--                                        <h1 class="percent">70%</h1>--}}
                    {{--                                    </div>--}}
                    {{--                                    <p class="name">Argil/Scrum Method</p>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                </div>

            </div>
        </div>
    </section>


    <section class="portfolio-area page-section scroll-to-page" id="portfolio">
        <div class="custom-container">
            <div class="portfolio-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-grip-vertical"></i> portfolio
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Featured <span>Projects</span></h1>
                </div>

                <div class="row portfolio-items">
                    @foreach($projects as $key => $project)
                        @if($key == 0)
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-full">
                                    <div class="portfolio-item-inner">
                                        <a href="{{ asset($project->image) }}" data-lightbox="example-1">
                                            <img src="{{ asset($project->image) }}" alt="Portfolio">
                                        </a>
                                        @php($tags = explode(',', $project->tag))

                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="#">{{ $project->project_category->name }}</a>
                                            </li>
                                            @foreach($tags as $tag)
                                                <li>
                                                    <a href="#">{{ $tag }}</a>
                                                </li>
                                            @endforeach

                                            {{--                                                    <li>--}}
                                            {{--                                                        <a href="#">Framer</a>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                    <li>--}}
                                            {{--                                                        <a href="#">WordPress</a>--}}
                                            {{--                                                    </li>--}}
                                        </ul>
                                    </div>
                                    <h2><a href="{{ $project->url }}">{{ $project->title }}</a></h2>
                                </div>
                            </div>
                        @elseif($key % 3 != 0)
                            <div class="col-md-6 scroll-animation" data-animation="fade_from_left">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="{{ $project->image }}" data-lightbox="example-1">
                                            <img src="{{ asset($project->image) }}" alt="Portfolio">
                                        </a>

                                        <img src="{{ asset('') }}assets/images/portfolio2.jpg"  alt="Portfolio">
                                        @php($tags = explode(',', $project->tag))
                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="#">{{ $project->project_category->name }}</a>
                                            </li>
                                            @foreach($tags as $tag)
                                                <li>
                                                    <a href="#">{{ $tag }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <h2><a href="{{ $project->url }}">{{ $project->title }}</a></h2>
                                </div>
                            </div>
                        @else
                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">
                                <div class="portfolio-item portfolio-half">
                                    <div class="portfolio-item-inner">
                                        <a href="{{ asset($project->image) }}" data-lightbox="example-1">
                                            <img src="{{ asset($project->image) }}" alt="Portfolio">
                                        </a>

                                        <ul class="portfolio-categories">
                                            <li>
                                                <a href="#">{{ $project->project_category->name }}</a>
                                            </li>
                                            @foreach($tags as $tag)
                                                <li>
                                                    <a href="#">{{ $tag }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <h2><a href="{{ $project->url }}">{{ $project->title }}</a></h2>
                                </div>
                            </div>
                        @endif
                    @endforeach




                    {{--                            <div class="col-md-6 scroll-animation" data-animation="fade_from_right">--}}
                    {{--                                <div class="portfolio-item portfolio-half">--}}
                    {{--                                    <div class="portfolio-item-inner">--}}
                    {{--                                        <a href="assets/images/portfolio3.jpg" data-lightbox="example-1">--}}
                    {{--                                            <img src="assets/images/portfolio3.jpg" alt="Portfolio">--}}
                    {{--                                        </a>--}}

                    {{--                                        <ul class="portfolio-categories">--}}
                    {{--                                            <li>--}}
                    {{--                                                <a href="#">Figma</a>--}}
                    {{--                                            </li>--}}
                    {{--                                            <li>--}}
                    {{--                                                <a href="#">Webflow</a>--}}
                    {{--                                            </li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                    <h2><a href="#">Taskly Dashboard</a></h2>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                            --}}

                    {{--                            <div class="col-md-12 scroll-animation" data-animation="fade_from_bottom">--}}
                    {{--                                <div class="portfolio-item portfolio-half">--}}
                    {{--                                    <div class="portfolio-item-inner">--}}
                    {{--                                        <a href="assets/images/portfolio5.jpg" data-lightbox="example-1">--}}
                    {{--                                            <img src="assets/images/portfolio5.jpg" alt="Portfolio">--}}
                    {{--                                        </a>--}}

                    {{--                                        <ul class="portfolio-categories">--}}
                    {{--                                            <li>--}}
                    {{--                                                <a href="#">Framer</a>--}}
                    {{--                                            </li>--}}
                    {{--                                        </ul>--}}
                    {{--                                    </div>--}}
                    {{--                                    <h2><a href="#">Lewis Portfolio Framer Template</a></h2>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                </div>

            </div>
        </div>
    </section>


    <section class="testimonial-area page-section scroll-to-page" id="testimonial">
        <div class="custom-container">
            <div class="testimonial-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="lar la-comment"></i> testimonial
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Trusted by <span>Hundered Clients</span></h1>
                </div>

                <div class="testimonial-slider-wrap scroll-animation" data-animation="fade_from_bottom">
                    <div class="owl-carousel testimonial-slider owl-theme">
                        @foreach($testimonials as $testimonial)
                            <div class="testimonial-item">
                                <div class="testimonial-item-inner">
                                    <div class="author d-flex align-items-center">
                                        <img src="{{ asset($testimonial->image) }}" alt="Testimonial">
                                        <div class="right">
                                            <h3>{{ $testimonial->name }}</h3>
                                            <p class="designation">{!! $testimonial->location !!} </p>
                                        </div>
                                    </div>
                                    <p>“{!! $testimonial->desc !!} ”</p>

                                    <a href="#" class="project-btn">Project</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="testimonial-footer-nav">
                        <div class="testimonial-nav d-flex align-items-center">
                            <button class="prev"><i class="las la-angle-left"></i></button>
                            <div id="testimonial-slide-count"></div>
                            <button class="next"><i class="las la-angle-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="clients-logos">
                    <h4 class="scroll-animation" data-animation="fade_from_bottom">work with {{ $partners->count() }}+ brands worldwide</h4>
                    <div class="row align-items-center">
                        @foreach($partners as $partner)
                            <div class="col-md-3 scroll-animation" data-animation="fade_from_left">
                                <img src="{{ asset($partner->image) }}" alt="Client">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-area page-section scroll-content" id="contact">
        <div class="custom-container">
            <div class="contact-content content-width">
                <div class="section-header">
                    <h4 class="subtitle scroll-animation" data-animation="fade_from_bottom">
                        <i class="las la-dollar-sign"></i> contact
                    </h4>
                    <h1 class="scroll-animation" data-animation="fade_from_bottom">Let's Work <span>Together!</span></h1>
                </div>
                <h3 class="scroll-animation" data-animation="fade_from_bottom">{{ $contacts->email }}</h3>
                <p id="required-msg">* Marked fields are required to fill.</p>

                <form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST" action="{{ route('contact.us.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="alert alert-success messenger-box-contact__msg" style="display: none" role="alert">
                        Your message was sent successfully.
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="full-name">full Name <sup>*</sup></label>
                                <input type="text" name="name" id="full-name" placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="email">Email <sup>*</sup></label>
                                <input type="email" name="email" id="email" placeholder="Your email adress">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="phone-number">phone <span>(optional)</span></label>
                                <input type="text" name="phone" id="phone-number" placeholder="Your number phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label for="subject">subject <sup>*</sup></label>
                                <select name="subject" id="subject">
                                    <option value="">Select a subject</option>
                                    <option value="I Want to Build a Website">I Want to Build a Website</option>
                                    <option value="I Want to Hire You">I Want to Hire You</option>
                                    <option value="I want to Build A Mobile App">I want to Build A Mobile App</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <label for="budget">your budget <span>(optional)</span></label>
                                <input type="number" name="budget" id="budget" placeholder="A range budget for your project">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <label for="message">message</label>
                                <textarea name="message" id="message" placeholder="Write your message here ..."></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group upload-attachment">
                                <div>
                                    <label for="upload-attachment">
                                        <i class="las la-cloud-upload-alt"></i> add an attachment
                                        <input type="file" name="file" id="upload-attachment">
                                    </label>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group submit-btn-wrap">
                                <button class="theme-btn" name="submit" type="submit" id="submit-form">send message</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
@endsection
