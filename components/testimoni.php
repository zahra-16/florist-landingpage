<?php
// testimoni.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
/* ================= TESTIMONI ================= */

.testimoni{
  padding:130px 0;
  background:#120503;
  position:relative;
  overflow:hidden;
  text-align:center;
  font-family:'Inter',sans-serif;
  color:#f5f1e8;
}

/* rotating circle */
.testimoni::before{
  content:"";
  position:absolute;
  width:380px;
  height:380px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  right:-170px;
  top:50%;
  transform:translateY(-50%);
  animation:slowRotate 50s linear infinite;
  z-index:1;
}

/* ================= DECOR ================= */

.testimoni-dots{
  position:absolute;
  inset:0;
  pointer-events:none;
  z-index:1;
}
.testimoni-dots span{
  position:absolute;
  width:6px;
  height:6px;
  background:rgba(195,168,107,.55);
  border-radius:50%;
  animation:floatDots 6s ease-in-out infinite;
}
.testimoni-dots span:nth-child(1){ top:28%; left:16%; }
.testimoni-dots span:nth-child(2){ top:62%; left:46%; animation-delay:1.5s; }
.testimoni-dots span:nth-child(3){ top:40%; right:22%; animation-delay:3s; }

.testimoni-line{
  position:absolute;
  width:160px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:90px;
  left:120px;
  animation:pulseLine 4s ease-in-out infinite;
  z-index:1;
}

/* ================= TITLE ================= */

.testimoni .mini-title{
  font-size:11px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:10px;
  position:relative;
  z-index:2;
}

.testimoni h2{
  font-size:34px;
  font-weight:500;
  margin:0 auto 36px;
  max-width:520px;
  line-height:1.4;
  position:relative;
  z-index:2;
}

.testimoni .subtitle{
  max-width:520px;
  margin:0 auto 60px;
  font-size:14px;
  letter-spacing:1.6px;
  line-height:1.8;
  color:#eadfd2;
  position:relative;
  z-index:2;
}

/* ================= GRID ================= */

.testimoni-grid{
  width:90%;
  max-width:1000px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:28px;
  position:relative;
  z-index:2;
}

/* ================= CARD ================= */

.testimoni-card{
  position:relative;
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.14);
  border-radius:26px;
  padding:42px 30px;
  backdrop-filter:blur(10px);
  overflow:hidden;
  transition:.55s cubic-bezier(.4,0,.2,1);
}

/* glow aura */
.testimoni-card::before{
  content:"";
  position:absolute;
  inset:-40px;
  background:radial-gradient(circle, rgba(195,168,107,.32), transparent 70%);
  opacity:0;
  filter:blur(30px);
  transition:.5s ease;
}
.testimoni-card:hover::before{ opacity:1; }

.testimoni-card:hover{
  transform:translateY(-14px) scale(1.03);
  border-color:#c3a86b;
  background:rgba(255,255,255,.08);
}

/* ================= CARD DECOR ================= */

.card-decor{
  position:absolute;
  pointer-events:none;
  z-index:0;
}

.testimoni-card:nth-child(1) .card-decor{
  width:110px;
  height:110px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(195,168,107,.35), transparent 70%);
  top:-40px;
  right:-40px;
  animation:softPulse 6s ease-in-out infinite;
}

.testimoni-card:nth-child(2) .card-decor{
  width:150px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  bottom:40px;
  left:-30px;
  transform:rotate(-25deg);
}

.testimoni-card:nth-child(3) .card-decor{
  width:70px;
  height:70px;
  border:1px solid rgba(195,168,107,.6);
  bottom:18px;
  right:18px;
  border-left:none;
  border-top:none;
}

/* ================= QUOTE ================= */

.testimoni-quote{
  font-size:26px;
  color:#c3a86b;
  margin-bottom:18px;
  position:relative;
  z-index:2;
}

/* ================= TEXT ================= */

.testimoni-text{
  font-size:14px;
  line-height:1.85;
  letter-spacing:1.6px;
  margin-bottom:28px;
  position:relative;
  z-index:2;
}

/* ================= USER ================= */

.testimoni-user{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:12px;
  position:relative;
  z-index:2;
}

.testimoni-avatar{
  width:38px;
  height:38px;
  border-radius:50%;
  overflow:hidden;
  border:1px solid rgba(195,168,107,.6);
}

.testimoni-avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
}

.testimoni-name{
  font-size:11px;
  letter-spacing:2px;
  color:#c3a86b;
}

/* ================= ANIMATION ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-12px); opacity:1; }
}
@keyframes pulseLine{
  0%,100%{ opacity:.3; }
  50%{ opacity:1; }
}
@keyframes slowRotate{
  from{ transform:translateY(-50%) rotate(0deg); }
  to{ transform:translateY(-50%) rotate(360deg); }
}
@keyframes softPulse{
  0%,100%{ opacity:.4; transform:scale(1); }
  50%{ opacity:1; transform:scale(1.1); }
}

/* ================= MOBILE ================= */

@media(max-width:768px){
  .testimoni{
    padding:100px 0;
  }
  .testimoni h2{
    font-size:28px;
  }
  .testimoni::before,
  .testimoni-line{
    display:none;
  }
}
</style>
</head>

<body>

<section id="testimoni" class="testimoni">

  <!-- DECOR -->
  <div class="testimoni-dots">
    <span></span><span></span><span></span>
  </div>
  <div class="testimoni-line"></div>

  <p class="mini-title">TESTIMONIALS</p>
  <h2>What Our Customers Say</h2>
  <p class="subtitle">
    Real stories from customers who trusted us
    for their special moments.
  </p>

  <div class="testimoni-grid">

    <div class="testimoni-card">
      <span class="card-decor"></span>
      <div class="testimoni-quote"><i class="fa-solid fa-quote-left"></i></div>
      <p class="testimoni-text">
        Bunganya sangat segar dan desainnya elegan.
        Cocok untuk hadiah spesial dan acara penting.
      </p>
      <div class="testimoni-user">
        <div class="testimoni-avatar">
          <img src="assets/images/cust1.png" alt="">
        </div>
        <div class="testimoni-name">ANISA · JAKARTA</div>
      </div>
    </div>

    <div class="testimoni-card">
      <span class="card-decor"></span>
      <div class="testimoni-quote"><i class="fa-solid fa-quote-left"></i></div>
      <p class="testimoni-text">
        Pelayanan cepat dan ramah, hasil bouquet-nya
        jauh melebihi ekspektasi saya.
      </p>
      <div class="testimoni-user">
        <div class="testimoni-avatar">
          <img src="assets/images/cust3.png" alt="">
        </div>
        <div class="testimoni-name">RIZKY · BANDUNG</div>
      </div>
    </div>

    <div class="testimoni-card">
      <span class="card-decor"></span>
      <div class="testimoni-quote"><i class="fa-solid fa-quote-left"></i></div>
      <p class="testimoni-text">
        Sangat recommended untuk wedding & event.
        Detail dan kualitasnya premium.
      </p>
      <div class="testimoni-user">
        <div class="testimoni-avatar">
          <img src="assets/images/cust2.png" alt="">
        </div>
        <div class="testimoni-name">MAYA · SURABAYA</div>
      </div>
    </div>

  </div>
</section>

</body>
</html>
