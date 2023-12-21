<div class='text-start'>
  @can('parent.category.edit')
    <a href="{{ route('parent.category.edit',$id) }}" class="btn btn-icon btn-success btn-sm mr-2"><i class="bi bi-pencil fs-4"></i></a>
  @endcan

  @can('parent.category.delete')
   <a href="{{ route('parent.category.delete',$id) }}" class="btn btn-icon btn-danger btn-sm"><i class="bi bi-trash fs-4"></i></a>
  @endcan
</div>
