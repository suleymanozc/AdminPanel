@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Menüler</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Menü</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Menü Listesi</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Menü Adı</th>
                                    <th>Sayfa Adı</th>
                                    <th>Oluşturulma Tarihi</th>
                                    <th>İşlemler</th>
                                </tr>
                            </thead>
                            <tbody id="sortable">
                                @foreach ($menus as $menu)
                                    <tr id="item-{{ $menu->id }}">
                                        <td class="sortable">{{ $menu->menu_name }}</td>
                                        <td>{{ $menu->page_id }}</td>
                                        <td>{{ $menu->created_at }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i
                                                    class="fas fa-edit"></i>&nbsp;Düzenle</a>
                                            <a href="{{ route('menu-delete', $menu->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Sil</a>
                                            <button class="btn btn-success"><i
                                                    class="fas fa-eye"></i>&nbsp;Aktif/Pasif</button>
                                        </td>
                                    </tr>
                                    @foreach ($menu->children as $downMenu)
                                        <tr id="item-{{ $downMenu->id }}">
                                            <td class="sortable">{{ $menu->menu_name }} -> {{ $downMenu->menu_name }}</td>
                                            <td>{{ $downMenu->page_id }}</td>
                                            <td>{{ $downMenu->created_at }}</td>
                                            <td>
                                                <a href="{{ route('menu-edit', $downMenu->id) }}" class="btn btn-primary"><i
                                                        class="fas fa-edit"></i>&nbsp;Düzenle</a>
                                                <a href="{{route('menu-delete', $downMenu->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Sil</a>
                                                @if ($menu->menu_status == 'on')
                                                <button class="btn btn-success"><i class="fas fa-eye-slash"></i>&nbsp;Pasif</button>
                                                @elseif ($menu->menu_status == 'off')
                                                <button class="btn btn-success"><i class="fas fa-eye"></i>&nbsp;Aktif</button>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>
@endsection
{{--
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('panel') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
    //menu list açıklama

    <script>
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#sortable').sortable({
                revert: true,
                handle: ".sortable",
                stop: function(event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{ route('menus-post') }}",
                        success: function(msg) {
                            // console.log(msg);
                            if (msg) {
                                console.log("başarılı")
                            } else {
                                console.log("İşlem Başarısız");
                            }
                        }
                    });

                }
            });
            $('#sortable').disableSelection();

        });
    </script>

    //menu delete
    <script>
        function deleteMenus(r, id) {
            var list = r.parentNode.parentNode.rowIndex;
            swal({
                title: 'Silmek istediğinize emin misiniz?',
                text: "Sildiğinizde geri dönüşümü olmayacaktır!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'İptal',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Sil!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "Post",
                        url: '{{ route('menus') }}',
                        data: {
                            'id': id,
                            'delete': 'delete'
                        },
                        beforeSubmit: function() {
                            swal({
                                title: '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> <span class="sr-only">Loading...</span>',
                                text: 'Siliniyor lütfen bekleyiniz...',
                                showConfirmButton: false
                            })
                        },
                        success: function(response) {
                            if (response.status == 'success') {
                                document.getElementById('example1').deleteRow(list);
                                toastr.success(response.content, response.title);
                            } else {
                                toastr.error(response.content, response.title);
                            }
                        }

                    })
                } else {}
            })
        }
    </script>
@endsection
--}}
@section('js')

    //menu list
    <script>
        $(function () {
            $('#sortable').sortable({
                revert: true,
                handle: ".sortable",
                stop: function (event, ui) {
                    var data = $(this).sortable('serialize');
                    $.ajax({
                        type: "POST",
                        data: data,
                        url: "{{route('menus')}}",
                        success: function (response) {
                            if (response.status == "success") {
                                toastr.success(response.content, response.title);
                            } else {
                                toastr.error(response.content, response.title);
                            }
                        }
                    });

                }
            });
            $('#sortable').disableSelection();
        });
    </script>

    //menu status
    <script>
        function menuStatus(r, id, menu_status) {
            $.ajax
            ({
                type: "Post",
                url: '{{route('menus')}}',
                data: {
                    'id': id,
                    'menu_status': menu_status
                },
                success: function (response) {
                    if (response.status == 'success') {
                        toastr.success(response.content, response.title);
                        setInterval(function(){
                            window.location.reload();
                        },5000);
                    } else {
                        toastr.error(response.content, response.title);
                        setInterval(function(){
                            window.location.reload();
                        },5000);
                    }
                }

            })

        }
    </script>

@endsection

@section('css')

    <style>
        .sortable {
            cursor: grab;
        }
    </style>
@endsection
