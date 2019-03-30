@include('../partial.header')
<style>

    .img-thumbnail{
        height: 200px;
        width: 200px;
    }

    .modalImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .modalImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content, #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }

    #review-textarea{
        width:100%;
    }

</style>
<br>
@php $x = \App\Image::FindOrFail($cars[0]->photo_id) @endphp
<div class="container-fluid">
    <div class="row">
        <div class="col-7">
            <img src="/storage/{{$x->photo}}" class="img-fluid" alt="Responsive image">
            <h4>Car location</h4>
            @if(!empty($cars[0]->locations[0]))
            <p>Latitude: <small>{{$cars[0]->locations[0]->parked_latitude}}</small>
            Longitude: <small>{{$cars[0]->locations[0]->parked_longitude}}</small></p>
            @endif
                <p>price: {{$cars[0]->rent_price}} $/Day</p>

            <p>description: {{$cars[0]->condition_check}}</p>
            <p>Date: {{$cars[0]->created_at}}</p>
            @if($cars[0]->availability == 1)
                <p>AVAILABLE</p>
                @endif
            {{--@if(!empty($cars[0]->wishlists))--}}
                {{--<h1>dsadsadsadsad</h1>--}}
                {{--@if( $cars[0]->wishlists->user_id == auth()->user()->id)--}}
                {{--<h1>WISHLIST</h1>--}}
                    {{--@endif--}}
                {{--@endif--}}
            <button class="btn btn-block btn-outline-success">Rent this Car</button>
            <button class="btn btn-block btn-outline-info">Make an Offer</button>
            <h5>Leave a Review</h5>
            <form>
                <textarea id="review-textarea" placeholder="Enter Your Review"></textarea>
            </form>
        </div>
        <div class="col-5">
            <h4>Car Gallery</h4><hr>
            <div class="row">
            @foreach($cars[0]->images as $image)
              <div class="col-6">
                <img src="/storage/{{$image->photo}}" alt="..." id="{{$image->id}}" class="img-thumbnail modalImg">
              </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal">

    <!-- The Close Button -->
    <span class="close">&times;</span>

    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">

    <!-- Modal Caption (Image Text) -->
    <div id="caption"></div>
</div>
<script>
    var test = document.getElementsByClassName("modalImg");
    console.log( typeof(test) );
    console.log( test );

    for(var obj in test) {
        if (test.hasOwnProperty(obj)) {
            console.log(obj);
        }

    }

    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    {{--var img = document.getElementById('{{$image->id}}');--}}
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

</script>
@include('../partial.footer')
