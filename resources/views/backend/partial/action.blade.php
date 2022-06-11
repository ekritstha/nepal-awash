<a href="{{ route('admin.'.$page.'.edit',$d->id) }}" title="Edit">
    <i class="fa fa-pencil-alt text-warning"></i>
</a>

@if(!is_null($delme))
<i class="fa fa-trash text-danger" onclick="delme('{{ $d->id }}')" style="cursor: pointer"></i>
<form action="{{ route('admin.'.$page.'.destroy', $d->id) }}" method="post" id="delme-{{ $d->id }}">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
<script>
    function delme(id) {
        if (confirm('Are Your Sure???')) {
            $('#delme-'+id).submit();
        }
        return false;
    }
</script>
@endif
