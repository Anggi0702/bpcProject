@extends('layouts.master')

@section('link')
  <!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('title')
  Program kursus
@endsection

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Master</h3>
              </div>

             @if(session('info'))
             <div class="row">
               <div class="alert alert-success col-md-4">
                <button class="close" type="button" data-dismiss="alert" aria-hiden="true">&times;</button>
                  {{ session('info') }}
                </div>
             </div>
                
              @endif

	<div class="clearfix"></div>
	
  <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Program Kursus <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <a href="{{ route('jabatan.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</a>
                      
                     
                  
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 500px">Nama Jabatan</th>
                          <th style="width: 200px">Aksi</th>
                        </tr>
                      </thead>

                    
                      <tbody>
                    @foreach($jabatans as $jabatan)  	
                        <tr>
                          <td>{{ $jabatan->nama_jabatan }}</td>
                          
                          <td>
                          	<form action="{{ route('jabatan.destroy', $jabatan->jabatan_id) }}" method="POST">
                          	{{ csrf_field() }}
                          	{{ method_field('DELETE') }}
                          	<a href="{{ route('jabatan.edit', $jabatan->jabatan_id) }}" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Ubah</a>
                          	<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</button>
                          	</form>
                          </td>

                        </tr>
                    @endforeach    
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

</div>
              </div>

</div>

@endsection

@section('script')
<!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endsection