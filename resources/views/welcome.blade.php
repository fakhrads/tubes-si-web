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
<!-- Data Kunjungan -->
<section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Kunjungan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">Pada tampilan untuk memuat seluruh data kunjungan.</p>
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Jam Masuk</th>
                                                        <th>Jam Keluar</th>                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Fauzi</td>
                                                        <td>12:00 PM</td>
                                                        <td>16:00 PM</td>                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Diva</td>
                                                        <td>12:00 PM</td>
                                                        <td>16:00 PM</td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>Fikar</td>
                                                        <td>10:00 AM</td>
                                                        <td>14:00 PM</td>                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>Sarah</td>
                                                        <td>11:00 AM</td>
                                                        <td>15:00 PM</td>                                                        
                                                    </tr>                                                    
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Jam Masuk</th>
                                                        <th>Jam Keluar</th>                                                       
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="col-12">
                                                <div class="text-right">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default" style="margin: 5px 20px 5px 20px;">Laporan Bulanan</button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default1" style="margin: 5px 20px 5px 20px;">Peminjaman Buku</button>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#default2" style="margin: 5px 20px 5px 20px;">Pengembalian Buku</button>
                                                </div>                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<!-- END Data Kunjungan -->

<!-- Modal content-->
 <!-- Peminjaman Buku -->
 <div class="modal fade text-left" id="default1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Peminjaman Buku</h4>
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
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Id Pengguna">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Id Buku">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" id="first-name-vertical" class="form-control" name="fname" placeholder="Tanggal Peminjaman">
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

   
    
 
@endsection