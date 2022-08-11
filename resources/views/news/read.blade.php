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
    <link rel="stylesheet" href="/backend/css/read.css" />
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <div class="container fl">
        <a class="navbrand" href="index.html">
          <img src="/backend/assets/redcross.png" alt="logo" />
        </a>
        <ul class="nav">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="#">Who We Are</a></li>
          <li><a href="#">What We Do</a></li>
          <li><a href="#">New and Media</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="menu">
          <div class="menu">
            <img src="/backend/assets/menu.svg" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- news read page -->
    <div class="read_page">
      <div class="container">
        <a href="{{ url('/newspost')}}" class="back_btn"
          ><i class="fas fa-arrow-left"></i> Back</a
        >
        <img src="{{  asset($posts->post_image) }}" alt="img" />
        <div class="meta fl">
          <span class="vote"> <i class="fas fa-star"></i> 1k</span>
          <span class="date"><i class="fas fa-clock"></i>1hr ago</span>
          <span class="view">1.2k <span>view</span></span>
          <a href="#" class="share"><i class="fas fa-share"></i></a>
        </div>
        <h1>
           {{$posts->post_title}} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti
          ducimus, omnis dolore suscipit molestiae reprehenderit quaerat
          distinctio aspernatur 
        </h1>
        <p>
            {{$posts->post_body}}
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus
          voluptatum dolores molestias, rerum saepe sit aspernatur distinctio
          vero hic, possimus enim voluptate? Voluptatum, libero distinctio.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
          praesentium delectus soluta, labore id in maiores adipisci ex
          voluptate quod unde culpa, porro vitae aliquid dolorum! Atque nemo
          doloremque impedit quibusdam dicta numquam officia dolorem nihil
          sapiente, maiores rem qui perspiciatis distinctio, laboriosam quia,
          ipsam vitae quasi dolorum accusamus ipsum consequuntur? Ea aliquid
          quia asperiores vel inventore amet adipisci at reprehenderit incidunt
          numquam dolorum rerum tempora minima praesentium ducimus eveniet iste
          ratione, maxime dolor architecto sit, dolores optio debitis facilis!
          Incidunt, dignissimos consectetur officiis molestiae aperiam nesciunt?
          Eum saepe sed, 
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
          deleniti veniam quasi! Iusto laboriosam ipsum harum sequi blanditiis
          similique provident inventore officia itaque unde voluptatum ratione
          recusandae, temporibus debitis repellat illum fuga alias eos.
          Corporis.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
          deleniti veniam quasi! Iusto laboriosam ipsum harum sequi blanditiis
          similique provident inventore officia itaque unde voluptatum ratione
          recusandae, temporibus debitis repellat illum fuga alias eos.
          Corporis.
        </p>
      </div>
    </div>

    <footer>
      <div class="container fl">
        <div class="footer-brand">
          <a href="index.html">
            <img src="/backend/assets/logo.png" alt="logo" />
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
