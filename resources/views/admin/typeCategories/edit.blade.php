@extends("layouts.admin")
@section("pageTitle", "Instructors")
@section("content")
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
                <h5 class="mb-5 mt-3">تعديل صنف {{$typeCategory->Title_ar}}</h5>

                <form method="post" action="{{route('typeCategories.update',['typeCategory'=>$typeCategory->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الصنف باللغة العربية</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{$typeCategory->Title_ar}}" name="Title_ar" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الصنف باللغة الانجليزية</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{$typeCategory->Title_en}}" name="Title_en" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الصنف باللغة الكردية</label>
                        <div class="col-sm-10">
                            <input class="form-control" value="{{$typeCategory->Title_ku}}" name="Title_ku" type="text" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">نوع الاعلان</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sell_type_id">
                                @foreach($sellTypes as $sellType)
                                    @if($sellType->id == $typeCategory->sellType->id)
                                        <option value="{{$sellType->id}}" selected>{{$sellType->Title_ar}}</option>
                                    @else
                                        <option value="{{$sellType->id}}">{{$sellType->Title_ar}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">الصورة</label>
                        <div class="custom-file col-sm-10">
                            <input name="image" type="file" class="custom-file-input" id="customFileLangHTML" >
                            <label class="custom-file-label" for="customFileLangHTML" data-browse="رفع صورة"></label>
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
    
@endsection