<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container mt-3">
        <header>
            <h2>Data Siswa</h2>
        </header>
    </div>

    <!-- FORM INPUT -->
    <div class="container mt-5 mb-5">
        <div class="form-card mx-auto" style="max-width: 500px;">
            <h3 class="text-center mb-4">Input Data</h3>
            <form id="dataForm" action="proses.php" method="POST">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputName" placeholder="Masukkan nama"
                        required>
                </div>
                <div class="mb-3">
                    <label for="inputClass" class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="inputClass" placeholder="Masukkan kelas"
                        required>
                </div>
                <div class="mb-3">
                    <label for="inputAge" class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control" id="inputAge" placeholder="Masukkan umur"
                        required>
                </div>
                <div class="mb-3">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAddress"
                        placeholder="Masukkan alamat" required>
                </div>
                <div class="mb-4">
                    <label for="inputNIK" class="form-label">NIK</label>
                    <input type="text" name="nik" class="form-control" id="inputNIK" placeholder="Masukkan NIK"
                        required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-neon">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- LOADING -->
    <div id="loading">
        <div class="spinner"></div>
        <p>Memproses...</p>
    </div>

    <!-- POPUP -->
    <div id="popup">
        <div class="popup-box">
            <h3>✅ Data Berhasil Disimpan!</h3>
            <button onclick="closePopup()">OK</button>
        </div>
    </div>

    <div class="container">
        <footer>
            <p>&copy; 2025 Arlynna Studio</p>
        </footer>
    </div>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>