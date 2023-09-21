<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Saya</title>
</head>
<body>
  <h1>Nama : Zahrotun Niswah</h1>
   <h1>No : 34, {{$nama}}, {{$kelas}} </h1>

   @if($nama=='admin')
   <a href =""> ke Halaman Admin</a>
   @elseif($nama=='user')
   <a href =""> ke Halaman USER</a>
   @else
  <h2> Anda bukan ADMIN dan USER</h2>
  @endif


  @switch($buah)
  @case(1)
  First case... 
  @break 

  @case(2)
  Second case... 
  @break

  @default
  
  @endswitch
<br>



   @foreach ($buah as $nama)
   {{ $nama }}</br>

   @endforeach

</body>
</html>