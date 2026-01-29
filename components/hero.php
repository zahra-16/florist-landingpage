<?php
// hero.php
?>
<style>
/* ================= HERO PREMIUM ================= */

.hero-premium{
  min-height:100vh;
  display:flex;
  align-items:center;
  padding-top:120px;
  position:relative;
  overflow:hidden;
  background:
    radial-gradient(circle at 20% 30%, rgba(195,168,107,.12), transparent 40%),
    linear-gradient(to bottom, #1a2f23, #020f02);
  color:#f5f5f5;
}

/* soft noise glow */
.hero-glow{
  position:absolute;
  inset:0;
  background:radial-gradient(circle at center, rgba(255,255,255,.04), transparent 60%);
  z-index:0;
}

/* ================= DECORATIVE ACCENTS ================= */

/* Big circle */
.hero-circle{
  position:absolute;
  width:560px;
  height:560px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  right:-180px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
  animation:slowRotate 40s linear infinite;
}

/* Floating ring */
.hero-ring{
  position:absolute;
  width:160px;
  height:160px;
  border:1px solid rgba(195,168,107,.35);
  border-radius:50%;
  top:18%;
  left:10%;
  animation:ringFloat 8s ease-in-out infinite;
  z-index:1;
}

/* Floating dots */
.hero-dots{
  position:absolute;
  inset:0;
  pointer-events:none;
  z-index:1;
}

.hero-dots span{
  position:absolute;
  width:7px;
  height:7px;
  background:rgba(195,168,107,.55);
  border-radius:50%;
  animation:heroDots 7s ease-in-out infinite;
}

.hero-dots span::after{
  content:"";
  position:absolute;
  inset:-7px;
  background:radial-gradient(circle, rgba(255,255,255,.6), transparent);
  border-radius:50%;
  opacity:.6;
}

.hero-dots span:nth-child(1){ top:32%; left:18%; }
.hero-dots span:nth-child(2){ top:62%; left:38%; animation-delay:1.5s; }
.hero-dots span:nth-child(3){ top:40%; right:22%; animation-delay:3s; }
.hero-dots span:nth-child(4){ bottom:28%; right:34%; animation-delay:4.5s; }

/* Diagonal gold line */
.hero-line{
  position:absolute;
  width:220px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:120px;
  left:140px;
  z-index:1;
  animation:pulseLine 4s ease-in-out infinite;
}

/* ================= WRAPPER ================= */

.hero-premium-wrap{
  display:flex;
  gap:90px;
  align-items:center;
  position:relative;
  z-index:2;
  width:90%;
  max-width:1200px;
  margin:auto;
}

/* ================= LEFT IMAGE ================= */

.hero-left{ flex:1; }

.hero-image{
  width:460px;
  height:500px;
  aspect-ratio:4/5;
  border-radius:30px;
  overflow:hidden;
  box-shadow:0 45px 90px rgba(0,0,0,.6);
  animation:heroFloat 6.5s ease-in-out infinite;
  transition:.6s cubic-bezier(.4,0,.2,1);
  position:relative;
}

/* glow aura */
.hero-image::before{
  content:"";
  position:absolute;
  inset:-30px;
  background:radial-gradient(circle, rgba(195,168,107,.35), transparent 65%);
  filter:blur(35px);
  z-index:-1;
}

/* shimmer sweep */
.hero-image::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(120deg, transparent 30%, rgba(255,255,255,.25), transparent 70%);
  opacity:.25;
  animation:shine 6s linear infinite;
}

.hero-image:hover{
  transform:translateY(-10px) scale(1.05);
}

.hero-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ================= RIGHT CONTENT ================= */

.hero-right{
  flex:1;
  animation:fadeRight 1.2s ease forwards;
}

.hero-right h1{
  font-family:"Playfair Display",serif;
  font-size:70px;
  letter-spacing:6px;
  font-weight:400;
  margin-bottom:50px;
  line-height:1.05;
}

/* MINI PRODUCTS */

.mini-products{
  display:flex;
  gap:30px;
  margin-bottom:55px;
}

.mini-card{
  background:linear-gradient(to bottom, #0f1a14, #0a120e);
  padding:16px;
  border-radius:24px;
  width:155px;
  text-align:center;
  box-shadow:0 18px 45px rgba(0,0,0,.45);
  transition:.5s cubic-bezier(.4,0,.2,1);
  position:relative;
  overflow:hidden;
}

.mini-card::before{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(120deg, transparent, rgba(255,255,255,.15), transparent);
  opacity:0;
  transition:.5s ease;
}

.mini-card:hover{
  transform:translateY(-12px) scale(1.04);
}

.mini-card:hover::before{
  opacity:1;
}

.mini-card img{
  width:100%;
  height:115px;
  object-fit:cover;
  border-radius:14px;
  margin-bottom:12px;
}

.mini-card p{
  font-size:12px;
  letter-spacing:2px;
  color:#e6e6e6;
}

/* BUTTON */

.hero-btn{
  display:inline-block;
  padding:16px 44px;
  border:1px solid #c3a86b;
  color:#c3a86b;
  text-decoration:none;
  border-radius:40px;
  letter-spacing:3px;
  font-size:13px;
  transition:.35s ease;
  position:relative;
  overflow:hidden;
}

.hero-btn::after{
  content:"";
  position:absolute;
  inset:0;
  background:linear-gradient(120deg, transparent, rgba(195,168,107,.4), transparent);
  transform:translateX(-100%);
  transition:.5s ease;
}

.hero-btn:hover::after{
  transform:translateX(100%);
}

.hero-btn:hover{
  background:#c3a86b;
  color:#002400;
}

/* ================= ANIMATIONS ================= */

@keyframes heroFloat{
  0%,100%{ transform:translateY(0); }
  50%{ transform:translateY(-14px); }
}

@keyframes heroDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-14px); opacity:1; }
}

@keyframes fadeRight{
  from{ opacity:0; transform:translateX(30px); }
  to{ opacity:1; transform:translateX(0); }
}

@keyframes shine{
  0%{ background-position:-200% 0; }
  100%{ background-position:200% 0; }
}

@keyframes ringFloat{
  0%,100%{ transform:translateY(0) scale(1); }
  50%{ transform:translateY(-18px) scale(1.05); }
}

@keyframes pulseLine{
  0%,100%{ opacity:.3; }
  50%{ opacity:1; }
}

@keyframes slowRotate{
  from{ transform:translateY(-50%) rotate(0deg); }
  to{ transform:translateY(-50%) rotate(360deg); }
}

/* ================= MOBILE ================= */

@media(max-width:900px){
  .hero-premium{
    padding-top:100px;
  }

  .hero-premium-wrap{
    flex-direction:column;
    text-align:center;
    gap:60px;
  }

  .hero-image{
    width:100%;
    max-width:360px;
    height:440px;
    margin:auto;
  }

  .hero-right h1{
    font-size:44px;
    letter-spacing:3px;
  }

  .mini-products{
    justify-content:center;
    flex-wrap:wrap;
  }

  .hero-circle,
  .hero-line,
  .hero-ring{
    display:none;
  }
}
</style>

<section id="hero" class="hero-premium">

  <div class="hero-glow"></div>

  <div class="hero-dots">
    <span></span><span></span><span></span><span></span>
  </div>

  <div class="hero-circle"></div>
  <div class="hero-ring"></div>
  <div class="hero-line"></div>

  <div class="hero-premium-wrap">

    <div class="hero-left">
      <div class="hero-image">
        <img src="assets/images/flower-shop-collection (1).jpg" alt="Premium Bouquet">
      </div>
    </div>

    <div class="hero-right">

      <h1>PREMIUM<br>BOUQUETS</h1>

      <div class="mini-products">
        <div class="mini-card">
          <img src="assets/images/flower-shop-collection (3).jpg">
          <p>MINI</p>
        </div>

        <div class="mini-card">
          <img src="assets/images/flower-shop-collection (2).jpg">
          <p>WEDDING</p>
        </div>
      </div>

      <a href="#products" class="hero-btn">VIEW COLLECTION</a>

    </div>

  </div>

</section>
