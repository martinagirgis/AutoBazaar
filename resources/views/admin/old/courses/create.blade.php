@extends("layouts.admin")
@section("title", "New Course")
@section("pageTitle", "Create New Course")
@section("style")
    <link href="{{asset("libs/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
@endsection
@section("content")

    <div class="row">
        <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route("courses.store") }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <center>
                            <h3>Add New Course</h3>
                        </center>
                        <hr>
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control @error("name") is-invalid @enderror" type="text"
                                       value="{{ old("name") }}" id="name" name="name">
                                @error("name")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div><!--Course Name-->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-control @error("type") is-invalid @enderror"
                                       value="{{ old("type") }}" id="type" name="type">
                                    <option value="normal">
                                        Normal
                                    </option>
                                    <option value="special">
                                        Special
                                    </option>
                                </select>
                                @error("type")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div><!--Course Type-->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input class="form-control @error("price") is-invalid @enderror" type="number"
                                       value="{{ old("price") }}" id="price" name="price">
                                @error("price")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div><!--Course Price-->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Days</label>
                            <div class="col-sm-10">
                                <input class="form-control @error("days") is-invalid @enderror" type="number"
                                       value="{{ old("days") }}" id="skills" name="days" onchange="NumOfFields()">
                                @error("days")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div><!--Course Price-->
                        <div class="form-group row">
                            <div class="container col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4" id="container2">
                                        <br>
                                        <div class="row">

                                            <input id="sad2" style="display:none" class="form-control" type="text" disabled>
                                        </div>
                                    </div>

                                    <div class="col-sm-4" id="container">
                                        <br>
                                        <div class="row">

                                            <input id="sad" style="display:none" class="form-control" type="date">
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input class="form-control @error("price") is-invalid @enderror" type="file"
                                       value="{{ old("image") }}" id="image" name="image">
                                @error("image")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div><!--Image -->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Cover</label>
                            <div class="col-sm-10">
                                <input class="form-control @error("cover") is-invalid @enderror" type="file"
                                       value="{{ old("cover") }}" id="image" name="cover">
                                @error("cover")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div><!--Cover -->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Instructors</label>
                            <div class="col-sm-10">
                                <!--Instructors -->
                                @foreach($Instructors as $insta)
                                <div class="form-check form-check-inline-block">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$insta->id}}">
                                    <label class="form-check-label" for="inlineCheckbox1">{{$insta->name}}</label>
                                </div>
                                @endforeach
                                <!--End of instructors -->
                                {{--
                                <input class="form-control @error("name") is-invalid @enderror" type="text"
                                       value="{{ old("name") }}" id="name" name="name">
                                @error("name")
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror--}}
                            </div>
                        </div><!--Instructors-->


                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-12">
                                <center>
                                    <button type="submit" class="btn btn-success">Submit</button>

                                </center>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section("script")
    <script src="{{asset("libs/select2/js/select2.min.js")}}"></script>
@endsection
<script>
    var counter = 0;
    var flag = 0;
    if(flag === 1){
        var oldVal=0;
    }
    function NumOfFields(){
        usingClassNameToShowDisplayNone();
        var skills = document.getElementById('skills').value;
        //alert(skills);
        if(skills > 0) {

            if (flag !== 1) {
                var test = document.getElementById('sad');
                var test2 = document.getElementById('sad2');

                for (var i = 0; i < skills; i++) {
                    var newtest = test.cloneNode(true);
                    newtest.style.display = "block";
                    newtest.id = 'skill_ar' + i;
                    newtest.name = 'skill_ar' + i;
                    newtest.placeholder = 'Type Your Skill Arabic';

                    document.getElementById("container").appendChild(newtest);

                    var newtest2 = test2.cloneNode(true);

                    newtest2.style.display = "block";
                    newtest2.id = 'skill_en' + i;
                    if(counter == 0){
                        newtest2.value = 'Day ' + ( i + 1);
                        counter ++;
                    }else{
                        newtest2.value = 'Day ' + ( i + 1);
                        counter ++;
                    }
                    document.getElementById("container2").appendChild(newtest2);


                    flag = 1;
                    oldVal = skills;
                }
            } else if(oldVal !== null) {
                alert('You have already specify number of skills ');
                flag =0;
                resetFields(oldVal);
                //alert(oldVal + '' + skills);
            }
        }else{
            alert('Enter a valid number');
        }
    }
    function resetFields(oldVal){
        for(var i=0;i<oldVal;i++) {
            var myobj = document.getElementById("skill_ar"+i);
            var myobj2 = document.getElementById("skill_en"+i);



            myobj.remove();
            myobj2.remove();


        }
        NumOfFields();
    }

    function usingClassNameToShowDisplayNone() {
        var myClasses = document.querySelectorAll('.hh'),
            i = 0,
            l = myClasses.length;
        for (i; i < l; i++) {
            myClasses[i].style.display = 'block';
        }
    }
</script>
