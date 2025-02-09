    @extends('layouts.app')
    @section('content')

    
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/storage/images/paint.jpg')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Paint A House</h1>
	            <p style="font-size: 18px;">A small part of paint on your house makes it beautifull, Try find a painter to color your house </p>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-5 d-flex align-items-center">
	  						<form action="#" class="request-form ftco-animate bg-primary">
		          		        <h2>Register As Painter</h2>
			    				<div class="form-group">
			    					<label for="firstName" class="label">First Name*</label>
			    					<input type="text" class="firstName form-control" placeholder="First Name" autocomplete="false">
			    				</div>
			    				<div class="form-group">
			    					<label for="secondName" class="label">Second Name*</label>
			    					<input type="text" class="secondName form-control" placeholder="Second Name" autocomplete="false">
                                </div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Gender</label>
                                        <select name="cars" class="custom-select mb-3">
                                            <option selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
			    					<label for="email" class="label">Your Email*</label>
			    					<input type="email" class="email form-control" placeholder="E.g painter@painter.com" autocomplete="false">
			    				</div>
                                <div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="password" class="label">Password*</label>
			    					<input type="password" class="password form-control" placeholder="Password" autocomplete="false">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="confirmPassword" class="label">Confirm Password*</label>
			    					<input type="password" class="confirmPassword form-control" placeholder="Confirm Password" autocomplete="false">
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="submit" value="Register" class="btn btn-secondary py-3 px-4">
                                </div>
			    			</form>
                        </div>
              
                        <div class="col-md-5 d-flex align-items-center offset-md-1">
	  						<form action="#" class="request-form ftco-animate bg-primary">
		          		        <h2>Register As Painter</h2>
			    				<div class="form-group">
			    					<label for="firstName" class="label">First Name*</label>
			    					<input type="text" class="firstName form-control" placeholder="First Name" autocomplete="false">
			    				</div>
			    				<div class="form-group">
			    					<label for="secondName" class="label">Second Name*</label>
			    					<input type="text" class="secondName form-control" placeholder="Second Name" autocomplete="false">
                                </div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="profilePic" class="label">Profile Picture</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Gender</label>
                                        <select name="cars" class="custom-select mb-3">
                                            <option selected>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
			    					<label for="email" class="label">Your Email*</label>
			    					<input type="email" class="email form-control" placeholder="E.g painter@painter.com" autocomplete="false">
			    				</div>
                                <div class="d-flex">
			    					<div class="form-group mr-2">
                                        <label for="password" class="label">Password*</label>
			    					<input type="password" class="password form-control" placeholder="Password" autocomplete="false">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="confirmPassword" class="label">Confirm Password*</label>
			    					<input type="password" class="confirmPassword form-control" placeholder="Confirm Password" autocomplete="false">
                                    </div>
                                </div>
                                <div class="form-group">
                                <input type="submit" value="Register" class="btn btn-secondary py-3 px-4">
                                </div>
			    			</form>
                        </div>
	  				</div>
				</div>
            </div>
    	</div>
    </section>




    <section class="ftco-section ftco-no-pt bg-light ftco-animate" >
        <div class="container">
            <div class="row trending-jobs">
                <div class="col-md-10 d-flex offset-md-1 align-items-center ftco-animate">
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
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
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
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
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
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
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
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
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
                                    <a href="http://"><h5 class="mt-1 media-header">Job</h5></a>
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


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <h5 >Happy Clients</h5>
                </div>
            </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
    					</div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap rounded text-center py-4 pb-5">
                                <div class="user-img mb-2" style="background-image: url(images/person_1.jpg)">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                                    live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    @endsection
