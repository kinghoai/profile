<aside class="menu" id="menu">
    <div class="logo">
        <!-- Logo image-->
        <img src="/image/logo.png" width="140" height="140" alt=""/>
        <!-- Logo name-->
        @if(isset($user))
        <span>{{$user->name}}</span>
        @else
            <span>Profile</span>
        @endif
    </div>
    <!-- Mobile Navigation-->
    <a href="#menu1" class="menu-link"></a>
    <!-- Left Navigation-->
    <nav id="menu1" role="navigation">
        <a href="#chapterintroduction">
            <span id="link_introduction" class="active">Home</span>
        </a>
        <a href="#chapterabout">
            <span id="link_about">About</span>
        </a>
        <a href="#chapterskills"><span id="link_skills">Skills</span></a>
        <a href="#chapterexperience"><span id="link_experience">Experience</span></a>
        <a href="#chaptereducation"><span id="link_education">Education</span></a>
        <a href="#chapterportfolio"><span id="link_portfolio">Portfolio</span></a>
        <a href="#chaptercontact"><span id="link_contact">Contact</span></a>
        <a href="blog.html"><span id="link_blog">Blog</span></a>
    </nav>
    @if(isset($user))
    <div class="copyright"> © {{$user->name}}.<br>
        All Rights Reserved.
    </div>
    @endif
</aside>
