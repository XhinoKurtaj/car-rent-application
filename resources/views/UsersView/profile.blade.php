@include('../partial.header')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="..." class="img-fluid" alt="Responsive image">
            <p>{{auth()->user()->full_name}}</p>
            <p>{{auth()->user()->email}}</p>
            <p>{{auth()->user()->cars}}</p>
            {{--<p>{{$imageList}}</p>--}}
        </div>
        <div class="col-4">
            <form method="POST" action="{{route('new.photo')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image">
                <input type="submit" class="btn btn-outline-dark " value="Upload">
            </form>
            <hr>
        </div>
    </div>
</div>


<script src="{{ asset('js/profile.js')}}"></script>

@include('../partial.footer')
