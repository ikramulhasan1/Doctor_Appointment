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
            <div class="container-fluid page-body-wrapper flex-column mx-0 my-4">

                <div align="center" class="p-3 ">
                    @php
                        $serial = 1;
                    @endphp
                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Sel No</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">room</th>
                                <th scope="col">speciality</th>
                                <th scope="col">image</th>

                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $doctor)
                                <tr>
                                    <th scope="row">{{ $serial++ }}</th>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>{{ $doctor->room }}</td>
                                    <td>{{ $doctor->speciality }}</td>
                                    <td><img src="doctorimage/{{ $doctor->image }}" style="width: 50px; height:60px"
                                            alt="">
                                    </td>

                                    <td>
                                        <a href="{{ route('admin.updatedoctor', $doctor->id) }}"
                                            class="btn btn-success btn-sm">Update</a>
                                        <a href="{{ route('admin.deletedoctor', $doctor->id) }}"
                                            onclick="return confirm('Are you sure you want to delete this doctor details?')"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
