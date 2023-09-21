@extends('template.default')

@section('body')
<h2>Tambah Data</h2>

<div class="card">
  <div class="card-body">
    <form action="/sekolahs" class="" method="post">
      @csrf
        <div class="mb-3">
               <label class="form-label">Nama</label>
               <input type="text" class="form-control" name="nama" placeholder="Tulis Nama ">
          </div>
          <div class="mb-3">
               <label class="form-label">Alamat</label>
               <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat">
          </div>
          <div class="mb-3">
               <label class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan">
          </div>
          <div class="mb-3">
                 <label class="form-label">JumlahGuru</label>
                <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis JumlahGuru">
          </div>
          

          <div clas="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
</div>
</div>
@endsection