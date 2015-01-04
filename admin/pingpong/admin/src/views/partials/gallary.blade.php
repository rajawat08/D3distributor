@if(count($data->images)>0)
<a data-toggle="modal" href="#modal-gallary-{{ $data->id }}" title="click to preview">
	@if (isset($edit))
    Preview Images
    @else
    {{HTML::image('images/products/thumbnail/'.$data->images[0]->image_name)}}
    @endif
</a>
<div id="modal-gallary-{{ $data->id }}" style="display:none" class="modal text-left fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">{{$data->name}}</h4>
      </div>
      <div class="modal-body">
        <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                    	@foreach ($data->images as $image)
                          <li>
                          	{{HTML::image('images/products/'.$image->image_name,"preview",['width' => '540','height'=> '400'])}}
                          </li>
                        @endforeach
                       
                    </ul>
                    
                </div>

                

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
               
            </div>
      </div>
      <div class="modal-footer">
       
      </div>
      
    </div>
  </div>
</div>
@else
    N/A
@endif

