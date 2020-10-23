@extends ('admin.dashboard')
  @section ('content')
  <!-- Basic Vertical form layout section start -->
  <section id="basic-vertical-layouts">
    <div class="row match-height">
        <div>
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Add a new product</h4>

                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<h6>' .$message. '</h6>';
                            Session::put('message', null);
                        }
                    ?>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" action="{{URL::to('/save_new_product')}}" method="post">
                  
                <div class="form-body">
                        <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="" class="form-control" name="product_name"
                                placeholder="( Name )">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Brand</label>
                            <input type="text" id="" class="form-control" name="product_brand"
                                placeholder="( Brand )">
                            </div>
                        </div>


                        <div class="col-12">
                        
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" id="" rows="3" name="product_description" placeholder="( Description )"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" id="" class="form-control" name="product_unit_price"
                                placeholder="( Price )">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Sale price</label>
                            <input type="text" id="" class="form-control" name="product_sale_price"
                                placeholder="( Sale price )">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Size</label>
                            <input type="text" id="" class="form-control" name="product_size"
                                placeholder="( Size )">
                            </div>
                        </div>
              

                        <div class="col-12">
                        
                             <div class="form-group">
                             <label for="" class="form-label">Status</label>
                                        <select class="choices form-select" name="product_status">
                                                                             
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                   
                                        </select>
                                    </div>       
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Image</label>
                            <input type="text" id="" class="form-control" name="product_image"
                                placeholder="( Link )">
                            </div>
                        </div>
                    
                        <div class="col-12 d-flex justify-content-end">
                        {{csrf_field()}}  
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Add</button>
                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
      
    </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
    @endsection