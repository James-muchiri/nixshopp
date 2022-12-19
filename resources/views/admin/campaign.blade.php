@extends('admin.layouts.index')

@section('content')
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Campaign Offer</b></h3>
                </div>
        </div>
    </div>

    

	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
                        <form action="https://geniusdevs.com/codecanyon/omnimart40/admin/setting/update" method="POST">
                <input type="hidden" name="_token" value="JYjeTaAFpWxYxidkdeqcJDL5SdPTspOxaHQSdxD0">
                <div class="row">
                    
                    <div class="col-md-5">
                        <div class="form-group product-serch">
                            <label for="name">Campaign Title *</label>
                            <input type="text" required="" class="form-control" name="campaign_title" value="Deals Of The Week" placeholder="Campaign Section Title">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group product-serch">
                            <label for="name">Campaign Last Date Time *</label>
                            <input type="text" required="" class="form-control" name="campaign_end_date" value="10/10/2022" placeholder="Enter Date" id="datepicker">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group product-serch">
                            <label for="campaign_status">Status *</label>
                            <select name="campaign_status" class="form-control" id="campaign_status">
                                <option value="1" selected="">Publish</option>
                                <option value="2">Unpublish</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
		</div>
	</div>

	<div class="card shadow mb-4">
        <div class="card-header">
            <h4 class="card-title">Product Added for Campaign</h4>
            <div class="row">
                <form action="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign" method="POST">
                    <input type="hidden" name="_token" value="JYjeTaAFpWxYxidkdeqcJDL5SdPTspOxaHQSdxD0">                    <div class="col-md-6">
                        <div class="form-group ">
                            <select id="basic" name="item_id" class="form-control select2-hidden-accessible" data-select2-id="basic" tabindex="-1" aria-hidden="true">
                                <option value="" disabled="" selected="" data-select2-id="2">Select Product</option>
                                                                    <option value="587">New French Elegant White Bubble Sleeve Party Dress Casual A-Line Dresses, Long Sleeve Dresses</option>
                                                                    <option value="586">BREYLEE facial mask hyaluronic acid facial firming mask beauty</option>
                                                                    <option value="585">Home Use Beauty Device Face Massager Facial Lifting Tool Beauty Anti-Aging</option>
                                                                    <option value="584">Latex free makeup sponge Customized beauty make up blender makeup spong</option>
                                                                    <option value="583">Beauty Beauty Anti-wrinkle USB Charging Neck Wrinkle Removal Neck Care</option>
                                                                    <option value="582">Mini Electric Silicone Face Brush Massager Cepillo Facial Beautiful Silicone Facial Cleansing Brush</option>
                                                                    <option value="581">Face Lift Band Facial Beauty Slimming Double Chin Bandage Strap Weight</option>
                                                                    <option value="580">Mask stick to your face moisture skin care clay facial natural moisturiser low moq</option>
                                                                    <option value="577">Best Online Wholesale Website Design and development company | Ecommerce shopping webdesign</option>
                                                                    <option value="576">Create a Wordpress Website Designers Ecommerce, Multivendor Website Software</option>
                                                                    <option value="575">wordpress shopify Start Your Own eCommerce Site Create Your Online Store Today online store websit</option>
                                                                    <option value="574">Website Development Payment Gateway Website Online Business Webdesign Responsive</option>
                                                                    <option value="573">Custom Website Builder Shopping Website Design and Development</option>
                                                                    <option value="572">Wordpress Ecommerce Online Store B2C Online Shop Website Design Business Online Website</option>
                                                                    <option value="571">Korean Beauty Organic Brightening Peel off Hyaluronic Acid Facial Jelly Powder</option>
                                                                    <option value="570">OEM ODM Fullerene essence best face moisturizer whitening anti-aging cream</option>
                                                                    <option value="569">AMEIZII Beauty And Personal Care Face Skin Masks Nose Blackhead Remover</option>
                                                                    <option value="568">Men Shirt Custom Shirts High Quality Men Women Bamboo Fiber Long Sleeve 3</option>
                                                                    <option value="567">Slim Fit Joggers Tapered Sweatpants For Gym Casual Zipper</option>
                                                                    <option value="566">Pants Men Jogger Pants Just Arrived Street Type Fitness Running Active Wear</option>
                                                                    <option value="565">Pants Wholesales Custom Cotton Workout Exercise Sweatpants Gym Jogger Pants</option>
                                                                    <option value="564">Pants Factory Hot Sales Large Pockets Elastic Trousers Men Cargo Pants</option>
                                                                    <option value="563">Men Shirt Custom Shirts Hot Sale Men Women Polyester Cotton Long Sleeve Casual pro</option>
                                                                    <option value="562">Men Leather Jacket Men New Men High Quality Collar Motorcycle Punk Leather Jacket</option>
                                                                    <option value="561">Men Shirt Custom Shirts High Quality Men Women Bamboo Fiber Long Sleeve</option>
                                                                    <option value="560">Men Shirt Custom Shirts Hot Sale Men Women Polyester Cotton Long Sleeve Casual</option>
                                                                    <option value="559">Shirts Menshirts Mens Cotton Shirt Factory Direct Various Style Customization</option>
                                                                    <option value="546">DC-7200 DSLR support 32G sd card video camera 33 Mega pixels digital camera dslr HD professional</option>
                                                                    <option value="545">Dropshipping EIS 2.4 inch LCD Full HD 720P Recording 1.3 Mega HD DV SLR Camera</option>
                                                                    <option value="544">Wholesale Price 1.3 Mega HD DV SLR Camera, 2.4 inch LCD Full HD 720P Recording, EIS, Supply Drops</option>
                                                                    <option value="543">New product 2019 Refurbished used smart phone for I phone XS MAX XR 64GB 256GB 4G</option>
                                                                    <option value="542">Cheap Price Mobile Phones i13 Pro 6.6inch FHD Big Screen Smart Phone 12+512GB</option>
                                                                    <option value="541">Hot Selling s10+ Unlocked 8+16MP 8 Core Dual SIM 4G+64G Cheap Smart Phone 5.8 inch</option>
                                                                    <option value="540">UMIDIGI A9 Pro Android Mobile Phone 4g 48MP Quad Camera 6.3" FHD+ Full Screen 6GB RAM</option>
                                                                    <option value="539">Clothing Women 2021 New Fashion Printed Knitwear Round Neck Casual Couple Clothing Christmas</option>
                                                                    <option value="538">New Arrive Spring Fall Women Clothing Plus Size Dresses Floral Layered Ruffle Off Shoulder Dress</option>
                                                                    <option value="537">Hot Sale Women Clothing 2021 Designer Clothes Women Clothing Sexy Dress</option>
                                                                    <option value="536">B4301 2021 New Arrivals Wholesale Hot Night Sexy Mini Bodycon Summer Dress</option>
                                                                    <option value="535">2021 Summer Women Clothing Ropa Sexy Lady Cut Out Halter Mini Dresses</option>
                                                                    <option value="534">Top Sale High Quality Newest Designs Custom Women Clothing Wholesale from China Dresses</option>
                                                                    <option value="533">Casual Minimalist Tie Waist women clothing Denim Halter Midi Pencil Sling Dresses</option>
                                                                    <option value="532">Shein Womens Clothing 2021 Summer Fashion Design Clothing Manufacturer Lantern Long Sleeve</option>
                                                                    <option value="531">Women Women Fall 2021 Women Clothes Backless Halter Dress Casual Jersey Dress Mini Sexy Knit Dress</option>
                                                                    <option value="530">Best Sale Fashion Elegant Muslim stitching National style vintage double pocket Plaid islamic dress</option>
                                                                    <option value="529">Plus size women Clothing floral print Long sleeve Maxi African Split Dress for women</option>
                                                                    <option value="528">Bodycon Tube Tie Dye Summer Dress Sun Dresses 2021 Colorful Women Long Floral Summer Dress</option>
                                                                    <option value="527">New arrivals Hot Sale Summer New Women's Long Dresses Beach Floral Print Boho Maxi Dress</option>
                                                                    <option value="526">OEM Morden Fashion Design Women Clothing Super Eight Silk Wrap V-neck Satin Mini Dress</option>
                                                                    <option value="525">New Women's Square Collar Pleated Long Sleeve Dresses</option>
                                                                    <option value="524">Women's Women Clothing Women Dresses Women Bodycon 2021 Trendy Black Women's Sexy Dres</option>
                                                            </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" data-select2-id="1" style="width: 319px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-basic-container"><span class="select2-selection__rendered" id="select2-basic-container" role="textbox" aria-readonly="true" title="Select Product">Select Product</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add To Campaign</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
		<div class="card-body">

            <div id="admin-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row add-btn-area"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="admin-table_length"><label>Show <select name="admin-table_length" aria-controls="admin-table" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="admin-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="admin-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped dataTable no-footer" id="admin-table" width="100%" cellspacing="0" role="grid" aria-describedby="admin-table_info" style="width: 100%;">

                <thead>
                    <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 90.9531px;">Image</th><th width="40%" class="sorting_disabled" rowspan="1" colspan="1" style="width: 365px;">Name</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 77.2969px;">Price</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100.594px;">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 137.984px;">Show Home Page</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 54.1719px;">Action</th></tr>
                </thead>

                <tbody>
                                                                    
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                             
                    
                <tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134720Hedf90cf6656546e7a8548d4980edc5bda.jpg" alt=""></td>
                              <td>Men Shirt Custom Shirts Hot Sale Men Women Polyester Cotton Long Sleeve Casual pro</td>
                              <td> $1,352.81</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/40">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134938Hcb62dec2d6a241fc90ce2bb04059684em.jpg" alt=""></td>
                              <td>UMIDIGI A9 Pro Android Mobile Phone 4g 48MP Quad Camera 6.3" FHD+ Full Screen 6GB RAM</td>
                              <td> $1,573.03</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/39/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/39">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135320H408d7d7e37b4437297de600584c1af1fL.jpg" alt=""></td>
                              <td>2021 Summer Women Clothing Ropa Sexy Lady Cut Out Halter Mini Dresses</td>
                              <td> $134.83</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/38/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/38">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135337H948b3bef197c492d999473dffa5303f9P.jpg" alt=""></td>
                              <td>Top Sale High Quality Newest Designs Custom Women Clothing Wholesale from China Dresses</td>
                              <td> $59.55</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/37/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/37">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634135061Hd8364db18d9942a38e89779ca3b4fa7an.jpg" alt=""></td>
                              <td>New Arrive Spring Fall Women Clothing Plus Size Dresses Floral Layered Ruffle Off Shoulder Dress</td>
                              <td> $134.83</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/36/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/36">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134831H75345266923349e280d5f5e5fd5c71e5a.jpg" alt=""></td>
                              <td>Dropshipping EIS 2.4 inch LCD Full HD 720P Recording 1.3 Mega HD DV SLR Camera</td>
                              <td> $134.83</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/35/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/35">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="odd">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134888H624bc94495584b2384c07e2db9f2bdfcd.jpg" alt=""></td>
                              <td>New product 2019 Refurbished used smart phone for I phone XS MAX XR 64GB 256GB 4G</td>
                              <td> $932.58</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/34/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/34">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr><tr role="row" class="even">
                              <td><img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134777H8fb00d2318bd48048dcd8bf2546f3f52h.jpg" alt=""></td>
                              <td>Shirts Menshirts Mens Cotton Shirt Factory Direct Various Style Customization</td>
                              <td> $1,352.81</td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Publish
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/1/status">Publish</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/0/status">Unpublish</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Active
                                    </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/1/is_feature">Active</a>
                                      <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/33/0/is_feature">Deactive</a>
                                    </div>
                                  </div>
                            </td>
                              <td>
                                <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/33">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                          </td></tr></tbody>

            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="admin-table_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="admin-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="admin-table_previous"><a href="#" aria-controls="admin-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="admin-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="admin-table_next"><a href="#" aria-controls="admin-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
		</div>
	</div>

</div>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="confirm-deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

		<!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
		</div>

		<!-- Modal Body -->
        <div class="modal-body">
			You are going to delete this item. All contents related with this item will be lost. Do you want to delete it?
		</div>

		<!-- Modal footer -->
        <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			<form action="" class="d-inline btn-ok" method="POST">

                <input type="hidden" name="_token" value="JYjeTaAFpWxYxidkdeqcJDL5SdPTspOxaHQSdxD0">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>

			</form>
		</div>

      </div>
    </div>
  </div>



@stop
