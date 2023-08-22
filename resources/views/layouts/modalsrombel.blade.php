{{-- ROMBEL --}}
<div class="modal fade" id="rombel">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addMapel" method="POST">
            @csrf
        <div class="modal-header main-color">
          <div class="d-flex justify-content-between">
            <h4 class="modal-title">Master Rombel</h4>
            <button type="button" class="btn btn-default text-white" data-toggle="modal" data-target="#addRombel">+</button>
          </div>
          
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table id="dataSiswa" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th class="text-center">No</th>
              <th>Rombel</th>
              <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($rombel as $index => $r)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $r->kelas }} {{ Str::upper($r->jurusan) }} {{ $r->nomor }}</td>
                    <td class="text-center">
                       {{-- <a href="/rombel/{{ $r->id }}"><button type="button" data-toggle="modal" data-target="editRombel" class="btn btn-warning">Edit</button></a> --}}
                       <a onclick="return confirm('yakin ingin menghapus ?')" href="deleteRombel/{{ $r->id }}"> <button type="button" class="btn btn-danger">Hapus</button> </a>
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>       
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  {{-- ADD ROMBEL--}}
<div class="modal fade" id="addRombel">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addRombel" method="POST">
            @csrf
        <div class="modal-header main-color">
            <h4 class="modal-title">Tambah Rombel</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Kelas</h5></div>
            <div class="col-8 mb-1"><input type="number" name="kelas" class="form-control" placeholder="cth : 12"></div>
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Jurusan</h5></div>
            <div class="col-8 mb-1"><input type="text" name="jurusan" class="form-control" placeholder="cth : RPL"></div>
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Nomor</h5></div>
            <div class="col-8 mb-1"><input type="number" name="nomor" class="form-control" placeholder="cth : 1"></div>
        </div>
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  {{-- EDIT ROMBEL--}}
<div class="modal fade" id="editRombel">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addRombel" method="POST">
            @csrf
        <div class="modal-header main-color">
            <h4 class="modal-title">Tambah Rombel</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Kelas</h5></div>
            <div class="col-8 mb-1"><input type="number" name="kelas" class="form-control" placeholder="cth : 12"></div>
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Jurusan</h5></div>
            <div class="col-8 mb-1"><input type="text" name="jurusan" class="form-control" placeholder="cth : RPL"></div>
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Nomor</h5></div>
            <div class="col-8 mb-1"><input type="number" name="nomor" class="form-control" placeholder="cth : 1"></div>
        </div>
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
