@extends('frontend/layouts.main')
@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Away from university life..</h6>
                    <h2>Relax Your Mind</h2>
                    <p>Make a booking for your Cloak Graduation Easily Today through Our System With Convenience, Speed and Worry-free<br>
                        After Studies, It's Time to Celebrate with Friends..!".</p>
                    <a href="{{ route('booking.create')}}" class="btn theme_btn button_hover">Make Booking Now</a>
                </div>
            </div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3" style="margin-left: 17em">
                        <h2>Book<br> Your Cloak </h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <a class="btn theme_btn button_hover" href="{{ route('booking.create')}}">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Banner Area =================-->

    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Graduation Grown List</h2>
                <p>Choose a graduation gown that will give you a Stunning look at your Gradution Here today. </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="frontend/assets/image/blog/blog-1.jpg" alt="post">
                        </div>
                        {{-- <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Low Cost Advertising</h4>
                            </a>
                            <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                            </p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="frontend/assets/image/blog/blog-2.jpg" alt="post">
                        </div>
                        {{-- <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Creative Outdoor Ads</h4>
                            </a>
                            <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and fear
                                are</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="frontend/assets/image/blog/blog-3.jpg" alt="post">
                        </div>
                        {{-- <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">It S Classified How To Utilize Free</h4>
                            </a>
                            <p>Why do you want to motivate yourself? Actually, just answering that question fully can </p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->
@endsection
