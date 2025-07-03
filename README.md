
# ApliCalvin Store 

Sebuah platform jual beli sederhana sederhana yang dibangun menggunakan framework CodeIgniter 4. Proyek ini memungkinkan untuk user melakukan pembelian laptop beserta mengecek harga ongkir yang diambil dari RajaOngkir API

## Fitur ✨

Proyek ini dilengkapi dengan berbagai fitur untuk manajemen konten yang efisien. Berdasarkan analisis awal, berikut adalah beberapa fitur yang kemungkinan besar ada:

  * **Autentikasi Pengguna**: Sistem login untuk mengakses dashboard.
  * **Dashboard Manajemen Post**:
      * **Create**: Membuat produk baru melalui form.
      * **Read**: Menampilkan semua produk dalam bentuk tabel atau daftar di dashboard.
      * **Update**: Mengedit produk yang sudah ada.
      * **Delete**: Menghapus produk.
      * **Show**: Melihat detail satu produk.
  * **Tampilan Responsif**: Antarmuka yang dioptimalkan untuk berbagai ukuran layar menggunakan Bootstrap.

*(Silakan tambahkan atau sesuaikan daftar fitur ini sesuai dengan fungsionalitas yang sebenarnya telah Anda implementasikan).*

## Instalasi 💻

Untuk menjalankan proyek ini di lingkungan lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone Repositori**

    ```bash
    git clone https://github.com/aplicalvin/web-lanjut
    cd web-lanjut
    ```

2.  **Install Dependensi**
    Pastikan Anda memiliki Composer.

    ```bash
    composer install
    ```

3.  **Setup Lingkungan**
    Salin file `.env.example` menjadi `.env`.

    ```bash
    cp .env.example .env
    ```

4.  **Konfigurasi Database**
    Kemudian, modifikasilah file .env dan Database.php untuk konfigurasi beberapa hal seperti Database dan local server.  
    Buka file `.env` dan sesuaikan konfigurasi database Anda (DB\_DATABASE, DB\_USERNAME, DB\_PASSWORD).

    ```bash
    database.default.hostname = localhost
    database.default.database = db_ci4      # Pastikan anda sudah punya database dengan nama ini  
    database.default.username = root       
    database.default.password = simbolon    # ubah ini 
    database.default.DBDriver = MySQLi
    database.default.DBPrefix =
    database.default.port = 3306
    ```

5.  **Migrasi Database**
    
    Jalankan migrasi untuk membuat tabel-tabel yang dibutuhkan.

    ```bash
    php spark migrate
    ```

6. **Isi konten dummy dengan seeder**
    
    Isi konten pada tabel - tabel diatas dengan menjalankan seeder

    ```bash
    php spark db:seed UserSeeder
    php spark db:seed ProductSeeder
    php spark db:seed DiskonSeeder
    ```

7.  **Jalankan Server Development**
    Jalankan server PHP.

    ```bash
    php spark serve
    ```

8.  **Akses Aplikasi**
    Buka browser Anda dan akses `http://127.0.0.1:8080`.

## Struktur Proyek 📂

Proyek ini mengikuti struktur direktori standar dari framework CodeIgniter. Berikut adalah beberapa file dan folder kunci yang relevan dengan fungsionalitas yang ada:

```
└── 📁uts_14880
    └── 📁app
        └── 📁Config
            └── 📁Boot
                ├── development.php
                ├── production.php
                ├── testing.php
            ├── App.php
            ├── ...
        └── 📁Controllers                       # semua logic disini
            ├── ApiController.php
            ├── AuthController.php
            ├── BaseController.php
            ├── DiskonController.php
            ├── Home.php
            ├── ProdukController.php
            ├── TransaksiController.php
        └── 📁Database
            └── 📁Migrations
                ├── 2025-06-09-151626_User.php
                ├── 2025-06-09-151628_Product.php
                ├── 2025-06-09-151629_Transaction.php
                ├── 2025-06-09-151635_TransactionDetail.php
                ├── 2025-07-02-064519_Diskon.php
            └── 📁Seeds
                ├── DiskonSeeder.php
                ├── ProductSeeder.php
                ├── UserSeeder.php
        └── 📁Filters
            ├── Auth.php
            ├── Redirect.php
        └── 📁Helpers
        └── 📁Language
            └── 📁en
                ├── Validation.php
        └── 📁Libraries
        └── 📁Models
            ├── DiskonModel.php
            ├── ProductModel.php
            ├── TransactionDetailModel.php
            ├── TransactionModel.php
            ├── UserModel.php
        └── 📁ThirdParty
        └── 📁Views
            └── 📁components
                ├── footer.php
                ├── header.php
                ├── sidebar.php
            └── 📁errors
            ├── layout_clear.php
            ├── layout.php
            ├── v_checkout.php
            ├── v_diskon.php
            ├── v_faq.php
            ├── v_home.php
            ├── v_keranjang.php
            ├── v_login.php
            ├── v_productPDF.php
            ├── v_produk.php
            ├── v_profile.php
            ├── welcome_message.php
        ├── .htaccess
        ├── Common.php
        ├── index.html
    └── 📁public
        └── 📁dashboard-toko
            ├── index.php
        └── 📁img
        └── 📁NiceAdmin
            └── 
    └── 📁tests
        └── 📁_support
            └── 📁Database
                └── 📁Migrations
                    ├── 2020-02-22-222222_example_migration.php
                └── 📁Seeds
                    ├── ExampleSeeder.php
            └── 📁Libraries
                ├── ConfigReader.php
            └── 📁Models
                ├── ExampleModel.php
        └── 📁database
            ├── ExampleDatabaseTest.php
        └── 📁session
            ├── ExampleSessionTest.php
        └── 📁unit
            ├── HealthTest.php
        ├── .htaccess
        ├── index.html
        ├── README.md
    └── 📁vendor
        └── 
    ├── .env
    ├── .gitignore
    ├── builds
    ├── composer.json
    ├── composer.lock
    ├── env
    ├── LICENSE
    ├── phpunit.xml.dist
    ├── preload.php
    ├── README.md
    └── spark
```

