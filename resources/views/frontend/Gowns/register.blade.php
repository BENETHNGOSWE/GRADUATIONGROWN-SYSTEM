<!-- resources/views/create.blade.php -->

<form action="{{ route('grown.store') }}" method="POST">
    @csrf
    <input type="text" name="Grown_color" placeholder="Grown Color">
    <input type="text" name="Grown_Size" placeholder="Grown Size">
    <input type="interger" name="Grown_price" placeholder="Grown_price">
    <input type="date" name="Grown_returndate" placeholder="GrownReturn Date">
    {{-- <input type="file" name="Grown_image" accept="image/*"> --}}
    <button type="submit">Submit</button>
</form>
