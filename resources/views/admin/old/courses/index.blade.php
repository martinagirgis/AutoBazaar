@extends("layouts.admin")
@section("title", "Courses")
@section("pageTitle", "Courses")
@section("style")
    <link href="{{asset("libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset("libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet"
          type="text/css"/>
@endsection
@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route("courses.create") }}" class="btn btn-success float-right">Create</a>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center"
                           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Cover</th>
                            <th>Instructors</th>
                            <th>Dates</th>
                            <th>Controllers</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($attributes as $attribute)
                            <tr>
                                <td>{{ $attribute->id }}</td>
                                <td>
                                    {{ $attribute->name }}
                                </td>
                                <td>{{ $attribute->type }}</td>
                                <td>
                                    {{ $attribute->price }}
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter1{{$attribute->id}}">
                                        View image
                                    </button>

                                    <!-- Modal -->
                                    </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter2{{$attribute->id}}">
                                        View cover
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter3{{$attribute->id}}">
                                        View Instructors
                                    </button>
                                </td>
                                <td>
                                  {{--  <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter4{{$attribute->id}}">
                                        View Dates
                                    </button>--}}
                                    <a type="button" class="btn btn-dark" href="{{route('modify.dates',['id'=>$attribute->id])}}">
                                        Modify Dates
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route("courses.edit", $attribute->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route("courses.destroy", $attribute->id) }}" method="post"
                                          style="display: inline">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection

@section("script")
    <script src="{{asset("libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
@endsection

@foreach($attributes as $attribute)
<!-- Image Modal -->
<div class="modal fade" id="exampleModalCenter1{{$attribute->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="{{asset('assets/images/courses/'. $attribute->image )}}" alt="" style="height:400px;width:400px">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Cover Modal -->
<div class="modal fade" id="exampleModalCenter2{{$attribute->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Cover</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center>
                    <img src="{{asset('assets/images/courses/'. $attribute->cover )}}" alt="" style="height:400px;width:400px">
                </center>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Cover Instructors -->
<div class="modal fade" id="exampleModalCenter3{{$attribute->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Instructors</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
{{--
                <img src="{{asset('assets/images/courses/'. $attribute->cover )}}" alt="" style="height:400px;width:400px">
--}}
                <center>
                    <h1>
                        <?php $ids=  explode('|', $attribute->instructors_ids);
                        if(count($ids) > 0){
                            for($i=0;$i<count($ids);$i++){
                                echo 'Dr '. \App\Models\Instructor::find($ids[$i])->name . "<br>";
                            }
                        }
                        ?>
                    </h1>
                </center>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Cover Dates -->
<div class="modal fade" id="exampleModalCenter4{{$attribute->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{$attribute->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="{{asset('assets/images/courses/'. $attribute->cover )}}" alt="" style="height:400px;width:400px">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
