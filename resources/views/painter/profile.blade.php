    @extends('layouts.app')
    @section('content')

    
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/storage/images/paintbrush.jpg')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Get Your House Paint</h1>
	            <p style="font-size: 18px;">A small part of paint on your house makes it beautifull, Try find a painter to color your house </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light ftco-animate" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center ftco-animate">
                    <div class="services-wrap rounded-right float-custom">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="heading-section mb-4">Edit Profile Details</h3>
                                <form class="fluid" id="edit_profile" method="post" action="javascript:void(0)">
                                    <div class="alert alert-success d-none" id="msg_div">
                                        <span id="res_message"></span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">First Name*</label>
                                            <input type="text" name="firstname" required class="form-control" id="firstname" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="secondname">Second Name*</label>
                                            <input type="text" name="secondname" required class="form-control" id="secondname" placeholder="Second Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">Contact*</label>
                                            <input type="text" name="contact" required class="form-control" id="contact" placeholder="Your Contact">
                                            <small id="emailHelp" class="form-text text-muted">Contact is shown to client once job is approved.</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Your Email*</label>
                                            <input type="email" name="email" required class="form-control" id="email" autocomplete="false" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Your Location*</label>
                                        <input type="text" name="location" required class="form-control" id="location" placeholder="Your location district">   
                                    </div>
                                    <div class="form-group">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" name="profile_pic" required class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div> 
                                        <input type="hidden" name="csrf-token" value={{csrf_token()}} />
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" id="send_form" class="btn btn-outline-success">Save Your Profile</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light ftco-animate" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center ftco-animate">
                    <div class="services-wrap rounded-right" style="margin-left: auto; margin-right: auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="heading-section mb-4">Your Description</h3>
                                <form class="fluid">
                                    <div class="form-group" style="width: 100%;">
                                        <label for="exampleFormControlTextarea1">Describe Your Self to Clients (Not more than 100 words)*</label>
                                        <div class="col-lg-12 nopadding">
                                            <textarea required class="txtEditor"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success">Save Your Description</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
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

                            <div class="col-md-5 ">
                                <h3 class="heading-section mb-4">Your Done Jobs (4)</h3>
                                <div class="client-jobs-container">
                                    <div class="media">
                                        <div class="media-body">
                                            <a href="http://">
                                                <h5 class=" mt-1 media-header job-title-client">
                                                    Cras sit amet nibh libero, in gravida nulla sit amet nibh libero, in grav.
                                                </h5>
                                            </a>
                                            <span style="font-size: 10px;">
                                                <span class="mt-1 media-header">
                                                    Bryan Austin
                                                </span>
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i>location: Iganga | </span>
                                                <i class="fa fa-circle" aria-hidden="true"></i> Away |
                                                <i style="color:green" class="fa fa-circle" aria-hidden="true"></i> Active 
                                            </span>
                                        </div>
                                    </div><hr>

                                    <div class="media">
                                        <div class="media-body">
                                            <a href="http://">
                                                <h5 class="mt-1 media-header job-title-client" >
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
                                                <h5 class="mt-1 media-header job-title-client" >
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
                                                <h5 class="mt-1 media-header job-title-client" >
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
                                                <h5 class="mt-1 media-header job-title-client" >
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
                                                <h5 class="mt-1 media-header job-title-client" >
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
                            <div class="col-md-6">
                                <h3 class="heading-section mb-4">
                                    Job Slides
                                    <button type="button" name="" class="float-right btn btn-outline-success add-slide">
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i> Add Slide
                                    </button></h3>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="mr-3 media-image" src="{{asset('images/person_1.jpg')}}" alt="Slide image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object <div class="float-right">
                                                <button type="button" class="btn btn-outline-primary small edit-slide"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger small delete-slide"><i class="fa fa-trash"></i></button>
                                            </div></h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img class="mr-3 media-image" src="{{asset('images/person_1.jpg')}}" alt="Slide image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object <div class="float-right">
                                                <button type="button" class="btn btn-outline-primary small edit-slide"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger small delete-slide"><i class="fa fa-trash"></i></button>
                                            </div></h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="mr-3 media-image" src="{{asset('images/person_1.jpg')}}" alt="Slide image">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object <div class="float-right">
                                                <button type="button" class="btn btn-outline-primary small edit-slide"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger small delete-slide"><i class="fa fa-trash"></i></button>
                                            </div></h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Modal Delete -->
<div class="modal fade bd-example-modal-sm" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div style="text-align: center;">
              <i style="color:#fb4343;" class="fa fa-exclamation-circle fa-5x" aria-hidden="true"></i>
          </div>
          
        <span style="font-size: 14px; font-weight: bold; color: #887f7c;">This Will Permanetly Remove Your Data</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</button>
        <button type="button" class="btn btn-outline-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
</div>
 
<!-- Modal Editing -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Action on Slides</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
            <div class="form-group">
                <label for="formGroupExampleInput">Slide Title*</label>
                <input type="text" autocomplete="off" class="form-control" required id="formGroupExampleInput" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Simple Description*</label>
                <textarea class="form-control" required maxlength="50" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="profilePic" class="label">Slide Image*</label>
                <div class="custom-file mb-3">
                    <input type="file" required class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>  
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-success">Save Slide <i class="fa fa-floppy-o"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>

 <script>
        $(document).ready(function(){

            $('.delete-slide').on('click', function(e){
                
                $('#deletemodal').modal('show');
            })

            $('.edit-slide').on('click', function(e){
                e.preventDefault();
                $('#editModal').modal('show');
            })

            $('.add-slide').on('click', function(e){
                e.preventDefault();
                $('#editModal').modal('show');
            })
        });
        
    $('#send_form').click(function(e){
    e.preventDefault();
    /*Ajax Request Header setup*/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#send_form').html('Sending..');
    
    /* Submit form data using ajax*/
    $.ajax({
        url: "{{ url('jquery-ajax-form-submit')}}",
        method: 'post',
        data: $('#contact_us').serialize(),
        success: function(response){
            //------------------------
                $('#send_form').html('Submit');
                $('#res_message').show();
                $('#msg_div').html(response.msg);
                $('#msg_div').removeClass('d-none');

                document.getElementById("contact_us").reset(); 
                setTimeout(function(){
                $('#res_message').hide();
                $('#msg_div').hide();
                },10000);
            //--------------------------
        }});
    });
//------------
    </script>

    @endsection

   
