<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/lab.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">

    <title>Wartech - Warga Technology</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>

            <span class="logo_name">Wartech</span>
        </div>

        <div class="menu-items">
            <ul class="nav-link">
                <li><a href="{{ route('dashboard') }}">
                        <i class="uil uil-estate"></i>
                        <span class="link-name active">Dahsboard</span>
                    </a></li>                
                <li><a href="{{ route('form_pelaporan') }}">
                        <i class="uil uil-book"></i>
                        <span class="link-name">Form Pelaporan</span>
                    </a></li>
                <li><a href="{{ route('surat_domisili') }}">
                        <i class="uil uil-clipboard-alt"></i>
                        <span class="link-name">Surat Domisili</span>
                    </a></li>
                <li><a href="">
                        <i class="uil uil-clipboard-alt"></i>
                        <span class="link-name">Surat Pengantar Nikah</span>
                    </a></li>    
                <li><a href="">
                        <i class="uil uil-clipboard-alt"></i>
                        <span class="link-name">Surat Kematian</span>
                    </a></li>    
            </ul>        
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="action">
                <div class="profile" onclick="menuToggle();">
                    <img src="{{ asset('images/undraw_profile.svg') }}" alt="">
                </div>

                <div class="menu">                   
                    <ul>
                        <li>
                            <span class="bi bi-person-circle"></span>
                            <a href="">Profil</a>
                        </li>
                        <li>
                            <span class="bi bi-gear-fill"></span>
                            <a href="#">Ganti Kata Sandi</a>
                        </li>
                        <li>
                            <span class="bi bi-door-closed-fill"></span>
                            <a href="">Keluar</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">                    
                    <h2>Form Pelaporan</h2>
                </div>
            </div>
        </div>
   <!--Main content-->
   <div class="container">
    <br /><br />
    <table class="table table-bordered table-hover">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Country</th>
            <th>Action</th>
        </thead>

        <tbody>
        @if($users !== null)
        @foreach($users as $id => $user)
        
            <tr>
                <td>{{ $user['first_name'] }}</td>
                <td>{{ $user['last_name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>{{ $user['phone'] }}</td>
                <td>{{ $user['country'] }}</td>
                <td><a href="" class="btn btn-success btn-sm btn-rounded">Edit</a>
                {{ Form::open(['url'=> route('users.destroy', ['user' => $id]), 'method' => 'DELETE']) }}
                <button type="submit" class="btn btn-danger btn-sm btn-rounded">Delete</button></td>
                {{ Form::close() }}
            </tr>
            
            @endforeach
            @endif
        </tbody>
    </table>
   </div>
   <script>
        function menuToggle() {
            const toggleMenu = document.querySelector('.menu');
            toggleMenu.classList.toggle('active')
        }
    </script>
    <script src="{{ asset('js/lab.js') }}"></script>
</body>
</html>