

      // Notifications
      function Notificationn(title){
        $.notify({
            title: ` <strong>${title}</strong>`,
            message: '',
            icon: 'fa fa-check-circle'
            },{
            element: 'body',
            position: null,
            type: "success",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class'
        });
    }

    function DangerNotification(title){
        $.notify({
            // options
            title: ` <strong>${title}</strong>`,
            message: '',
            icon: ' fa-exclamation-triangle'
            },{
            // settings
            element: 'body',
            position: null,
            type: "danger",
            allow_dismiss: true,
            newest_on_top: false,
            showProgressbar: false,
            placement: {
                from: "top",
                align: "right"
            },
            offset: 20,
            spacing: 10,
            z_index: 1031,
            delay: 5000,
            timer: 1000,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class'
        });
    }
    // Notifications Ends




        // compare script start

        $(document).on("click", ".product_compare", function () {
            let compare_url = $(this).attr("data-target");

            console.log("count compare record");

            $.ajax({
            type: 'get',
            url: compare_url,
            dataType: 'json',
            success:
                function( data ){
                    var count=0;

                    if (data.status == 200) {
                     //  Notificationn("data.message");
                        toastr.success(data.message);
                    } else {
                       //dangerNotification("data.message");
                       toastr.error(data.message);
                    
                    }
                   // $(".compare_count").html(data.compare_count);
                   Comparecount();
                }
            });

        });


function Comparecount(){
    console.log("count compare record");
    $.ajax({
        type: 'get',
        url: "/compare/product",
        dataType: 'json',
        success:
            function( data ){
                var count=0;
                // $.each(data, function(index, element) {
                //     // console.log(element);
                //     qty = element.quantity;
                //     count+=qty;
                // });

                $(".compare_count").text(data.id);
            }
        });
};



function Cartcount(){
    console.log("count compare record");
    $.ajax({
        type: 'get',
        url: "/cart/product",
        dataType: 'json',
        success:
            function( data ){
                var count=0;
                $.each(data, function(index, element) {
                    // console.log(element);
                 
                    count++;
                });

                $(".cart_count").text(count);
            }
        });
};




function fetchRecord(){
    console.log("fetch record");

    $.ajax({
    type: 'get',
    url: '/cart/product',
    dataType: 'json',
    success:
        function( data ){

           // console.log(data);
               
            var t_data="";
            var total=0;
            var count=0;
            var item_id=[];
            $("#cart_table").html("");
            $.each(data, function(index, element) {
                // console.log(element.id);
                var imag=element.image;
               var link='product/'+element.image;
            //  console.log(link);
                t_data=t_data+
                '<tr id="t_data">'+
                    '<td>'+'<img src="'+link+'" style="height:60px; width:60px;">'+ '</td>'+
                    '<td>'+element.product+'</td>'+
                 
                    '<td>'+'Ksh '+element.price+'</td>'+
            
                    '<td>'+'<a class="remove_cart_item"  data-target="/cart/product_remove/'+element.id+'"  href="javascript:;" ><i class="fa fa-times"></i></a> '+'</td>'+
                '</tr>';
                qty = element.quantity;
                price = element.price;
                prod = qty*price;
                total +=prod;
                qty = element.quantity;
                count+=qty;
                item_id=element.id;
                // console.log(item_id);
            });

        //    $("#total_price").html("Total Amount: Ksh "+total);
            $("#cart_table").append(t_data);
          //  $("#total_price_header").html('<h4>'+"Your Total Amount is : Ksh "+total+'</h4>');
          //  $("#form_amount").html('<input type="hidden" name="total" id="amount"  placeholder="" value='+total+' >');
          //  $("#item_count").html('<input type="hidden" name="item_count" id="item_count"  placeholder="" value='+count+' >');
       
        }
    });
};



        // cart remove

        $(document).on("click", ".remove_cart_item", function () {
            let compare_url = $(this).attr("data-target");

            console.log("cart remove");

            $.ajax({
            type: 'get',
            url: compare_url,
            dataType: 'json',
            success:
                function( data ){
                    var count=0;

                    if (data.status == 200) {
                     //  Notificationn("data.message");
                        toastr.success(data.message);
                    } else {
                       //dangerNotification("data.message");
                       toastr.error(data.message);
                    
                    }
                   // $(".compare_count").html(data.compare_count);
                   Cartcount();
                }
            });

        });



function cartfetchRecord(){
    console.log("fetch record");

    $.ajax({
    type: 'get',
    url: '/cart/product',
    dataType: 'json',
    success:
        function( data ){

           // console.log(data);
               
            var t_data="";
            var total=0;
            var count=0;
            var item_id=[];
            $("#cart_view_load").html("");
            $.each(data, function(index, element) {
                // console.log(element.id);
                var imag=element.image;
               var link='product/'+element.image;
            //  console.log(link);
                t_data=t_data+
                '<tr id="t_data">'+
                    '<td>'+'<img src="'+link+'" style="height:60px; width:60px;">'+ '</td>'+
                    '<td>'+element.product+'</td>'+
                 
                    '<td>'+'Ksh '+element.price+'</td>'+
            
                    '<td>'+'<a class="remove_cart_item"  data-target="/cart/product_remove/'+element.id+'"  href="javascript:;" ><i class="fa fa-times"></i></a> '+'</td>'+
                '</tr>';
                qty = element.quantity;
                price = element.price;
                prod = qty*price;
                total +=prod;
                qty = element.quantity;
                count+=qty;
                item_id=element.id;
                // console.log(item_id);
            });

        //    $("#total_price").html("Total Amount: Ksh "+total);
            $("#cart_view_load").append(t_data);
          //  $("#total_price_header").html('<h4>'+"Your Total Amount is : Ksh "+total+'</h4>');
          //  $("#form_amount").html('<input type="hidden" name="total" id="amount"  placeholder="" value='+total+' >');
          //  $("#item_count").html('<input type="hidden" name="item_count" id="item_count"  placeholder="" value='+count+' >');
       
        }
    });
};



function ress () {
     popular_category_slider.trigger('refresh.owl.carousel');

};