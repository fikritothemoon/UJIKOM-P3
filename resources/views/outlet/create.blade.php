@extends('template.partials.master')

@section('judul')
<h1>Create Outlet</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Nama</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group">
                    <label for="nama">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Enter Your Alamat">
                  </div>

                <div class="form-group">
                    <label for="InputNama">Telepon</label>
                    <input type="text" name="tlp" class="form-control" placeholder="Enter Your Telepon">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection