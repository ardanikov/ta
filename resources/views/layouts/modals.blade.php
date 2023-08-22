
{{-- ADD MAPEL --}}
<div class="modal fade" id="modal-add-mapel">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addMapel" method="POST">
            @csrf
        <div class="modal-header main-color">
          <h4 class="modal-title">Tambah Data Mata Pelajaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-4 d-flex"><h5 class="d-flex my-auto">Mata Pelajaran</h5></div>
                <div class="col-8"><input type="text" name="nama_pelajaran" class="form-control" placeholder="Nama Mapel"></div>
            </div>
            <div class="row mt-2">
                <div class="col-4 d-flex"><h5 class="d-flex my-auto">Ringkasan</h5></div>
                <div class="col-8"><input type="text" name="ringkas" class="form-control" placeholder="Ringkasan Mapel"></div>
            </div>
            <div class="row mt-2">
                <div class="col-4 d-flex"><h5 class="d-flex my-auto">Kurikulum</h5></div>
                <div class="col-8">
                    <select name="m_kurikulum" class="custom-select">
                        @foreach($kurikulum as $k)
                        <option value="{{ $k->id }}">{{ Str::ucfirst( $k->nama_kurikulum) }}</option>
                        @endforeach
                      </select>
                </div>
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

{{-- EDIT MAPEL --}}
<div class="modal fade" id="modal-edit-mapel">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addMapel" method="POST">
            @csrf
        <div class="modal-header main-color">
          <h4 class="modal-title">Edit Data Mata Pelajaran</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @if(isset($mapelData))
            @foreach($mapelData as $md)
            <div class="row">
                <div class="col-4 d-flex"><h5 class="d-flex my-auto">Mata Pelajaran</h5></div>
                <div class="col-8"><input type="text" name="nama_pelajaran" class="form-control" placeholder="" value="{{ $m->nama_pelajaran }}"></div>
            </div>
            <div class="row mt-2">
                <div class="col-4 d-flex"><h5 class="d-flex my-auto">Ringkasan</h5></div>
                <div class="col-8"><input type="text" name="ringkas" class="form-control" placeholder="Ringkasan Mapel"></div>
            </div>
            <div class="row mt-2">
                <div class="col-4 d-flex"><h5 class="d-flex my-auto">Kurikulum</h5></div>
                <div class="col-8">
                    <select name="m_kurikulum" class="custom-select">
                        <option value=""></option>
                      </select>
                </div>
            </div>
            @endforeach
            @endif
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


{{-- KURIKULUM --}}
<div class="modal fade" id="modal-kurikulum">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addMapel" method="POST">
            @csrf
        <div class="modal-header main-color">
          <div class="d-flex justify-content-between">
            <h4 class="modal-title">Kurikulum</h4>
            <button type="button" class="btn btn-default text-white" data-toggle="modal" data-target="#modal-add-kurikulum">+</button>
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
              <th>Mata Kurikulum</th>
              <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
              @foreach($kurikulum as $index => $k)
            <tr>
              <td class="text-center">{{ $index+1 }}</td>
              <td>{{ Str::title($k->nama_kurikulum) }}</td>
              <td class="text-center d-flex justify-content-center"><div class="row">
                
            <div class="col-6 px-0 d-flex justify-content-center">
            <button type="submit" data-toggle="modal" data-target="#modal-edit-mapel " style="width: 30px;" class="btn btn-warning d-flex justify-content-center">
            <span class="fa fa-edit text-white ml-1"></span></button></div>

          <div class="col-6 pl-0">
          <a onclick="return confirm('Ingin menghapus data kurikulum {{ Str::title($k->nama_kurikulum) }} ?')" href="/deleteKurikulum/{{ $k->id }}" style="text-decoration: none">
          <button type="button" style="width: 30px;" class="btn btn-danger d-flex justify-content-center">
          <span class="fa fa-trash text-white"></span></button></a></div>

          </div>
            </td>
            </tr>
            @endforeach
          </table>
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

{{-- ADD KURIKULUM --}}
<div class="modal fade" id="modal-add-kurikulum">
    <div class="modal-dialog">
      <div class="modal-content">
        <form class="m-0" action="addKurikulum" method="POST">
            @csrf
        <div class="modal-header main-color">
            <h4 class="modal-title">Tambah Kurikulum</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-4 d-flex"><h5 class="d-flex my-auto">Nama Kurikulum</h5></div>
            <div class="col-8"><input type="text" name="nama_kurikulum" class="form-control" placeholder="Nama Kurikulum"></div>
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

