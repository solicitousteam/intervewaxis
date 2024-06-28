<?php $page = 'instructor-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            My Profile
        @endslot
        @slot('item1')
            Home
        @endslot
        @slot('item2')
            My Profile
        @endslot
    @endcomponent

    <!-- Page Content -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                @component('components.sidebar')
                @endcomponent

                <!-- Instructor profile -->
                <div class="col-xl-9 col-lg-9">

                    <div class="settings-widget card-details mb-0">
                        <div class="settings-menu p-0">
                            <div class="profile-heading">
                                <h3>My Profile</h3>
                            </div>
                            <div class="checkout-form personal-address">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>First Name</h6>
                                            <p>Eugene</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Last Name</h6>
                                            <p>Andre</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Registerion Date</h6>
                                            <p>January 16, 2024, 11:15 AM</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>User Name</h6>
                                            <p>instructordemo</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Email</h6>
                                            <p>instructordemo@example.com</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info">
                                            <h6>Phone Number</h6>
                                            <p>89104-71829</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="contact-info mb-0">
                                            <h6>Bio</h6>
                                            <p> Very well thought out and articulate communication. Clear milestones,
                                                deadlines and fast work. Patience. Infinite patience. No shortcuts. Even if
                                                the client is being careless. Some quick example text to build on the card
                                                title and bulk the card's content Moltin gives you platform. As a highly
                                                skilled and successfull product development and design specialist with more
                                                than 4 Years of My experience lies in successfully conceptualizing,
                                                designing, and modifying consumer products specific to interior design and
                                                home furnishings.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Instructor profile -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->
@endsection
