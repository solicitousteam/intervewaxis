<?php $page = 'blog-details'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Home
        @endslot
        @slot('item1')
            Pages
        @endslot
        @slot('item2')
            Blog Details
        @endslot
    @endcomponent
    <!-- Blog Details -->
    <section class="course-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">

                    <!-- Blog Post -->
                    <div class="blog">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/build/img/blog-banner.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-info clearfix">
                            <div class="post-left">
                                <ul>
                                    <li>
                                        <div class="post-author">
                                            <a href="{{ url('instructor-profile') }}"><img
                                                    src="{{ URL::asset('/build/img/user/user.jpg') }}" alt="Post Author">
                                                <span>Ruby Perrin</span></a>
                                        </div>
                                    </li>
                                    <li><img class="img-fluid" src="{{ URL::asset('/build/img/icon/icon-22.svg') }}"
                                            alt="">April 20, 2024</li>
                                    <li><img class="img-fluid" src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                            alt="">Programming, Web Design</li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="blog-title"><a href="{{ url('blog-details') }}">Nailing the Virtual Interview</a></h3>
                        <div class="blog-content">
                            <p>You’ve prepared well, and now it’s time to shine in your virtual interview. Here’s how to make a lasting impression:</p>
                            <h4>1. Punctuality is Key</h4>
                            <p>&#9679;<b>Log In Early:</b>Log in 10-15 minutes before the scheduled time. This shows punctuality and gives you time to address any last-minute technical issues.</p>
                            <h4>2. Maintain Professional Demeanor</h4>
                            <p>&#9679;<b>Body Language:</b>Sit up straight, maintain good posture, and avoid fidgeting. Make eye contact by looking into the camera, not at the screen.</p>
                            <p>&#9679;<b>Facial Expressions:</b> Smile and use facial expressions to convey enthusiasm and engagement. This helps build rapport with the interviewer.</p>

                            <h4>What to Include in Your Software Design Document</h4>
                            <p>Problems within the coding world tend to vary, and engineering teams and developers often
                                write design documents differently. However, there is a certain software design document
                                template that you can follow to help you include all of the essential pieces of information.
                            </p>
                            <p>3. Communicate Effectively</p>
                            <p>&#9679;<b>Speak Clearly:</b> Speak slowly and clearly. Ensure your microphone is positioned properly to avoid muffled audio.</p>
                            <p>&#9679;<b>Active Listening:</b> Listen attentively and avoid interrupting the interviewer. Nod occasionally to show you are engaged.</p>   

                            <h4>4. Showcase Your Skills and Experience</h4>
                            <p>&#9679;<b>STAR Method:</b>Use the STAR (Situation, Task, Action, Result) method to structure your answers. This helps you provide clear, concise, and compelling responses.</p>
                            <p>&#9679;<b>Quantify Achievements:</b>Whenever possible, quantify your achievements with numbers or percentages. This adds credibility to your accomplishments.</p>
                               
                             <h4>5. Handle Technical Issues Gracefully</h4>
                             <p>&#9679;<b>Stay Calm:</b> If technical issues arise, stay calm. Politely inform the interviewer and work to resolve the issue quickly.</p>
                             <p>&#9679;<b>Have a Backup Plan:</b> Keep your phone nearby in case you need to switch to an audio call.</p>

                              <h4>6. Ask Thoughtful Questions</h4>
                              <p>&#9679;<b>Prepare Questions: </b> Have a list of thoughtful questions ready about the company, team, and role. This shows your interest and helps you gather valuable information.</p>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                </div>

                @component('components.blogsidebar')
                @endcomponent

            </div>
        </div>
    </section>
    <!-- /Blog Details -->
@endsection
