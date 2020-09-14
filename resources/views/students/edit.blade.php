@extends('layout/main')

@section('title', 'Form Edit Student Data')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Student Data</h1>

            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                        placeholder="Insert Name"
                        value="@if(old('nama') != null) {{old('nama')}} @else {{$student->nama}} @endif">
                    @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp"
                        placeholder="Insert NRP" maxlength="10"
                        value="@if(old('nrp') != null) {{old('nrp')}} @else {{$student->nrp}} @endif">
                    @error('nrp')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                        placeholder="Insert Email"
                        value="@if(old('email') != null) {{old('email')}} @else {{$student->email}} @endif">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Major</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" placeholder="Insert Major"
                        value="@if(old('jurusan') != null) {{old('jurusan')}} @else {{$student->jurusan}} @endif">
                    @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>

                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>

        </div>
    </div>
</div>
@endsection