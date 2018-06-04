<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div style="margin-top: 50px" class="container body">
      <div class="main_container">
         <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h3 style="text-align: center" class="brief"><i>Rincian Data Karyawan</i></h3>
                            <div style="margin-top: 30px" class="left col-md-8 col-xs-8">
                              <h1>{{ $karyawan->nama_karyawan }}</h1>
                              <p style="margin-top: 15px"><i class="fa fa-suitcase"></i> Jabatan: {{ $karyawan->jabatan['nama_jabatan'] }}</p>
                              <ul class="list-unstyled">
                                <li style="margin-top: 10px"><i class="fa fa-map-marker"></i> Tempat Lahir : </li>
                                <li style="margin-top: 10px"><i class="fa fa-calendar"></i> Tanggal Lahir : {{ $karyawan->tgl_lahir }}</li>
                                <li style="margin-top: 10px"><i class="fa fa-building"></i> Alamat: {{ $karyawan->alamat }}</li>
                                <li style="margin-top: 10px; margin-bottom: 20px;"><i class="fa fa-phone"></i> Phone : {{ $karyawan->no_hp }}</li>
                              </ul>
                            </div>
                            <div style="margin-top: 30px" class="right col-xs-4 col-md-4 text-center">
                              <img src="/images/default.png" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                        
                          </div>
                        </div>
                      </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js') }}../"></script>
  </body>
</html>

