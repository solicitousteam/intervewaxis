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
                                            alt="">April 20, 2023</li>
                                    <li><img class="img-fluid" src="{{ URL::asset('/build/img/icon/icon-23.svg') }}"
                                            alt="">Programming, Web Design</li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="blog-title"><a href="{{ url('blog-details') }}"> Power of wellcafted CV</a></h3>
                        <div class="blog-content">
                            <h4>The Importance of a Crisp and Clear CV Structure</h4>
                            <p>In today's competitive job market, having a well-structured CV is crucial. A clear and concise CV allows recruiters to quickly find the information they need and understand your qualifications. A crisp structure highlights your strengths and makes a strong first impression This approach ensures that your CV is easy to read and navigate, increasing your chances of landing an interview.
</p>
                            <h4>Crafting a Professional Summary That Shines</h4>
                            <p>Your professional summary is the first section recruiters read, so it needs to be impactful. Keep it short and focused, ideally no more than 3-4 sentences. Summarize your key skills, experiences, and career goals. Tailor this section to the job you're applying for, highlighting how your background makes you a perfect fit </p>
                            <h4>Organizing Work Experience for Maximum Impact</h4>
                            <p>
                            The Work Experience section is the heart of your CV. List your experiences in reverse chronological order, starting with your most recent job. For each position, include your job title, company name, location, and dates of employment. Use bullet points to describe your responsibilities and achievements, focusing on results and quantifiable outcomes. 
                            </p>
                            <h4>Highlighting Your Skills Effectively</h4>
                            <p>A dedicated Skills section helps recruiters see your relevant abilities at a glance. Categorize your skills into groups, such as Technical Skills, Soft Skills, and Industry-Specific Skills.</p>
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
