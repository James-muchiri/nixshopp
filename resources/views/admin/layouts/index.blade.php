<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>OmniMart</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon"  type="image/x-icon" href="https://geniusdevs.com/codecanyon/omnimart40/assets/images/1629651232pre.png"/>

	<!-- Fonts and icons -->

	<!-- CSS Files -->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/azzara.min.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/tagify.css') }}" rel="stylesheet">


    <link href="{{ asset('backend/css/bootstrap-iconpicker.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/magnific-popup.css') }}" rel="stylesheet">
	<!-- Custom CSS -->

    <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="https://geniusdevs.com/codecanyon/omnimart40/assets/back/css/select2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    	<!--   Core JS Files   -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/core/jquery.3.6.0.min.js"></script>
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/core/popper.min.js"></script>
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/core/bootstrap.min.js"></script>

    <script src="{{ asset('backend/js/main.js') }}"></script>

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

<script>
    var mainbs = {"is_announcement":"1","announcement_delay":"1.00","overlay":null};
</script>
	<!--   Core JS Files   -->






	<!-- jQuery UI -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/moment/moment.min.js"></script>

	<!-- Datatables -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/datatables/datatables.min.js"></script>
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>


	<!-- Bootstrap Notify -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Chartjs -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/chart.min.js"></script>

	<!-- Editor -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/editor.js"></script>
    <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Tagify -->
    <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/tagify.js"></script>

    <!-- JS Color -->
    <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/jscolor.js"></script>

    <!-- Magnific Popup -->
    <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/jquery.magnific-popup.min.js"></script>

    <!-- Sortable -->
    <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/sortable.js"></script>

    <!-- Icon Picker -->
    <script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/bootstrap-iconpicker.bundle.min.js"></script>

<!-- Azzara JS -->
<script src="{{ asset('backend/js/ready.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

	<!-- Custom JS -->
	<script src="https://geniusdevs.com/codecanyon/omnimart40/assets/back/js/custom.js"></script>
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

</script>




</body>
</html>
