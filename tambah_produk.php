<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Produk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #d68c6c;
        }

        .sidebar .nav-item .nav-link {
            color: #fff;
        }

        .card-header,
        .card-footer {
            background-color: #f5f5f5;
            border: none;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: #c2775b;
            color: #fff;
        }

        .btn {
            background-color: #d68c6c;
            border: none;
            color: #fff;
        }

        .btn:hover {
            background-color: #c2775b;
        }

        .topbar {
            background-color: #f5f5f5;
        }

        .navbar-nav .nav-item .nav-link,
        .navbar-nav .nav-item .dropdown-menu {
            color: #333;
        }

        .navbar-nav .nav-item .dropdown-menu a {
            color: #333;
        }

        .credentials,
        .footer {
            position: absolute;
            padding: 10px 20px;
            background-color: #d68c6c;
            color: #fff;
            border-radius: 10px;
        }

        .credentials {
            top: 20px;
            right: 20px;
        }

        .footer {
            bottom: 20px;
            left: 20px;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-light text-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="img/logo.png" alt="Sign Up" style="width: 110px">
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-dark">Dashboard</span></a>
                <a class="nav-link" href="produk.php">
                    <i class="fas fa-fw fa-box"></i>
                    <span class="text-dark">Produk</span></a>
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span class="text-dark">User</span></a>
                <a class="nav-link" href="penjualan.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span class="text-dark">Penjualan</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Produk</h6>
                </div>
                <div class="card-body">
                    <form id="produkForm">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="gambar_produk">Gambar Produk</label>
                            <input type="file" class="form-control" id="gambar_produk" name="gambar_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="merk_produk">Merk Produk</label>
                            <input type="text" class="form-control" id="merk_produk" name="merk_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="harga_produk">Harga Produk</label>
                            <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_produk">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3" required></textarea>
                        </div>
                       
                        <div class="form-group">
                            <label for="id_kategori">Kategori Produk</label>
                            <select class="form-control" id="id_kategori" name="id_kategori" required>
                                <!-- Kategori akan dimuat dari database -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('http://localhost/backend-penjualan/KategoriAPI.php')
            .then(response => response.json())
            .then(data => {
                let kategoriSelect = document.getElementById('id_kategori');
                data.forEach(kategori => {
                    let option = document.createElement('option');
                    option.value = kategori.id_kategori;
                    option.textContent = kategori.nama_kategori;
                    kategoriSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching categories:', error));

        document.getElementById('produkForm').addEventListener('submit', function (event) {
            event.preventDefault();

            var formData = new FormData();
            formData.append('nama_produk', document.getElementById('nama_produk').value);
            formData.append('gambar_produk', document.getElementById('gambar_produk').files[0]);
            formData.append('merk_produk', document.getElementById('merk_produk').value);
            formData.append('harga_produk', document.getElementById('harga_produk').value);
            formData.append('deskripsi_produk', document.getElementById('deskripsi_produk').value);
            formData.append('id_kategori', document.getElementById('id_kategori').value);

            fetch('http://localhost/backend-penjualan/ProdukAPI.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data); // Tambahkan ini untuk melihat response dari API
                    if (data.status === 'success') {
                        alert('Produk berhasil ditambahkan');
                        window.location.href = 'produk.php';
                    } else {
                        alert('Gagal menambahkan produk: ' + data.message); // Tampilkan pesan kesalahan spesifik
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menambahkan produk. Error: ' + error.message); // Tampilkan pesan kesalahan di console dan alert
                });
        });
    });
</script>


</body>

</html>