@extends ('admin.dashboard')
@section('content')

<div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All products</h4> 
                        <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<h6>' .$message. '</h6>';
                                Session::put('message', null);
                            }
                        ?>
                        <div class="d-flex ">
                            <a href="#"><i data-feather="download"></i></a>
                        </div>
                    </div>
                   
                        
                   
                    
                    <div class="card-body px-0 pb-0">
                        <div class="table-responsive">
                            <table class='table mb-0' id="table1">
                                <thead>
                                    <tr>
                                        <th data-sortable="false">ID</th>
                                        <th data-sortable="false">Name</th>
                                        <th data-sortable="false">Brand</th>
                                        <th data-sortable="false">Description</th>
                                        <th data-sortable="false">Price</th>
                                        <th data-sortable="false">Sale</th>
                                        <th data-sortable="false">Size</th>
                                        <th data-sortable="false">Image</th>
                                        <th data-sortable="false">Created</th>
                                        <th data-sortable="false">Updated</th>
                                        <th data-sortable="false">Status</th>
                                        <th data-sortable="false">Edit</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_products as $key => $prod)
                                    <tr>
                                        <td>{{$prod->id}}</td>
                                        <td>{{$prod->product_name}}</td>
                                        <td>{{$prod->product_brand}}</td>
                                        <td>{{$prod->product_description}}</td>
                                        <td>{{$prod->product_unit_price}}</td>
                                        <td>{{$prod->product_sale_price}}</td>
                                        <td>{{$prod->product_size}}</td>
                                        <td>{{$prod->product_image}}</td>
                                        <td>{{$prod->created_at}}</td>
                                        <td>{{$prod->updated_at}}</td>
                                        <td>
                                            <?php
                                            if ($prod->product_status){ ?>
                                                <a href="{{URL::to('/inactive_product/'.$prod->id)}}"><span class="badge bg-success">Active</span></a>
                                            <?php
                                            }else { ?>
                                                <a href="{{URL::to('/active_product/'.$prod->id)}}"><span class="badge bg-danger">Inactive</span></a>
                                            <?php
                                            } ?>
                                            
                                        </td>
                                        <td>
                                        <a href="{{URL::to('/edit_product/'.$prod->id)}}" ><i data-feather="edit"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this product?')" href="{{URL::to('/delete_product/'.$prod->id)}}"><i data-feather="trash-2"></i></a>
                                        </td>
                        
                                    </tr>
                                    @endforeach
                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                

@endsection