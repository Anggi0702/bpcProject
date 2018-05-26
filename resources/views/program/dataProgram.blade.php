@extends('layouts.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Master</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
	<div class="clearfix"></div>
	<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Program Kursus <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <a href="{{ route('program.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 500px">Nama Program</th>
                          <th style="width: 150px">Pertemuan</th>
                          <th>Biaya</th>
                          <th style="width: 200px">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                      	@foreach($programs as $program)
                        <tr>
                          <td>{{ $program->name }}</td>
                          <td>{{ $program->pertemuan }}</td>
                          <td>{{ $program->biaya }}</td>
                          <td>
                          	<form action="{{ route('program.destroy', $program) }}" method="POST">
                          	{{ csrf_field() }}
                          	{{ method_field('DELETE') }}
                          	<a href="#" class="btn btn-warning btn-sm">Ubah</a>
                          	<button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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