@extends('layouts.app')

@section('content')
<style>
    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      object-fit: cover;
      margin: 20px auto;
      display: block;
    }
    .card {
      margin-bottom: 20px;
    }
  </style>
<div class="container text-center mt-5">
    <!-- Profile Image -->
    <img src="https://www.theladders.com/wp-content/uploads/man_outside_091318-800x450.jpg" alt="Profile Image" class="profile-image">
    <!-- Name -->
    <h2 class="name">Darren Watkins</h2>
    <!-- Cards Section -->
    <div class="row mt-4">
      <!-- Background Card -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Background</h5>
            <p class="card-text">Learn about my journey and experiences.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#backgroundModal">
              More Info
            </button>
          </div>
        </div>
      </div>

      <!-- Skills Card -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Skills</h5>
            <p class="card-text">Discover my technical skills and expertise.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#skillsModal">
              More Info
            </button>
          </div>
        </div>
      </div>

      <!-- Hobbies Card -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Hobbies</h5>
            <p class="card-text">Find out what I love doing in my free time.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#hobbiesModal">
              More Info
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Background Modal -->
  <div class="modal fade" id="backgroundModal" tabindex="-1" aria-labelledby="backgroundModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="backgroundModalLabel">Background</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          I have a diverse background in software development, UI/UX design, and project management. My journey began in computer science, and I have worked on various projects in both front-end and back-end development.
        </div>
      </div>
    </div>
  </div>

  <!-- Skills Modal -->
  <div class="modal fade" id="skillsModal" tabindex="-1" aria-labelledby="skillsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="skillsModalLabel">Skills</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          I am proficient in various programming languages like JavaScript, Python, and C++. My expertise includes web development, data analysis, and using frameworks like React and Bootstrap.
        </div>
      </div>
    </div>
  </div>

  <!-- Hobbies Modal -->
  <div class="modal fade" id="hobbiesModal" tabindex="-1" aria-labelledby="hobbiesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hobbiesModalLabel">Hobbies</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          I enjoy hiking, photography, and playing the guitar. Exploring nature and capturing moments through my camera lens are my favorite pastimes.
        </div>
      </div>
    </div>
  </div>
@endsection