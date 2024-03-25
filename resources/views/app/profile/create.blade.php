<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<form action="/store/profile" method="post">
  @csrf
<label for="nama">Nama</label><br>
<input type="text" name="nama"><br>

@error('nama')
    {{ $message }}
@enderror

<label for="umur">Umur</label><br>
<input type="number" name="umur"><br>

@error('umur')
    {{ $message }}
@enderror

<label for="kota">kota</label><br>
<input type="text" name="kota"><br>

<label for="negara">negara</label><br>
<input type="text" name="negara"><br>

<label for="email">email</label><br>
<input type="text" name="email"><br>

<label for="deskripsi">deskripsi</label><br>
<textarea name="deskripsi" cols="50" rows="20"></textarea><br>

<label for="gambar">Gambar Profile</label><br>
<input type="file" name="gambar">

<button type="submit">Submit</button>

</form>

</body>
</html>