<button class="btn btn-danger" onclick="frmdlt{{$page->id}}.submit();"  title="Delete"><i class="fa fa-trash-o"></i></button>
<form onSubmit="if(!confirm('Is the form filled out correctly?')){return false;}" name="frmdlt{{$page->id}}" action="{{ route('pages.destroy', $page->id)}}" method="post">
    {!! method_field('delete') !!}
    {{csrf_field()}}
</form>
