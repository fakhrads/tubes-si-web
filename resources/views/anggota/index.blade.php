@extends('layouts.base')

@section('customcss')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}">
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
    <script src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
@endsection

@section('content')
<!-- Zero configuration table -->
    <div class="row">
        <div class="col-12">
            <div class="text-right">
                <button type="button" class="btn btn-primary mr-1 mb-1" data-toggle="modal" data-target="#default">Tambah Data</button>
            </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Anggota</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID Anggota</th>
                                        <th>Nama</th>
                                        <th>No Telepon</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>K01</td>
                                        <td>Kedokteran Gigi</td>
                                        <td>Saeful Anwar</td>
                                        <td>Informatika</td>
                                        <td>2001</td>
                                        <td>July-01-2001</td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-outline-primary mr-1 mb-1" data-toggle="modal" data-target="#default2"><i class="feather icon-edit-1"></i></button>
                                            <button type="button" class="btn btn-icon btn-outline-danger mr-1 mb-1"><i class="feather icon-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID Anggota</th>
                                        <th>Nama</th>
                                        <th>No Telepon</th>
                                        <th>TTL</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
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
<!-- Modal content-->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Tambah Anggota</h4>
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
                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="No Telp">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <form>
                                        <input type='text' class="form-control format-picker" placeholder="Tempat Tanggal Lahir">
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="password-vertical" class="form-control" name="fname" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="password-vertical" class="form-control" name="contact" placeholder="Email">
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
<div class="modal fade text-left" id="default2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">Edit Anggota</h4>
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
                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="No Telp">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <form>
                                        <input type='text' class="form-control format-picker" placeholder="Tempat Tanggal Lahir">
                                    </form>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="password-vertical" class="form-control" name="fname" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" id="password-vertical" class="form-control" name="contact" placeholder="Email">
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
@endsection