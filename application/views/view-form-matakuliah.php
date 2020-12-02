<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <form action="<?= base_url() ?>matakuliah/cetak" method='post'>
        <label for="kode">Kode MTK : </label>
        <input type="text" id='kode' name='kode'><br>
        <label for="nama">Nama MTK : </label>
        <input type="text" id='nama' name='nama'><br>

        <select name="sks" id="sks">
            <option value=" ">Pilih SKS</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="2">4</option>
        </select><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>