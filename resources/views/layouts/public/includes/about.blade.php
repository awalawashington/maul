<div id="about" class="paddsection">
    <div class="container">
    <div class="row justify-content-between">

        <div class="col-lg-4 ">
        <div class="div-img-bg">
            <div class="about-img">
            <img src="{{asset('storage/uploads/abouts/original/'.$about->image)}}" class="img-responsive" alt="me">
            </div>
        </div>
        </div>

        <div class="col-lg-7">
        <div class="about-descr">

            <p class="p-heading">{{$about->title}}</p>
            <p class="separator">{{$about->description}}</p>

        </div>

        </div>
    </div>
    </div>
</div>