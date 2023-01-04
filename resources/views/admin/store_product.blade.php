@extends('admin.layouts.index')

@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class="mb-0 bc-title"><b>Create Product</b> </h3>
                <a class="btn btn-primary   btn-sm" href="/admin/item"><i class="fa fa-chevron-left"></i> Back</a>
            </div>
        </div>
    </div>
    
    <!-- Form -->
    
    
    <div class="row">
        <div class="col-lg-12">
                    </div>
    </div>
    <!-- Nested Row within Card Body -->
    <form class="admin-form tab-form" id="store_product" method="POST" enctype="multipart/form-data">
               @csrf

                        <div class="row">
    
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" name="name" class="form-control item-name" id="name" placeholder="Enter Name" value="">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug *</label>
                            <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" value="">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group pb-0  mb-0">
                            <label class="d-block">Featured Image *</label>
                        </div>
                        <div class="form-group pb-0 pt-0 mt-0 mb-0">
                        <img class="admin-img lg" src="">
                        </div>
                        <div class="form-group position-relative ">
                            <label class="file">
                                <input type="file" accept="image/*" class="upload-photo" name="photo" id="file" aria-label="File browser example">
                                <span class="file-custom text-left">Upload Image...</span>
                            </label>
                            <br>
                            <span class="mt-1 text-info">Image Size Should Be 800 x 800. or square size</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group pb-0  mb-0">
                            <label>Gallery Images </label>
                        </div>
                        <div class="form-group pb-0 pt-0 mt-0 mb-0">
                            <div id="gallery-images">
                                <div class="single-image">
                                    <img class="admin-img lg" src="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative ">
                            <label class="file">
                                <input type="file" accept="image/*" name="galleries[]" id="file" aria-label="File browser example" multiple="">
                                <span class="file-custom text-left">Upload Image...</span>
                            </label>
                            <br>
                            <span class="mt-1 text-info">Image Size Should Be 800 x 800. or square size</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="sort_details">Short Description *</label>
                            <textarea name="sort_details" id="sort_details" class="form-control" placeholder="Short Description"></textarea>
                        </div>
    
                        <div class="form-group">
                            <label for="details">Description *</label>
                            <textarea name="addproduct_details" id="addproduct_details" class="form-control" ></textarea>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="tags">Product Tags
                                </label>
                            <tags class="tagify  tags">
                                <div contenteditable="" data-placeholder="Tags" class="tagify__input"></div>
                            </tags><input type="text" name="tags" class="tags" id="tags" placeholder="Tags" value="">
                        </div>
                        <div class="form-group">
                            <label class="switch-primary">
                                <input type="checkbox" class="switch switch-bootstrap status radio-check" name="is_specification" value="1" checked="">
                                <span class="switch-body"></span>
                                <span class="switch-text">Specifications</span>
                            </label>
                        </div>
                        {{-- <div id="specifications-section">
                            <div class="d-flex">
    
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="specification_name[]" placeholder="Specification Name" value="">
                                        </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="specification_description[]" placeholder="Specification description" value="">
                                        </div>
                                </div>
                                <div class="flex-btn">
                                    <button type="button" class="btn btn-success add-specification" data-text="Specification Name" data-text1="Specification Description"> <i class="fa fa-plus"></i> </button>
                                </div>
                            </div>
    
                        </div> --}}
                    </div>
                </div>
          
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                       
                        <button type="submit" class="btn btn-secondary mr-2">Save</button>
                        <button type="submit" class="btn btn-info save__edit">Save &amp; Edit</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="discount_price">Current Price
                                *</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="discount_price" name="discount_price" class="form-control" placeholder="Enter Current Price" min="1" step="0.1" value="">
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="previous_price">Previous Price
                                </label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="previous_price" name="previous_price" class="form-control" placeholder="Enter Previous Price" min="1" step="0.1" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
    
                        <div class="form-group">
                            <label for="productcategory_id">Select Category *</label>
                            <select name="productcategory_id" id="productcategory_id"  class="form-control">
                                <option value="" selected="">Select One</option>
                                                          
                                                        @foreach ($category as $cat)

                                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                        @endforeach
                                                        </select>
                        </div>
    
                        <div class="form-group">
                            <label for="productsubcategory_id">Select Sub Category </label>
                            <select name="productsubcategory_id" id="productsubcategory_id" class="form-control">
                                <option value="">Select One</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label for="productchildcategory_id">Select Child Category </label>
                            <select name="productchildcategory_id" id="productchildcategory_id" class="form-control">
                                <option value="">Select One</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label for="brand_id">Select Brand </label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                <option value="" selected="">Select Brand</option>
                                                           
                                                       @foreach ($brands as $brand)
                                                       <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                       @endforeach
                                                        </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="stock">Total in stock
                                *</label>
                            <div class="input-group mb-3">
                                <input type="number" id="stock" name="stock" class="form-control" placeholder="Total in stock" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tax_id">Select Tax *</label>
                            <select name="tax_id" id="tax_id" class="form-control">
                                <option value="">Select One</option>
                                                            <option value="1">High Tax</option>
                                                            <option value="2">Low Tax</option>
                                                            <option value="3">No Tax</option>
                                                        </select>
                        </div>
                        <div class="form-group">
                            <label for="sku">SKU *</label>
                            <input type="text" name="sku" class="form-control" id="sku" placeholder="Enter SKU" value="">
                        </div>
                       
                    </div>
                </div>
            </div>
    
        </div>
    </form>
    
    
    </div>




@stop
