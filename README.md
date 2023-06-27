- Link Deploy : http://54.164.139.244/
    - email admin = adminappointme@health.co.id
    - password    = 123

<h1>CariEO</h1>

## Anggota Kelompok

**Pemrograman Website - C**
1. Wahyu Valentino Marasitua     -   [215150207111071]
2. Yosia Pangondian              -   [215150201111057]
3. Stanislaus Frans Bernado      -   [215150200111009]
4. Syarif Hidayatulloh           -   [215150207111084]

## Tugas Akhir Pemrograman Website
Nama Website : CariEO

CariEO adalah sebuah website yang dirancang untuk memudahkan pengguna dalam mencari event organizer (EO) dan penyedia event organizer (EO) yang sesuai dengan kebutuhan mereka. Website ini menyediakan berbagai macam EO yang terdaftar di dalamnya, sehingga pengguna dapat memilih EO yang sesuai dengan kebutuhan mereka. Selain itu, website ini juga menyediakan fitur untuk membuat event baru, sehingga pengguna dapat membuat event sesuai dengan kebutuhan mereka. event organizer (EO) yang terdaftar di dalam website ini juga dapat membuat event baru, sehingga pengguna dapat melihat event yang tersedia di dalam EO tersebut.

### 1. Role User:
![ss beranda](https://github.com/tsabitamuthia/appointme/assets/97678433/13c3e94b-ec3d-45dd-99c5-ac86a1b406eb)

Sebagai User di CariEO, Anda memiliki akses untuk melihat daftar produk EO yang terdaftar di dalam website. Berikut adalah fitur-fitur yang tersedia untuk Anda:

- Login: Fitur Login pada User memungkinkan User untuk langsung tertuju ke halaman dashboard dengan menu jumlah EO, jumlah event, dan jumlah kategori.
- Daftar Produk : Anda dapat melihat daftar produk EO yang terdaftar di dalam website. Fitur ini memungkinkan Anda untuk melihat daftar EO, melihat detail EO, dan melihat daftar event yang tersedia di dalam EO tersebut.
- Daftar Kategori : Anda dapat melihat daftar kategori yang tersedia di dalam website. Fitur ini memungkinkan Anda untuk melihat daftar kategori, dan melihat daftar EO yang tersedia di dalam kategori tersebut.
- Membuat Pesanan : Anda dapat membuat pesanan untuk event yang tersedia di dalam EO. Fitur ini memungkinkan Anda untuk membuat pesanan, melihat daftar pesanan, melihat detail pesanan, mengubah detail pesanan, dan menghapus pesanan jika diperlukan.
- Edit Profile : Anda dapat mengubah informasi profil Anda. Fitur ini memungkinkan Anda untuk mengubah informasi profil, mengubah password, dan menghapus akun jika diperlukan.

### 2. Role Seller:
![dashboard](https://github.com/tsabitamuthia/appointme/assets/97678433/88c3bc10-1d33-4fc4-872e-55c41eda8a1b)


Sebagai seller di CariEO, Anda memiliki akses untuk melihat daftar produk EO yang terdaftar di dalam website. Berikut adalah fitur-fitur yang tersedia untuk Anda:
- Login : Fitur Login pada Seller memungkinkan Seller untuk langsung tertuju ke halaman dashboard dengan melihat produk, dan jumlah event
- Menambah Produk : Anda dapat menambahkan produk EO baru. Fitur ini memungkinkan Anda untuk menambahkan produk EO baru, melihat daftar produk EO, melihat detail produk EO, mengubah detail produk EO, dan menghapus produk EO jika diperlukan.
- Melihat Pesanan : Anda dapat melihat daftar pesanan yang masuk. Fitur ini memungkinkan Anda untuk melihat daftar pesanan.
- Edit Profile : Anda dapat mengubah informasi profil Anda. Fitur ini memungkinkan Anda untuk mengubah informasi profil, mengubah password, dan menghapus akun jika diperlukan.


## Lampiran Beberapa *Screenshot*
### Pasien
**1. Login**
![login](https://github.com/tsabitamuthia/appointme/assets/97678433/018d0d9c-7ec0-4c20-a554-496d9d2af1e7)


**3. Daftar Dokter**
![dokters](https://github.com/tsabitamuthia/appointme/assets/97678433/5e1c70dd-f449-411b-9107-13834cefe042)


**4. Buat Janji**
![janji](https://github.com/tsabitamuthia/appointme/assets/97678433/941ece16-222d-441e-aa1e-3c1444bb0db2)


### Admin
**1. Data Pasien**
![pasien](https://github.com/tsabitamuthia/appointme/assets/97678433/11e82124-01e2-4f02-9d99-84c676b0682f)


**2. Detail Pasien**
![detail](https://github.com/tsabitamuthia/appointme/assets/97678433/fc386930-dddb-4be9-b2ce-7070d9606d30)

  
## Installation
- `git clone <URL HTTPS Github>`
- `cd .../appointme`
- `composer install`
- `cp .env.example .env`
- Ubah ke `.env`
- `php artisan key:generate`
- Buat database `appointme` di PHP MyAdmin
- `php artisan migrate`