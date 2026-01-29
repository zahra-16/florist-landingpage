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
  background: linear-gradient(to bottom, #1a2f23, #020f02);
  color:#f5f5f5;
}

/* ================= DECORATIVE ACCENTS ================= */

/* Big circle outline */
.hero-circle{
  position:absolute;
  width:520px;
  height:520px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  right:-160px;
  top:50%;
  transform:translateY(-50%);
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
  width:6px;
  height:6px;
  background:rgba(195,168,107,.45);
  border-radius:50%;
  animation:heroDots 6s ease-in-out infinite;
}

.hero-dots span:nth-child(1){
  top:35%;
  left:18%;
}

.hero-dots span:nth-child(2){
  top:60%;
  left:38%;
  animation-delay:1.5s;
}

.hero-dots span:nth-child(3){
  top:40%;
  right:22%;
  animation-delay:3s;
}

/* Diagonal gold line */
.hero-line{
  position:absolute;
  width:200px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:120px;
  left:140px;
  z-index:1;
}

/* ================= WRAPPER ================= */

.hero-premium-wrap{
  display:flex;
  gap:80px;
  align-items:center;
  position:relative;
  z-index:2;
  width:90%;
  max-width:1200px;
  margin:auto;
}

/* ================= LEFT IMAGE ================= */

.hero-left{
  flex:1;
}

.hero-image{
  width:460px;
  height:500px;
  aspect-ratio:4/5;
  border-radius:28px;
  overflow:hidden;
  box-shadow:0 40px 80px rgba(0,0,0,.55);
  animation:heroFloat 6s ease-in-out infinite;
  transition:.6s ease;
}

.hero-image:hover{
  transform:scale(1.03);
}

.hero-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ================= RIGHT CONTENT ================= */

.hero-right{
  flex:1;
}

.hero-right h1{
  font-family:"Playfair Display",serif;
  font-size:68px;
  letter-spacing:5px;
  font-weight:400;
  margin-bottom:50px;
  line-height:1.1;
}

/* MINI PRODUCTS */
.mini-products{
  display:flex;
  gap:30px;
  margin-bottom:50px;
}

.mini-card{
  background:#0f1a14;
  padding:16px;
  border-radius:22px;
  width:150px;
  text-align:center;
  box-shadow:0 15px 40px rgba(0,0,0,.45);
  transition:.4s ease;
}

.mini-card:hover{
  transform:translateY(-10px);
}

.mini-card img{
  width:100%;
  height:110px;
  object-fit:cover;
  border-radius:14px;
  margin-bottom:12px;
}

.mini-card p{
  font-size:12px;
  letter-spacing:2px;
  color:#d9d9d9;
}

/* BUTTON */
.hero-btn{
  display:inline-block;
  padding:15px 40px;
  border:1px solid #c3a86b;
  color:#c3a86b;
  text-decoration:none;
  border-radius:40px;
  letter-spacing:3px;
  font-size:13px;
  transition:.3s ease;
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
  50%{ transform:translateY(-12px); opacity:.9; }
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
  }

  .mini-products{
    justify-content:center;
    flex-wrap:wrap;
  }

  .hero-circle,
  .hero-line{
    display:none;
  }
}
</style>

<section id="hero" class="hero-premium">

  <!-- Decorative Elements -->
  <div class="hero-glow"></div>

  <div class="hero-dots">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <div class="hero-circle"></div>
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
          <img src="assets/images/flower-shop-collection (3).jpg" alt="Mini Bouquet">
          <p>MINI</p>
        </div>

        <div class="mini-card">
          <img src="assets/images/flower-shop-collection (2).jpg" alt="Wedding Bouquet">
          <p>WEDDING</p>
        </div>

      </div>

      <a href="#products" class="hero-btn">VIEW COLLECTION</a>

    </div>

  </div>

</section>
