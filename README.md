# PROGAM UKK PAKET 2 RPL 2022
Program ini dibuat berdasarkan soal Uji Kompetensi Keahlian jurusan Rekayasa Perangkat Lunak tahun 2022.

Ini merupakan program untuk reservasi hotel, tamu melakukan reservasi lalu print pdf detail reservasi sebagai bukti reservasi ketika check in di hotel. Terdapat page tamu, data reservasi, kamar, fasilitas kamar, serta fasilitas hotel.  Aplikasi yang saya buat berbasis Web dan menggunakan Native PHP. Saya tidak terlalu mempedulikan tampilan yang ada di website ini, semuanya ala kadarnya karena lebih fokus ke Back-End daripada Front-End.

## Hak Akses atau Priviliges
|X                 |Reservasi         |Home              |Login             |Kamar             |F Kamar           |F Hotel           |
|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|:----------------:|
|Admin             |:x:               |:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|
|Resepsionis       |:heavy_check_mark:|:heavy_check_mark:|:heavy_check_mark:|:x:               |:x:               |:x:               |
|Tamu              |:x:               |:heavy_check_mark:|:x:               |:x:               |:x:               |:x:               |

## Cara Menggunakan
### Via Download

1. Klik tombol Code hijau di repository ini, lalu klik Download ZIP dan simpan di folder yang diinginkan.
2. Buka folder tersebut, lalu extract file .zip tersebut.
3. Copy folder hasil extract file .zip tersebut lalu paste di root folder atau di c:/xampp/htdocs.

### Via CLI
Pertama, Membuat Directory/Folder lalu masuk folder.

    mkdir nama_folder
    cd nama_folder 
    
Kedua, clone repository.

    git clone https://github.com/strbagus/UKK-P2.git

## Catatan
+ Import sql ke phpmyadmin.
+ File database sql berada di folder assets.
+ Ubah file config.php pada baris kedua menjadi '$conn = new mysqli("localhost", "root", "", "db_restoukk");' atau menyesuaikan.
+ Untuk login sebagai staff tambahkan /login.php di url. contoh localhost/UKK-P2/login.php.
+ Login admin. Username = "bagus", Password = "bagus123".
+ Login resepsionis. Username = "adit", Password = "adit123".

## Component
+ Framework CSS menggunakan [Bootstrap5](https://getbootstrap.com/docs/5.0/getting-started/introduction/ "Bootstrap 5").
+ Icon menggunakan [FontawesomeV5](https://fontawesome.com/v5/search "Fontawesome 5").
+ Table menggunakan [Datatables](https://www.datatables.net/ "Datatables").
+ PDF converter menggunakan [Dompdf](https://github.com/dompdf/dompdf).
