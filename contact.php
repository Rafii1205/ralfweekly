<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <header>
        <h1>WEBTI | RALF</h1>
        <table cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href="index.php">home</a></td>
                <td><a href="contact.php">contact</a></td>
                <td><a href="mahasiswa.php">data</a></td>
            </tr>
        </table>
    </header>

    <div class="contact-form">
        <h2>Form</h2>
        <form action="">
            <table cellspacing="5">
                <tr>
                    <td>
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nim">NIM</label>
                        <input type="number" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="no_hp">No HP</label>
                        <input type="tel" name="no_hp" id="no_hp">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="website">Website</label>
                        <input type="url" name="website" id="website">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="warna">Warna Fav</label>
                        <input type="color" name="warna" id="warna">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="kepuasan">Tingkat Kepuasan</label>
                        <input type="range" name="kepuasan" id="kepuasan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jenis Kelamin</label>
                        <div class="radio-group">
                            <label><input type="radio" name="jk" value="male"> Male</label>
                            <label><input type="radio" name="jk" value="female"> Female</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Hobi</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="hobi[]" value="badminton"> Badminton</label>
                            <label><input type="checkbox" name="hobi[]" value="voli"> Voli</label>
                            <label><input type="checkbox" name="hobi[]" value="futsal"> Futsal</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto" id="foto">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan">
                            <option value="informatika">Informatika</option>
                            <option value="ti">Teknologi Informasi</option>
                            <option value="dkv">Desain Komunikasi Visual</option>
                            <option value="ai">Artificial Intelligence</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
