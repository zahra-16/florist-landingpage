<?php
// testimoni.php
?>

<style>
/* ================= TESTIMONI PREMIUM (GOLD SYNC) ================= */

.testimoni{
  padding:110px 0;
  background: #250902;
  position:relative;
  overflow:hidden;
  text-align:center;
  color:#f5f1e8;
}

/* Decorative circle */
.testimoni::before{
  content:"";
  position:absolute;
  width:360px;
  height:360px;
  border:1px solid rgba(255,255,255,.08);
  border-radius:50%;
  right:-160px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* ================= TITLE ================= */

.testimoni h2{
  font-family:"Playfair Display",serif;
  font-size:38px;
  font-weight:400;
  letter-spacing:2px;
  margin-bottom:14px;
  color:#f5f1e8;
  position:relative;
  z-index:2;
}

.testimoni .subtitle{
  max-width:520px;
  margin:0 auto 60px;
  font-size:13px;
  letter-spacing:1.5px;
  line-height:1.7;
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
  gap:26px;
  position:relative;
  z-index:2;
}

/* ================= CARD ================= */

.testimoni-card{
  position:relative;
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.14);
  border-radius:22px;
  padding:36px 26px;
  backdrop-filter:blur(10px);
  transition:.55s cubic-bezier(.4,0,.2,1);
  overflow:hidden;
}

/* Gold glow aura */
.testimoni-card::before{
  content:"";
  position:absolute;
  inset:-35px;
  background:radial-gradient(circle at center, rgba(195,168,107,.30), transparent 70%);
  opacity:0;
  filter:blur(26px);
  transition:.55s ease;
}

.testimoni-card:hover::before{
  opacity:1;
}

.testimoni-card:hover{
  transform:translateY(-12px) scale(1.02);
  border-color:#c3a86b;
  background:rgba(255,255,255,.08);
}

/* ================= QUOTE ================= */

.testimoni-quote{
  font-size:32px;
  color:#c3a86b;
  margin-bottom:14px;
  position:relative;
  z-index:2;
}

/* ================= TEXT ================= */

.testimoni-text{
  font-size:13px;
  line-height:1.85;
  letter-spacing:1.2px;
  margin-bottom:22px;
  color:#f5f1e8;
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

/* ================= FLOATING DOTS ================= */

.testimoni-dots{
  position:absolute;
  inset:0;
  z-index:1;
  pointer-events:none;
}

.testimoni-dots span{
  position:absolute;
  width:6px;
  height:6px;
  background:rgba(195,168,107,.55);
  border-radius:50%;
  animation:floatDots 6s ease-in-out infinite;
}

.testimoni-dots span::after{
  content:"";
  position:absolute;
  inset:-6px;
  border-radius:50%;
  background:radial-gradient(circle, rgba(255,255,255,.6), transparent);
  opacity:.6;
}

.testimoni-dots span:nth-child(1){ top:30%; left:18%; }
.testimoni-dots span:nth-child(2){ top:60%; left:45%; animation-delay:1.5s; }
.testimoni-dots span:nth-child(3){ top:40%; right:22%; animation-delay:3s; }

/* ================= GOLD LINE ================= */

.testimoni-line{
  position:absolute;
  width:150px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:90px;
  left:110px;
  z-index:1;
  animation:pulseLine 4s ease-in-out infinite;
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

/* ================= MOBILE ================= */

@media(max-width:768px){
  .testimoni{
    padding:90px 0;
  }

  .testimoni h2{
    font-size:30px;
  }

  .testimoni .subtitle{
    margin-bottom:40px;
  }

  .testimoni::before,
  .testimoni-line{
    display:none;
  }
}
</style>

<section id="testimoni" class="testimoni">

  <!-- Decorative -->
  <div class="testimoni-dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="testimoni-line"></div>

  <h2>Testimonials</h2>
  <p class="subtitle">
    What our customers say about our premium floral arrangements
    and unforgettable service.
  </p>

  <div class="testimoni-grid">

    <div class="testimoni-card">
      <div class="testimoni-quote">“</div>
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
      <div class="testimoni-quote">“</div>
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
      <div class="testimoni-quote">“</div>
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
