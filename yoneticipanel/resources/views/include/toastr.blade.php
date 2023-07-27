@if (session('message'))
    @if(session('type') == 'info')
        <script>
            toastr.info('{{ session("message") }} ');
        </script>
    @endif
    @if(session('type') == 'success')
        <script>
            toastr.success('{{ session("message") }} ');
        </script>
    @endif
    @if(session('type') == 'warning')
        <script>
            toastr.warning('{{ session("message") }} ');
        </script>
    @endif
    @if(session('type') == 'error')
        <script>
            toastr.error('{{ session("message") }} ');
        </script>
    @endif
@endif
