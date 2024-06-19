<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
                                    <h6 class="m-0 font-weight-bold text-black">Data Produk</h6>
                                    <br>
                                    <a class="font-weight-bold text-black" href="tambah_produk.php"><i class="fas fa-plus"></i> Tambah Produk</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Produk</th>
                                                    <th>Merk</th>
                                                    <th>Gambar</th>
                                                    <th>Kategori</th>
                                                    <th>Harga</th>
                                                    <th>Deskripsi</th>
                                                    <th>Stok</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Data akan dimuat di sini melalui JavaScript -->
                                            </tbody>
                                        </table>
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
                                fetch('http://localhost/backend-penjualan/ProdukAPI.php')
                                    .then(response => response.json())
                                    .then(data => {
                                        console.log('Data produk yang diterima dari API:', data); // Tampilkan data di konsol
                                        let tbody = document.querySelector('tbody');
                                        tbody.innerHTML = ''; // Clear existing rows
                                        data.forEach((produk, index) => {
                                            let row = document.createElement('tr');

                                            let cellNo = document.createElement('td');
                                            cellNo.textContent = index + 1;
                                            row.appendChild(cellNo);

                                            let cellNama = document.createElement('td');
                                            cellNama.textContent = produk.nama_produk;
                                            row.appendChild(cellNama);

                                            let cellMerk = document.createElement('td');
                                            cellMerk.textContent = produk.merk_produk;
                                            row.appendChild(cellMerk);

                                            let cellGambar = document.createElement('td');
                                            let img = document.createElement('img');
                                            img.src = `http://localhost/backend-penjualan/${produk.gambar_produk}`;
                                            img.style.width = '100px';
                                            cellGambar.appendChild(img);
                                            row.appendChild(cellGambar);

                                            let cellKategori = document.createElement('td');
                                            cellKategori.textContent = produk.nama_kategori;
                                            row.appendChild(cellKategori);

                                            let cellHarga = document.createElement('td');
                                            cellHarga.textContent = produk.harga_produk;
                                            row.appendChild(cellHarga);

                                            let cellDeskripsi = document.createElement('td');
                                            cellDeskripsi.textContent = produk.deskripsi_produk;
                                            row.appendChild(cellDeskripsi);

                                            let cellStok = document.createElement('td');
                                            cellStok.textContent = produk.stok_produk;
                                            row.appendChild(cellStok);

                                            let cellAksi = document.createElement('td');

                                            let editButton = document.createElement('button');
                                            editButton.classList.add('btn', 'btn-warning', 'btn-sm', 'mr-2');
                                            editButton.innerHTML = '<i class="fas fa-edit"></i> Edit';
                                            editButton.onclick = function() {
                                                window.location.href = `edit_produk.php?id=${produk.id_produk}`;
                                            };
                                            cellAksi.appendChild(editButton);

                                            let deleteButton = document.createElement('button');
                                            deleteButton.classList.add('btn', 'btn-danger', 'btn-sm');
                                            deleteButton.innerHTML = '<i class="fas fa-trash"></i> Hapus';
                                            deleteButton.onclick = function() {
                                                if (confirm('Anda yakin ingin menghapus produk ini?')) {
                                                    fetch(`http://localhost/backend-penjualan/ProdukAPI.php?id=${produk.id_produk}`, {
                                                            method: 'DELETE'
                                                        })
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            if (data.status === 'success') {
                                                                alert('Produk berhasil dihapus');
                                                                window.location.reload();
                                                            } else {
                                                                alert('Gagal menghapus produk');
                                                            }
                                                        })
                                                        .catch(error => console.error('Error:', error));
                                                }
                                            };
                                            cellAksi.appendChild(deleteButton);
                                            row.appendChild(cellAksi);

                                            tbody.appendChild(row);
                                        });
                                    })
                                    .catch(error => console.error('Error:', error));
                            });
                        </script>
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
                        <script src="js/sb-admin-2.min.js"></script>
                        <script src="vendor/chart.js/Chart.min.js"></script>
                        <script src="js/demo/chart-area-demo.js"></script>
                        <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>