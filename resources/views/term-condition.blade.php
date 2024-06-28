<?php $page = 'term-condition'; ?>
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
            Terms & Conditions
        @endslot
    @endcomponent
    @component('components.pagebanner')
        @slot('title')
            Terms & Conditions
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
                            <h4>Introduction</h4>
                            <p>Welcome to InterviewAxis, a mock interview platform designed to help users prepare for job interviews. By accessing or using our website, you agree to comply with and be bound by these Terms and Conditions. If you do not agree with these terms, you are not authorized to use our services.</p>
                            <h5>1. Acceptance of Terms</h5>
                            <p>By accessing and using InterviewAxis, you accept and agree to be bound by these Terms and Conditions and our Privacy Policy. These Terms apply to all visitors, users, and others who access or use the Service.</p>
                            <h5>2. Changes to Terms</h5>
                            <p>InterviewAxis reserves the right to modify or replace these Terms at any time. Any changes will be effective immediately upon posting to the website. Your continued use of the site following the posting of any changes constitutes acceptance of those changes.</p>
                        </div>
                        <div class="terms-text">
                            <h4>3. User Accounts</h4>
                            <p>&#9679; You must provide accurate and complete information when creating an account. </p>
                            <p>&#9679; You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer.</p>
                            <p>&#9679; You agree to accept responsibility for all activities that occur under your account or password.</p>
                        </div>
                        <div class="terms-text">
                            <h4>4. Use of Service</h4>
                            <p>&#9679; InterviewAxis grants you a limited, non-exclusive, non-transferable, and revocable license to use our services for personal, non-commercial use. </p>
                            <p>&#9679; You agree not to reproduce, duplicate, copy, sell, resell, or exploit any portion of the Service without express written permission from InterviewAxis.</p>
                            <p>&#9679; Any unauthorized use terminates the permission or license granted by InterviewAxis.</p>
                            <!--<p>Questions? Please email us at <a href="javascript:void(0);">dreamslms@example.com</a></p>-->
                        </div>
                        <div class="terms-text">
                            <h4>5. Content</h4>
                            <p>&#9679; Users may post, link, store, share, and otherwise make available certain information, text, graphics, videos, or other material ("Content"). You are responsible for the Content that you post to the Service, including its legality, reliability, and appropriateness.</p>
                            <p>&#9679; By posting Content to the Service, you grant us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through the Service. </p>
                            <p>&#9679; InterviewAxis has the right but not the obligation to monitor and edit all Content provided by users. </p>
                        </div>
                         <div class="terms-text">
                            <h4>6. Prohibited Conduct</h4>
                            <p>&#9679; InterviewAxis grants you a limited, non-exclusive, non-transferable, and revocable license to use our services for personal, non-commercial use. </p>
                            <p>&#9679; You agree not to reproduce, duplicate, copy, sell, resell, or exploit any portion of the Service without express written permission from InterviewAxis.</p>
                            <p>&#9679; Any unauthorized use terminates the permission or license granted by InterviewAxis.</p>
                            <!--<p>Questions? Please email us at <a href="javascript:void(0);">dreamslms@example.com</a></p>-->
                        </div>
                         <div class="terms-text">
                            <h4>7. Termination</h4>
                            <p>You agree not to:</p>
                            <p>InterviewAxis may terminate or suspend your account and bar access to the Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms. Upon termination, your right to use the Service will immediately cease.</p>
                        </div>
                         <div class="terms-text">
                            <h4>8. Limitation of Liability</h4>
                            <p>To the fullest extent permitted by law, InterviewAxis shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses resulting from (i) your use or inability to use the Service; (ii) any unauthorized access to or use of our servers and/or any personal information stored therein; (iii) any interruption or cessation of transmission to or from our Service.</p>
                        </div>
                         <div class="terms-text">
                            <h4>9. Indemnification</h4>
                            <p>You agree to defend, indemnify, and hold harmless InterviewAxis and its licensee and licensors, and their employees, contractors, agents, officers, and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs, or debt, and expenses (including but not limited to attorney's fees) arising from (i) your use of and access to the Service, by you or any person using your account and password; (ii) a breach of these Terms, or (iii) Content posted on the Service.</p>
                        </div>
                         <div class="terms-text">
                            <h4>10. Governing Law</h4>
                            <p>These Terms shall be governed and construed in accordance with the laws of the state or country where InterviewAxis operates, without regard to its conflict of law provisions.</p>
                        </div>
                         <div class="terms-text">
                            <h4>11. Dispute Resolution</h4>
                            <p>Any dispute, controversy, or claim arising out of or relating to these Terms or the breach thereof shall be settled by arbitration administered by a recognized arbitration body in accordance with its rules. The place of arbitration shall be in the state or country of InterviewAxis's choosing, and the language of the arbitration shall be English.</p>
                        </div>
                         <div class="terms-text">
                            <h4>12. Miscellaneous</h4>
                            <p>&#9679; These Terms constitute the entire agreement between you and InterviewAxis regarding the use of the Service. </p>
                            <p>&#9679; Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.</p>
                            <p>&#9679; If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. </p>
                        </div>
                         <div class="terms-text">
                            <h4>Contact Us</h4>
                            <p>If you have any questions about these Terms, please contact us at <a href="javascript:void(0);">info@interviewaxis.com<a/></p>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
    <!-- /Help Details -->
@endsection
