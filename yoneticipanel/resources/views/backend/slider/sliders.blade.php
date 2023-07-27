@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Slider</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Slider</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Slider Listesi</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Slider Resim</th>
                            <th>Slider Başlık</th>
                            <th>Yayınlanma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img width="170" height="100"></td>
                            <td>Trident</td>
                            <td>Win 95+</td>
                            <td>
                                <a href="{{route('slider-edit')}}" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Düzenle</a>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Sil</button>
                                <button class="btn btn-success"><i class="fas fa-eye"></i>&nbsp;Aktif/Pasif</button>
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
@endsection
