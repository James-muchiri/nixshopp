$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#store_category_form").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#store_category_form');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/store_categories", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');
                        $("#store_category_form").reset();


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});

function cart_table(){


          // AJAX code to submit form.
          $.ajax({
            type: "GET",
            url: "/admin/getcategory", //call  to store form data
         
       
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                var t_data = "";

                if (data.category.length < 1) {

                }
                else {


    $.each(data.category, function (index, element) {


        if (element.status == "enabled"){
                    
        var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
          'Enabled'+
        '</button>';
    }
   else{
        
    var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
        'Disabled'+
      '</button>';
    
    }


        t_data = t_data +       
        '<tr role="row" class="odd">'+
        '<td>'+
            '<img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632341620bbb.jpg" alt="Image Not Found">'+
        '</td>'+
        '<td>'+
            element.name+
        '</td>'+
    
                        '<td>'+
                            '<div class="dropdown">'+
                    
                
                            status+
                    
                    
                                '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(110px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">'+
                                  '<a class="dropdown-item" onclick="cart_statusenable('+element.id+')">Enable</a>'+
                                  '<a class="dropdown-item" onclick="cart_statusdisable('+element.id+')">Disable</a>'+
                                  ' </div>'+
                                  ' </div>'+
                    
                    
                    
                                  ' </td>'+
                                 '<td>'+
                         '<div class="action-list">'+
                         '  <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/category/27/edit">'+
                         '         <i class="fa fa-edit"></i>'+
                         '     </a>'+
                         '      <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/category/27">'+
                         '         <i class="fa fa-trash-alt"></i>'+
                         '      </a>'+
                         '   </div>'+
                         ' </td>'+
                         ' </tr>';
                
                
                
                    });

                }

                $("#cart_table").html("");
                $("#cart_table").append(t_data);



                




            },
            error: function (xhr) {
                console.log(xhr.responseText)
            },

        });

}

function cart_statusdisable(dataId){


          // AJAX code to submit form.
          $.ajax({
            type: "GET",
            url: "/admin/cart_statusdisable/"+ dataId, //call  to store form data
         
       
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data.status);

                if (data.status == 200) {
                    toastr.success('success');
                    cart_table();


                }




            },
            error: function (xhr) {
                console.log(xhr.responseText)
            },

        });


}

function cart_statusenable(dataId){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/cart_statusenable/"+ dataId, //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data.status);

          if (data.status == 200) {
              toastr.success('success');
              cart_table();


          }




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });


}



function sub_cart_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/getsubcategory", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.category.length < 1) {

          }
          else {


$.each(data.category, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr role="row" class="odd">'+
  '<td>'+
      '<img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632341620bbb.jpg" alt="Image Not Found">'+
  '</td>'+
  '<td>'+
      element.name+
  '</td>'+

                  '<td>'+
                      '<div class="dropdown">'+
              
          
                      status+
              
              
                          '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(110px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">'+
                            '<a class="dropdown-item" onclick="cart_statusenable('+element.id+')">Enable</a>'+
                            '<a class="dropdown-item" onclick="cart_statusdisable('+element.id+')">Disable</a>'+
                            ' </div>'+
                            ' </div>'+
              
              
              
                            ' </td>'+
                           '<td>'+
                   '<div class="action-list">'+
                   '  <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/category/27/edit">'+
                   '         <i class="fa fa-edit"></i>'+
                   '     </a>'+
                   '      <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/category/27">'+
                   '         <i class="fa fa-trash-alt"></i>'+
                   '      </a>'+
                   '   </div>'+
                   ' </td>'+
                   ' </tr>';
          
          
          
              });

          }

          $("#sub_cart_table").html("");
          $("#sub_cart_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}



function child_cart_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/getchildcategory", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.category.length < 1) {

          }
          else {


$.each(data.category, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr role="row" class="odd">'+
  '<td>'+
      '<img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1632341620bbb.jpg" alt="Image Not Found">'+
  '</td>'+
  '<td>'+
      element.name+
  '</td>'+

                  '<td>'+
                      '<div class="dropdown">'+
              
          
                      status+
              
              
                          '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; transform: translate3d(110px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">'+
                            '<a class="dropdown-item" onclick="cart_statusenable('+element.id+')">Enable</a>'+
                            '<a class="dropdown-item" onclick="cart_statusdisable('+element.id+')">Disable</a>'+
                            ' </div>'+
                            ' </div>'+
              
              
              
                            ' </td>'+
                           '<td>'+
                   '<div class="action-list">'+
                   '  <a class="btn btn-secondary btn-sm " href="https://geniusdevs.com/codecanyon/omnimart40/admin/category/27/edit">'+
                   '         <i class="fa fa-edit"></i>'+
                   '     </a>'+
                   '      <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/category/27">'+
                   '         <i class="fa fa-trash-alt"></i>'+
                   '      </a>'+
                   '   </div>'+
                   ' </td>'+
                   ' </tr>';
          
          
          
              });

          }

          $("#child_cart_table").html("");
          $("#child_cart_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}


$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#store_subcategory_form").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#store_subcategory_form');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/store_subcategories", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});




$(document).ready(function (e) {
    $('#childcategory_id').change(function () {
        var vall = $(this).val();
        console.log(vall);
        // AJAX code to submit form.
        $.ajax({
            type: "get",
            url: "/admin/get_subcategories/" + vall, //call  to store form data

            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                var t_data = '<option value="" selected="" disabled="">Select One</option>';

                if (data.Sub_Category.length < 1) {

                }
                else {


                    $.each(data.Sub_Category, function (index, element) {


                        t_data = t_data +
                            '<option value="' + element.id + '">' + element.name + '</option>';
                    });

                }

                $("#childsubcategory_id").html("");
                $("#childsubcategory_id").append(t_data);


            },
            error: function (xhr) {
                console.log(xhr.responseText)
            },

        });


    });


});






$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#store_childcategory_form").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#store_childcategory_form');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/store_childcategories", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});




function product_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/getproducts", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.Products.length < 1) {

          }
          else {


$.each(data.Products, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr id="product-bulk-delete" role="row" class="odd">'+
  '<td><input type="checkbox" class="bulk-item" value="586"></td>'+
  ' <td>'+
    '     <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134188F6gHTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg" alt="Image Not Found">'+
        ' </td>'+
    '  <td>'+
    element.name+
        ' </td>'+
    '  <td>'+
    element.c_price+
        ' </td>'+
    ' <td>'+
    '  <div class="dropdown">'+
    status +
            '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/1">Publish</a>'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/0">Unpublish</a>'+
              ' </div>'+
            ' </div>'+
          '</td>'+
    ' <td>'+
    '<p class="'+
                    'bg-info badge text-white'+
                    ' ">'+
                   ' Feature'+
                    '</p>'+
                '</td>'+
    '<td>'+
    'Normal'+
      ' </td>'+
    '<td>'+
    '<div class="dropdown">'+
        '<button class="btn btn-secondary btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
            'Options'+
              '</button>'+
            '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
            '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/586/edit"><i class="fas fa-angle-double-right"></i> Edit</a>'+
                            ' <a class="dropdown-item" target="_blank" href="https://geniusdevs.com/codecanyon/omnimart40/product/Td5BREYLEE-facial-mask-hyaluronic-acid-facial-firming-mask-beautyca"><i class="fas fa-angle-double-right"></i> View</a>'+
                            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/586/attribute"><i class="fas fa-angle-double-right"></i> Attributes</a>'+
                                          '  <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/586/option"><i class="fas fa-angle-double-right"></i> Attribute Options</a>'+
              ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/galleries/586"><i class="fas fa-angle-double-right"></i> Gallery Images</a>'+
                            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/highlight/586"><i class="fas fa-angle-double-right"></i> Highlight</a>'+
              ' <a class="dropdown-item" data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/586"><i class="fas fa-angle-double-right"></i> Delete</a>'+
              ' </div>'+
            ' </div>'+

        
          '</td>'+
'</tr>';
          
          
          
              });

          }

          $("#product_table").html("");
          $("#product_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}




function featured_product_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/getfeatured_product", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.Products.length < 1) {

          }
          else {


$.each(data.Products, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr role="row" class="odd">'+

  ' <td>'+
    '     <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134188F6gHTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg" alt="Image Not Found">'+
        ' </td>'+
    '  <td>'+
    element.name+
        ' </td>'+
    '  <td>'+
    element.c_price+
        ' </td>'+
    ' <td>'+
    '  <div class="dropdown">'+
    status +
            '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/1">Publish</a>'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/0">Unpublish</a>'+
              ' </div>'+
            ' </div>'+
          '</td>'+
          '<td>'+
          '<div class="dropdown">'+
          '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
              'Active'+
                '</button>'+
              '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/is_feature">Active</a>'+
                '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/is_feature">Deactive</a>'+
                '</div>'+
              '</div>'+
            '</td>'+
    
      '<td>'+
      ' <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/40">'+
      ' <i class="fas fa-trash-alt"></i>'+
      ' </a>'+
      '</td>'+
'</tr>';
          
          
          
              });

          }

          $("#featured_product_table").html("");
          $("#featured_product_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#add_featured_product").on('submit', function (e) {
        e.preventDefault();

 
   
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/add_featured_product", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.message);

                    if (data.status == 200) {
                        toastr.success('success');
                        $("#add_featured_product")[0].reset();
                        featured_product_table();

                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });
    
      
    });

});




function new_arrival_product_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/getnew_arrival_product", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.Products.length < 1) {

          }
          else {


$.each(data.Products, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr role="row" class="odd">'+

  ' <td>'+
    '     <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134188F6gHTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg" alt="Image Not Found">'+
        ' </td>'+
    '  <td>'+
    element.name+
        ' </td>'+
    '  <td>'+
    element.c_price+
        ' </td>'+
    ' <td>'+
    '  <div class="dropdown">'+
    status +
            '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/1">Publish</a>'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/0">Unpublish</a>'+
              ' </div>'+
            ' </div>'+
          '</td>'+
          '<td>'+
          '<div class="dropdown">'+
          '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
              'Active'+
                '</button>'+
              '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/is_feature">Active</a>'+
                '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/is_feature">Deactive</a>'+
                '</div>'+
              '</div>'+
            '</td>'+
    
      '<td>'+
      ' <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/40">'+
      ' <i class="fas fa-trash-alt"></i>'+
      ' </a>'+
      '</td>'+
'</tr>';
          
          
          
              });

          }

          $("#new_arrival_product_table").html("");
          $("#new_arrival_product_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#add_new_arrival_product").on('submit', function (e) {
        e.preventDefault();

 
   
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/add_new_arrival_product", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.message);

                    if (data.status == 200) {
                        toastr.success('success');
                        $("#add_new_arrival_product")[0].reset();
                        new_arrival_product_table();



                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });
    
      
    });

});




function top_product_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/gettop_product", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.Products.length < 1) {

          }
          else {


$.each(data.Products, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr role="row" class="odd">'+

  ' <td>'+
    '     <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134188F6gHTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg" alt="Image Not Found">'+
        ' </td>'+
    '  <td>'+
    element.name+
        ' </td>'+
    '  <td>'+
    element.c_price+
        ' </td>'+
    ' <td>'+
    '  <div class="dropdown">'+
    status +
            '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/1">Publish</a>'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/0">Unpublish</a>'+
              ' </div>'+
            ' </div>'+
          '</td>'+
          '<td>'+
          '<div class="dropdown">'+
          '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
              'Active'+
                '</button>'+
              '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/is_feature">Active</a>'+
                '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/is_feature">Deactive</a>'+
                '</div>'+
              '</div>'+
            '</td>'+
    
      '<td>'+
      ' <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/40">'+
      ' <i class="fas fa-trash-alt"></i>'+
      ' </a>'+
      '</td>'+
'</tr>';
          
          
          
              });

          }

          $("#top_product_table").html("");
          $("#top_product_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#add_top_product").on('submit', function (e) {
        e.preventDefault();

 
   
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/add_top_product", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.message);

                    if (data.status == 200) {
                        toastr.success('success');
                        $("#add_top_product")[0].reset();
                        top_product_table();



                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });
    
      
    });

});




function best_product_table(){


    // AJAX code to submit form.
    $.ajax({
      type: "GET",
      url: "/admin/getbest_product", //call  to store form data
   
 
      contentType: false,
      cache: false,
      processData: false,
      success: function (data) {
          console.log(data);
          var t_data = "";

          if (data.Products.length < 1) {

          }
          else {


$.each(data.Products, function (index, element) {


  if (element.status == "enabled"){
              
  var status = '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
    'Enabled'+
  '</button>';
}
else{
  
var status =  '<button class="btn btn-danger btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
  'Disabled'+
'</button>';

}


  t_data = t_data +       
  '<tr role="row" class="odd">'+

  ' <td>'+
    '     <img src="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1634134188F6gHTB1ymRhXfjsK1Rjy1Xaq6zispXad.jpg" alt="Image Not Found">'+
        ' </td>'+
    '  <td>'+
    element.name+
        ' </td>'+
    '  <td>'+
    element.c_price+
        ' </td>'+
    ' <td>'+
    '  <div class="dropdown">'+
    status +
            '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
            ' <a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/1">Publish</a>'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/item/status/586/0">Unpublish</a>'+
              ' </div>'+
            ' </div>'+
          '</td>'+
          '<td>'+
          '<div class="dropdown">'+
          '<button class="btn btn-success btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
              'Active'+
                '</button>'+
              '<div class="dropdown-menu animated--fade-in" aria-labelledby="dropdownMenuButton">'+
              '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/1/is_feature">Active</a>'+
                '<a class="dropdown-item" href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/status/40/0/is_feature">Deactive</a>'+
                '</div>'+
              '</div>'+
            '</td>'+
    
      '<td>'+
      ' <a class="btn btn-danger btn-sm " data-toggle="modal" data-target="#confirm-delete" href="javascript:;" data-href="https://geniusdevs.com/codecanyon/omnimart40/admin/campaign/40">'+
      ' <i class="fas fa-trash-alt"></i>'+
      ' </a>'+
      '</td>'+
'</tr>';
          
          
          
              });

          }

          $("#best_product_table").html("");
          $("#best_product_table").append(t_data);



          




      },
      error: function (xhr) {
          console.log(xhr.responseText)
      },

  });

}



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#add_best_product").on('submit', function (e) {
        e.preventDefault();

 
   
            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/add_best_product", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.message);

                    if (data.status == 200) {
                        toastr.success('success');
                        $("#add_best_product")[0].reset();
                        best_product_table();



                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });
    
      
    });

});



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#store_brands").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#store_brands');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/store_brands", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});






$(document).ready(function (e) {
    $('#productcategory_id').change(function () {
        var vall = $(this).val();
        console.log(vall);
        // AJAX code to submit form.
        $.ajax({
            type: "get",
            url: "/admin/get_subcategories/" + vall, //call  to store form data

            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                var t_data = '<option value="" selected="" disabled="">Select One</option>';

                if (data.Sub_Category.length < 1) {

                }
                else {


                    $.each(data.Sub_Category, function (index, element) {


                        t_data = t_data +
                            '<option value="' + element.id + '">' + element.name + '</option>';
                    });

                }

                $("#productsubcategory_id").html("");
                $("#productsubcategory_id").append(t_data);


            },
            error: function (xhr) {
                console.log(xhr.responseText)
            },

        });


    });


});






$(document).ready(function (e) {
    $('#productsubcategory_id').change(function () {
        var vall = $(this).val();
        console.log(vall);
        // AJAX code to submit form.
        $.ajax({
            type: "get",
            url: "/admin/get_childcategories/" + vall, //call  to store form data

            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                console.log(data);
                var t_data = '<option value="" selected="" disabled="">Select One</option>';

                if (data.child_Category.length < 1) {

                }
                else {


                    $.each(data.child_Category, function (index, element) {


                        t_data = t_data +
                            '<option value="' + element.id + '">' + element.name + '</option>';
                    });

                }

                $("#productchildcategory_id").html("");
                $("#productchildcategory_id").append(t_data);


            },
            error: function (xhr) {
                console.log(xhr.responseText)
            },

        });


    });


});


$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#store_product").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#store_product');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/store_product", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});





$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#slider_sibmit").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#slider_sibmit');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/slider_sibmit", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#heroimg1").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#heroimg1');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/heroimg1", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});




$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#heroimg2").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#heroimg2');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/heroimg2", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#3banner1").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#3banner1');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/3banner1", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});



$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#3banner2").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#3banner2');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/3banner2", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});





$(document).ready(function (e) {
    // Submit form data via Ajax
    $("#3banner3").on('submit', function (e) {
        e.preventDefault();


        next_fs = $('#3banner3');

        curInputs = next_fs.find("input[type='text']");
        isValid = true;
        console.log(curInputs);
        for (var i = 0; i < curInputs.length; i++) {
            //  console.log(curInputs[i].value);
            if (!curInputs[i].value) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
                //   console.log(curInputs[i].value);
            }
        }
        if (isValid) {

            // AJAX code to submit form.
            $.ajax({
                type: "POST",
                url: "/admin/3banner3", //call  to store form data
                data: new FormData($(this)[0]),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    console.log(data.status);

                    if (data.status == 200) {
                        toastr.success('success');


                    }




                },
                error: function (xhr) {
                    console.log(xhr.responseText)
                },

            });

        }
    });

});



$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#3-column-banner-Second1").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#3-column-banner-Second1');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/3-column-banner-Second1", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});




$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#3-column-banner-Second2").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#3-column-banner-Second2');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/3-column-banner-Second2", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});



$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#3-column-banner-Second3").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#3-column-banner-Second3');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/3-column-banner-Second3", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});



$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#2-column-banner2").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#2-column-banner2');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/2-column-banner2", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});




$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#2-column-banner1").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#2-column-banner1');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/2-column-banner1", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});



$(document).ready(function (e) {
  $('#bannercategory_id1').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannersubcategory_id1").html("");
              $("#bannersubcategory_id1").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#bannersubcategory_id1').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannerchildcategory_id1").html("");
              $("#bannerchildcategory_id1").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#bannercategory_id2').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannersubcategory_id2").html("");
              $("#bannersubcategory_id2").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#bannersubcategory_id2').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannerchildcategory_id2").html("");
              $("#bannerchildcategory_id2").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});




$(document).ready(function (e) {
  $('#bannercategory_id3').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannersubcategory_id3").html("");
              $("#bannersubcategory_id3").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#bannersubcategory_id3').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannerchildcategory_id3").html("");
              $("#bannerchildcategory_id3").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});



$(document).ready(function (e) {
  $('#bannercategory_id4').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannersubcategory_id4").html("");
              $("#bannersubcategory_id4").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#bannersubcategory_id4').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#bannerchildcategory_id4").html("");
              $("#bannerchildcategory_id4").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});






$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#popular_cat_form").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#popular_cat_form');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/popular_cat_form", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});






$(document).ready(function (e) {
  $('#featuredcategory_id1').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredsubcategory_id1").html("");
              $("#featuredsubcategory_id1").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#featuredsubcategory_id1').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredchildcategory_id1").html("");
              $("#featuredchildcategory_id1").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#featuredcategory_id2').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredsubcategory_id2").html("");
              $("#featuredsubcategory_id2").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#featuredsubcategory_id2').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredchildcategory_id2").html("");
              $("#featuredchildcategory_id2").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});




$(document).ready(function (e) {
  $('#featuredcategory_id3').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredsubcategory_id3").html("");
              $("#featuredsubcategory_id3").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#featuredsubcategory_id3').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredchildcategory_id3").html("");
              $("#featuredchildcategory_id3").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});



$(document).ready(function (e) {
  $('#featuredcategory_id4').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredsubcategory_id4").html("");
              $("#featuredsubcategory_id4").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#featuredsubcategory_id4').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#featuredchildcategory_id4").html("");
              $("#featuredchildcategory_id4").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});






$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#featured_cat_form").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#featured_cat_form');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/featured_cat_form", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});









$(document).ready(function (e) {
  $('#threecolcategory_id1').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#threecolsubcategory_id1").html("");
              $("#threecolsubcategory_id1").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#threecolsubcategory_id1').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#threecolchildcategory_id1").html("");
              $("#threecolchildcategory_id1").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#threecolcategory_id2').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#threecolsubcategory_id2").html("");
              $("#threecolsubcategory_id2").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#threecolsubcategory_id2').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#threecolchildcategory_id2").html("");
              $("#threecolchildcategory_id2").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});




$(document).ready(function (e) {
  $('#threecolcategory_id3').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_subcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.Sub_Category.length < 1) {

              }
              else {


                  $.each(data.Sub_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#threecolsubcategory_id3").html("");
              $("#threecolsubcategory_id3").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});


$(document).ready(function (e) {
  $('#threecolsubcategory_id3').change(function () {
      var vall = $(this).val();
      console.log(vall);
      // AJAX code to submit form.
      $.ajax({
          type: "get",
          url: "/admin/get_childcategories/" + vall, //call  to store form data

          dataType: 'json',
          contentType: false,
          cache: false,
          processData: false,
          success: function (data) {
              console.log(data);
              var t_data = '<option value="" selected="" disabled="">Select One</option>';

              if (data.child_Category.length < 1) {

              }
              else {


                  $.each(data.child_Category, function (index, element) {


                      t_data = t_data +
                          '<option value="' + element.id + '">' + element.name + '</option>';
                  });

              }

              $("#threecolchildcategory_id3").html("");
              $("#threecolchildcategory_id3").append(t_data);


          },
          error: function (xhr) {
              console.log(xhr.responseText)
          },

      });


  });


});




$(document).ready(function (e) {
  // Submit form data via Ajax
  $("#Three_column_category_form").on('submit', function (e) {
      e.preventDefault();


      next_fs = $('#Three_column_category_form');

      curInputs = next_fs.find("input[type='text']");
      isValid = true;
      console.log(curInputs);
      for (var i = 0; i < curInputs.length; i++) {
          //  console.log(curInputs[i].value);
          if (!curInputs[i].value) {
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
              //   console.log(curInputs[i].value);
          }
      }
      if (isValid) {

          // AJAX code to submit form.
          $.ajax({
              type: "POST",
              url: "/admin/Three_column_category_form", //call  to store form data
              data: new FormData($(this)[0]),
              dataType: 'json',
              contentType: false,
              cache: false,
              processData: false,
              success: function (data) {
                  console.log(data.status);

                  if (data.status == 200) {
                      toastr.success('success');


                  }




              },
              error: function (xhr) {
                  console.log(xhr.responseText)
              },

          });

      }
  });

});

