@extends("layouts.admin")
@section("pageTitle", "Users")
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
                    <h5 class="mb-5 mt-3">Edit {{$user->name}}</h5>

                    <form method="post" action="{{route('users.update',['user'=>$user->id])}}"  enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاول</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="fname" value="{{$user->fname}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاوسط</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="mname" value="{{$user->mname}}" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم الاخير</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="lname" value="{{$user->lname}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم بالعربي</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="arabic_name" value="{{$user->arabic_name}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">البريد الالكتروني</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" id="example-text-input" name="email" value="{{$user->email}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">رقم الهاتف</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="phone" id="example-text-input" name="phone" value="{{$user->phone}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">SCHS حالة</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="schs" value="{{$user->schs}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID Type</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="id_type" value="{{$user->id_type}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="id_number" value="{{$user->id_number}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الجنسية</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="nationality" value="{{$user->nationality}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">تاريخ الميلاد</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" id="example-text-input" name="date_of_birth" value="{{$user->date_of_birth}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Saudi Council Registeration - Optional</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="saudi_council_registeration" value="{{$user->saudi_council_registeration}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">المدينة</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="city" value="{{$user->city}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Academic Qualification</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="academic_qualification" value="{{$user->academic_qualification}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Speciality</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="speciality" value="{{$user->speciality}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">العنوان</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="address" value="{{$user->address}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Work Place</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="work_place" value="{{$user->work_place}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">نبذة عني</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="about_me" value="{{$user->about_me}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">صورة شخصية</label>
                            <div class="custom-file col-sm-10">
                                <input name="image" type="file" class="custom-file-input" id="customFileLangHTML" value="{{$user->image}}" >
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Upload Image"></label>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark w-25">تعديل</button>
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
                <h5 class="mb-5 mt-3">Edit {{$user->name}}</h5>

                <form method="post" action="{{route('users.update',['user'=>$user->id])}}"  enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="fname" value="{{$user->fname}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Middle Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="mname" value="{{$user->mname}}" required>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="lname" value="{{$user->lname}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Arabic Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="arabic_name" value="{{$user->arabic_name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="example-text-input" name="email" value="{{$user->email}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="phone" id="example-text-input" name="phone" value="{{$user->phone}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">SCHS Status</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="schs" value="{{$user->schs}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ID Type</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="id_type" value="{{$user->id_type}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">ID</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="id_number" value="{{$user->id_number}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nationality</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="nationality" value="{{$user->nationality}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Date of Birth</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" id="example-text-input" name="date_of_birth" value="{{$user->date_of_birth}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Saudi Council Registeration - Optional</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="saudi_council_registeration" value="{{$user->saudi_council_registeration}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="city" value="{{$user->city}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Academic Qualification</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="academic_qualification" value="{{$user->academic_qualification}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Speciality</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="speciality" value="{{$user->speciality}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="address" value="{{$user->address}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Work Place</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="work_place" value="{{$user->work_place}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Brief about me</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="about_me" value="{{$user->about_me}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                        <div class="custom-file col-sm-10">
                            <input name="image" type="file" class="custom-file-input" id="customFileLangHTML" value="{{$user->image}}" >
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="Upload Image"></label>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-dark w-25">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endif
@endsection