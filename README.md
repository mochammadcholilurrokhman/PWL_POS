## Laporan JOBSHEET 03 MIGRATION, SEEDER, DB FAÇADE, QUERY BUILDER, dan ELOQUENT ORM

NIM : 2241720033 <br>
Nama : Mochammad Cholilur Rokhman <br>
Kelas : TI-2F

### Praktikum 1 pengaturan database

#### Langkah Langkah Praktikum
   <img src = "public/screenshot/1.png">

### Route Parameters

#### Langkah Langkah Praktikum

b. <img src = "public/screenshot/5.png">

c. <img src = "public/screenshot/6.png">

e. <img src = "public/screenshot/7.png">

f. 

    Route::get('/articles{id}', function ($id) {
    echo "Halaman Artikel dengan ID $id";
    }); <br>
<img src = "public/screenshot/8.png">

### Operational Parameters

#### Langkah Langkah Praktikum

b. <img src = "public/screenshot/9.png"> <br>
c. <img src = "public/screenshot/10.png"> <br>
e. <img src = "public/screenshot/11.png">

### Controller (Membuat Controller)

#### Langkah Langkah Praktikum

e. <img src = "public/screenshot/12.png"> <br>

f. 

    class PageController extends Controller
    {
    public function index ()
    {
    return 'Selamat Datang';
    }

    public function about()
    {
        $nim = '2241720033';
        $nama = 'Moch. Cholilur Rokhman';

        return 'NIM : ' . $nim . '<br>' .
               'Nama : ' . $nama;
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }

    };

    Untuk Routingnya
    
    Route::get('/', [PageController::class, 'index']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/articles{id}', [PageController::class, 'articles']);

g. Routing nya <br>

    Route::get('/', [HomeController::class, "index"]); <br>
    Route::get('/about', [AboutController::class, 'About']); <br>
    Route::get('/articles{id}', [ArticleController::class, 'articles']);

### Resource Controller

#### Langkah Langkah Praktikum

c. <img src = "public/screenshot/13.png">

### View (Membuat View)

#### Langkah Langkah Praktikum

c. <img src = "public/screenshot/14.png">

### View dalam direktori

#### Langkah Langkah Praktikum

c. <img src = "public/screenshot/14.png">

### Menampilkan View dari Controller

#### Langkah Langkah Praktikum

c. <img src = "public/screenshot/14.png">

### Meneruskan data ke View

#### Langkah Langkah Praktikum

c. <img src = "public/screenshot/15.png">


