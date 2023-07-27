@extends('layout.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Slider Ekle</h1>
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
            <form method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Slider</h3>
                        </div>
                        <div class="card-body">
                            <center><img id="coverImageShow" width="70%" height="350px"></center>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slider Resim</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input id="coverImage" type="file" class="custom-file-input"
                                               id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Başlık</label>
                                <input type="text" class="form-control" placeholder="Slider Başlık Yazınız">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Slider Url</label>
                                <input type="text" class="form-control" placeholder="Slider Url Yazınız">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Yayınla</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
</div>
@endsection
