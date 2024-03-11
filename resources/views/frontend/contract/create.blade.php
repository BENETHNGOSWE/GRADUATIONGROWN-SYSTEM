{{-- <form action="{{ route('contract.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="heading" class="form-label">heading:</label>
        <input type="text" class="form-control" id="heading" name="heading">
    </div>
    <div class="mb-3">
        <label for="contract" class="form-label">contract File:</label>
        <input type="file" class="form-control" id="contract" name="contract">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}
@extends('frontend.layouts.main')
@section('content')
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container" style="background-color: #12253a3d; padding: 20px; border-radius: 10px;">
                <form action="{{ route('contract.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 20px;">
                        <label for="heading" style="display: block; font-weight: bold; color: white;">Heading of Contract:</label>
                        <input type="text" id="heading" name="heading" placeholder="heading of contract"
                            style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="contract" style="display: block; font-weight: bold; color: white;">Upload Contract:</label>
                        <input type="file" id="contract" name="contract" placeholder="Grown Size"
                            style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                   
                    <button type="submit"
                        style="padding: 10px 20px; background-color: #fff; color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection
