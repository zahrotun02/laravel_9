@extends('template.default')

@section('body')
<h2>EDIT DATA</h2>

<div class="card">
  <div class="card-body">
    <form action="{{ route('sekolahs.update', $sekolah->id) }}" class="" method="post">
      @csrf
      @method('PUT')
        <div class="mb-3">
               <label class="form-label">Nama</label>
               <input type="text" class="form-control" name="nama" placeholder="Tulis Nama" value="{{$sekolah -> nama}}">
          </div>
          <div class="mb-3">
               <label class="form-label">Alamat</label>
               <input type="text" class="form-control" name="alamat" placeholder="Tulis Nama Alamat" value="{{$sekolah -> alamat}}">
          </div>
          <div class="mb-3">
               <label class="form-label">Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Tulis Nama Jurusan" value="{{$sekolah -> jurusan}}">
          </div>
          <div class="mb-3">
                 <label class="form-label">JumlahGuru</label>
                <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Nama JumlahGuru" value="{{$sekolah -> jumlah_guru}}">
          </div>
          

          <div clas="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
</div>
</div>
@endsection