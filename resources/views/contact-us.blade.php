@extends('layouts.pages')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<div class="container" style="margin-top: 120px; padding-bottom: 40px;">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-sm 6">
            <form method="post" action="{{ route('contact-us-submit') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email Address">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Message</label>
                  <textarea name="message" name="message" class="form-control" placeholder="Comments" cols="30" rows="10"></textarea>
                  @error('message')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div><!--end of col-sm-8-->
        <div class="col-sm 6"></div><!--end of col-sm-2-->
    </div><!--end of row-->
    <div class="row">
    <div class="mapouter w-100"><div class="gmap_canvas">
        <iframe width="1200" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.270024258323!2d67.02656461483812!3d24.85462558405665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f60108a32b7%3A0xbb4df184e92ff55f!2sMadina%20city%20mall!5e0!3m2!1sen!2s!4v1650664502753!5m2!1sen!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;}</style></div></div>

    </div>
</div><!--end of container-->
<script>
    function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
@endsection


