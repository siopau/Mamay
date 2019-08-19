<template>
    <section class="content">
      <div class="container-fluid">
        <!--BreadCrumbs-->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Received Transported Milk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Received Transported Milk</li>
            </ol>
          </div><!-- /.col -->
        </div>
      <div class="row">
        <div class="card w-50 border-primary" style="width: 18rem;">
            <div class="card-body border-primary">
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Name:</label>
                        <div class="col-sm-7">
                        <input type="email" readonly class="form-control-plaintext" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">Date and Time of Extraction:</label>
                        <div class="col-sm-7">
                        <input type="email" readonly class="form-control-plaintext" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">State of Milk Upon Pick-up:</label>
                        <div class="col-sm-7">
                        <input type="email" readonly class="form-control-plaintext" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-5 col-form-label">State of Milk Upon Received:</label>
                        <div class="col-sm-7">
                        <input type="email" readonly class="form-control-plaintext" id="inputEmail3">
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer border-primary text-right">
                <a href="#" class="btn btn-primary text-right">Move to Pre-Pasteurization</a>
            </div>
        </div>
      </div>
      </div>
    <!-- Modal -->
      <div class="modal fade" id="addNewReceivedMilk" tabindex="-1" role="dialog" aria-labelledby="addNewReceivedMilkLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addNewRoleLabel">Add Received Transported Milk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class ="form-row">
                  <label for="role">Donor's Name:</label>
                  <input type="text" class="form-control" id="fullname" placeholder="Juana Dela Cruz">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="homeAddress">Date of Extraction</label>
                        <input type="text" class="form-control" id="homeAddress">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="hometelephone">Time of Extraction</label>
                        <input type="text" class="form-control" id="homeTelephone">
                    </div>
                </div>
                <div class="form-row">
                    <label for="role">State of Milk Upon Pick Up Donor's Home</label>
                    <input type="text" class="form-control" id="fullname">
                </div>
                <div class="form-row">
                    <label for="role">Conditions of transport</label>
                    <input type="text" class="form-control" id="fullname">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStateArrival" >Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="addStateArrival" tabindex="-1" role="dialog" aria-labelledby="addNewStateArrivalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addNewRoleLabel">Milk Status Upon Arrival</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="homeAddress">Date of Arrival</label>
                        <input type="text" class="form-control" id="homeAddress">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="hometelephone">Time of Arrival</label>
                        <input type="text" class="form-control" id="homeTelephone">
                    </div>
                </div>
                <div class="form-row">
                    <label for="role">State of Milk Upon Arrival at Milk Bank</label>
                    <input type="text" class="form-control" id="fullname">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <a href="#" data-toggle="modal" data-target="#addNewReceivedMilk" class="float">
        <i class="fa fa-plus my-float"></i>
    </a>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
