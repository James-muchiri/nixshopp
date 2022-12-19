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
                    $.each(data, function(index, element) {
                        // console.log(element);
                        qty = element.quantity;
                        count+=qty;
                    });
                    if (data.status == 1) {
                        successNotification(data.message);
                    } else {
                        dangerNotification(data.message);
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
    