 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     @include('admin.css')
 </head>

 <body>
     <div class="container-scroller">

         {{-- Sidebar --}}
         @include('admin.sidebar')


         <!-- partial -->
         <div class="container-fluid page-body-wrapper">

             {{-- Navbar --}}
             @include('admin.navbar')

             {{-- Body/Main Content --}}
             @include('admin.body')




         </div>
     </div>
     <!-- container-scroller -->
     <!-- plugins:js -->
     @include('admin.script')
     <!-- End custom js for this page -->
 </body>

 </html>
