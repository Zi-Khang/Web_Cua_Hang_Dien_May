<h1>Them san pham</h1>
<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    Ten
    <input type="text" name="Name"> 
    <br>
    Loai
    <select name="category_id" id="">
        @foreach ($categories as $categori)
            <option value="{{ $categori->id }}">
                {{ $categori->Name }}
            </option>
        @endforeach
    </select>
    <br>
    Description
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    Photo
    <input type="file" name="photo" placeholder="Choose file" id="">
    @error('file')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <br>
    Price
    <input type="double" name="price">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </div>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


