<section class="contact-us" id="contact-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 contact-us-block">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
    <div class="container form-contact-us">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="{{route('message.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" />
                            @error('name') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" />
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNoTelp" class="col-sm-2 col-form-label">No.Telp</label>
                        <div class="col-sm-10">
                            <input type="number" name="telepon" value="{{ old('telepon') }}" class="form-control @error('telepon') is-invalid @enderror" />
                            @error('telepon') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNoTelp" class="col-sm-2 col-form-label">Message</label>
                        <div class="col-sm-10">
                            <textarea name="message" class="ckeditor form-control @error('message') is-invalid @enderror">{{ old('message')}}</textarea>
                            @error('message') <div class="text-muted">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group row button-submit">
                        <div class="col-sm-10">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>