@extends('layout/main')

@section('title', 'Form Insert Student Data')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Insert Student Data</h1>

            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Insert Name">
                    @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp"
                        placeholder="Insert NRP" maxlength="10">
                    @error('nrp')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Insert Email">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Major</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" placeholder="Insert Major">
                    @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection