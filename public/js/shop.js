
 
      // Notifications
      function Notificationn(title){
        $.notify({
            title: ` <strong>${title}</strong>`,
            message: '',
            icon: 'fas fa-check-circle'
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
            icon: 'fas fa-exclamation-triangle'
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
                       Notificationn("data.message");
                        toastr.success('success');
                    } else {
                        dangerNotification("data.message");
                    }
                    $(".compare_count").text(data.compare_count);
                }
            });

        });


function Comparecount(){
    console.log("count compare record");
    $.ajax({
        type: 'get',
        url: compare_url,
        dataType: 'json',
        success:
            function( data ){
                var count=0;
                $.each(data, function(index, element) {
                    // console.log(element);
                    qty = element.quantity;
                    count+=qty;
                });
            
                $(".compare_count").text(data.compare_count);
            }
        });
};
    


  
