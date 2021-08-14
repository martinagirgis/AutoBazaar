@extends("layouts.admin")
@section("pageTitle", "users")
@section("content")
@if(LaravelLocalization::getCurrentLocale() == 'ar')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <h5 class="mb-5 mt-3">اضافة طالب جديد</h5>

                    <form method="post" action="{{route('users.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاول</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="fname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاوسط</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="mname" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاخير</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="lname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم بالعربي</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="arabic_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">البريدالالكتروني</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" id="example-text-input" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">كلمة المرور</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" id="example-text-input" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">رقم الهاتف</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="phone" id="example-text-input" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">SCHS حالة</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="schs" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID Type</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="id_type" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="id_number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الجنسية</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="nationality" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="example-text-input" name="date_of_birth" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Saudi Council Registeration - Optional</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="saudi_council_registeration">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">المدينة</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="city" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Academic Qualification</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="academic_qualification" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Speciality</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="speciality" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">العنوان</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Work Place</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="work_place" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">نبذة عني</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="about_me" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">صورة شخصية</label>
                            <div class="custom-file col-sm-10">
                                <input name="image" type="file" class="custom-file-input" id="customFileLangHTML" required>
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Upload Image"></label>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark w-25">اضافة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@else
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>    
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <h5 class="mb-5 mt-3">Add New User</h5>

                    <form method="post" action="{{route('users.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="fname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="mname" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="lname" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Arabic Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="arabic_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" id="example-text-input" name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" id="example-text-input" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="phone" id="example-text-input" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">SCHS Status</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="schs" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID Type</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="id_type" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="id_number" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nationality</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="nationality" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Date of Birth</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="example-text-input" name="date_of_birth" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Saudi Council Registeration - Optional</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="saudi_council_registeration">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="city" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Academic Qualification</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="academic_qualification" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Speciality</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="speciality" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Work Place</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="work_place" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Brief about me</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="about_me" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                            <div class="custom-file col-sm-10">
                                <input name="image" type="file" class="custom-file-input" id="customFileLangHTML" required>
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Upload Image"></label>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark w-25">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endif
@endsection