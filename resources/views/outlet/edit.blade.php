@extends ('template.partials.master')

@section('judul')
<h1>Halaman Edit outlet</h1>
@endsection
@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Outlet</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet/{{ $outlet->id }}" method="POST">
                @csrf
                @method('PUT');
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNIS">nama</label>
                    <input type="text" name="nama" class="form-control" id="InputKelas" placeholder="Masukan Nama" value="{{ $outlet->nama }}" >
                    @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="InputNIS"> alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukan alamat" value="{{ $outlet->alamat }}" >
                    @error('alamat')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="InputNIS"> tlp</label>
                    <input type="text" name="tlp" class="form-control" id="tlp" placeholder="Masukan tlp" value="{{ $outlet->tlp }}" >
                    @error('tlp')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
@endsection