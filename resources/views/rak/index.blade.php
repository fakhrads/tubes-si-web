@extends('layouts.base')

@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('customscripts')
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/datatables/datatable.js') }}"></script>
@endsection

@section('content')
<!-- Tambah Data -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default">Tambah Data</button>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Rak Buku</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <p class="card-text">Pada tampilan untuk memuat seluruh data rak buku.</p>
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nomor Rak</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>R-001</td>
                                        <td>System Architect</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1" data-toggle="modal" data-target="#default2"><i class="feather icon-edit-1"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1" data-toggle="modal" data-target="#default1"><i class="feather icon-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nomor Rak</th>
                                        <th>Kategori</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Tambah Data -->

 <!-- Modal content-->
 <!-- Tambah Rak Buku -->
 <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Tambah Rak Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Nomor Rak Buku">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Kategori">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="col-12">
                        <div class="text-right">
                            <button type="button" class="btn bg-gradient-danger mr-1 mb-1" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn bg-gradient-primary mr-1 mb-1">Tambah Data</button>
                        </div>
                    </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- END Tambah Rak Buku -->

    <!-- Edit Rak Buku -->
    <div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Edit Rak Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Nomor Rak Buku">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Kategori">
                                    </div>
                                </div>                                
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="col-12">
                        <div class="text-right">
                            <button type="button" class="btn bg-gradient-danger mr-1 mb-1" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn bg-gradient-primary mr-1 mb-1">Edit Data</button>
                        </div>
                    </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- END Edit Rak Buku -->

     <!-- Hapus Rak Buku -->
     <div class="modal fade text-left" id="default1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Hapus Buku</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical">
                        <div class="form-body">
                            <div class="row">
                            <p class="card-text" style="margin: 30px 30px 30px 30px">Apakah anda yakin ingin menghapus buku (Nama Buku)?</p>                           
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="col-12">
                        <div class="text-right">
                            <button type="button" class="btn bg-gradient-danger mr-1 mb-1" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn bg-gradient-primary mr-1 mb-1">Hapus Data</button>
                        </div>
                    </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- END Edit Rak Buku -->
@endsection