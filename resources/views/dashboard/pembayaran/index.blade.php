@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" data-bs-toggle="modal" data-bs-target="#modal-tambah-pembayaran">Data pembayaran
                  @if (Auth::user()->role != 'siswa')
                  <button type="button" class="btn btn-light border float-end">Transaksi</button>
                  @endif
                </div>

                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Petugas</th>
                        <th scope="col">Murid</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($transaksi as $transaksi)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $transaksi->petugas }}</td>
                            <td>{{ $transaksi->user->name }}</td>
                            <td>{{ $transaksi->spp->nominal }}</td>
                            <td>{{ $transaksi->created_at->format('M d, Y') }}</td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-tambah-pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah kelas</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="form-tambah-pembayaran" action="{{ Route('store.pembayaran') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama murid</label>
            
            <select name="user_id" id="select-beast" autocomplete="off">
              <option value="{{ null }}">{{ null }}</option>
              @foreach ($siswa as $siswa)
              <option value="{{ $siswa->id }}">{{ $siswa->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Nominal</label>
            
            <select name="spp_id" id="select-nominal" autocomplete="off">
              <option value="{{ null }}">{{ null }}</option>
              @foreach ($spp as $spp)
              <option value="{{ $spp->id }}">{{ $spp->nominal }}</option>
              @endforeach
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-light border" form="form-tambah-pembayaran">Submit</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

<script>
new TomSelect("#select-beast",{
  sortField: {
    field: "text",
    direction: "asc"
  }
});

new TomSelect("#select-nominal",{
  sortField: {
    field: "text",
    direction: "asc"
  }
});
</script>
@endsection
