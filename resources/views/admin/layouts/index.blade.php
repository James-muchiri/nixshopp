<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>MiniMart</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon"  type="image/x-icon" href="{{ asset('images/1629651232pre.png') }}"/>

	<!-- Fonts and icons -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




	<!-- CSS Files -->

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/azzara.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-iconpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/magnific-popup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


	<!-- Custom CSS -->   
    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">    
	<link rel="stylesheet" href="{{ asset('backend/css/select2.css') }}">
  

    	<!--   Core JS Files   --> 
  <script src="{{ asset('backend/js/jquery.3.6.0.min.js') }}"></script>
	<script src="{{ asset('backend/js/popper.min.js') }}"></script>
	<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/main.js') }}"></script>
    <style type="text/css">/* Chart.js */
      @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>
<body>
	<div class="wrapper">

        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')



		<div class="main-panel">
			<div class="content">
				<div class="page-inner">

                    @yield('content')



				</div>
			</div>
        </div>

    </div>


	
  	<!-- jQuery UI  {{ asset('backend/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}    -->
	<script src="{{ asset('backend/js/plugin/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('backend/js/plugin/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar    -->
	<script src="{{ asset('backend/js/plugin/jquery.scrollbar.min.js') }} "></script>

	<!-- Moment JS   -->
	<script src="{{ asset('backend/js/plugin/moment.min.js') }}"></script>

	<!-- Datatables  -->
	<script src="{{ asset('backend/js/plugin/datatables.min.js') }}"></script>
	<script src="{{ asset('backend/js/plugin/dataTables.bootstrap4.min.js') }}"></script>



	<!-- Bootstrap Notify  -->
	<script src="{{ asset('backend/js/plugin/bootstrap-notify.min.js') }}"></script>

	<!-- Chartjs -->
	<script src="{{ asset('backend/js/plugin/chart.min.js') }}"></script>

	<!-- Editor   -->
	<script src="{{ asset('backend/js/plugin/editor.js') }}"></script>
    <script src="{{ asset('backend/js/plugin/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Tagify  -->
    <script src="{{ asset('backend/js/tagify.js') }}"></script>


    <!-- Magnific Popup  -->
    <script src="{{ asset('backend/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- Sortable  -->
    <script src="{{ asset('backend/js/sortable.js') }}"></script>

    <!-- Icon Picker   -->
    <script src="{{ asset('backend/js/plugin/bootstrap-iconpicker.bundle.min.js') }}"></script>

<!-- Azzara JS -->
<script src="{{ asset('backend/js/ready.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

	<!-- Custom JS  -->
	<script src="{{ asset('backend/js/custom.js') }}"></script>
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.sumoselect/3.0.2/jquery.sumoselect.min.js"></script>

    <script>




			tinymce.init({
    selector: '#addproduct_details',
    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
	init_instance_callback : function(editor) {
var freeTiny = document.querySelector('.tox .tox-notification--in');
freeTiny.style.display = 'none';
	},
    image_advtab: true,
    link_list: [
      { title: 'My page 1', value: 'https://www.codexworld.com' },
      { title: 'My page 2', value: 'http://www.codexqa.com' }
    ],
    image_list: [
      { title: 'My page 1', value: 'https://www.codexworld.com' },
      { title: 'My page 2', value: 'http://www.codexqa.com' }
    ],
    image_class_list: [
      { title: 'None', value: '' },
      { title: 'Some class', value: 'class-name' }
    ],
    importcss_append: true,
    file_picker_callback: (callback, value, meta) => {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
      }

      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
      }

      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
      }
    },
    templates: [
      { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
      { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
      { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 400,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'




});

</script>

<!-- Scripts -->


<script>
 toastr.options = {
"closeButton": false,
"debug": false,
"newestOnTop": false,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}

</script>

<script>

  multipleLineChart = document.getElementById('multipleLineChart').getContext('2d'),
  multipleLineChart2 = document.getElementById('multipleLineChart2').getContext('2d')


      var myMultipleLineChart = new Chart(multipleLineChart, {
    type: 'line',
    data: {
      labels: ['19 Jan','18 Jan','17 Jan','16 Jan','15 Jan','14 Jan','13 Jan','12 Jan','11 Jan','10 Jan','09 Jan','08 Jan','07 Jan','06 Jan','05 Jan','04 Jan','03 Jan','02 Jan','01 Jan','31 Dec','30 Dec','29 Dec','28 Dec','27 Dec','26 Dec','25 Dec','24 Dec','23 Dec','22 Dec','21 Dec',],
      datasets: [{
        label: "Product Sales",
        borderColor: "#1d7af3",
        pointBorderColor: "#FFF",
        pointBackgroundColor: "#1d7af3",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 1,
        pointRadius: 4,
        backgroundColor: 'transparent',
        fill: true,
        borderWidth: 2,
        data: ['0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0',]
      }]
    },
    options : {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      tooltips: {
        bodySpacing: 4,
        mode:"nearest",
        intersect: 0,
        position:"nearest",
        xPadding:10,
        yPadding:10,
        caretPadding:10
      },
      layout:{
        padding:{left:15,right:15,top:15,bottom:15}
      }
    }
  });

      var myMultipleLineChart2 = new Chart(multipleLineChart2, {
    type: 'line',
    data: {
      labels: ['19 Jan','18 Jan','17 Jan','16 Jan','15 Jan','14 Jan','13 Jan','12 Jan','11 Jan','10 Jan','09 Jan','08 Jan','07 Jan','06 Jan','05 Jan','04 Jan','03 Jan','02 Jan','01 Jan','31 Dec','30 Dec','29 Dec','28 Dec','27 Dec','26 Dec','25 Dec','24 Dec','23 Dec','22 Dec','21 Dec'],
      datasets: [ {
        label: "Earning"+' Ksh',
        borderColor: "#f3545d",
        pointBorderColor: "#FFF",
        pointBackgroundColor: "#f3545d",
        pointBorderWidth: 2,
        pointHoverRadius: 4,
        pointHoverBorderWidth: 1,
        pointRadius: 4,
        backgroundColor: 'transparent',
        fill: true,
        borderWidth: 2,
        data: ['0','0','0','0','0','0','0','0','0','0','5','3','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0']
      }]
    },
    options : {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        display: false
      },
      tooltips: {
        bodySpacing: 4,
        mode:"nearest",
        intersect: 0,
        position:"nearest",
        xPadding:10,
        yPadding:10,
        caretPadding:10
      },
      layout:{
        padding:{left:15,right:15,top:15,bottom:15}
      }
    }
  });


</script>




</body>
</html>
