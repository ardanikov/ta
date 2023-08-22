{{-- ROMBEL --}}
<div class="modal fade" id="masterJurusan">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header main-color">
          <div class="d-flex justify-content-between">
            <h4 class="modal-title">Master Jurusan</h4>
            <button type="button" class="btn btn-default text-white" data-toggle="modal" data-target="#addJurusan">+</button>
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
              <th>Nama Jurusan</th>
              <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                @foreach($jurusan as $index => $j)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ Str::ucfirst($j->nama_jurusan) }}</td>
                    <td class="text-center">
                       {{-- <a href="/rombel/{{ $r->id }}"><button type="button" data-toggle="modal" data-target="editRombel" class="btn btn-warning">Edit</button></a> --}}
                       <a onclick="return confirm('yakin ingin menghapus ?')" href="deleteJurusan/{{ $j->id }}"> <button type="button" class="btn btn-danger">Hapus</button> </a>
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>       
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  {{-- ADD Jurusan--}}
<div class="modal fade" id="addJurusan">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addJurusan" method="POST">
            @csrf
        <div class="modal-header main-color">
            <h4 class="modal-title">Tambah Rombel</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-4 d-flex mb-1"><h5 class="d-flex my-auto">Nama Jurusan</h5></div>
            <div class="col-8 mb-1"><input type="text" name="nama_jurusan" class="form-control" placeholder="cth : Rekayasa Perangkat Lunak"></div>
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
