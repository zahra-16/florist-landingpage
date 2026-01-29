<?php
// trust.php
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
/* ================= TRUST (MATCH WHY) ================= */

.trust{
  padding:120px 0;
  background:#120503;
  position:relative;
  overflow:hidden;
  font-family:'Inter',sans-serif;
  color:#f5f1e8;
  text-align:center;
}

/* ================= TITLE ================= */

.trust .mini-title{
  font-size:11px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:10px;
}

.trust h3{
  font-size:32px;
  font-weight:500;
  line-height:1.4;
  margin-bottom:36px;
  max-width:520px;
  margin-inline:auto;
}

/* ================= GRID ================= */

.trust-grid{
  width:86%;
  max-width:920px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
  gap:22px;
  position:relative;
  z-index:2;
}

/* ================= CARD ================= */

.trust-card{
  background:rgba(255,255,255,.045);
  border:1px solid rgba(255,255,255,.14);
  border-radius:22px;
  padding:34px 18px;
  transition:.4s cubic-bezier(.4,0,.2,1);
  position:relative;
}

.trust-card:hover{
  transform:translateY(-8px);
  border-color:#c3a86b;
  background:rgba(255,255,255,.07);
}

/* ================= ICON ================= */

.trust-icon{
  font-size:24px;
  color:#c3a86b;
  margin-bottom:16px;
}

/* ================= VALUE ================= */

.trust-value{
  font-size:28px;
  font-weight:500;
  letter-spacing:1px;
  margin-bottom:6px;
}

/* ================= LABEL ================= */

.trust-label{
  font-size:11px;
  letter-spacing:3px;
  text-transform:uppercase;
  color:#eadfd2;
}

/* ================= DECOR ================= */

.trust-dots span{
  position:absolute;
  width:6px;
  height:6px;
  background:rgba(195,168,107,.45);
  border-radius:50%;
  animation:floatDots 6s ease-in-out infinite;
  z-index:1;
}

.trust-dots span:nth-child(1){ top:26%; left:16%; }
.trust-dots span:nth-child(2){ top:62%; left:32%; animation-delay:1.5s; }
.trust-dots span:nth-child(3){ top:38%; right:20%; animation-delay:3s; }

.trust-ring{
  position:absolute;
  width:120px;
  height:120px;
  border:1px solid rgba(195,168,107,.22);
  border-radius:50%;
  bottom:18%;
  right:12%;
  animation:ringFloat 8s ease-in-out infinite;
  z-index:1;
}

.trust-line{
  position:absolute;
  width:160px;
  height:1px;
  background:linear-gradient(to right, transparent,#c3a86b,transparent);
  transform:rotate(-15deg);
  top:20%;
  right:20%;
  opacity:.4;
  z-index:1;
}

/* ================= ANIMATION ================= */

@keyframes floatDots{
  0%,100%{ transform:translateY(0); opacity:.4; }
  50%{ transform:translateY(-10px); opacity:1; }
}
@keyframes ringFloat{
  0%,100%{ transform:translateY(0); }
  50%{ transform:translateY(-14px); }
}

/* ================= MOBILE ================= */

@media(max-width:768px){
  .trust{
    padding:90px 0;
  }

  .trust h3{
    font-size:26px;
  }

  .trust-ring,
  .trust-line{
    display:none;
  }
}
</style>

<section class="trust">

  <!-- decor -->
  <div class="trust-dots">
    <span></span><span></span><span></span>
  </div>
  <div class="trust-ring"></div>
  <div class="trust-line"></div>

  <p class="mini-title">OUR EXPERIENCE</p>
  <h3>Trusted by Customers</h3>

  <div class="trust-grid">

    <div class="trust-card">
      <div class="trust-icon"><i class="fa-solid fa-award"></i></div>
      <div class="trust-value">5+</div>
      <div class="trust-label">Years Experience</div>
    </div>

    <div class="trust-card">
      <div class="trust-icon"><i class="fa-solid fa-heart"></i></div>
      <div class="trust-value">1.200+</div>
      <div class="trust-label">Happy Clients</div>
    </div>

    <div class="trust-card">
      <div class="trust-icon"><i class="fa-solid fa-ring"></i></div>
      <div class="trust-value">300+</div>
      <div class="trust-label">Events Served</div>
    </div>

    <div class="trust-card">
      <div class="trust-icon"><i class="fa-solid fa-truck-fast"></i></div>
      <div class="trust-value">Same Day</div>
      <div class="trust-label">Delivery</div>
    </div>

  </div>

</section>
