<div class="modal" tabindex="-1" role="dialog" id="ajaxModel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Restauarants</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="restaurantForm"name="restaurantForm" method="POST"
        action="{{route('admin.restaurants.store')}}"
        class="form-horizontal">
        @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-4 ">Restauarant Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 ">Restauarant Code</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="code" name="code" placeholder="Enter Restauarant Code" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 ">Restauarant Email</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-4 ">Phone Number</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4">Restauarant Description</label>
                        <div class="col-sm-12">
                            <textarea id="description" name="description" required="" placeholder="Enter Details" class="form-control"></textarea>
                        </div>
                    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="saveBtn" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
