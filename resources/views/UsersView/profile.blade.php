@include('../partial.header')
<div class="container">
    <div class="row">
        <div class="col-9">
            <img src="..." class="img-fluid" alt="Responsive image">
            <p>{{auth()->user()->full_name}}</p>
            <p>{{auth()->user()->email}}</p>
            <p>{{auth()->user()->cars}}</p>
            {{--<p>{{$imageList}}</p>--}}
        </div>
        <div class="col-3">
            <form method="POST" action="{{route('user.photo')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <input type="submit" class="btn btn-outline-dark " value="Upload">
            </form>
            <hr>
        </div>
    </div>
</div>




@include('../partial.footer')
