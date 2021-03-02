@extends('layout.app')

@section('title', 'Laporan')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase font-weight-bold">Laporan</h1>
        </div>

        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active text-uppercase px-0 mr-5" id="sekilasBisnis-tab" data-toggle="tab" href="#sekilasBisnis" role="tab" aria-controls="sekilasBisnis" aria-selected="true">Sekilas Bisnis</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="penjualan-tab" data-toggle="tab" href="#penjualan" role="tab" aria-controls="penjualan" aria-selected="false">Penjualan</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="pembelian-tab" data-toggle="tab" href="#pembelian" role="tab" aria-controls="pembelian" aria-selected="false">Pembelian</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="produk-tab" data-toggle="tab" href="#produk" role="tab" aria-controls="produk" aria-selected="false">Produk</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="aset-tab" data-toggle="tab" href="#aset" role="tab" aria-controls="aset" aria-selected="false">Aset</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="bank-tab" data-toggle="tab" href="#bank" role="tab" aria-controls="bank" aria-selected="false">Bank</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link text-uppercase px-0 mr-5" id="pajak-tab" data-toggle="tab" href="#pajak" role="tab" aria-controls="pajak" aria-selected="false">Pajak</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="sekilasBisnis" role="tabpanel" aria-labelledby="sekilasBisnis-tab">
                <div class="row card-report">
                    <div class="col-xl-2 col-md-4 mb-4">
                        {{-- <div class="card" style="width: 18rem;"> --}}
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="penjualan" role="tabpanel" aria-labelledby="penjualan-tab">
                <div class="row card-report">
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pembelian" role="tabpanel" aria-labelledby="pembelian-tab">
                <div class="row card-report">
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="produk" role="tabpanel" aria-labelledby="produk-tab">
                <div class="row card-report">
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="aset" role="tabpanel" aria-labelledby="aset-tab">
                <div class="row card-report">
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 mb-4">
                        <div class="card mb-4 h-100 text-center">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Neraca</h5>
                                <img src="{{ asset('assets/img/neraca.png') }}" class="card-img-top" alt="...">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Lihat Laporan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bank" role="tabpanel" aria-labelledby="bank-tab">...</div>
            <div class="tab-pane fade" id="pajak" role="tabpanel" aria-labelledby="pajak-tab">...</div>
        </div>

    </div>

@endsection