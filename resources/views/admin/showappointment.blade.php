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
                                <th scope="col">Patient Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $appoint)
                                <tr>
                                    <th scope="row">{{ $serial++ }}</th>
                                    <td>{{ $appoint->name }}</td>
                                    <td>{{ $appoint->email }}</td>
                                    <td>{{ $appoint->phone }}</td>
                                    <td>{{ $appoint->doctor }}</td>
                                    <td>{{ $appoint->date }}</td>
                                    <td>{{ $appoint->message }}</td>
                                    <td>{{ $appoint->status }}</td>
                                    <td>
                                        <a href="{{ route('admin.approved', $appoint->id) }}"
                                            class="btn btn-success btn-sm">Approved</a>
                                        <a href="{{ route('admin.canceled', $appoint->id) }}"
                                            class="btn btn-danger btn-sm">Canceled</a>
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
