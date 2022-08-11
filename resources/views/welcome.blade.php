<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ERC | Home</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="./backend/css/index.css" />
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <div class="container fl">
        <a class="navbrand" href="index.html">
          <img src="./backend/assets/redcross.png" alt="logo" />
        </a>
        <ul class="nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Who We Are</a></li>
          <li><a href="#">What We Do</a></li>
          <li><a href="{{ url('/newspost') }}">New and Media</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="menu">
          <div class="menu">
            <img src="./backend/assets/menu.svg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <div class="showcase">
      <div class="container fl">
        <div class="text">
          <div class="abstract1"></div>

          <p>We <span>Live</span> For Humanity</p>
          <h1>
            Ethiopian
            <span class="red">Red</span>
            <br />
            <span class="light">Cross Society</span>
          </h1>
          <a href="#" class="donate"
            >Donate Us <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="img">
          <div class="branch">
            <div class="icon">
              <i class="fas fa-share-alt"></i>
            </div>
            <div class="detail">
              <p class="title">11+</p>
              <p>branches</p>
            </div>
          </div>
          <img src="/backend/assets/rc-img2.jpeg" alt="imag" />
        </div>
      </div>
    </div>

    <!-- overview -->
    <div class="container">
      <div class="overview">
        <div class="card volunteer">
          <div class="icon">
            <i class="fas fa-child"></i>
          </div>
          <div class="detail">
            <h2>47K+</h2>
            <p>Volunteers</p>
          </div>
        </div>
        <div class="card branch">
          <div class="icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="detail">
            <h2>10+</h2>
            <p>Branches</p>
          </div>
        </div>

        <div class="card member">
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="detail">
            <h2>6M+</h2>
            <p>Members</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ERC desc -->
    <div class="desc">
      <div class="container fl">
        <div class="text">
          <h1>Ethiopian Red Cross Society</h1>
          <p>
            The Ethiopian Red Cross Society (ERCS) is a humanitarian
            organization providing services to communities affected by natural
            and manmade disasters through the provision of emergency responses,
            ambulance and first aid, family reunification, essential drugs,
            water and sanitation, and other humanitarian services.
          </p>
          <a href="#" class="btn">Explore More</a>
        </div>
      </div>
    </div>

    <div class="news">
      <div class="container">
        <div class="text fl">
          <h2>Our latest news</h2>
          <a href="{{url('/newspost')}}" class="all"
            >See all <i class="fas fa-arrow-right"></i
          ></a>
        </div>
        <div class="list fl">

          @foreach ($posts as $post )
          <a href="{{ url('/read/post/'.$post->id) }}" class="card">
            <img src="{{  asset($post->post_image) }}" alt="img" />
            <div class="detail">
              <h2>{{$post->post_title}}</h2>
              <div class="vote">5 <i class="fas fa-star"></i> votes</div>
            </div>
          </a>
          @endforeach
          {{-- <a href="read.html" class="card">
            <img src="/backend/assets/img2.jpg" alt="img" />
            <div class="detail">
              <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
              <div class="vote">5 <i class="fas fa-star"></i> votes</div>
            </div>
          </a>
          <a href="read.html" class="card">
            <img src="/backend/assets/img3.jpg" alt="img" />
            <div class="detail">
              <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
              <div class="vote">5 <i class="fas fa-star"></i> votes</div>
            </div>
          </a>
          <a href="read.html" class="card">
            <img src="/backend/assets/img4.jpg" alt="img" />
            <div class="detail">
              <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
              <div class="vote">5 <i class="fas fa-star"></i> votes</div>
            </div>
          </a> --}}
        </div>
      </div>
    </div>

    <div class="ambulance">
      <div class="container fl">
        <div class="text">
          <h1>FOR EMERGENCY AMBULANCE SERVICE, JUST DIAL 907</h1>
          <a href="#" class="btn">Ambulance Directory</a>
        </div>
      </div>
    </div>

    <!-- aid mobile -->
    <div class="aid">
      <div class="container fl">
        <div class="text">
          <h1>First Aid Mobile app</h1>
          <p>
            In collaboration with the American Red Cross, ERCS has developed a
            First Aid training app for Android mobiles. This free app features
            useful and easy-to-understand advice on 18 everyday first aid
            scenarios. It also includes tips on how to prepare for emergencies –
            from severe weather to road traffic accidents.
          </p>
          <div class="links">
            <a href="#"><img src="/backend/assets/googleplay.svg" alt="google" /></a>
            <a href="#"><img src="./backend/assets/appstore.svg" alt="google" /></a>
          </div>
        </div>
        <div class="img">
          <img src="./backend/assets/iPhone 11 Pro.svg" alt="iphone" />
        </div>
      </div>
    </div>

    <!-- erc mobile -->
    <div class="aid">
      <div class="container fl">
        <div class="img">
          <img src="./backend/assets/iPhone 11 Pro.svg" alt="iphone" />
        </div>
        <div class="text">
          <h1>ERCS Mobile App</h1>
          <p>
            The Ethiopian Red Cross Society has published its new Android mobile
            application which provides users with the latest news, vacancies and
            other updates. One of the new features on the ERCS mobile app is
            online registration for volunteers and members. Users now can fill
            out an online form and get registered. However, the membership fee
            must be paid in person at your local ERCS branch office.
          </p>
          <div class="links">
            <a href="#"><img src="./backend/assets/googleplay.svg" alt="google" /></a>
            <a href="#"><img src="./backend/assets/appstore.svg" alt="google" /></a>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container fl">
        <div class="footer-brand">
          <a href="index.html">
            <img src="./backend/assets/logo.png" alt="logo" />
          </a>
          <p>
            In collaboration with the American Red Cross, ERCS has developed a
            First Aid training app for
          </p>
          <div class="links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="other fl">
          <ul>
            <li class="title">About ERC</li>
            <li><a href="#">Background</a></li>
            <li><a href="#">Governance</a></li>
            <li><a href="#">Principles</a></li>
            <li><a href="#">Where we work</a></li>
          </ul>
          <ul>
            <li class="title">Usefull links</li>
            <li><a href="#">Staff email</a></li>
            <li><a href="#">Partners link</a></li>
            <li><a href="#">E-learning</a></li>
            <li><a href="#">Ambulance</a></li>
          </ul>
          <ul>
            <li class="title">Get Involved</li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Vacancy</a></li>
            <li><a href="#">Be a member</a></li>
            <li><a href="#">Be a volunteer</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <script>
      const menuBtn = document.querySelector(".menu");
      const menu = document.querySelector("ul.nav");

      menuBtn.addEventListener("click", () => {
        menu.classList.toggle("active");
      });
    </script>
  </body>
</html>
