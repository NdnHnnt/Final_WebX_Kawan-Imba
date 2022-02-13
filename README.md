## I. Tentang Swakarya
Swakarya adalah web yang dibuat untuk memperluas kesempatan bisnis mikro, kecil, dan menengah (UMKM) di Indonesia untuk berkolaborasi. Swakarya memberikan pemilik usaha bisnis untuk menjangkau lebih banyak konsumer dan eksposur ke publik dengan mempromosikan bisnis mereka dan acara melalui website. Melalui Swakarya, pemilik UMKM dapat mengetahui UMKM lain yang sedang berkembang dan acara yang beragam untuk membantu mereka mengembangkan bisnis-bisnis mereka.


## II. Nama Kelompok and Anggota
### A. "Kawan Imba"
Swakarya dibuat oleh Kawan Imba, kelompok yang terdiri dari tiga mahasiswa yang ingin membantu UMKM di Indonesia untuk berkembang dan bertumbuh dengan perkembangan teknologi.

### B. Anggota Kami
| Nama                           | Peran                |
| -------------------------------| ---------------------| 
| Nadine Haninta                 | `Full Stack Dev.`    | 
| Awliya Hanun Izdihar           | `Front-end Dev.`     | 
| Muhammad Ilham Fikriansyah     | `Administration `    |

## III. Cara Memasang
### A. Mengatur Environment Lokal
1. Memasang alat pengembang website lokal seperti [Laragon](https://laragon.org/)/[WAMPServer](https://www.wampserver.com/en/)/[XAMPP](https://www.apachefriends.org/download.html), jika sebelumnya belum terpasang alat pengembang website.
2. Melakukan git clone menggunakan git bash pada repository ini dalam folder `www` di WAMPServer/laragon atau `htdocs` di XAMPP. <br>
```
git clone https://github.com/NdnHnnt/swakarya.git
```
3. Memulai layanan akses server lokal pada alat pengembang website.
4. Jika layanan sudah dimulai, website sudah bisa diakses melalui tautan sebagai berikut, <br>
```
http://localhost/swakarya/
```
### B. Mengelola Data dan Fitur Website
1. Membuka layanan *database management system*/DBMS (phpMyAdmin) melalui tautan sebagai berikut,
```
http://localhost/phpmyadmin/
```
2. Jika belum masuk pada sistem DBMS, silahkan memasukkan data pengguna untuk masuk atau menggunakan username `root` dan mengosongkan bagian password secara default.
3. Membuat set database baru bernama `swakarya` melalui GUI (Langsung melalui tombol) atau SQL Console dengan mengetik
```
CREATE DATABASE `swakarya`
```
4. Mengimpor file SQL ke dalam set database baru, yang bernama `swakarya.sql` di dalam repository ini.
5. Website sudah bisa digunakan dengan fitur seperti mendaftar, menambah acara, mengedit acara, serta melihat pengguna lain yang terdaftar dalam sistem ini.<br>
*Mohon untuk tidak membuat perubahan pada repository ini atau file-file yang ada tidak akan berjalan dengan benar.<br>
**Jika data masuk ke phpMyAdmin berbeda dari default, bisa dilakukan perubahan pada file `database.php` di folder `swakarya/application/config/database.php` dalam baris 78-80 untuk menyamakan data login. 

## IV. Teknologi yang Digunakan
**Back-end**: CodeIgniter3(Framework), phpMyAdmin(Database Management), PHP, SQL <br>
**Front-end**: HTML, CSS<br>
**Local Development Tools**: Laragon(used by Nadine)/XAMPP(used by Awliya)<br>
**Other**: Git Bash, Github Desktop

--- 

## I. About Swakarya
Swakarya is a web created to expand the opportunities of Micro, Small, and Medium Enterprises (MSMEs) in Indonesia to collaborate. Swakarya allows business owners to reach more audiences and exposure by promoting their businesses and events on the website. Through Swakarya, business owners can easily discover other growing businesses and insightful events to help them further develop their businesses.

## II. Team Name and Member
### A. "Kawan Imba"
Swakarya is created by Kawan Imba, a squad consisting of three college students who want to help Indonesia's MSMEs keep up and grow with technological developments.

### B. Our Members
| Name                           | Role                 |
| -------------------------------| ---------------------| 
| Nadine Haninta                 | `Full Stack Dev.`    | 
| Awliya Hanun Izdihar           | `Front-end Dev.`     | 
| Muhammad Ilham Fikriansyah     | `Administration `    |

## III. How to Install
### A. Set Up Local Environment
1. Install local development tool such as [Laragon](https://laragon.org/)/[WAMPServer](https://www.wampserver.com/en/)/[XAMPP](https://www.apachefriends.org/download.html), if there's no local development tool installed before.
2. git clone this repository using git bash on `www` folder in local WAMPServer/laragon or `htdocs` in XAMPP. <br>
```
git clone https://github.com/NdnHnnt/swakarya.git
```
3. Start localhost server access through local development tools.
4. If the website local development tool is already installed, it can be accessed by the following link <br>
```
http://localhost/swakarya/
```
### B. Managing Data and Website Features
1. Open database management system (phpMyAdmin) by the following link,
```
http://localhost/phpmyadmin/
```
2. If you haven't logged in to the DBMS yet, input your current user data to log in OR using `root` on username section and leave the password blank by default.
3. Make a new database set named `swakarya` 
4. Import the SQL file to the database set, named `swakarya.sql` in this repository.
5. TThe website is ready to be used with its features such as adding user, adding event, editing event, and showing other users registered in this system. <br>
*Please make sure to not make a change on this repository, or else the files won't load correctly.<br>
**If the phpMyAdmin login data is different by default, this change can be made on `database.php` file in folder `swakarya/application/config/database.php` within line 78-80 to synchronize with current login data. 

## IV. Technology Used
**Back-end**: CodeIgniter3(Framework), phpMyAdmin(Database Management), PHP, SQL <br>
**Front-end**: HTML, CSS<br>
**Local Development Tools**: Laragon(used by Nadine)/XAMPP(used by Awliya)<br>
**Other**: Git Bash, Github Desktop
 
