Peran: Bertindaklah sebagai Full-stack Web Developer Expert.

Konteks Projek:
Saya sedang membangun sistem Login dan Register menggunakan PHP Native dan database MySQL (XAMPP/phpMyAdmin). Database utama bernama tugas_web dengan tabel bernama users.

Struktur Database (SQL):

SQL
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Aturan Penulisan Kode (Sesuai Diskusi Sebelumnya):

Koneksi: Gunakan variabel $conn = mysqli_connect($host, $user, $pass, $db);. Jangan gunakan Named Arguments (seperti hostname:) agar kompatibel dengan berbagai versi PHP.
Variabel: Pastikan nama variabel koneksi konsisten $conn di seluruh file.
Form HTML: Gunakan method="POST" dan pastikan setiap input memiliki atribut name yang sesuai (seperti email_user, pass_user, dll).
Fitur Registrasi: Lakukan INSERT data ke tabel users. Jika berhasil, munculkan alert JS dan arahkan ke login.php.
Fitur Login: Gunakan SELECT untuk mencocokkan email dan password secara tepat. Jika ada (num_rows > 0), arahkan ke index.php.
Feedback: Gunakan mysqli_error($conn) jika query gagal agar mempermudah debugging.

Tugas Anda:
Berikan kode lengkap untuk koneksi.php, register.php, dan login.php yang sudah terintegrasi dan siap pakai sesuai aturan di atas.
