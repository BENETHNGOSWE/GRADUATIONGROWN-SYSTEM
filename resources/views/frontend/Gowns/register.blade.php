@extends('frontend.layouts.main')
@section('content')
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container" style="background-color: #12253a3d; padding: 20px; border-radius: 10px;">
                <form action="{{ route('grown.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="margin-bottom: 20px;">
                        <label for="grown_color" style="display: block; font-weight: bold; color: white;">Grown Color:</label>
                        <input type="text" id="grown_color" name="Grown_color" placeholder="Grown Color"
                            style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="grown_size" style="display: block; font-weight: bold; color: white;">Grown Size:</label>
                        <input type="text" id="grown_size" name="Grown_Size" placeholder="Grown Size"
                            style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="grown_price" style="display: block; font-weight: bold; color: white;">Grown Price:</label>
                        <input type="number" id="grown_price" name="Grown_price" placeholder="Grown Price"
                            style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="grown_returndate" style="display: block; font-weight: bold; color: white;">Grown Return Date:</label>
                        <input type="date" id="grown_returndate" name="Grown_returndate" placeholder="Grown Return Date"
                            style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; width: 100%;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="image" style="display: block; font-weight: bold; color: white;">Upload Image:</label>
                        <img src="" alt="" class="img-product" id="file-preview" />
                        <input type="file" id="image" name="image" accept="image/*" onchange="showFile(event)">
                    </div>
                    <button type="submit"
                        style="padding: 10px 20px; background-color: #fff; color: #007bff; border: none; border-radius: 5px; cursor: pointer;">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection
