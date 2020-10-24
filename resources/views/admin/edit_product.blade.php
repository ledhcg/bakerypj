@extends ('admin.dashboard')
  @section ('content')
  <!-- Basic Vertical form layout section start -->
  <section id="basic-vertical-layouts">
    <div class="row match-height">
        <div>
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Edit product</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
            
            @foreach ($edit_product as $key => $edit_value)
            
                <form class="form form-vertical" action="{{URL::to('/update_product/'.$edit_value->id)}}" method="post" enctype="multipart/form-data">

                  
                <div class="form-body">
                        <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" id="" class="form-control" value="{{$edit_value->product_name}}" name="product_name"
                                placeholder="( Name )">
                            </div>
                        </div>

                          <div class="col-12">
                            <div class="form-group">
                            <label for="" class="form-label">Brand</label>
                                        <select class="choices form-select" name="brand_id">
                                            @foreach($brand as $key => $brd)
                                                @if($edit_value->brand_id == $brd->id)
                                                    <option value="$brd->id" selected >{{$brd->brand_name}}</option>
                                                @else
                                                    <option value="$brd->id">{{$brd->brand_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="" class="form-label">Category</label>
                                        <select class="choices form-select" name="category_id">
                                            @foreach($category as $key => $cate)
                                                @if($edit_value->category_id == $cate->id)
                                                    <option value="$cate->id" selected >{{$cate->category_name}}</option>
                                                @else
                                                    <option value="$cate->id">{{$cate->category_name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                            </div>
                        </div>

                        <div class="col-12">
                        
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" id="" rows="3" name="product_description">{{$edit_value->product_description}}</textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" id="" class="form-control" value="{{$edit_value->product_unit_price}}" name="product_unit_price"
                                placeholder="( Price )">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Sale price</label>
                            <input type="text" id="" class="form-control" value="{{$edit_value->product_sale_price}}" name="product_sale_price"
                                placeholder="( Sale price )">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                            <label for="">Size</label>
                            <input type="text" id="" class="form-control" value="{{$edit_value->product_size}}" name="product_size"
                                placeholder="( Size )">
                            </div>
                        </div>

                        <div class="col-12">
                        
                             <div class="form-group">
                             <label for="" class="form-label">Status</label>
                                        <select class="choices form-select" name="product_status">
                                                           
                                            <option value="1" <?php if($edit_value->product_status) echo 'selected' ?>>Active</option>
                                            <option value="0" <?php if(!$edit_value->product_status) echo 'selected' ?>>Inactive</option>
                                   
                                        </select>
                                    </div>       
                        </div>

                        <div class="col-12">
                        <div class="form-group">
                            <label for="">Image</label>
                            <div class="form-file">
                                         
                                        <input type="file" class="form-file-input" name="product_image" id="file-upload">
                                        <label class="form-file-label" for="customFile">
                                            <span class="form-file-text" id="file-name">{{$edit_value->product_image}}</span>
                                            <span class="form-file-button btn-primary "><i data-feather="upload"></i></span>
                                        </label>
                                    </div>
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