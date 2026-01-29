<?php
// about.php
?>

<style>
/* ================= ABOUT PREMIUM ================= */

.about{
  padding:140px 0;
  background:#38040e;
  position:relative;
  overflow:hidden;
}

/* Decorative circle accent */
.about::after{
  content:"";
  position:absolute;
  width:420px;
  height:420px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  right:-160px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* ================= WRAPPER ================= */

.about-wrapper{
  display:flex;
  gap:80px;
  align-items:center;
  flex-wrap:wrap;
  width:90%;
  max-width:1200px;
  margin:auto;
  position:relative;
  z-index:2;
}

/* ================= IMAGE ================= */

.about-image{
  width:460px;
  aspect-ratio:16/9;
  max-height:280px;
  border-radius:24px;
  overflow:hidden;
  box-shadow:0 35px 70px rgba(0,0,0,.35);
  animation:floatImg 6s ease-in-out infinite;
  transition:.5s ease;
  position:relative;
}

/* soft gold glow */
.about-image::before{
  content:"";
  position:absolute;
  inset:-25px;
  background:radial-gradient(circle at center, rgba(195,168,107,.35), transparent 70%);
  z-index:-1;
  filter:blur(30px);
}

.about-image:hover{
  transform:scale(1.04);
}

.about-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ================= TEXT ================= */

.about-text{
  max-width:420px;
}

.about-text h2{
  font-family:"Playfair Display",serif;
  font-size:46px;
  margin-bottom:14px;
  letter-spacing:1px;
  position:relative;
  padding-bottom:12px;
  color:#f5f1e8;
}

/* gold underline */
.about-text h2::after{
  content:"";
  position:absolute;
  width:60px;
  height:2px;
  background:#c3a86b;
  left:0;
  bottom:0;
}

.about-text p{
  color:#e6dccf;
  line-height:1.8;
  font-size:15px;
  margin-top:18px;
}

/* ================= FLOATING DOTS ================= */

.decorative-dots{
  position:absolute;
  inset:0;
  z-index:1;
  pointer-events:none;
}

.decorative-dots span{
  position:absolute;
  width:6px;
  height:6px;
  background:rgba(195,168,107,.45);
  border-radius:50%;
  animation:floatDots 6s ease-in-out infinite;
}

/* sparkle effect */
.decorative-dots span::after{
  content:"";
  position:absolute;
  inset:-6px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(255,255,255,.5), transparent);
  opacity:.6;
}

.decorative-dots span:nth-child(1){
  top:30%;
  left:15%;
  animation-delay:0s;
}

.decorative-dots span:nth-child(2){
  top:60%;
  left:35%;
  animation-delay:1.5s;
}

.decorative-dots span:nth-child(3){
  top:40%;
  right:20%;
  animation-delay:3s;
}

/* ================= GOLD LINE ================= */

.gold-line{
  position:absolute;
  width:180px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-20deg);
  bottom:80px;
  right:120px;
  z-index:1;
}

/* ================= GOLD CORNER FRAME ================= */

.gold-corner{
  position:absolute;
  width:90px;
  height:90px;
  border:1px solid rgba(195,168,107,.6);
  z-index:1;
}

.gold-corner.top-left{
  top:60px;
  left:60px;
  border-right:none;
  border-bottom:none;
}

.gold-corner.bottom-right{
  bottom:60px;
  right:60px;
  border-left:none;
  border-top:none;
}

/* ================= VERTICAL TEXT ACCENT ================= */

.vertical-accent{
  position:absolute;
  left:30px;
  top:50%;
  transform:translateY(-50%) rotate(-90deg);
  font-size:12px;
  letter-spacing:6px;
  text-transform:uppercase;
  color:rgba(195,168,107,.6);
  font-weight:500;
  z-index:1;
}

/* ================= ANIMATION ================= */

@keyframes floatImg{
  0%,100%{ transform:translateY(0); }
  50%{ transform:translateY(-8px); }
}

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-12px); opacity:.9; }
}

/* ================= MOBILE ================= */

@media(max-width:900px){
  .about{
    padding:100px 0;
  }

  .about-wrapper{
    justify-content:center;
    text-align:center;
    gap:50px;
  }

  .about-image{
    width:100%;
    max-width:360px;
    aspect-ratio:16/9;
    max-height:220px;
    margin:auto;
  }

  .about-text h2::after{
    left:50%;
    transform:translateX(-50%);
  }

  .about::after,
  .gold-line,
  .gold-corner,
  .vertical-accent{
    display:none;
  }
}
</style>

<section id="about" class="about premium-about">

  <!-- Decorative Elements -->
  <div class="decorative-dots">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="gold-line"></div>
  <div class="gold-corner top-left"></div>
  <div class="gold-corner bottom-right"></div>
  <div class="vertical-accent">Premium Florist</div>

  <div class="about-wrapper">

    <div class="about-image">
      <img src="assets/images/flower-shop-collection-concept.jpg" alt="Fresh Flowers">
    </div>

    <div class="about-text">
      <h2>Fresh Flowers</h2>
      <p>
        From our garden directly to your special moments.
        Each bouquet is carefully crafted to deliver beauty,
        elegance, and unforgettable memories.
      </p>
    </div>

  </div>

</section>
