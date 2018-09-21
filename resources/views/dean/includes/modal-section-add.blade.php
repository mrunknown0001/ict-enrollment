<div class="modal fade" id="addSection" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <strong>Add Section</strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                <p><em>Field with red asterisk (<label class="label-required">*</label>) are required fields.</em></p>
                <form action="{{ route('dean.add.section.post') }}" method="POST" autocomplete="off">
                  {{ csrf_field() }}
                  <div class="form-group{{ $errors->has('room_name') ? ' has-error' : '' }}">
                        <label for="section_name">Section Name</label><label class="label-required">*</label>
                        <input id="section_name" type="text" class="form-control" name="section_name" value="{{ old('section_name') }}" placeholder="Enter Section Name" autofocus required>
                        @if ($errors->has('section_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('section_name') }}</strong>
                            </span>
                        @endif
                      </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Save Section</button>
                    </div>
                  </form>


      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>