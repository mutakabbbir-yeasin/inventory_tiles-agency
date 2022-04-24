<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" integrity="sha512-E+53kXnJyuZFSz75xSmTfCpUNj3gp9Bd80TeQQMTPJTVWDRHPOpEYczGwWtsZXvaiz27cqvhdH8U+g/NMYua3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('public/lib/fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/lib/select2/css/select2.min.css')}}" rel="stylesheet">

    <script src="{{ asset('public/lib/jquery/jquery.min.js') }}"></script>
{{-- data table -------- --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- datatable buttot -->
<!-- <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<link  href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script> -->




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('public/css/bracket.css')}}">
  </head>

  <body>
 

 @include('layout.left-menu')
 @include('layout.head-panel')



    <!-- ########## START: MAIN PANEL ########## -->

    <div class="br-mainpanel">
     

    @yield('content')
     




   
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2022. All Rights Reserved.</div>
       <!--    <div>Attentively and carefully made by ThemePixels.</div> -->
        </div>
        <div class="footer-right d-flex align-items-center">
          <!-- <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a> -->
        </div>
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    {{-- data table start ----------------- --}}
 

    <script type="text/javascript">
      $(document).ready(function () {
       $('#dtable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('show.biller.biller-list') }}",
                "columns": [
                        
                         { data: 'name' },
                         { data: 'company_name'},
                         { data: 'vat_number'},
                         { data: 'email'},
                         { data: 'phone_number'},
                         { data: 'address'},
                         { data:'action'}
                     
                      ]
            })

       $('#dtable1').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('show.biller.biller-list') }}",
                "columns": [
                        
                      { 
                      data: 'category_name', 
                      name: 'category_name' 
                      },
                      { 
                      data: 'category_slug', 
                      name: 'category_slug'
                      },
                         
                      { 
                      data: 'category_description', 
                      name: 'category_description'
                      },
                         
                         
                      {
                      data: 'action', 
                      name: 'action',
                      orderable: false,
                      searchable:false}
                     
                      ]
            })
         });
     </script>
 
    {{-- data table end ----------------- --}}

    
    <script src="{{ asset('public/lib/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{ asset('public/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('public/lib/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('public/lib/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('public/lib/peity/jquery.peity.min.js')}}"></script>
    <script src="{{ asset('public/lib/rickshaw/vendor/d3.min.js')}}"></script>
    <script src="{{ asset('public/lib/rickshaw/vendor/d3.layout.min.js')}}"></script>
    <script src="{{ asset('public/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('public/lib/jquery.flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('public/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('public/lib/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ asset('public/lib/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('public/lib/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('public/lib/select2/js/select2.full.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAq8o5-8Y5pudbJMJtDFzb8aHiWJufa5fg"></script>
    <script src="{{ asset('public/lib/gmaps/gmaps.min.js')}}"></script>

    <script src="{{ asset('public/js/bracket.js')}}"></script>
    <script src="{{ asset('public/js/map.shiftworker.js')}}"></script>
    <script src="{{ asset('public/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('public/js/dashboard.js')}}"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
</html>
