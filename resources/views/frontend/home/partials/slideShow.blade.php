@if($slides->isNotEmpty())
<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        @foreach ($slides as $index =>$slide )
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$index}}" class="{{$index===0 ? 'active' : ''}}" aria-current="{{$index===0 ? 'true' : 'false'}}"
        aria-label="Slide {{$index + 1}}">
    </button>   
        @endforeach    
    </div>
    <div class="carousel-inner">
        @foreach ($slides as $index => $slide)
        <div class="carousel-item {{$index===0 ? 'active' : '' }}" data-bs-interval="10000">  
            <a href="{{$slide->btn_url}}">
                <img  width="1920" height="533" src="{{ asset('uploads/slider/'.$slide->banner) }}" class="img-fluid" >
            </a>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endif
