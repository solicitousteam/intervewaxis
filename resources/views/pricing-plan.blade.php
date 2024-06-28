<?php $page = 'pricing-plan'; ?>
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
            Pricing Plan
        @endslot
    @endcomponent
    <!-- Pricing Plan -->
    <section class="course-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 text-center mx-auto">
                    <div class="title-sec">
                        <h5>We keep it simple</h5>
                        <h2>Choose The Right Plan</h2>
                        <p>Improve the way your work, discover a brand new tool and drop the hassle once and for all.</p>
                    </div>
                    <div class="text-end">
                        <img src="{{ URL::asset('/build/img/plan.png') }}" alt="icon">
                    </div>
                    <div class="enable-item">
                        <label class="mb-0 me-2">Monthly</label>
                        <div class="form-check form-switch check-on m-0">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        </div>
                        <label class="mb-0 ms-2">Annualy</label>
                    </div>
                </div>
            </div>

            <!-- Plan Type -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="plan-box">
                        <div>
                            <h4>Basic</h4>
                            <p>For individuals who just need to start with the basic features</p>
                            <p>per user, per month when billed monthly</p>
                        </div>
                        <h3><span>$</span>10</h3>
                    </div>
                    <div class="plan-box">
                        <div>
                            <h4>Team</h4>
                            <p>For individuals who just need to start with the basic features</p>
                            <p>per user, per month when billed monthly</p>
                        </div>
                        <h3><span>$</span>10</h3>
                    </div>
                    <div class="plan-box">
                        <div>
                            <h4>Pro</h4>
                            <p>For individuals who just need to start with the basic features</p>
                            <p>per user, per month when billed monthly</p>
                        </div>
                        <h3><span>$</span>10</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="benefit-box">
                        <h5>Benefits</h5>
                        <ul>
                            <li>Access to slack community</li>
                            <li>Access to support team</li>
                            <li>Algorithmic bidding</li>
                            <li>Keyword and ASIN harvesting</li>
                        </ul>
                        <h5>Features</h5>
                        <ul>
                            <li>Search term isolation</li>
                            <li>Total sales analytics</li>
                            <li>Best seller rank</li>
                            <li>Placement optimization</li>
                        </ul>
                        <a href="javascript:;" class="btn btn-secondary w-100">Start For Free</a>
                    </div>
                </div>
            </div>
            <!-- /Plan Type -->

            <!-- Compare our plans -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="main-title text-center">Compare our plans</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-price">
                            <thead>
                                <tr>
                                    <td></td>
                                    <td class="text-center self-cell">Self-Employed & Freelance</td>
                                    <td colspan="2" class="text-center business-cell">Small businesses that need
                                        accounting, invoicing or payroll</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="basic-cell">
                                    <td></td>
                                    <td class="text-center">Basic</td>
                                    <td class="text-center">Team</td>
                                    <td class="text-center">Pro</td>
                                </tr>
                                <tr>
                                    <td>Separate business/personal</td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                </tr>
                                <tr>
                                    <td>Estimate tax payments</td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                </tr>
                                <tr>
                                    <td>Track deductible mileage</td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                    <td class="text-center"><img src="{{ URL::asset('/build/img/icon/check-circle.svg') }}"
                                            alt="icon"></td>
                                </tr>
                                <tr>
                                    <td>Download online banking</td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Multi-device</td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Create invoices & estimates </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manage VAT </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manage bills & payments </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Multiple currencies </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Create budgets</td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Track time</td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/close-circle.svg') }}" alt="icon">
                                    </td>
                                    <td class="text-center"><img
                                            src="{{ URL::asset('/build/img/icon/check-circle.svg') }}" alt="icon">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Compare our plans -->

        </div>
    </section>
    <!-- /Pricing Plan -->
@endsection
