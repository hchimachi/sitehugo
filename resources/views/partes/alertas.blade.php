<script>
    $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
@if($errors->any)
    @foreach ($errors->all() as $erro)
    $('.mensagemerror').ready(function() {
        toastr.error('{{$erro}}')
      });
    @endforeach
@endif
    @isset($sucesso)
    $('.mensagemsucesso').ready(function() {
        toastr.error('{{($sucesso)}}')
      });

    @endisset

});
</script>
