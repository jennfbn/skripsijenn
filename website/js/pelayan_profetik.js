// Fungsi untuk memverifikasi jemaat
function verifyJemaat(id) {
    if (confirm("Apakah Anda yakin ingin memverifikasi pelayan ini?")) {
      fetch('verifikasi.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert("Pelayan berhasil diverifikasi!");
          document.querySelector(`tr[data-id="${id}"]`).remove();
        } else {
          alert("Gagal memverifikasi pelayan.");
        }
      })
      .catch(error => console.error('Error:', error));
    }
  }
  
  // Fungsi untuk menghapus jemaat dari permintaan verifikasi
  function removeJemaat(id) {
    if (confirm("Apakah Anda yakin ingin menghapus permintaan verifikasi pelayan ini?")) {
      fetch('hapus.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({ id: id })
      })
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          alert("Permintaan verifikasi pelayan berhasil dihapus!");
          document.querySelector(`tr[data-id="${id}"]`).remove();
        } else {
          alert("Gagal menghapus permintaan verifikasi.");
        }
      })
      .catch(error => console.error('Error:', error));
    }
  }
  