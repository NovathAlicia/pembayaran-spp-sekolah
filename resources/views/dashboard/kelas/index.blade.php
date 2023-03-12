@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-bs-toggle="modal" data-bs-target="#modal-tambah-kelas">Data Kelas
                  @if (Auth::user()->role == 'admin')
                  <button type="button" class="btn btn-light border float-end">Tambah kelas</button>
                  @endif
                </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah murid</th>
                        @if (Auth::user()->role == 'admin')
                        <th scope="col">Actions</th>
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($kelas as $kelas)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $kelas->name }}</td>
                        <td>{{ count($kelas->users) }}</td>
                        @if (Auth::user()->role == 'admin')
                        <td>
                          <button type="button" class="btn btn-light border">Edit</button>
                        </td>
                        @endif
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-tambah-kelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah kelas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-tambah-kelas" action="{{ Route('store.kelas') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input name="name" type="text" class="form-control">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-light border" form="form-tambah-kelas">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection
