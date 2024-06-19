<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Produk</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="img/logo.png" alt="Sign Up" style="width: 60px">
            </a>

            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                <a class="nav-link" href="produk.php">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Produk</span></a>
                <a class="nav-link" href="user.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
                <a class="nav-link" href="penjualan.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Penjualan</span></a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Edit Data Produk</h6>
                                </div>
                                <div class="card-body">
                                    <form id="produkForm">
                                        <input type="hidden" id="id_produk" name="id_produk">
                                        <div class="form-group">
                                            <label for="nama_produk">Nama Produk</label>
                                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                                        </div>
                                        <div class="form-group">
                                          
                                            <input type="file" class="form-control d-none" id="gambar_produk" name="gambar_produk" readonly>
                                            <img id="gambar_produk_preview" src="" alt="Gambar Produk" style="max-width: 100px; margin-top: 10px;">
                                          
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
                                            <label for="stok_produk">Stok Produk</label>
                                            <input type="number" class="form-control" id="stok_produk" name="stok_produk" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_kategori">Kategori Produk</label>
                                            <select class="form-control" id="id_kategori" name="id_kategori" required>
                                                <!-- Kategori akan dimuat dari database -->
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Produk</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('produkForm');

            // Memuat kategori dari API
            fetch('http://localhost/backend-penjualan/KategoriAPI.php')
                .then(response => response.json())
                .then(categories => {
                    const select = document.getElementById('id_kategori');
                    categories.forEach(category => {
                        const option = document.createElement('option');
                        option.value = category.id_kategori;
                        option.textContent = category.nama_kategori;
                        select.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching categories:', error));

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const formData = new FormData(form);
                const data = {};

                formData.forEach((value, key) => {
                    data[key] = value;
                });

                data.id_produk = document.getElementById('id_produk').value;

                fetch('http://localhost/backend-penjualan/ProdukAPI.php', {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(data),
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            alert('Produk berhasil diupdate');
                            window.location.href = 'produk.php';
                        } else {
                            alert('Gagal mengupdate produk: ' + data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengupdate produk');
                    });
            });

            const urlParams = new URLSearchParams(window.location.search);
            const id_produk = urlParams.get('id');

            if (id_produk) {
                fetch(`http://localhost/backend-penjualan/ProdukAPI.php?id=${id_produk}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('id_produk').value = data.id_produk;
                        document.getElementById('nama_produk').value = data.nama_produk;
                        document.getElementById('merk_produk').value = data.merk_produk;
                        document.getElementById('harga_produk').value = data.harga_produk;
                        document.getElementById('deskripsi_produk').value = data.deskripsi_produk;
                        document.getElementById('stok_produk').value = data.stok_produk;
                        document.getElementById('gambar_produk_preview').src = `http://localhost/backend-penjualan/${data.gambar_produk}`;
                        document.getElementById('id_kategori').value = data.id_kategori;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengambil data produk');
                    });
            }
        });
    </script>