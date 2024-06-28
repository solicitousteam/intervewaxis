<?php $page = 'privacy-policy'; ?>
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
            Privacy Policy
        @endslot
    @endcomponent
    @component('components.pagebanner')
        @slot('title')
            Privacy Policy
        @endslot
    @endcomponent

    <!-- Help Details -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="terms-content">
                        <div class="terms-text">
                            <h3>Effective date: <span>28th of June, 2024</span></h3>
                           <!-- <h4>This is a H1, Perfect's for titles.</h4>-->
                            <p>Interviewaxis.com  is committed to protecting your privacy. This Privacy Policy explains how we collect, use and safeguard your information when you visit our website, including any other media form, media channel, mobile website, or mobile application related or connected thereto  the Site. Please read this privacy policy carefully. If you do not agree with the terms of this privacy policy, please do not access the site.</p>
                            <!-- <h5>This is a H2's perfect for the titles.</h5>-->
                            <p>&#9679; Personal Data: Personally identifiable information, such as your name, email address, phone number, and any other information that you voluntarily provide to us when you register on the Site, participate in a mock interview, or otherwise contact us.</p>
                            
                            <p>&#9679; Usage Data: Non-personal information about how you interact with our website, such as your IP address, browser type, domain names, access times, and referring website addresses. This information is used for the operation of the service, to maintain the quality of the service, and to provide general statistics regarding use of the Interviewaxis.com website</p>
                        </div>
                        <div class="terms-text">
                            <h4>2. Use of Information</h4>
                            <p>We may use the information we collect in the following ways:</p>
                            <ul>
                                <li>&#9679; To operate and maintain the Site;</li>
                                <li>&#9679; To personalize your experience on the Site and to deliver customized content;</li>
                                <li>&#9679; To send you administrative communications, such as administrative emails, confirmation emails, technical notices, updates on policies, or security alerts;</li>
                                <li>&#9679; To respond to your comments or inquiries;</li>
                                <li>&#9679; To provide you with user support;</li>
                                <li>&#9679; To track and measure advertising on the Site;</li>
                                <li>&#9679; To protect, investigate, and deter against unauthorized or illegal activity.</li>
                            </ul>
                        </div>
                        <div class="terms-text">
                            <h4>Disclosure of Information</h4>
                            <p>We may disclose your information to third parties only in the following circumstances:</p>
                            <ul>
                            <li>&#9679; With your consent; </li>
                            <li>&#9679; To comply with legal obligations; </li>
                            <li>&#9679; To protect and defend our rights and property.</li>
                            </ul>
                        </div>
                        <div class="terms-text">
                            <h4>Security of Information</h4>
                            <p>We use commercially reasonable methods to protect your personal information from unauthorized access or disclosure. However, we cannot guarantee the security of information transmitted over the internet.</p>
                            <!--<p>Questions? Please email us at <a href="javascript:void(0);">dreamslms@example.com</a></p>-->
                        </div>
                         <div class="terms-text">
                            <h4> Third-Party Links</h4>
                            <p>The Site may contain links to third-party websites. We have no control over the privacy practices or the content of these websites. As such, we are not responsible for the content or the privacy policies of those third-party websites.</p>
                            </div>
                             <div class="terms-text">
                            <h4> Changes to This Privacy Policy</h4>
                            <p>We may update this Privacy Policy from time to time in order to reflect, for example, changes to our practices or for other operational, legal, or regulatory reasons.</p>
                            </div>
                             <div class="terms-text">
                            <h4> Contact Us</h4>
                            <p>If you have any questions about this Privacy Policy, please contact us at: <a href="javascript:void(0);">info@interviewaxis.com</a></p>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Help Details -->
@endsection
