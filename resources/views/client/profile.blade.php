    @extends('layouts.app')
    @section('content')

    
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/storage/images/house.jpg')" data-stellar-background-ratio="0.5">
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
                                <form class="fluid">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">First Name*</label>
                                            <input type="text" required class="form-control" id="inputAddress" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="secondname">Second Name*</label>
                                            <input type="text" required class="form-control" id="inputAddress" placeholder="Second Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">Contact*</label>
                                            <input type="text" required class="form-control" id="inputAddress" placeholder="Your Contact">
                                            <small id="emailHelp" class="form-text text-muted">Contact is shown to client once job is approved.</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Your Email*</label>
                                            <input type="email" required class="form-control" id="inputAddress" autocomplete="false" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Your Location*</label>
                                        <input type="text" required class="form-control" id="exampleInputEmail1" placeholder="Your location district">   
                                    </div>
                                    <div class="form-group">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" required class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success">Save Your Profile</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
            $(document).ready(function(){

                // $('.delete-slide').on('click', function(e){
                    
                //     $('#deletemodal').modal('show');
                // })

                // $('.edit-slide').on('click', function(e){
                //     e.preventDefault();
                //     $('#editModal').modal('show');
                // })

                // $('.add-slide').on('click', function(e){
                //     e.preventDefault();
                //     $('#editModal').modal('show');
                // })
            });
    </script>

    @endsection

   
