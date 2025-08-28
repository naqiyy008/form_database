const form = document.getElementById("dataForm");
const loading = document.getElementById("loading");
const popup = document.getElementById("popup");

// Event kirim form
form.addEventListener("submit", function (e) {
    e.preventDefault(); // mencegah reload halaman

    // Validasi sederhana
    const inputs = form.querySelectorAll("input[required]");
    let valid = true;
    inputs.forEach(input => {
        if (!input.value.trim()) {
            input.style.boxShadow = "0 0 10px red"; 
            valid = false;
        } else {
            input.style.boxShadow = "none";
        }
    });
    if (!valid) {
        alert("Harap isi semua field!");
        return;
    }

    // menampilkan loading dengan animasi
    loading.style.display = "flex";
    loading.style.opacity = "1";

    // mengambil data dari form
    const formData = new FormData(form);

    // mengirim isi form ke proses.php
    fetch("proses.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        // Hilangkan loading pelan-pelan
        loading.style.opacity = "0";
        setTimeout(() => {
            loading.style.display = "none";
        }, 300);

        if (result.trim().toLowerCase() === "success") {
            showPopup(); // pake fungsi
            form.reset(); // reset form
        } else {
            alert("Gagal menyimpan data: " + result);
        }
    })
    .catch(error => {
        loading.style.display = "none";
        alert("Terjadi kesalahan: " + error);
    });
});

// Fungsi untuk menampilkan popup
function showPopup() {
    popup.style.display = "flex";
    popup.style.opacity = "1";
}

// Fungsi tutup popup
function closePopup() {
    popup.style.opacity = "0";
    setTimeout(() => {
        popup.style.display = "none";
    }, 300);
}
