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

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- Default box -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Daftar Motor 🏍️</h3>

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
                    <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
                        <a href="{{ url('motor/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                        <form action="/motor" class="col-md-4" style="padding: 0">
                            @csrf
                            <div class="input-group input-group-sm ">
                                <input type="text" name="search" class="form-control input-sm " placeholder="Cari Motor">
                                <button class="input-group-text input-sm" id="basic-addon2" type="submit">
                                    <i class="fa fa-search" style="font-size:16px"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merk Motor</th>
                                <th>Tipe</th>
                                <th>Warna</th>
                                <th>Kapasitas(cc)</th>
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
                                        <td>{{ $mb->merk }}</td>
                                        <td>{{ $mb->tipe }}</td>
                                        <td>{{ $mb->warna }}</td>
                                        <td>{{ $mb->kapasitas_cc }}</td>
                                        <td>{{ $mb->harga }}</td>
                                        <td>{{ $mb->qty }}</td>
                                        <td>
                                            <!-- Bikin tombol edit dan delete -->
                                            <div class="row justify-content-center">

                                                <a href="{{ url('/motor/' . $mb->id . '/edit') }}"
                                                    class="btn btn-sm btn-warning mr-2">Edit</a>

                                                    <form action="{{ route('motor.destroy', $mb->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-sm btn-danger">Hapus</button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Apakah anda yakin ingin menghapus data motor ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                    <div class="mt-4" style="display: flex; justify-content: center; flex-direction: column-reverse">
                        {{ $m->links() }}
                    </div>
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
