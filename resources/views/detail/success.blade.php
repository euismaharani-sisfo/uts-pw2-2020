@extends('layouts.index')
@section('content')
<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> Indicates a successful or positive action.
                        </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Detail Produk</h5>
                                                <ul>
                                                    <li>Nama Produk: <?=$request['nama-produk']?></li>
                                                    <li>Kategori:<?=$request['kategori']?> </li>
                                                    <li>Harga: <?=$request['harga']?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            
                    </div>
                    @endsection