@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-bs-toggle="modal" data-bs-target="#modal-tambah-spp">Data SPP
                  <button type="button" class="btn btn-light border float-end">Tambah SPP</button>
                </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($spp as $spp)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $spp->nominal }}</td>
                        <td>{{ $spp->tahun }}</td>
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

<div class="modal fade" id="modal-tambah-spp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah SPP</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-tambah-spp" action="{{ Route('store.spp') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nominal</label>
            <input name="nominal" type="number" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Tahun</label>
            <select name="tahun" class="form-select" aria-label="Default select example">
              @for ($index = 1999; $index <= 2023; $index++)
              <option value="{{ $index }}">{{ $index }}</option>
              @endfor
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-light border" form="form-tambah-spp">Submit</button>
      </div>
    </div>
  </div>
</div>
@endsection
