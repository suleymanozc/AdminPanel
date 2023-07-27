@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Blog Ekle</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <form method="post">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Blog</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Başlık</label>
                                        <input type="text" class="form-control" placeholder="Başlık Yazınız">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kısa Açıklama</label>
                                        <input type="text" class="form-control" placeholder="Kısa Açıklama Yazınız">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Etiket</label>
                                        <input type="text" class="form-control" placeholder="Etiket">
                                    </div>
                                    <div class="form-group">
                                        <label>İçerik</label>
                                        <textarea id="editor"></textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Yayınla</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Blog Resim</h3>
                                </div>
                                <br>
                                <img id="coverImageShow" width="100%" height="165px">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input id="coverImage" type="file" class="custom-file-input"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Blog Görünürlüğü</h3>
                                </div>
                                <br>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="checkbox" name="status" checked data-bootstrap-switch>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
