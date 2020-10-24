@extends ('admin.dashboard')
@section('content')

<div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">All brands</h4> 
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
                    
                                        <th data-sortable="false">Description</th>
                               
                                        <th data-sortable="false">Image</th>
                                        <th data-sortable="false">Created</th>
                                        <th data-sortable="false">Updated</th>
                                        <th data-sortable="false">Status</th>
                                        <th data-sortable="false">Edit</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($all_brands as $key => $brd)
                                    <tr>
                                        <td>{{$brd->id}}</td>
                                        <td>{{$brd->brand_name}}</td>

                                        <td>{{$brd->brand_description}}</td>
                            
                                        <td><image style="height:100px;" src="{{URL::to('public/images/brands/'.$brd->brand_image)}}"></image></td>
                                        <td>{{$brd->created_at}}</td>
                                        <td>{{$brd->updated_at}}</td>
                                        
                                        <td>
                                            <?php
                                            if ($brd->brand_status){ ?>
                                                <a href="{{URL::to('/inactive_brand/'.$brd->id)}}"><span class="badge bg-success">Active</span></a>
                                            <?php
                                            }else { ?>
                                                <a href="{{URL::to('/active_brand/'.$brd->id)}}"><span class="badge bg-danger">Inactive</span></a>
                                            <?php
                                            } ?>
                                            
                                        </td>
                                        <td>
                                        <a href="{{URL::to('/edit_brand/'.$brd->id)}}" ><i data-feather="edit"></i></a>
                                        <a onclick="return confirm('Are you sure to delete this brand?')" href="{{URL::to('/delete_brand/'.$brd->id)}}"><i data-feather="trash-2"></i></a>
                                        </td>
                        
                                    </tr>
                                    @endforeach
                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                

@endsection