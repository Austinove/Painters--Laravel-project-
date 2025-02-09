    @extends('layouts.app')
    @section('content')

    
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/storage/images/interior.jpg')" data-stellar-background-ratio="0.5">
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
                    <div class="services-wrap rounded-right" style="margin-left: auto; margin-right: auto;">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="heading-section mb-4">Profile Details</h3>
                                <form class="fluid">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">First Name*</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="secondname">Second Name*</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Second Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstname">Contact*</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Your Contact">
                                            <small id="emailHelp" class="form-text text-muted">Contact is shown to client once job is approved.</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Your Email*</label>
                                            <input type="email" class="form-control" id="inputAddress" autocomplete="false" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Your Location*</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your location district">   
                                    </div>
                                    <div class="form-group">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>  
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success">Save Profile</button>
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
                                <h3 class="heading-section mb-4">Description</h3>
                                <form class="fluid">
                                    <div class="form-group" style="width: 100%;">
                                        <label for="exampleFormControlTextarea1">Describe Your Self to Clients (Not more than 100 words)*</label>
                                        <div class="col-lg-12 nopadding">
                                            <textarea class="txtEditor"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-success">Save Details</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection

    {{-- <script>
        $('.popover').popover({ 
            html : true,
            title: function() {
            return $(".popover-head").html();
            },
            content: function() {
            return $(".popover-content").html();
            }
        });
    </script> --}}
