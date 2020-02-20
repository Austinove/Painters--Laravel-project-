@extends('layouts.app')

@section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/storage/images/handsbrush.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Home <i class="fa fa-home" aria-hidden="true"></i></a></span></p>
            <h4 class="mb-3 bread" style="color: white">About Bryan Austin</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center hero-image" style="background-image: url(/storage/images/pof.jpg); height: 500px;">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Description</span>
                        <p>
                            A small river named Duden flows by their place and supplies it
                                with the necessary regelialia. It is a paradisematic country, in 
                                which roasted parts of sentences fly into your mouth.
                        </p>
                        <p>
                            On her way she met a copy. The copy warned the Little Blind Text, 
                            that where it came from it would have been rewritten a thousand times 
                            and everything that was left from its origin would be the word "and" and the 
                            Little Blind Text should turn around and return to its own, safe country. A small 
                            river named Duden flows by their place and supplies it with the necessary regelialia. 
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Edit Description</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light ftco-animate" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center ftco-animate">
                    <div class="services-wrap rounded-right Trending-jobs-services" style="margin-top: 40px;">
                        <div class="row">
                        
                        <div class="col-md-7">
                            <h3 class="heading-section mb-4">Work Gallery</h3>
                            <div class="media">

                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="/storage/images/paintworkers.jpg" class="d-block w-100" alt="image">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>First slide label</h5>
                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/storage/images/paint2.jpg" class="d-block w-100" alt="image">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Second slide label</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                        </div>
                                        <div class="carousel-item">
                                        <img src="/storage/images/paint3.jpg" class="d-block w-100" alt="image">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Third slide label</h5>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <h3 class="heading-section mb-4">List of Work Done (4)</h3>
                            <div class="media">
                                <div class="media-body">
                                    <a class="active-slides" href="http://">
                                        <h5 class="active-slides mt-1 media-header job-title" data-toggle="tooltip" data-placement="right" title="Click for slides">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> Cras sit amet nibh libero, in gravida nulla sit amet nibh libero, in grav.
                                        </h5>
                                    </a>
                                    <span style="font-size: 10px;">
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                </div>
                            </div><hr>

                            <div class="media">
                                <div class="media-body">
                                    <a href="http://">
                                        <h5 class="mt-1 media-header job-title"  data-toggle="tooltip" data-placement="right" title="Click for slides">
                                            Cras sit amet nibh libero, in gravida nulla sit amet nibh libero, in grav.
                                        </h5>
                                    </a>
                                    <span style="font-size: 10px;">
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                </div>
                            </div><hr>

                            <div class="media">
                                <div class="media-body">
                                    <a href="http://">
                                        <h5 class="mt-1 media-header job-title"  data-toggle="tooltip" data-placement="right" title="Click for slides">
                                            Cras sit amet nibh libero, in gravida nulla sit amet nibh libero, in grav.
                                        </h5>
                                    </a>
                                    <span style="font-size: 10px;">
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                </div>
                            </div><hr>

                            <div class="media">
                                <div class="media-body">
                                    <a href="http://">
                                        <h5 class="mt-1 media-header job-title"  data-toggle="tooltip" data-placement="right" title="Click for slides">
                                            Cras sit amet nibh libero, in gravida nulla sit amet nibh libero, in grav.
                                        </h5>
                                    </a>
                                    <span style="font-size: 10px;">
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                </div>
                            </div><hr>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="proposal" class="modal fade bd-example-modal-lg" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Job Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span><br>
                                    <span class="mt-1 media-header pointer" style="color: #01d28e;">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                        Open jobs (4)
                                    </span>
                                </div>
                            </div><br>
                            <h5 class="card-title">Job title</h5>
                            <p>
                                On her way she met a copy. The copy warned the Little Blind Text, 
                                that where it came from it would have been rewritten a thousand times 
                                and everything that was left from its origin would be the word "and" and the 
                                Little Blind Text should turn around and return to its own, safe country. A small 
                                river named Duden flows by their place and supplies it with the necessary regelialia. 
                                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            </p>
                            <p>
                                On her way she met a copy. The copy warned the Little Blind Text, 
                                that where it came from it would have been rewritten a thousand times 
                                and everything that was left from its origin would be the word "and" and the 
                                Little Blind Text should turn around and return to its own, safe country. A small 
                                river named Duden flows by their place and supplies it with the necessary regelialia. 
                                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            </p>
                            <p>
                                On her way she met a copy. The copy warned the Little Blind Text, 
                                that where it came from it would have been rewritten a thousand times 
                                and everything that was left from its origin would be the word "and" and the 
                                Little Blind Text should turn around and return to its own, safe country. A small 
                                river named Duden flows by their place and supplies it with the necessary regelialia. 
                                It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            </p><hr>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message To The Client*</label>
                                <div class="col-lg-12 nopadding">
                                    <textarea class="txtEditor"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-outline-success">Send Job Request</button>
                </div>
            </div>
        </div>
    </div>



    <section class="ftco-section ftco-no-pt bg-light ftco-animate" >
        <div class="container">
            <div class="row trending-jobs">
                <div class="col-md-12 d-flex align-items-center ftco-animate">
                    <div class="services-wrap rounded-right w-100 Trending-jobs-services">
                        <h3 class="heading-section mb-4">Trending Jobs</h3>
                        <div class="row d-flex mb-4">
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <h5 class="mt-1 media-header pointer">Job</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <h5 class="mt-1 media-header pointer">Job</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <h5 class="mt-1 media-header pointer">Job</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <h5 class="mt-1 media-header pointer">Job</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                     scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                      vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                       nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <div class="media">
                                <img src="images/person_1.jpg" class="mr-3 media-image" alt="Client Image">
                                <div class="media-body">
                                    <span>
                                        <span class="mt-1 media-header">
                                            Bryan Austin | 
                                        </span>
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> location: Iganga | </span>
                                        <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                        <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                    </span>
                                    <h5 class="mt-1 media-header pointer">Job</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus 
                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in 
                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac 
                                    nisi vulputate fringilla. Donec lacinia congue felis in faucibus......
                                </div>
                            </div>
                            <hr>
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                    <span class="page-link">
                                        2
                                        <span class="sr-only">(current)</span>
                                    </span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $('.media-header').on('click', function(e){
                e.preventDefault();
                $('#proposal').modal('show');
            })
        });
    </script>
    
@endsection