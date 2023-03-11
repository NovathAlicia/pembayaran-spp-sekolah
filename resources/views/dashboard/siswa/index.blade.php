@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-bs-toggle="modal" data-bs-target="#modal-tambah-siswa">Data Siswa
                  <button type="button" class="btn btn-light border float-end">Tambah siswa</button>
                </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">NISN</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jenis kelamin</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($siswa as $murid)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $murid->name }}</td>
                        <td>{{ $murid->nis }}</td>
                        <td>{{ $murid->nisn }}</td>
                        <td>{{ $murid->no_telp }}</td>
                        <td>{{ $murid->alamat }}</td>
                        <td>{{ $murid->email }}</td>
                        <td>{{ $murid->jenis_kelamin }}</td>
                        <td>{{ $murid->kelas->name }}</td>
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

<div class="modal fade" id="modal-tambah-siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-tambah-siswa" action="{{ Route('store.siswa') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input name="name" type="text" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">NISN</label>
            <input name="nisn" type="number" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">NIS</label>
            <input name="nis" type="number" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" id="" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">No Telp</label>
            <input name="no_telp" type="number" class="form-control">
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
          <div class="mb-3">
            <label class="form-label">Kelas</label>
            <select name="kelas_id" class="form-select" aria-label="Default select example">
              @foreach ($kelas as $kelas)
                  <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
              @endforeach
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-light border" form="form-tambah-siswa">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection
