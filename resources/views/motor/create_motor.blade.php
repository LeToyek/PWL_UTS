@extends('layouts.template', ['title' => 'motor'])
@section('content')
    @push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
    @endpush
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Motor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Motor 🏍️</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ $url_form }}">
                        @csrf
                        {!! isset($m) ? method_field('PUT') : '' !!}

                        <div class="form-group">
                            <label>Merk Motor</label>
                            <input class="form-control @error('merk') is-invalid @enderror"
                                value="{{ isset($m) ? $m->merk : old('merk') }}" name="merk" type="text" />
                            @error('merk')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tipe</label>
                            <input class="form-control @error('tipe') is-invalid @enderror"
                                value="{{ isset($m) ? $m->tipe : old('tipe') }}" name="tipe" type="text" />
                            @error('tipe')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Warna</label>
                            <input class="form-control @error('warna') is-invalid @enderror"
                                value="{{ isset($m) ? $m->warna : old('m') }}" name="warna" type="text" />
                            @error('warna')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Jumlah Penumpang</label>
                            <input class="form-control @error('kapasitas_cc') is-invalid @enderror"
                                value="{{ isset($m) ? $m->kapasitas_cc : old('kapasitas_cc') }}" name="kapasitas_cc"
                                type="text" />
                            @error('kapasitas_cc')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror"
                                value="{{ isset($m) ? $m->harga : old('harga') }}" name="harga" type="text" />
                            @error('harga')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="col form-group">
                            <label>Kuantitas</label>
                            <input class="form-control @error('qty') is-invalid @enderror"
                                value="{{ isset($m) ? $m->qty : old('qty') }}" name="qty" type="text" />
                            @error('qty')
                                <span class="error invalid-feedback">{{ $message }} </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="#" class="btn btn-warning" onclick="history.back()">Kembali</a>
                        <!-- /.card-body -->

                        <!-- /.card-footer-->
                </div>
                <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
@push('custom_js')
    <script></script>
@endpush
