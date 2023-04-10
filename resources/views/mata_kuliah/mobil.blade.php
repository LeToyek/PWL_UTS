@extends('layouts.template', ['title' => 'mobil'])
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
                        <h1>Mata Kuliah</h1>
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

            @if (session()->has("success"))
                <div class="alert alert-success">
                    {{ session("success")}}
                </div>
            @endif
            <!-- Default box -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Mobil 🚔</h3>

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

                    <a href="{{ url('mobils/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Mobil</th>
                                <th>Tipe</th>
                                <th>Warna</th>
                                <th>Jumlah Penumpang</th>
                                <th>Harga</th>
                                <th>Kuantitas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($m->count() > 0)
                                @foreach ($m as $i => $mb)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $m->merk }}</td>
                                        <td>{{ $m->tipe }}</td>
                                        <td>{{ $m->warna }}</td>
                                        <td>{{ $m->jml_penumpang }}</td>
                                        <td >
                                            <!-- Bikin tombol edit dan delete -->
                                            <div class="row justify-content-center">
                                                
                                                <a href="{{ url('/mobils/' . $m->id . '/edit') }}" 
                                                    class="btn btn-sm btn-warning mr-2">Edit</a>
                                            
                                                <form method="POST" action="{{ url('/mobils/' . $m->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </div>                                            
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center">Data tidak ada</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Pemrograman Web Lanjut
                </div>
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
