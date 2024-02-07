{{-- <h2>Uploaded photo</h2>

<div>
    <img src="{{ asset('storage/uploads/new_image.png') }}" alt="new image" style="width:300px;">
</div>

<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="my_file">
    <button type="submit">Submit</button>
</form>

<div>
    <a href="{{ route('delete') }}">Delete Photo</a>
</div> --}}

<img src="{{ asset('uploads/image1.jpg') }}" style="width:50%;" alt="image">
