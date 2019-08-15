<template>
    <div class="container">
       <!--BreadCrumbs-->
        <div class="row mb-2 mt2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Price Range</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Price Range</li>
            </ol>
          </div><!-- /.col -->
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Breastmilk Price Range</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <input type="text" class="js-range-slider" name="my_range" value="" data-type="double"
                  data-min="0"
                  data-max="1000"
                  data-from="200"
                  data-to="500"
                  data-grid="true"
              />    
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
             $(".js-range-slider").ionRangeSlider();
        }        
    }
</script>



