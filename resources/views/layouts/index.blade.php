@extends('layouts.navbar')

@section('body')
    {{-- @dd($pabrik) --}}
    <div class="d-flex justify-content-center">
        <div class="col-6">
            <h3>Data Produk</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Produk
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/produk" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pilih Produk</label>
                                    <select name="pabrik_id" class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Pabrik</option>
                                        @foreach ($pabrik as $pabrik)
                                            <option value="{{ $pabrik->id }}"> {{ $pabrik->nama_pabrik }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jumlah Stok</label>
                                    <input type="number" name="jumlah_stok" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>Nama Produk</th>
                    <th>Pabrik</th>
                    <th>Stok</th>
                </tr>
                @foreach ($produk as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->pabrik->nama_pabrik }}</td>
                        <td>{{ $item->stok }}
                            <form class="d-inline" action="/hapusproduk" method="post">
                                @csrf
                                <input type="hidden" name="idproduk" value="{{ $item->id }}">
                                <input type="submit" class="btn btn-danger d-inline" value="Hapus">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
