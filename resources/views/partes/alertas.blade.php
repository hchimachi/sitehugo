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

@elseif($sucesso)
    $('.mensagemsucesso').ready(function() {
        toastr.success('{{$ucesso}}')
      });

@eslseif($atencao)
    $('.mensagemsucesso').ready(function() {
        toastr.warning('{{$ucesso}}')
      });

@elseif($informa)
    $('.mensagemsucesso').ready(function() {
        toastr.info('{{$ucesso}}')
      });
@endif
});
</script>
