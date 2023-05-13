@extends('layouts.app')

@section('content')
<section class="contact">
    <div class="contact-container">
        <h3 class="contact-header">Contact <span>Us</span></h3>
        <div class="contact-box">
            @include('contract.contract-form')
            @include('contract.contract-info')
        </div>
        <div class="contact-background">
            <img srcset="{{ URL('Images/contact-img.png 2x') }}" alt="" />
        </div>
    </div>
</section>
@endsection
