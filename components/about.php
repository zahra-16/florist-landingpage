<?php
// about.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts (INTER ONLY) -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
/* ================= ABOUT PREMIUM ================= */

.about{
  padding:160px 0;
  background:#120503;
  position:relative;
  overflow:hidden;
  font-family:'Inter',sans-serif;
  color:#f5f1e8;
}

/* Decorative circle accent */
.about::after{
  content:"";
  position:absolute;
  width:460px;
  height:460px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  right:-180px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* ================= WRAPPER ================= */

.about-wrapper{
  display:flex;
  gap:90px;
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
  width:480px;
  aspect-ratio:16/9;
  max-height:300px;
  border-radius:26px;
  overflow:hidden;
  box-shadow:0 40px 80px rgba(0,0,0,.45);
  animation:floatImg 7s ease-in-out infinite;
  transition:.6s cubic-bezier(.4,0,.2,1);
  position:relative;
}

/* glowing ring */
.about-image::before{
  content:"";
  position:absolute;
  inset:-28px;
  background:radial-gradient(circle, rgba(195,168,107,.35), transparent 65%);
  filter:blur(35px);
  z-index:-1;
}

/* shimmer border */
.about-image::after{
  content:"";
  position:absolute;
  inset:0;
  border-radius:26px;
  background:linear-gradient(
    120deg,
    transparent 30%,
    rgba(255,255,255,.25),
    transparent 70%
  );
  opacity:.25;
  animation:shine 6s linear infinite;
  pointer-events:none;
}

.about-image:hover{
  transform:translateY(-8px) scale(1.05);
}

.about-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ================= TEXT ================= */

.about-text{
  max-width:430px;
  animation:fadeUp 1.2s ease forwards;
}

.about-text h2{
  font-size:38px;
  font-weight:500;
  letter-spacing:2px;
  margin-bottom:14px;
  position:relative;
  padding-bottom:14px;
  text-transform:uppercase;
}

/* gold underline */
.about-text h2::after{
  content:"";
  position:absolute;
  width:70px;
  height:2px;
  background:linear-gradient(to right, #c3a86b, transparent);
  left:0;
  bottom:0;
}

.about-text p{
  color:#e6dccf;
  line-height:1.9;
  font-size:15px;
  font-weight:400;
  letter-spacing:1.4px;
  margin-top:22px;
}

/* ================= DECOR ================= */

.decorative-dots{
  position:absolute;
  inset:0;
  z-index:1;
  pointer-events:none;
}

.decorative-dots span{
  position:absolute;
  width:7px;
  height:7px;
  background:rgba(195,168,107,.55);
  border-radius:50%;
  animation:floatDots 7s ease-in-out infinite;
}

.decorative-dots span::after{
  content:"";
  position:absolute;
  inset:-8px;
  background:radial-gradient(circle, rgba(255,255,255,.6), transparent);
  border-radius:50%;
  opacity:.6;
}

.decorative-dots span:nth-child(1){ top:28%; left:14%; }
.decorative-dots span:nth-child(2){ top:60%; left:32%; animation-delay:1.5s; }
.decorative-dots span:nth-child(3){ top:42%; right:22%; animation-delay:3s; }
.decorative-dots span:nth-child(4){ bottom:25%; right:35%; animation-delay:4.5s; }

/* ================= ACCENTS ================= */

.floating-ring{
  position:absolute;
  width:140px;
  height:140px;
  border:1px solid rgba(195,168,107,.35);
  border-radius:50%;
  top:18%;
  left:8%;
  animation:ringFloat 9s ease-in-out infinite;
  z-index:1;
}

.gold-line{
  position:absolute;
  width:200px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-20deg);
  bottom:90px;
  right:120px;
  z-index:1;
  animation:pulseLine 4s ease-in-out infinite;
}

.gold-corner{
  position:absolute;
  width:100px;
  height:100px;
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

.vertical-accent{
  position:absolute;
  left:28px;
  top:50%;
  transform:translateY(-50%) rotate(-90deg);
  font-size:11px;
  letter-spacing:6px;
  text-transform:uppercase;
  color:rgba(195,168,107,.65);
  font-weight:500;
  z-index:1;
}

/* ================= ANIMATIONS ================= */

@keyframes floatImg{
  0%,100%{ transform:translateY(0); }
  50%{ transform:translateY(-10px); }
}

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-14px); opacity:1; }
}

@keyframes fadeUp{
  from{ opacity:0; transform:translateY(25px); }
  to{ opacity:1; transform:translateY(0); }
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

/* ================= MOBILE ================= */

@media(max-width:900px){
  .about{
    padding:110px 0;
  }

  .about-wrapper{
    justify-content:center;
    text-align:center;
    gap:55px;
  }

  .about-image{
    width:100%;
    max-width:360px;
    max-height:220px;
  }

  .about-text h2::after{
    left:50%;
    transform:translateX(-50%);
  }

  .about::after,
  .gold-line,
  .gold-corner,
  .vertical-accent,
  .floating-ring{
    display:none;
  }
}
</style>
</head>

<body>

<section id="about" class="about">

  <div class="decorative-dots">
    <span></span><span></span><span></span><span></span>
  </div>

  <div class="floating-ring"></div>
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
        Each bouquet is thoughtfully designed with elegance,
        premium quality, and timeless beauty.
      </p>
    </div>

  </div>

</section>

</body>
</html>
