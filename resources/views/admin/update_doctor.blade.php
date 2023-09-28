<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .bg-color {
            background-color: #191B23 !important;
            color: gainsboro !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        {{-- Sidebar --}}
        @include('admin.sidebar')


        <!-- partial -->


        {{-- Navbar --}}
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            {{-- Body/Main Content --}}

            <div class="container " style="padding: 70px">
                @if (session()->has('msg'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{ session()->get('msg') }}
                    </div>
                @endif
                <form action="{{ route('admin.editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Doctor Name</label>
                        <input type="text" name="name" class="form-control bg-color" value="{{ $data->name }}"
                            id="inputName" aria-describedby="namelHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control bg-color" value="{{ $data->phone }}"
                            id="inputPhone" aria-describedby="namelHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputSpeciality" class="form-label">Speciality</label>
                        <input type="text" name="speciality" class="form-control bg-color"
                            value="{{ $data->speciality }}" id="inputSpeciality" aria-describedby="namelHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputRoom" class="form-label">Room</label>
                        <input type="text" name="room" class="form-control bg-color" value="{{ $data->room }}"
                            id="inputRoom" aria-describedby="namelHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputImage" class="form-label">Old Image</label>
                        <img src="doctorimage/{{ $data->image }}" width="80px" height="90px" alt="">
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label for="inputImage" class="form-label">Change Image</label>
                        <input type="file" name="file" id="">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>




        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
