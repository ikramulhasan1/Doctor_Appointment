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

        {{-- Navbar --}}
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper flex-column">
            {{-- Body/Main Content --}}
            <div class="card m-5 ">
                @if (session()->has('msg'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{ session()->get('msg') }}
                    </div>
                @endif
                <div class="card-header">Doctors </div>
                <div class="card-body">
                    <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="inputName1" class="form-label">Doctor Name</label>
                            <input type="text" name="name" class="form-control doctorInputStyle" id="inputName1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="numbers" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control doctorInputStyle" id="numbers"
                                aria-describedby="emailHelp">
                        </div>


                        <div class="row mb-3">
                            <div class="col">
                                <label for="room" class="form-label">Rome Number</label>
                                <input type="text" name="room" class="form-control doctorInputStyle"
                                    id="room" aria-describedby="emailHelp">
                            </div>
                            <div class="col d-flex flex-column">
                                <label for="speciality" class="form-label">Speciality</label>
                                <select class="form-select doctorInputStyle" name="speciality" id="speciality"
                                    aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="skine">Skine</option>
                                    <option value="heart">Heart</option>
                                    <option value="eye">Eye</option>
                                    <option value="nose">Nose</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Doctor Image</label>
                            <input type="file" name="file" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
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
