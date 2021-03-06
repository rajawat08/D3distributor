<a data-toggle="modal" href="#modal-delete-{{ $data->id }}" title="delete"><i class="fa fa-times-circle"> </i></a>
<div id="modal-delete-{{ $data->id }}" style="display:none" class="modal text-left fade">
  <div class="modal-dialog">
    <div class="modal-content">
      {{ Form::open(['method' => 'DELETE', 'route' => ["admin.$name.destroy", $data->id]])}}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Delete Data</h4>
      </div>
      <div class="modal-body">
        <p>
          Are you sure want to delete this data?
        </p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>