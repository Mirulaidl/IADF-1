@extends('layouts.app')

@section('content')

<style>
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.jumbotron {
    margin-bottom: 20px;
}
</style>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Welcome to My Profile</h1>
          <p class="lead my-3">This site is a place where you can learn more about me, my skills, and my interests. I've created this website to share my background and experiences in a professional way. You can explore my work, my journey, and get in touch with me. I hope this site gives you a good sense of who I am and what I do!"</p>
          <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <!-- <strong class="d-inline-block mb-2 text-primary">World</strong> -->
              <h3 class="mb-0">
                <p style="text-decoration: underline;">About Me</p>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 12</div> -->
              <p class="card-text">I'm a web developer passionate about technology, focused on creating user-friendly websites and continuously improving my skills.</p>
              <p><a class="btn btn-lg btn-primary" href="/about" role="button">About Me</a></p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="../../images/sky.jpg" alt="Card image cap" style="width: 250px; height: 240px">
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <!-- <strong class="d-inline-block mb-2 text-success">Design</strong> -->
              <h3 class="mb-0">
              <p style="text-decoration: underline;">Contact Us</p>
              </h3>
              <!-- <div class="mb-1 text-muted">Nov 11</div> -->
              <p class="card-text">Got questions or want to connect? Reach out via the contact form, and I’ll get back to you soon!</p>
              <p><a class="btn btn-lg btn-primary" href="/contact" role="button">Contact Us</a></p>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" src="../../images/sunset.jpg" alt="Card image cap" style="width: 250px; height: 240px">
          </div>
        </div>
      </div>
    </div>
<!-- <div class="jumbotron text-center">
    <h1>Welcome to My Profile</h1>
    <p>This is a brief introduction about me.</p>
</div> -->
@endsection