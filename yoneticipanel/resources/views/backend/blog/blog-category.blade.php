@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Blog Kategori</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Blog Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blog Kategori Listesi</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Kategori Adı</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Win 95+</td>
                            <td>
                                <a href="{{route('blog-category-edit')}}" class="btn btn-primary"><i class="fas fa-edit"></i>&nbsp;Düzenle</a>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Sil</button>
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
