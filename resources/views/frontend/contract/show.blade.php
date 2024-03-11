@extends('frontend.layouts.main')
@section('content')
{{-- <div class="container">
<h1>{{ $contract->heading }}</h1>
<embed src="{{ asset($contract->contract) }}" type="application/pdf" width="100%" height="600px" />
</div> --}}
<section class="facilities_area section_gap">
    <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
    </div>
    <div class="container">
        <div class="section_title text-center">
            <h2 class="title_w">{{ $contract->heading }}</h2>
            <p>Read it, Understand it and then Follow the requiments needs.</p>
            <embed src="{{ asset($contract->contract) }}" type="application/pdf" width="100%" height="600px" />
        </div>
       
    </div>
</section>
@endsection

