@extends('layouts.navbar')

@section('body')
    <div class="d-flex justify-content-center">
        <div class="col-8">
            <h3>Data Pabrik</h3>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pabrik
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form action="/pabrik" method="post">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pabrik</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pabrik</label>
                                    <input type="text" name="nama_pabrik" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Alamat Pabrik</label>
                                    <input type="text" name="alamat_pabrik" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Contact Pabrik</label>
                                    <input type="text" name="contact_pabrik" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                <button type="submit" class="btn btn-primary">save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>NO</th>
                    <th>Nama Pabrik</th>
                    <th>Alamat Pabrik</th>
                    <th>Contact Pabrik</th>
                </tr>
                @foreach ($pabrik as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_pabrik }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->contact }}
                            <form class="d-inline" action="/hapuspabrik" method="post">
                                @csrf
                                <input type="hidden" name="idpabrik" value="{{ $item->id }}">
                                <input type="submit" class="btn btn-danger d-inline" value="Hapus">
                            </form>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $item->id }}">
                                Update
                            </button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="/pabrik/{{ $item->id }}" method="post">
                                @csrf
                                
                                <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Update Pabrik</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Nama Pabrik</label>
                                          <input type="text" name="nama_pabrik" value="{{$item->nama_pabrik}}" id="exampleInputEmail1"
                                              aria-describedby="emailHelp">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Alamat Pabrik</label>
                                          <input type="text" name="alamat_pabrik" value="{{$item->alamat}}" id="exampleInputEmail1"
                                              aria-describedby="emailHelp">
                                      </div>
                                      <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Contact Pabrik</label>
                                          <input type="text" name="contact_pabrik" value="{{$item->contact}}" id="exampleInputEmail1"
                                              aria-describedby="emailHelp">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                      <button type="submit" class="btn btn-primary">save</button>
                                  </div>
                              </div>
                            </form>
                        </div>
                    </div>
                @endforeach

            </table>
        </div>
    </div>
@endsection
