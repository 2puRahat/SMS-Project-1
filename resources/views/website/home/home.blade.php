@extends('master.front.master')

@section('body')
    <section class="notice-section py-5">
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2200">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body rounded-0">
                            <h2 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque distinctio doloremque eos expedita impedit inventore iste iusto, laboriosam, laudantium magnam nemo nostrum nulla pariatur quibusdam quos repellendus vel veniam.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque distinctio doloremque eos expedita impedit inventore iste iusto, laboriosam, laudantium magnam nemo nostrum nulla pariatur quibusdam quos repellendus vel veniam.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h2 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque distinctio doloremque eos expedita impedit inventore iste iusto, laboriosam, laudantium magnam nemo nostrum nulla pariatur quibusdam quos repellendus vel veniam.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque distinctio doloremque eos expedita impedit inventore iste iusto, laboriosam, laudantium magnam nemo nostrum nulla pariatur quibusdam quos repellendus vel veniam.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h2 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque distinctio doloremque eos expedita impedit inventore iste iusto, laboriosam, laudantium magnam nemo nostrum nulla pariatur quibusdam quos repellendus vel veniam.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum cumque distinctio doloremque eos expedita impedit inventore iste iusto, laboriosam, laudantium magnam nemo nostrum nulla pariatur quibusdam quos repellendus vel veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/s2.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature 1</li>
                                        <li>Course Feature 2</li>
                                        <li>Course Feature 3</li>
                                        <li>Course Feature 4</li>
                                        <li>Course Feature 5</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/s3.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature 1</li>
                                        <li>Course Feature 2</li>
                                        <li>Course Feature 3</li>
                                        <li>Course Feature 4</li>
                                        <li>Course Feature 5</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a class="btn btn-outline-success">Read More</a>
                                    <a class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/s4.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature 1</li>
                                        <li>Course Feature 2</li>
                                        <li>Course Feature 3</li>
                                        <li>Course Feature 4</li>
                                        <li>Course Feature 5</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a class="btn btn-outline-success">Read More</a>
                                    <a class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/img/s5.jpg')}}" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <figure>
                                        <blockquote class="blockquote">
                                            <p>A well-known quote, contained in a blockquote element.</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </figcaption>
                                    </figure>
                                    <ul>
                                        <li>Course Feature 1</li>
                                        <li>Course Feature 2</li>
                                        <li>Course Feature 3</li>
                                        <li>Course Feature 4</li>
                                        <li>Course Feature 5</li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a class="btn btn-outline-success">Read More</a>
                                    <a class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" placeholder="Enter Your Email" class="form-control"/>
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
