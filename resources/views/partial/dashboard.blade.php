@extends('produk.indexi')
@section('content')

<div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Daftar Produk</h5>
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Produk</th>
                                                            <th>Kategori</th>
                                                            <th>Harga</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($produk as $rn)
                                                        <tr>
                                                            <td> {{$rn['nama_produk']}}</td>
                                                            <td> {{$rn['kategori']}}</td>
                                                            <td> {{$rn['nama']}}</td>
                                                        </tr>
                                                        @endforeach 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            
                    </div>

@endsection