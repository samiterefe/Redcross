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
    <link rel="stylesheet" href="./backend/css/news.css" />
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <div class="container fl">
        <a class="navbrand" href="{{url('/')}}">
          <img src="./backend/assets/redcross.png" alt="logo" />
        </a>
        <ul class="nav">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="#">Who We Are</a></li>
          <li><a href="#">What We Do</a></li>
          <li><a href=""{{url('/newspost')}}"">New and Media</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="menu">
          <div class="menu">
            <img src="./backend/assets/menu.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <div class="news">
      <div class="container">
        <div class="title"><h1>Latest news</h1></div>
        <div class="list fl">

          @foreach ($posts as $post )
          <div class="news-card">
            <img src="{{  asset($post->post_image) }}" alt="" />
            <a href="{{ url('/read/post/'.$post->id) }}" class="detail">
              <h1>
                {{$post->post_title}} Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                {{$post->post_body}} Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div>
          @endforeach
          {{-- <div class="news-card">
            <img src="./backend/assets/img6.jpg" alt="" />
            <a href="read.html" class="detail">
              <h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio.
                Laborum mollitia deserunt et tempora iste itaque harum cumque...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div>
          <div class="news-card">
            <img src="./backend/assets/img3.jpg" alt="" />
            <a href="read.html" class="detail">
              <h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio.
                Laborum mollitia deserunt et tempora iste itaque harum cumque...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div>
          <div class="news-card">
            <img src="./backend/assets/img4.jpg" alt="" />
            <a href="read.html" class="detail">
              <h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio.
                Laborum mollitia deserunt et tempora iste itaque harum cumque...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div>
          <div class="news-card">
            <img src="./backend/assets/img1.jpg" alt="" />
            <a href="read.html" class="detail">
              <h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio.
                Laborum mollitia deserunt et tempora iste itaque harum cumque...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div>
          <div class="news-card">
            <img src="./backend/assets/img2.jpg" alt="" />
            <a href="read.html" class="detail">
              <h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio.
                Laborum mollitia deserunt et tempora iste itaque harum cumque...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div>
          <div class="news-card">
            <img src="./backend/assets/img2.jpg" alt="" />
            <a href="read.html" class="detail">
              <h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit..
              </h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Laudantium, id minima molestiae in sunt harum distinctio.
                Laborum mollitia deserunt et tempora iste itaque harum cumque...
              </p>
            </a>
            <div class="meta">
              <span class="vote"> 1k<i class="fas fa-star"></i> </span>
              <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
              <span class="view">1.2k <span>view</span></span>
              <a href="#" class="share"><i class="fas fa-share"></i></a>
            </div>
          </div> --}}
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
