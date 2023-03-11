@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-bs-toggle="modal" data-bs-target="#modal-tambah-petugas">Data Petugas
                  <button type="button" class="btn btn-light border float-end">Tambah Petugas</button>
                </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($petugas as $petugas)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $petugas->name }}</td>
                        <td>{{ $petugas->email }}</td>
                        <td>{{ $petugas->jenis_kelamin }}</td>
                        <td>
                          <button type="button" class="btn btn-light border">Edit</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-tambah-petugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah petugas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-tambah-petugas" action="{{ Route('store.petugas') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input name="name" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input name="email" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Jenis kelamin</label>
            <select name="jenis_kelamin" class="form-select" aria-label="Default select example">
              <option value="laki-laki">Laki laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-light border" form="form-tambah-petugas">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection
