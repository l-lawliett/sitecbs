<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b></b></h4>
        <h6 class="modal-title" id="locat">Location:</h6>
       
      </div>
      <div class="modal-body">
         <span>Description: </span><p id="des"></p>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a type="button" class="btn btn-primary" href="{{ URL::route('apply') }}">Apply</a>
      </div>
    </div>
  </div>
</div>