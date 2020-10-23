*Tạo mới migrations
-   Chạy command: php artisan make:migration create_tbl_product --create=tbl_product


*Tạo bảng trong database

-   Chạy: php artisan migrate

* Xóa migrations an toàn 
-   Xóa thủ công
-   Chạy command: composer dump-autoload

* Sử dụng href="{{URL::to('url')}}"

* Sử dụng biến trong thẻ html

         <div class="avatar mr-1">
                                                <img src="{{URL::to('public/admin/assets/images/avatar/')}}/<?php
                                                    $image = Session::get('admin_image');
                                                    if($image) echo ($image); 
                                                ?>" alt="" srcset="">
                                </div>
                                            <div class="d-none d-md-block d-lg-inline-block"><?php
                                                    $name = Session::get('admin_name');
                                                    if($name){ 
                                                        echo ($name);
                                                    };
                                            ?> </div>