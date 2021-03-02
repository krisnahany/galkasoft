@extends('layout.app')

@section('title', 'Edit')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase font-weight-bold mr-auto">(1-10001) Uang Tunai</h1>
            <div class="dropdown mr-3">
                <a class="btn dropdown-toggle bg-white border" href="#" role="button" id="dropdownBuatTransaksi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Buat Transaksi</a>
                <div class="dropdown-menu" aria-labelledby="dropdownBuatTransaksi">
                    <a class="dropdown-item active" href="#" data-toggle="modal" data-target="#createTransaction">Transfer Uang</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createReceivedTransaction">Terima Uang</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#createSendTransaction">Kirim Uang</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="btn dropdown-toggle bg-white border" href="#" role="button" id="dropdownPilihan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pilihan</a>
                <div class="dropdown-menu" aria-labelledby="dropdownPilihan">
                    <a class="dropdown-item active" href="#">Impor Laporan Bank</a>
                    <a class="dropdown-item" href="#">Tautan Tunai</a>
                    <a class="dropdown-item" href="#">Laporan Rekonsiliasi</a>
                    <a class="dropdown-item" href="#">Peraturan Rekonsiliasi</a>
                    <a class="dropdown-item" href="#">Mutasi Rekening</a>
                    <a class="dropdown-item" href="#">Ubah Akun</a>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active text-uppercase px-0 mr-5" id="transaksiJurnal-tab" data-toggle="tab" href="#transaksiJurnal" role="tab" aria-controls="transaksiJurnal" aria-selected="true">Transaksi Jurnal</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="laporanBank-tab" data-toggle="tab" href="#laporanBank" role="tab" aria-controls="laporanBank" aria-selected="false">Laporan Bank</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="rekonsiliasi-tab" data-toggle="tab" href="#rekonsiliasi" role="tab" aria-controls="rekonsiliasi" aria-selected="false">Rekonsiliasi (0)</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="pemetaanKas-tab" data-toggle="tab" href="#pemetaanKas" role="tab" aria-controls="pemetaanKas" aria-selected="false">Pemetaan Kas</a>
            </li>
            
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="transaksiJurnal" role="tabpanel" aria-labelledby="transaksiJurnal-tab">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle bg-white border" href="#" role="button" id="dropdownFilterTransaksi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownFilterTransaksi">
                            <a class="dropdown-item" href="#">Harian</a>
                            <a class="dropdown-item" href="#">Mingguan</a>
                            <a class="dropdown-item disabled" href="#">Bulanan</a>
                            <a class="dropdown-item" href="#">Kuartalan</a>
                            <a class="dropdown-item" href="#">Tahunan</a>
                        </div>
                    </div>
                    <input id="searchFilter" type="search" placeholder="Cari" class="form-control searchFilter" autocomplete="off" style="width: auto">
                </div>

                <div class="table-responsive">
                    <table class="table table-sm bg-white text-center border">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Kode Akun</th>
                                <th scope="col">Nama Akun</th>
                                <th scope="col">Saldo Bank</th>
                                <th scope="col">Saldo di Jurnal</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody class="dataTransaction">
                            <tr>
                                <td>1-10001</td>
                                <td class="text-primary">Tunai</td>
                                <td>0,00</td>
                                <td>769.000,00</td>
                                <td>
                                    <div>Belum Terekonsiliasi</div>
                                    <a href="#" class="text-primary">Rekonsiliasi Sekarang</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1-10002</td>
                                <td class="text-primary">Akun Bank</td>
                                <td>0,00</td>
                                <td>769.000,00</td>
                                <td>
                                    <div>Belum Terekonsiliasi</div>
                                    <a href="#" class="text-primary">Rekonsiliasi Sekarang</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1-10003</td>
                                <td class="text-primary">Giro</td>
                                <td>0,00</td>
                                <td>769.000,00</td>
                                <td>
                                    <div>Belum Terekonsiliasi</div>
                                    <a href="#" class="text-primary">Rekonsiliasi Sekarang</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="laporanBank" role="tabpanel" aria-labelledby="laporanBank-tab">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle bg-white border" href="#" role="button" id="dropdownFilterTransaksi" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownFilterTransaksi">
                            <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                            <a class="dropdown-item" href="#">Harian</a>
                            <a class="dropdown-item" href="#">Mingguan</a>
                            <a class="dropdown-item disabled" href="#">Bulanan</a>
                            <a class="dropdown-item" href="#">Kuartalan</a>
                            <a class="dropdown-item" href="#">Tahunan</a>
                        </div>
                    </div>
                    <div id="transaction">
                        <span class="ml-3">
                            <input type="radio" name="transaction" id="tr1" value="tr1" onclick="selectAccountTransaction()" checked>
                            <label for="tr1">Transaksi Rekening</label>
                        </span>
                        <span class="mx-3">
                            <input type="radio" name="transaction" id="tr2" value="tr2" onclick="selectAccountTransaction()">
                            <label for="tr2">Kelompok Transaksi Rekening</label>
                        </span>
                    </div>
                    <input id="searchFilter" type="search" placeholder="Cari" class="form-control searchFilter ml-auto" autocomplete="off" style="width: auto">
                </div>

                <div class="table-responsive" id="accountTransaction">
                    <table class="table table-sm bg-white text-center border">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Kode Akun</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Terima (dalam IDR)</th>
                                <th scope="col">Kirim (dalam IDR)</th>
                            </tr>
                        </thead>
                        <tbody class="dataTransaction">
                            <tr>
                                <td colspan="5">Transaksi tidak ditemukan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-responsive d-none" id="accountTransactionGroup">
                    <table class="table table-sm bg-white text-center border">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Kode Akun</th>
                                <th scope="col">Tanggal Mengimpor</th>
                                <th scope="col"># Transaksi</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Tanggal Berakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="5">Kelompok Transaksi tidak ditemukan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane fade" id="rekonsiliasi" role="tabpanel" aria-labelledby="rekonsiliasi-tab">
                <div class="row" style="font-size: .75rem">
                    <div class="col-xl-6">
                        <div class="table-responsive" id="rekonsiliasi1">
                            <table class="table table-sm bg-white text-center border">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Kode Akun</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Terima (dalam IDR)</th>
                                        <th scope="col">Kirim (dalam IDR)</th>
                                    </tr>
                                </thead>
                                <tbody class="dataTransaction">
                                    <tr>
                                        <td colspan="5">Transaksi tidak ditemukan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
        
                    <div class="col-xl-6">
                        <div class="table-responsive" id="rekonsiliasi2">
                            <table class="table table-sm bg-white text-center border">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Kode Akun</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Terima (dalam IDR)</th>
                                        <th scope="col">Kirim (dalam IDR)</th>
                                    </tr>
                                </thead>
                                <tbody class="dataTransaction">
                                    <tr>
                                        <td colspan="5">Transaksi tidak ditemukan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="tab-pane fade" id="pemetaanKas" role="tabpanel" aria-labelledby="pemetaanKas-tab">
                <div class="d-sm-flex align-items-center justify-content-end mb-4">
                    <button type="button" class="btn bg-white border ml-2">Reset Ulang</button>
                    <button type="button" class="btn bg-white border ml-2">Hapus yang dipilih</button>
                    <button type="button" class="btn bg-white border ml-2">0 Rekonsiliasi</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-sm bg-white text-center border">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Terima (IDR)</th>
                                <th scope="col">Bayar (IDR)</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Akun</th>
                                <th scope="col">Tarif Pajak</th>
                            </tr>
                        </thead>
                        <tbody class="dataTransaction">
                            <tr>
                                <td colspan="6">Transaksi tidak ditemukan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {{-- Modals --}}
    <div class="modal fade" id="createTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        {{-- <div class="modal-dialog" role="document"> --}}
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Transfer Uang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="option1">Transfer Dari</label>
                                <select id="option1" class="form-control">
                                    <option selected>Pilih Akun Pembayaran</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="option2">Setor Ke</label>
                                <select id="option2" class="form-control">
                                    <option selected>Pilih Akun Pembayaran</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputText1">Jumlah</label>
                                <input type="text" class="form-control" id="inputText1" placeholder="Rp 0,00">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="option3">Tag</label>
                                <select id="option3" class="form-control">
                                    <option selected>Pilih Tag</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputText2">No. Transaksi</label>
                                <input type="text" class="form-control" id="inputText2" placeholder="Auto">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDate">Tgl. Transaksi</label>
                                <input type="date" name="" id="inputDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTextArea1">Memo</label>
                                <textarea class="form-control" id="inputTextArea1" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Lampiran</label>
                                <div class="custom-file">
                                    <input type="file" name="" id="inputFile" class="custom-file-input">
                                    <label for="inputFile" class="custom-file-label">Klik disini atau geser file</label>
                                </div>
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

    <div class="modal fade" id="createReceivedTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        {{-- <div class="modal-dialog" role="document"> --}}
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Terima Uang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="option1">Transfer Dari</label>
                                <select id="option1" class="form-control">
                                    <option selected>Pilih Akun Pembayaran</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="option2">Setor Ke</label>
                                <select id="option2" class="form-control">
                                    <option selected>Pilih Akun Pembayaran</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputText1">Jumlah</label>
                                <input type="text" class="form-control" id="inputText1" placeholder="Rp 0,00">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="option3">Tag</label>
                                <select id="option3" class="form-control">
                                    <option selected>Pilih Tag</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputText2">No. Transaksi</label>
                                <input type="text" class="form-control" id="inputText2" placeholder="Auto">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDate">Tgl. Transaksi</label>
                                <input type="date" name="" id="inputDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTextArea1">Memo</label>
                                <textarea class="form-control" id="inputTextArea1" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Lampiran</label>
                                <div class="custom-file">
                                    <input type="file" name="" id="inputFile" class="custom-file-input">
                                    <label for="inputFile" class="custom-file-label">Klik disini atau geser file</label>
                                </div>
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

    <div class="modal fade" id="createSendTransaction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        {{-- <div class="modal-dialog" role="document"> --}}
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-uppercase" id="exampleModalLabel">Kirim Uang</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="option1">Transfer Dari</label>
                                <select id="option1" class="form-control">
                                    <option selected>Pilih Akun Pembayaran</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="option2">Setor Ke</label>
                                <select id="option2" class="form-control">
                                    <option selected>Pilih Akun Pembayaran</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputText1">Jumlah</label>
                                <input type="text" class="form-control" id="inputText1" placeholder="Rp 0,00">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="option3">Tag</label>
                                <select id="option3" class="form-control">
                                    <option selected>Pilih Tag</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputText2">No. Transaksi</label>
                                <input type="text" class="form-control" id="inputText2" placeholder="Auto">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputDate">Tgl. Transaksi</label>
                                <input type="date" name="" id="inputDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTextArea1">Memo</label>
                                <textarea class="form-control" id="inputTextArea1" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Lampiran</label>
                                <div class="custom-file">
                                    <input type="file" name="" id="inputFile" class="custom-file-input">
                                    <label for="inputFile" class="custom-file-label">Klik disini atau geser file</label>
                                </div>
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