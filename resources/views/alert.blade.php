<script>
    @if($message = session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Sucesso',
            text: '{{ $message }}',
            confirmButtonColor: '#13335F'
        })
    @endif

    @if($message = session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message }}',
            confirmButtonColor: '#13335F'
        })
    @endif

    @if($message = session('warning'))
        Swal.fire({
            icon: 'warning',
            title: 'Permissão negada',
            text: '{{ $message }}',
            confirmButtonColor: '#13335F'
        })
    @endif
</script>