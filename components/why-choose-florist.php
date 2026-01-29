<?php
// why-choose-florist.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Why Choose Our Florist</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
/* ================= WHY CHOOSE FLORIST ================= */

.why-florist{
  padding:150px 0;
  background:#020f02;
  font-family:'Inter', sans-serif;
  position:relative;
  overflow:hidden;
  color:#f5f1e8;
}

/* rotating circle */
.why-florist::after{
  content:"";
  position:absolute;
  width:420px;
  height:420px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  left:-180px;
  top:50%;
  transform:translateY(-50%);
  animation:slowRotate 45s linear infinite;
  z-index:1;
}

/* top gold line */
.why-florist::before{
  content:"";
  position:absolute;
  width:110px;
  height:2px;
  background:#c3a86b;
  top:90px;
  left:50%;
  transform:translateX(-50%);
  animation:pulseLine 4s ease-in-out infinite;
  z-index:1;
}

/* ================= GLOBAL DECOR ================= */

.why-dots{
  position:absolute;
  inset:0;
  pointer-events:none;
  z-index:1;
}
.why-dots span{
  position:absolute;
  width:7px;
  height:7px;
  background:rgba(195,168,107,.6);
  border-radius:50%;
  animation:floatDots 7s ease-in-out infinite;
}
.why-dots span:nth-child(1){ top:22%; left:14%; }
.why-dots span:nth-child(2){ top:64%; left:42%; animation-delay:1.5s; }
.why-dots span:nth-child(3){ top:38%; right:24%; animation-delay:3s; }
.why-dots span:nth-child(4){ bottom:26%; right:36%; animation-delay:4.5s; }

.why-ring{
  position:absolute;
  width:150px;
  height:150px;
  border:1px solid rgba(195,168,107,.35);
  border-radius:50%;
  top:22%;
  right:12%;
  animation:ringFloat 9s ease-in-out infinite;
  z-index:1;
}
.why-ring.alt{
  width:90px;
  height:90px;
  top:68%;
  right:22%;
  opacity:.4;
  animation:ringFloat 7s ease-in-out infinite reverse;
}

.why-line{
  position:absolute;
  width:200px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:120px;
  right:130px;
  animation:pulseLine 4s ease-in-out infinite;
  z-index:1;
}

.why-corner{
  position:absolute;
  width:100px;
  height:100px;
  border:1px solid rgba(195,168,107,.6);
  z-index:1;
}
.why-corner.top-right{
  top:60px;
  right:60px;
  border-left:none;
  border-bottom:none;
}
.why-corner.bottom-left{
  bottom:60px;
  left:60px;
  border-right:none;
  border-top:none;
}

.why-vertical{
  position:absolute;
  right:30px;
  top:50%;
  transform:translateY(-50%) rotate(90deg);
  font-size:12px;
  letter-spacing:6px;
  color:rgba(195,168,107,.65);
  z-index:1;
}

/* ================= CONTENT ================= */

.container{
  width:90%;
  max-width:1200px;
  margin:auto;
  position:relative;
  z-index:2;
}

.mini-title{
  font-size:11px;
  letter-spacing:4px;
  color:#c3a86b;
}

h2{
  font-size:34px;
  font-weight:500;
  margin:12px 0 40px;
  max-width:520px;
  line-height:1.4;
}

/* ================= GRID ================= */

.why-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:28px;
}

/* ================= CARD ================= */

.why-card{
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.14);
  border-radius:26px;
  padding:46px 30px;
  position:relative;
  overflow:hidden;
  backdrop-filter:blur(10px);
  transition:.55s cubic-bezier(.4,0,.2,1);
}

/* glow aura */
.why-card::before{
  content:"";
  position:absolute;
  inset:-40px;
  background:radial-gradient(circle, rgba(195,168,107,.3), transparent 70%);
  opacity:0;
  filter:blur(30px);
  transition:.5s ease;
}
.why-card:hover::before{ opacity:1; }

.why-card:hover{
  transform:translateY(-14px) scale(1.03);
  border-color:#c3a86b;
  background:rgba(255,255,255,.08);
}

/* icon */
.why-icon{
  font-size:30px;
  color:#c3a86b;
  margin-bottom:22px;
}
.why-icon i{
  filter:drop-shadow(0 0 12px rgba(195,168,107,.4));
}
.why-card:hover .why-icon{
  transform:scale(1.15) rotate(-5deg);
  transition:.4s ease;
}

/* text */
.why-card h4{
  font-size:12px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:14px;
}
.why-card p{
  font-size:14px;
  letter-spacing:1.6px;
  line-height:1.7;
}

/* ================= CARD UNIQUE DECOR ================= */

.card-decor{
  position:absolute;
  pointer-events:none;
  z-index:0;
}

/* Card 1 – glow circle */
.why-card:nth-child(1) .card-decor{
  width:120px;
  height:120px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(195,168,107,.35), transparent 70%);
  top:-40px;
  right:-40px;
  animation:softPulse 6s ease-in-out infinite;
}

/* Card 2 – diagonal line */
.why-card:nth-child(2) .card-decor{
  width:160px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  bottom:30px;
  left:-40px;
  transform:rotate(-25deg);
}

/* Card 3 – dots */
.why-card:nth-child(3) .card-decor{
  width:8px;
  height:8px;
  border-radius:50%;
  background:#c3a86b;
  box-shadow:
    22px 12px rgba(195,168,107,.6),
    -18px 28px rgba(195,168,107,.4);
  top:26px;
  left:24px;
  animation:floatDots 7s ease-in-out infinite;
}

/* Card 4 – corner frame */
.why-card:nth-child(4) .card-decor{
  width:70px;
  height:70px;
  border:1px solid rgba(195,168,107,.6);
  bottom:20px;
  right:20px;
  border-left:none;
  border-top:none;
}

/* ================= ANIMATION ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-14px); opacity:1; }
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
@keyframes softPulse{
  0%,100%{ opacity:.4; transform:scale(1); }
  50%{ opacity:1; transform:scale(1.1); }
}

/* ================= MOBILE ================= */

@media(max-width:900px){
  .why-grid{ grid-template-columns:repeat(2,1fr); }
}
@media(max-width:600px){
  .why-florist{ padding:100px 0; }
  .why-grid{ grid-template-columns:1fr; }

  .why-ring,
  .why-ring.alt,
  .why-line,
  .why-corner,
  .why-vertical,
  .why-florist::after{
    display:none;
  }
}
</style>
</head>

<body>

<section class="why-florist" id="why-choose-florist">

  <!-- GLOBAL DECOR -->
  <div class="why-dots">
    <span></span><span></span><span></span><span></span>
  </div>
  <div class="why-ring"></div>
  <div class="why-ring alt"></div>
  <div class="why-line"></div>
  <div class="why-corner top-right"></div>
  <div class="why-corner bottom-left"></div>
  <div class="why-vertical">Why Choose Us</div>

  <div class="container">
    <p class="mini-title">WHY CHOOSE US</p>
    <h2>We Create Flowers That Speak Feelings</h2>

    <div class="why-grid">

      <div class="why-card">
        <span class="card-decor"></span>
        <div class="why-icon"><i class="fa-solid fa-seedling"></i></div>
        <h4>PREMIUM FLOWERS</h4>
        <p>We select only the freshest and finest flowers.</p>
      </div>

      <div class="why-card">
        <span class="card-decor"></span>
        <div class="why-icon"><i class="fa-solid fa-hand-sparkles"></i></div>
        <h4>HANDMADE DESIGN</h4>
        <p>Crafted with care, emotion, and artistic detail.</p>
      </div>

      <div class="why-card">
        <span class="card-decor"></span>
        <div class="why-icon"><i class="fa-solid fa-truck-fast"></i></div>
        <h4>FAST DELIVERY</h4>
        <p>On-time delivery to keep flowers fresh.</p>
      </div>

      <div class="why-card">
        <span class="card-decor"></span>
        <div class="why-icon"><i class="fa-solid fa-heart"></i></div>
        <h4>TRUSTED QUALITY</h4>
        <p>Chosen for special moments and celebrations.</p>
      </div>

    </div>
  </div>
</section>

</body>
</html>
