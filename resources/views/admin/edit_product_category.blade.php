@extends ('admin.dashboard')
  @section ('content')
  <!-- Basic Vertical form layout section start -->
  <section id="basic-vertical-layouts">
    <div class="row match-height">
        <div>
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Edit product category</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
            @foreach ($edit_product_category as $key => $edit_value)
                <form class="form form-vertical" action="{{URL::to('/update_product_category/'.$edit_value->id)}}" method="post">
                  
                <div class="form-body">
                        <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="" class="form-control" value="{{$edit_value->category_name}}" name="category_name"
                                placeholder="( Name )">
                            </div>
                        </div>
                        <div class="col-12">
                        
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" id="" rows="3" name="category_description">{{$edit_value->category_description}}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                        
                             <div class="form-group">
                             <label for="" class="form-label">Status</label>
                                        <select class="choices form-select" name="category_status">
                                                           
                                            <option value="1" <?php if($edit_value->category_status) echo 'selected="selected"' ?>>Active</option>
                                            <option value="0" <?php if(!$edit_value->category_status) echo 'selected="selected"' ?>>Inactive</option>
                                   
                                        </select>
                                    </div>       
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Image</label>
                            <input type="text" id="" class="form-control" name="category_image" value="{{$edit_value->category_image}}"
                                placeholder="( Link )">
                            </div>
                        </div>
                    
                        <div class="col-12 d-flex justify-content-end">
                        {{csrf_field()}}  
                            <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                            <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                        </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
            </div>
        </div>
        </div>
      
    </div>
    </section>
    <!-- // Basic Vertical form layout section end -->
    @endsection