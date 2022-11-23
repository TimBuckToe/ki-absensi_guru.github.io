@extends('layout.main')
@section('content')
    <div class="content">
        <div class="mx-5 mt-5">
            <h5>
                <div class="fw-bold">
                    <i class="fa-solid fa-arrow-left me-2">
                    </i>Daftar Inventaris
                </div>
            </h5>
            <div class="row">
                <div class="col-4">
                    {{-- form pencarian --}}
                    <div class="form-group">
                        <div class="form-group">
                            <div class="input-group input-group">
                                <input type="text" class="form-control" aria-label="search" placeholder="Cari aset">
                                <span class="input-group-text">
                                    <i class="fas fa-magnifying-glass"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    {{-- end form pencarian --}}
                </div>

                <div class="col-6">

                    <button class="btn btn-light"><i class="fas fa-filter"></i>Filter</button>
                    <button class="btn btn-light"><i class="fas fa-trash"></i></button>
                </div>
                <div class="col-2 btn btn-success justify-content-end"><i class="fas fa-add"></i>Tambah Aset</div>
            </div>


            <div>
                <div class="w-75 me-4">
                    <form action="" class="mt-1">

                    </form>
                </div>
                <div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Aset</th>
                                <th scope="col">Jenis Aset</th>
                                <th scope="col">Harga Satuan(IDR.)</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>5000</td>
                                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                                <td><a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>5000</td>
                                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                                <td><a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>5000</td>
                                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                                <td><a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>5000</td>
                                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                                <td><a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><input type="checkbox" class="form-check-input mt-0"></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>5000</td>
                                <td><span class="btn btn-sm btn-outline-success">Aktif</span></td>
                                <td><a href="" class="btn btn-sm btn-dark"><i class="fas fa-pencil"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
