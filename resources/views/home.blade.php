@include('partial.header')

{{--<div class="container-fluid">--}}
    {{--<div class="bd-example">--}}
        {{--<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">--}}
            {{--<ol class="carousel-indicators">--}}
                {{--<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>--}}
                {{--<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>--}}
            {{--</ol>--}}
            {{--<div class="carousel-inner">--}}
                {{--<div class="carousel-item active">--}}
                    {{--<img src="/images/back.jpg" class="d-block w-100 resize-caurosel" alt="...">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<h5>First slide label</h5>--}}
                        {{--<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="carousel-item">--}}
                    {{--<img src="/images/a.jpg" class="d-block w-100 resize-caurosel" alt="...">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<h5>Second slide label</h5>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="carousel-item">--}}
                    {{--<img src="/images/b.jpg" class="d-block w-100 resize-caurosel" alt="...">--}}
                    {{--<div class="carousel-caption d-none d-md-block">--}}
                        {{--<h5>Third slide label</h5>--}}
                        {{--<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">--}}
                {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                {{--<span class="sr-only">Previous</span>--}}
            {{--</a>--}}
            {{--<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">--}}
                {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                {{--<span class="sr-only">Next</span>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<br>--}}

<div class="container-fluid">
    <div class="row">
    @foreach($cars as $car)
            <div class="col-lg-4 col-md-6 col-sm-12">
        @if($car->photo_id != null)
            @php $x = \App\Image::FindOrFail($car->photo_id) @endphp
                <div class="blog-card spring-fever"
                     style="background:url('{{ Storage::url($x->photo) }}') center no-repeat; background-size:cover">
            @else
               <div class="blog-card spring-fever" style="background:url() center no-repeat;">
            @endif
                <div class="title-content">
                    <h3><a href="#">{{$car->model}}</a></h3>
                    <div class="intro"><a href="#">More</a></div>
                </div>
                <div class="card-info">
                   {{$car->type}}
                    <a href="{{route('show.car',$car->id)}}">Read More <i class="fas fa-info-circle"></i></a>
                </div>
                <div class="utility-info">
                    <ul class="utility-list">
                        <li><i class="far fa-star"></i> <a href="#">2</a></li>
                        <li><i class="far fa-comment-alt"></i> <a href="#">12</a></li>
                        <li><i class="far fa-calendar-alt"></i>{{$car->created_at}}</li>
                        <li><span class="licon icon-tag"></span><a href="#">{{$car->user->full_name}}</a></li>
                    </ul>
                </div>
                <div class="gradient-overlay"></div>
                <div class="color-overlay"></div>
            </div>
        </div>
        @endforeach
    </div>
</div>






{{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--@foreach($cars as $car)--}}
            {{--<div class="col-4">--}}


                {{--<div class="card" style="width: 18rem;">--}}
                    {{--<img src="..." class="card-img-top" alt="...">--}}
                    {{--<div class="card-body">--}}
                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

                    {{--<div class="card-info">--}}
                        {{--{{$car->type}}--}}
                        {{--<a href="#">Read Article<span class="licon icon-arr icon-black"></span></a>--}}
                    {{--</div>--}}
                    {{--<div class="utility-info">--}}
                        {{--<ul class="utility-list">--}}
                            {{--<li><i class="far fa-star"></i> <a href="#">2</a></li>--}}
                            {{--<li><i class="far fa-comment-alt"></i> <a href="#">12</a></li>--}}
                            {{--<li><i class="far fa-calendar-alt"></i>{{$car->created_at}}</li>--}}
                            {{--<li><span class="licon icon-tag"></span><a href="#">{{$car->user->full_name}}</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="gradient-overlay"></div>--}}
                    {{--<div class="color-overlay"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}
    {{--</div>--}}
{{--</div>--}}















{{--<script>--}}
    {{--$(function(){--}}
        {{--$('.carousel').carousel({--}}
            {{--interval: 2000--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}
@include('partial.footer')

