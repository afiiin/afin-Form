
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
    <body>
    <div class="box">
        <div class="top">
            <div class="title">Daftar</div>
        </div>
        <div class="bottom">
            <form action="kirim.php" method="POST">
            <label for="Name" class="bold">Nama</label>
            <input type="textbox" name="Name" class="name" required><br>
            <label for="Email" class="bold">Email</label>
            <input type="email" name="Email" class="email" required><br>
            <div class="Gender">
                <h4>Gender</h4>
                <input type="radio" name="Gender" class="radio" value="Male">
                <label>Male</label>
                <input type="radio" name="Gender" class="radio" value="Female">
                <label>Female<label>
            </div>
            <div class="kota">
                <h4>Kota</h4>
                <select name="Kota" class="combo">
                    <option value="Solo">Solo</option>
                    <option value="Karanganyar">Karanganyar</option>
                    <option value="Sukoharjo">Sukoharjo</option>
                    <option value="Sragen">Sragen</option>
                    <option value="Wonogiri">Wonogiri</option>
                </select>
            </div>
            <div class="status">
            <h4>Status</h4>
                <input type="checkbox" name="Status" value="Pelajar">
                <label>Pelajar</label>
                <input type="checkbox" name="Status" value="Kerja">
                <label>Kerja</label>
                <input type="checkbox" name="Status" value="Menikah">
                <label>Menikah</label>
            </div>
                <div class="kirim">
                    <button type="submit" value="Register" class="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </body>
    <html>