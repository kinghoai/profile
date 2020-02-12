@extends('layouts.frontend.app')
@section('title')
    {{$user->name}}
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="/css/scroll.css"/>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css"/>
    <!-- Portfolio Thumbnail / Slider -->
    <link rel="stylesheet" type="text/css" href="/css/portfolio.css"/>
    <link rel="stylesheet" type="text/css" href="/css/carousel.css">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="/css/responsive.css"/>
    <!-- Pie Chart / Skills -->
    <script type="text/javascript" src="/js/jquery-2.0.3.min.js"></script>
    <!-- Send Email -->
    <script type="text/javascript" src="/js/sendemail.js"></script>
    <!-- Progressbar / Skills-->
    <script type="text/javascript" src="/js/progressbar.js"></script>
    <!-- Portfolio-->
    <script src="/js/modernizr.custom.js"></script>
@endsection
@section('content')
        <!-- Go to top link for mobile device -->
        <a href="#menu" class="totop-link">Go to the top</a>
        <div class="content-scroller">
            <div class="content-wrapper">
                <!-- Introduction -->
                <article class="content introduction noscroll" id="chapterintroduction">
                    <div class="inner">
                        <h2><span>Hello, I'm</span><br>
                            {{$user->name}}</h2>
                        <span class="title">{{$user->job}}</span></div>
                    <div id="owl-demo" class="owl-carousel">
                        @if(!empty($slides))
                            @foreach($slides as $slide)
                                <div class="item"><img src="{{$slide->getUrl('slide')}}" alt=""/></div>
                            @endforeach
                        @endif
                    </div>
                </article>

                <!-- About -->
                <article class="content about white-bg" id="chapterabout">
                    <div class="inner">
                        <h2>About</h2>
                        <div class="title-divider"></div>
                        <div class="about-con">
                            <ul>
                                <li>Name: {{$user->name}}</li>
                                <li>Email: <a href="mailto:andrew@gmail.com">{{$user->email}}</a></li>
                                <li>Phone: {{$user->phone}}</li>
                                <li>Date of birth: {{$user->birthday}}</li>
                                <li>Address: {{$user->address}}</li>
                            </ul>
                            <h3>Professional Profile</h3>
                            <p>{{$user->about_description}}<br>
                            </p>
                            <a href="/lamthanhhoai.pdf" class="button" download>Download PDF resume</a>
                        </div>
                    </div>
                </article>

                <!-- Skills -->
                <article class="content skills gray-bg" id="chapterskills">
                    <div class="inner">
                        <h2>Skills</h2>
                        <div class="title-divider"></div>
                        <h3>Just My Awesome Skills</h3>
                        <p>{{$user->skill_description}}</p>
                        <div class="skills-con">
                            <div class="container-sub margin-top50">
                                <div class="row">
                                    @foreach($skillSkills as $skillSkill)
                                    <div class="col-6 margin-bottom50">
                                        <div class="col-6">
                                            <span class="chart" data-percent="{{$skillSkill->percent}}">
                                                <span class="percent"></span>
                                            </span>
                                        </div>
                                        <div class="col-6 chart-text">
                                            <h4>{{$skillSkill->title}}</h4>
                                            <p>{{$skillSkill->level}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="container-sub skill-list">
                                <div class="row">
                                    <h3>Knowledge</h3>
                                    <p>{{$user->knowledge_description}}</p>
                                    @foreach($knowledgeSkills as $knowledgeSkill)
                                    <div class="col-4 margin-top10">
                                        <ul>
                                            <li>{{$knowledgeSkill->title}}</li>
                                        </ul>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="full-divider"></div>
                            <div class="container-sub">
                                <div class="row">
                                    <h3>Language Skills</h3>
                                    <p>{{$user->language_description}}</p>
                                    @foreach($languageSkills as $languageSkill)
                                    <div class="progressbar-main margin-top50">
                                        <div class="progress-bar-description">{{$languageSkill->title}}</div>
                                        <div class="progress">
                                            <div class="progress-value" style="width: {{$languageSkill->percent}}%;"><span>{{$languageSkill->percent}}</span></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Experience -->
                <article class="content experience white-bg" id="chapterexperience">
                    <div class="inner">
                        <h2>Experience</h2>
                        <div class="title-divider"></div>
                        <h3>My Experience!</h3>
                        <p>{{$user->experience_description}}</p>
                        <div class="experience-con">
                            <div class="container-sub">
                                <div class="full-divider"></div>
                                <div class="row">
                                    @foreach($experiences as $experience)
                                    <div class="experience-details" style="width: 100%">
                                        <div class="col-7 margin-bottom50 margin-top50">
                                            <div class="row">
                                                <div class="col-3 icon-block">{!! $experience->icon ? $experience->icon : '<i class="fa fa-send-o"></i>'!!}</div>
                                                <div class="col-8 flot-left">
                                                    <h5>{{$experience->company}}</h5>
                                                    <h4>{{$experience->job}}</h4>
                                                    <span>{{$experience->time}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-5 margin-bottom50 margin-top50 no-margin-top">
                                            {{$experience->description}}
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Education -->
                <article class="content education gray-bg" id="chaptereducation">
                    <div class="inner">
                        <h2>Education</h2>
                        <div class="title-divider"></div>
                        <h3>My Education</h3>
                        <p>{{$user->education_description}}</p>
                        <div class="education-con">
                            <div class="container-sub">
                                <div class="full-divider"></div>
                                <div class="row">
                                    @foreach($educations as $education)
                                    <div class="education-details" style="width: 100%">
                                        <div class="col-6 margin-bottom50 margin-top50">
                                                <div class="col-3 icon-block">{!! $education->icon ? $education->icon : '<i class="fa fa-laptop"></i>' !!}</div>
                                                <div class="col-8 flot-left">
                                                    <h5>{{$education->school}}</h5>
                                                    <h4>{{$education->subjects}}</h4>
                                                    <span>{{$education->time}}</span>
                                                </div>
                                        </div>
                                        <div class="col-6 margin-bottom50 margin-top50 no-margin-top">
                                            {{$education->description}}
                                        </div>
                                    </div>
                                    <div class="full-divider"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Project -->
                <article class="content portfolio white-bg" id="chapterportfolio">
                    <div class="inner">
                        <h2>Projects</h2>
                        <div class="title-divider"></div>
                        <h3>Some of my projects</h3>
                        <p>{{$user->project_description}}</p>
                        <div class="portfolio-con">
                            <div class="container-sub margin-top50">
                                <div class="row">
                                    <div id="grid-gallery" class="grid-gallery">
                                        <section class="grid-wrap">
                                            <ul class="grid">
                                                @foreach($projects as $project)
                                                <li>
                                                    <figure><img src="{{$project->featured}}" alt="{{$project->title}}"/>
                                                        <figcaption>
                                                            <div class="figcaption-details"><img
                                                                    src="/image/icon-plus.png" height="82" width="82"
                                                                    alt=""/>
                                                                <h3>{{$project->title}}</h3>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </section>

                                        <!-- Lightbox Popup -->
                                        <section class="slideshow">
                                            <ul>
                                                @foreach($projects as $project)
                                                <li>
                                                    <figure>
                                                        <figcaption>
                                                            <h3>{{$project->title}}</h3>
                                                            <p>{{$project->content}}</p>
                                                        </figcaption>
                                                        <div id="owl-demo1" class="owl-carousel">
                                                            <div class="item"><img src="{{$project->featured}}" alt="{{$project->title}}"/></div>
                                                            @foreach($project->slide as $slide)
                                                                <div class="item"><img src="{{$slide->getUrl('slide')}}" alt="{{$project->title}}"/></div>
                                                            @endforeach
                                                        </div>
                                                    </figure>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <nav><span class="fa nav-prev"></span> <span class="fa nav-next"></span>
                                                <span class="fa nav-close"></span></nav>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Contact -->
                <article class="content contact gray-bg" id="chaptercontact">
                    <div class="inner">
                        <h2>Contact</h2>
                        <div class="title-divider"></div>
                        <h3>Let's Keep In Touch</h3>
                        <p>{{$user->contact_description}}</p>
                        <div class="full-divider"></div>
                        <div class="contact-con margin-top50">
                            <div class="container-sub">
                                <div class="row">
                                    <div class="contact-details">
                                        <div class="col-6">
                                            <div class="contact-text">
                                                <div class="col-2 icon-block address"><i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="flot-left"><strong>{{$user->name}}</strong><br>
                                                    {{$user->address}}
                                                </div>
                                            </div>
                                            <div class="contact-text">
                                                <div class="col-2 icon-block phone"><i class="fa fa-phone"></i></div>
                                                <div class="flot-left"><strong>Phone</strong><br>
                                                    {{$user->phone}}
                                                </div>
                                            </div>
                                            <div class="contact-text">
                                                <div class="col-2 icon-block email"><i class="fa fa-envelope"></i></div>
                                                <div class="flot-left"><strong>Email</strong><br>
                                                    <a href="mailto:no-reply@domain.com">{{$user->email}}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-6 m-margin-top30">
                                            <h3>I'm also on Social Networks</h3>
                                            This is my social. Please send me friend requests.
                                            <div class="contact-social margin-top30">
                                                @if($user->facebook != '')
                                                <a href="{!! $user->facebook !!}" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                @endif
                                                @if($user->twitter != '')
                                                <a href="{!! $user->twitter !!}" target="_blank">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                @endif
                                                @if($user->youtube != '')
                                                <a href="{!! $user->youtube !!}" target="_blank">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                                @endif
                                                @if($user->google != '')
                                                <a href="{!! $user->google !!}" target="_blank">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                                @endif
                                                @if($user->linkedin != '')
                                                <a href="{!! $user->linkedin !!}" target="_blank">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--<div class="full-divider"></div>--}}
                            {{--<div class="container-sub">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="contact-form">--}}
                                        {{--<h3>Drop Me a Line</h3>--}}
                                        {{--<form id="form1" name="form1" method="post">--}}
                                            {{--<input name="name" type="text" id="name" placeholder="Your Name..."/>--}}
                                            {{--<input name="email" type="text" id="email" placeholder="Your Email..."/>--}}
                                            {{--<textarea name="message" id="message" cols="45" rows="5"--}}
                                                      {{--placeholder="Your Message..."></textarea>--}}
                                            {{--<input type="submit" name="button" id="button" value="say hello!">--}}
                                            {{--<div id="successmsg"></div>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </article>

                <!-- Introduction -->
                <article class="content introduction-end" id="chapterthankyou">
                    <div class="inner">
                    </div>
                </article>
            </div>
            <!-- content-wrapper -->
        </div>
        <!-- content-scroller -->
@endsection
@section('scripts')
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/head.min.js"></script>
    <!-- Portfolio Thumbnail -->
    <script type="text/javascript" src="/js/imagesloaded.min.js"></script>
    <script type="text/javascript" src="/js/masonry.min.js"></script>
    <script type="text/javascript" src="/js/class_helper.js"></script>
    <script type="text/javascript" src="/js/grid_gallery.js"></script>
    <!-- Portfolio Grid -->
    <script>
        new CBPGridGallery(document.getElementById('grid-gallery'));
    </script>
    <!-- Portfolio Slider-->
    <script type="text/javascript" src="/js/carousel.js"></script>
    <script type="text/javascript" src="/js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="/js/text.rotator.js"></script>
    <!-- Page Scrolling -->
    <script>
        head.js(
            {mousewheel: "/js/jquery.mousewheel.js"},
            {mwheelIntent: "/js/mwheelIntent.js"},
            {jScrollPane: "/js/jquery.jscrollpane.min.js"},
            {history: "/js/jquery.history.js"},
            {stringLib: "/js/core.string.js"},
            {easing: "/js/jquery.easing.1.3.js"},
            {smartresize: "/js/jquery.smartresize.js"},
            {page: "/js/jquery.page.js"}
        );
    </script>
    <!-- Fit Video -->
    <script type="text/javascript" src="/js/jquery.fitvids.js"></script>
    <!-- All Javascript Component-->
    <script src="/js/settings.js"></script>
@endsection
