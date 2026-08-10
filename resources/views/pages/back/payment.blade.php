@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <!-- Event snippet for Achiziție (2) conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-18160580545/pLwVCLmu594cEMHv0dND',
            'value': 1.0,
            'currency': 'EUR',
            'transaction_id': ''
            // 'new_customer': true /* calculate dynamically, populate with true/false */,
        });
    </script>
    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
    <div class="dashWrapper">
        <div class="adminHomePageTitle">Your payment has been successfully processed.</div>
        <a href="{{route('package.index')}}" class="sale-button" style="margin-top: 30px">View courses</a>
    </div>
    <script src="{{asset('js/adminPage.js')}}"></script>
@endsection
