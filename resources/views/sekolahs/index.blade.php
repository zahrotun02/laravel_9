@extends('template.default')

@section('body')
<h1>Zahrotun Niswah</h1>

<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Alamat</th>
                          <th>Kelas</th>
                          <th>JumlahGuru</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($sekolahs as $sekolah)
                        <tr>
                            <td>{{ $sekolah -> nama}}</td>
                            <td>{{ $sekolah -> alamat}}</td>
                            <td>{{ $sekolah -> jurusan}}</td>
                            <td>{{ $sekolah -> jumlah_guru}}</td>
                          <td>
                            <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                            <form action="{{ route('sekolahs.destroy', $sekolah->id ) }}" method="post">
                            @csrf 
                            @method('DELETE')
                            <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
</form>
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection