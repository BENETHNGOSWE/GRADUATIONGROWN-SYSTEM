@extends('frontend.layouts.main')
@section('content')
    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">Contract List</h2>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
            <table style="border-collapse: collapse; width: 100%; border: 1px solid #ddd;">
                <thead>
                    <tr style="background-color: #f2f2f2;">
                        <th style="padding: 8px; border: 1px solid #fffefe;">Heading</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Contract</th>
                        <th style="padding: 8px; border: 1px solid #ddd;">Action</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contracts as $booking)
                        <tr style="border: 1px solid #ddd;">
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->heading }}</td>
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">{{ $booking->contract }}</td>
                            <td style="padding: 8px; border: 1px solid #ddd; color: white;">
                                <!-- View button with eye icon -->
                                <a href="{{ route('contract.update', $contract->id) }}" class="btn btn-outline-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            
                                <!-- Edit button with pencil icon -->
                                <a href="{{ route('contract.create') }}" class="btn btn-outline-success">
                                    <i class="fa fa-eye"></i> 
                                </a>
                            
                                <!-- Delete button with trash icon -->
                                <a href="{{ route('contract.create') }}" class="btn btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <!--================ Facilities Area  =================-->
@endsection
