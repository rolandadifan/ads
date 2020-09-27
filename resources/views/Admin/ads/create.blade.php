@extends('Admin.layouts.app')
@section('tittle', 'CREATE ADS')
@section('content')

<form action="{{route('ads.store')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group ml-3 mr-5">
        <input type="hidden" name="users_id" value="{{Auth::user()->id}}" />
        @error('users_id') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="tittle" class="form-control-label">Judul</label>
        <input type="text" name="tittle" value="{{ old('tittle') }}" class="form-control @error('tittle') is-invalid @enderror" />
        @error('tittle') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="slug" class="form-control-label">Slug</label>
        <input type="text" name="slug" value="{{ old('slug') }}" class="form-control @error('slug') is-invalid @enderror" />
        @error('slug') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="price" class="form-control-label">Harga</label>
        <input type="number" name="price" value="{{ old('price') }}" class="form-control @error('price') is-invalid @enderror" />
        @error('price') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="year" class="form-control-label">Tahun</label>
        <input type="number" name="year" value="{{ old('year') }}" class="form-control @error('year') is-invalid @enderror" />
        @error('year') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="sdescription" class="form-control-label">Short Deskripsi</label>
        <input type="text" name="sdescription" value="{{ old('sdescription') }}" maxlength="30" class="form-control @error('sdescription') is-invalid @enderror" />
        @error('sdescription') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="description" class="form-control-label">Deskripsi</label>
        <textarea name="description" class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description')}}</textarea>
        @error('description') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <input type="hidden" name="status" value="PENDING" />
        @error('status') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="name" class="form-control-label">Category</label>
        <select name="categories_id" class="form-control @error('categories_id') is-invalid @enderror">
            @foreach ($category as $ctg)
            <option value="{{ $ctg->id }}">{{ $ctg->name }}</option>
            @endforeach
        </select>
        @error('categories_id') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="city" class="form-control-label">Kota</label>
        <input type="text" name="city" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" />
        @error('city') <div class="text-muted">{{ $message }}</div> @enderror
    </div>
    <div class="form-group ml-3 mr-5">
        <label for="photo1" class="form-control-label">Foto 1 <span style="font-size: 15px;">*default</span></label>
        <input type="file" name="photo1" value="{{ old('photo1') }}" accept="image/*" class="form-control @error('photo1') is-invalid @enderror" />
        @error('photo1') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="photo2" class="form-control-label">Foto 2</label>
        <input type="file" name="photo2" value="{{ old('photo2') }}" accept="image/*" class="form-control @error('photo2') is-invalid @enderror" />
        @error('photo2') <div class="text-muted">{{ $message }}</div> @enderror
    </div>

    <div class="form-group ml-3 mr-5">
        <label for="photo3" class="form-control-label">Foto 3</label>
        <input type="file" name="photo3" value="{{ old('photo3') }}" accept="image/*" class="form-control @error('photo3') is-invalid @enderror" />
        @error('photo3') <div class="text-muted">{{ $message }}</div> @enderror
    </div>
    <div class="form-group my-5">
        <button type="submit" class="btn btn-primary ml-3 mr-5">CREATE</button>
    </div>
</form>



@endsection