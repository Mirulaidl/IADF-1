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
    <img src="https://cdn-icons-png.flaticon.com/512/8068/8068004.png" alt="Profile Image" class="profile-image">
    <!-- Name -->
    <h2 class="name">GROUP 17</h2>
    <!-- Cards Section -->
    <div class="row mt-4">
      <!-- Background Card -->
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">ARIFF HAKIMI</h5>
            <p class="card-text">Discover Me.</p>
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
            <h5 class="card-title">WAN HAMZAH</h5>
            <p class="card-text">Discover Me.</p>
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
            <h5 class="card-title">AMIRUL AIDIL</h5>
            <p class="card-text">Discover Me.</p>
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
          <h5 class="modal-title" id="backgroundModalLabel">ARIFF HAKIMI</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="https://scontent-kul2-2.xx.fbcdn.net/v/t39.30808-6/449037311_122147840912095359_2301047996279085035_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=a5f93a&_nc_ohc=BSgOVncyD64Q7kNvgHwGXbY&_nc_zt=23&_nc_ht=scontent-kul2-2.xx&_nc_gid=AI-GAxJN7M_4UoG9nMPBl3V&oh=00_AYAnBlxM7EICxBFkHEZBU2PwpEo50BPi1Z2sbe2q4G2ABQ&oe=673BC544" alt="Profile Image" class="profile-image">
          <b>Title: </b> <br>Augmented Reality Developer
          <br>
          <b>Brief Tagline:</b> <br>"I am a seasoned developer specializing in augmented reality applications. With a strong background in computer science and digital design, I’m passionate about merging technology and creativity to build immersive digital experiences."
          <br>
          <b>Professional Background:</b><br>Lead Developer at XYZ Tech, where I developed AR applications for educational use.
          <br>
          <b>Technical Skills:</b><br>JavaScript, C#, Unity, C#, ARKit, 3D Modeling
          <br>
          <b>Soft Skills:</b><br>Project Management, Communication, Creative Problem-Solving
        </div>
      </div>
    </div>
  </div>

  <!-- Skills Modal -->
  <div class="modal fade" id="skillsModal" tabindex="-1" aria-labelledby="skillsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="skillsModalLabel">WAN HAMZAH</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="https://scontent-kul3-1.xx.fbcdn.net/v/t39.30808-6/328783209_503700798364663_3471933460773742801_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=833d8c&_nc_ohc=lD7TtNYh67wQ7kNvgEXGrZ1&_nc_zt=23&_nc_ht=scontent-kul3-1.xx&_nc_gid=AFuqvkwI0ykBazdjmBgew0w&oh=00_AYBkN-goM_wY2eh60H_H2CQ3szUYqOTUlbPNzWp_RYEzEA&oe=673B9A65" alt="Profile Image" class="profile-image">
          <b>Title:</b> <br>Augmented Reality Specialist
          <br>
          <b>Brief Tagline:</b> <br>"I am an innovative developer with a focus on augmented reality solutions. Leveraging a solid foundation in software engineering and interactive media, I am dedicated to creating cutting-edge AR experiences that enhance user engagement and redefine digital interactions."
          <br>
          <b>Professional Background:</b><br>Senior AR Developer at ABC Innovations, where I led the development of interactive AR applications for retail and real estate, creating virtual experiences that connect brands with customers in new ways.
          <br>
          <b>Technical Skills:</b><br>Unity, Unreal Engine, Python, ARCore, 3D Animation, Computer Vision
          <br>
          <b>Soft Skills:</b><br>Leadership, Problem Solving, Collaboration, Adaptability

        </div>
      </div>
    </div>
  </div>

  <!-- Hobbies Modal -->
  <div class="modal fade" id="hobbiesModal" tabindex="-1" aria-labelledby="hobbiesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="hobbiesModalLabel">AMIRUL AIDIL</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="https://scontent-kul2-2.xx.fbcdn.net/v/t39.30808-6/449470947_3748825572072687_3792257149646294370_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=VslJdy44NGUQ7kNvgFFS44a&_nc_zt=23&_nc_ht=scontent-kul2-2.xx&_nc_gid=AK2tOmB9ZG_4TjBxHpqi77X&oh=00_AYBWtpLK-b1O8VjxM3N7fRn5o_hozbUifEkQ9soBwQzwVQ&oe=673BBA59" alt="Profile Image" class="profile-image">
          <b>Title:</b> <br>Virtual Reality & AR Developer
          <br>
          <b>Brief Tagline:</b> <br>"I'm a passionate developer focused on creating immersive virtual and augmented reality experiences. With expertise in VR environments and real-time rendering, I strive to push the boundaries of interactive technology and bring innovative ideas to life."
          <br>
          <b>Professional Background:</b><br>VR/AR Developer at NextGen Studios, where I worked on developing virtual reality training simulations and augmented reality marketing applications for various industries, including healthcare and automotive.
          <br>
          <b>Technical Skills:</b><br>Unity, C++, Blender, VRML, ARKit, Oculus SDK
          <br>
          <b>Soft Skills:</b><br>Creative Thinking, Attention to Detail, Effective Communication, Team Collaboration

        </div>
      </div>
    </div>
  </div>
@endsection