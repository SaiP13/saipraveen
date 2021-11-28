<section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="{{url('/')}}"><h1><span>S</span>ai <span>P</span>raveen</h1></a>
        </div>
        <div class="nav-list">
        <div class="hamburger"><div class="bar"></div></div>
          <ul>
              <li><a href="{{ url('/') }}" data-after="Home">Home</a></li>
              <li><a href="{{ url('blog') }}" data-after="Service">Blogs</a></li>
              <li><a href="{{ url('project') }}" data-after="Projects">Projects</a></li>
              <li><a href="{{ url('about') }}" data-after="About">About</a></li>
              <li><a href="{{ url('contact') }}" data-after="Contact">Contact</a></li>
              <li><a href="{{ url('admin') }}" data-after="Admin">Admin</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
