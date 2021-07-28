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
<!-- Zero configuration table -->
<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Laporan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <form class="form form-vertical">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            Bulan pake select 
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group">
                                            <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Total Kunjungan">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group">
                                            <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="Total Peminjaman">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="form-group">
                                            <input type="password" id="password-vertical" class="form-control" name="contact" placeholder="Total Pencarian">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Buat</button>
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">Kembali</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection