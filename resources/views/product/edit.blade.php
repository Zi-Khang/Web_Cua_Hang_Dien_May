<form action="{{ route('update', $product)}}" method="POST">
    @csrf
    {{-- @method('PUT') --}}
    Ten
    <input type="text" name="Name" value="{{$product->Name}}"> 
    <br>
    Loai
    <select name="category_id" selected="">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}" 
            {{ $category->id == $product->category_id ? 'selected' : '' }}>
            {{ $category->Name }}
        </option>
        @endforeach
    </select>
    <br>
    Description
    <textarea name="description" cols="30" rows="10" value="{{$product->Description}}"></textarea>
    <br>
    Photo
    <input type="file" name="photo" placeholder="Choose file" value="{{$product->photo}}">
    <br>
    Price
    <input type="double" name="price" value="{{$product->Price}}">
    <br>
    <button>UPDATE</button>
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