@extends('layout.app')

@section('title', 'Kas dan Bank')

@section('content')

    <div class="container-fluid py-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase font-weight-bold">peraturan rekonsiliasi</h1>
            <a href="#" class="btn bg-white border" data-toggle="modal" data-target="#createRules">Buat Peraturan Baru</a>
        </div>
    
        <div class="table-responsive">
            <table class="table table-sm bg-white text-center border" style="font-size: .875rem">
                <thead class="bg-primary text-white">
                    <tr>
                        <th scope="col">Kode Akun</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">Saldo Bank</th>
                        <th scope="col">Saldo di Jurnal</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1-10001</td>
                        <td class="text-primary">Tunai</td>
                        <td>0,00</td>
                        <td>769.000,00</td>
                        <td>
                            <a href="{{ url('/kas-dan-bank/edit') }}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1-10002</td>
                        <td class="text-primary">Akun Bank</td>
                        <td>0,00</td>
                        <td>769.000,00</td>
                        <td>
                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1-10003</td>
                        <td class="text-primary">Giro</td>
                        <td>0,00</td>
                        <td>769.000,00</td>
                        <td>
                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <div class="modal fade" id="createRules" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        {{-- <div class="modal-dialog" role="document"> --}}
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Buat Peraturan Baru</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputText1">Nama Aturan</label>
                                <input type="text" class="form-control" id="inputText1">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputFor">Untuk</label>
                                <select id="inputFor" class="form-control">
                                    <option selected>Terima</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAccount">Akun</label>
                                <select id="inputAccount" class="form-control">
                                    <option selected>Semua</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="">
                                    1. Sewaktu transaksi bank menemukan
                                    <div class="form-check form-check-inline mx-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                                        <label class="form-check-label" for="inlineRadio1">Semua</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">Salah Satu</label>
                                    </div>
                                    dari kondisi dibawah ini :
                                </label>
                            </div>
                            <div class="form-group col-md-4">
                                <select id="inputDescription" class="form-control">
                                    <option selected>Deskripsi</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <select id="inputContain" class="form-control">
                                    <option selected>Mengandung</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="inputText2">
                            </div>
                            <div class="form-group col-md-1">
                                <i class="fas fa-plus-circle"></i>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 mb-1">2. Catat di jurnal sebagai Deposit Bank :</div>
                            <div class="form-group col-md-7">
                                <label for="inputCategory">Kategori</label>
                                <select id="inputCategory" class="form-control">
                                    <option selected>Pilih Akun</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAccount">% dari jumlah</label>
                                <input type="text" class="form-control" id="inputText2" placeholder="100">
                            </div>
                            <div class="form-group col-md-1">
                                <i class="fas fa-plus-circle"></i>
                                <i class="fas fa-minus-circle"></i>
                            </div>

                            <div class="form-group col-md-7">
                                <label for="inputCategory">Kategori</label>
                                <select id="inputCategory" class="form-control">
                                    <option selected>Pilih Akun</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAccount">% dari jumlah</label>
                                <input type="text" class="form-control" id="inputText2" placeholder="100">
                            </div>
                            <div class="form-group col-md-1">
                                <i class="fas fa-plus-circle"></i>
                                <i class="fas fa-minus-circle"></i>
                            </div>

                            <div class="form-group col-md-7"></div>
                            <div class="form-group col-md-4">Total 100%</div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-11">
                                <label for="inputContact">Kontak</label>
                                <select id="inputContact" class="form-control">
                                    <option selected>Pilih Kontak</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-11">
                                <label for="inputMemo">Memo</label>
                                <select id="inputMemo" class="form-control">
                                    <option selected>Berdasarkan Transaksi</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">Simpan otomatis di Jurnal saya</label>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-primary" href="login.html">Simpan</a>
                </div>
            </div>
        </div>
    </div>

@endsection