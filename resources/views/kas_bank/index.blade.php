@extends('layout.app')

@section('title', 'Kas dan Bank')

@section('content')

    <div class="container-fluid py-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase font-weight-bold">Kas dan Bank</h1>
        </div>

        <div class="row" style="font-size: .75rem">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card mb-4 h-100">
                    <div class="card-header bg-primary text-white">
                        Pemasukan 30-Hari Mendatang (IDR)
                    </div>
                    <div class="card-body">
                        <span>Total</span>
                        <h4 class="font-weight-bold">Rp 8.855.000,00</h4>
                        <span class="badge badge-danger badge-counter badge-shape">1</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card mb-4 h-100">
                    <div class="card-header bg-primary text-white">
                        Pengeluaran 30-Hari Mendatang (IDR)
                    </div>
                    <div class="card-body">
                        <span>Total</span>
                        <h4 class="font-weight-bold">Rp 8.855.000,00</h4>
                        <span class="badge badge-danger badge-counter badge-shape">2</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card mb-4 h-100">
                    <div class="card-header bg-primary text-white">
                        Saldo Kas (dalam IDR)
                    </div>
                    <div class="card-body">
                        <span>Total</span>
                        <h4 class="font-weight-bold">Rp 8.855.000,00</h4>
                        <span class="badge badge-danger badge-counter badge-shape">3</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card mb-4 h-100">
                    <div class="card-header bg-primary text-white">
                        Saldo Kartu Kredit (dalam IDR)
                    </div>
                    <div class="card-body">
                        <span>Total</span>
                        <h4 class="font-weight-bold">Rp 8.855.000,00</h4>
                        <span class="badge badge-danger badge-counter badge-shape">4</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right small">Saldo berdasarkan tanggal 09/10/2020, kecuali ada pernyataan lain</div>

        <hr class="sidebar-divider my-2 mx-0 mb-3">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase font-weight-bold">daftar akun kas</h1>
            <a href="{{ url('/kas-dan-bank/peraturan-rekonsiliasi') }}" class="btn bg-white border">Peraturan Rekonsiliasi</a>
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
                            <a href="{{ url('/kas-dan-bank/edit') }}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1-10003</td>
                        <td class="text-primary">Giro</td>
                        <td>0,00</td>
                        <td>769.000,00</td>
                        <td>
                            <a href="{{ url('/kas-dan-bank/edit') }}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection