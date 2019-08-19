<template>
    <section class="content">
      <div class="container-fluid">
        <!--BreadCrumbs-->
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Handling Milk Pre-Pasteurization</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Handling Milk Pre-Pasteurization</li>
            </ol>
          </div><!-- /.col -->
        </div>
        <div class="row">
            <div class="card-group">
                <div class="card">
                    <div class="card-header">Defrosting</div>
                    <div class="card-body">
                        <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Milk Information</div>
                        <div class="card-body">
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
                        <div class="card-footer text-right ">
                            <a href="#" class="btn btn-primary">Move to Pooling and Aliquoting</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Pooling and Aliquoting</div>
                    <div class="card-body">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>                        
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Move to PrePasteurization &amp; Testing</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Pre-Pasteurization and Testing</div>
                    <div class="card-body">
                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Primary card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>                        
                        <div class="card-footer text-right ">
                            <a href="#" class="btn btn-primary">Move to Pasteurization</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
      </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
