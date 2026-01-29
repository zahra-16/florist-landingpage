<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
/* ================= CONTACT ================= */

.contact{
  padding:150px 0;
  background:#120503;
  font-family:'Inter', sans-serif;
  color:#f5f1e8;
  position:relative;
  overflow:hidden;
}

/* decorative circle */
.contact::after{
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
}

/* top gold line */
.contact::before{
  content:"";
  position:absolute;
  width:110px;
  height:2px;
  background:#c3a86b;
  top:90px;
  left:50%;
  transform:translateX(-50%);
  animation:pulseLine 4s ease-in-out infinite;
}

/* ================= DECOR ================= */

.contact-ring{
  position:absolute;
  width:150px;
  height:150px;
  border:1px solid rgba(195,168,107,.35);
  border-radius:50%;
  top:22%;
  right:12%;
  animation:ringFloat 9s ease-in-out infinite;
}

.contact-line{
  position:absolute;
  width:200px;
  height:1px;
  background:linear-gradient(to right, transparent, #c3a86b, transparent);
  transform:rotate(-25deg);
  bottom:120px;
  right:130px;
  animation:pulseLine 4s ease-in-out infinite;
}

.contact-vertical{
  position:absolute;
  right:30px;
  top:50%;
  transform:translateY(-50%) rotate(90deg);
  font-size:12px;
  letter-spacing:6px;
  color:rgba(195,168,107,.65);
}

/* ================= CONTENT ================= */

.contact .container{
  width:90%;
  max-width:1100px;
  margin:auto;
  position:relative;
  z-index:2;
  text-align:center;
}

.contact .mini-title{
  font-size:11px;
  letter-spacing:4px;
  color:#c3a86b;
}

.contact h2{
  font-size:34px;
  font-weight:500;
  margin:12px auto 40px;
  max-width:520px;
  line-height:1.4;
}

/* ================= GRID ================= */

.contact-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
  gap:30px;
}

/* ================= CARD ================= */

.contact-card{
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.14);
  border-radius:26px;
  padding:46px 30px;
  position:relative;
  overflow:hidden;
  backdrop-filter:blur(10px);
  transition:.55s cubic-bezier(.4,0,.2,1);
}

/* glow */
.contact-card::before{
  content:"";
  position:absolute;
  inset:-40px;
  background:radial-gradient(circle, rgba(195,168,107,.3), transparent 70%);
  opacity:0;
  filter:blur(30px);
  transition:.5s ease;
}
.contact-card:hover::before{ opacity:1; }

.contact-card:hover{
  transform:translateY(-14px) scale(1.03);
  border-color:#c3a86b;
  background:rgba(255,255,255,.08);
}

/* ================= SHAPE VARIATION ================= */

.contact-card:nth-child(1){
  border-radius:30px 30px 60px 30px;
}
.contact-card:nth-child(2){
  border-radius:60px 30px 30px 60px;
  background:linear-gradient(
    145deg,
    rgba(195,168,107,.18),
    rgba(255,255,255,.05)
  );
  border-color:#c3a86b;
  transform:scale(1.06);
}
.contact-card:nth-child(3){
  border-radius:30px 60px 30px 30px;
}

/* ================= ICON ================= */

.contact-icon{
  font-size:30px;
  color:#c3a86b;
  margin-bottom:22px;
}
.contact-icon i{
  filter:drop-shadow(0 0 12px rgba(195,168,107,.4));
}

/* ================= TEXT ================= */

.contact-card h4{
  font-size:12px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:14px;
}

.contact-card p{
  font-size:14px;
  letter-spacing:1.6px;
  line-height:1.7;
  margin-bottom:26px;
}

/* ================= BUTTON ================= */

.contact-card a{
  display:inline-flex;
  align-items:center;
  gap:10px;
  padding:12px 26px;
  border-radius:30px;
  font-size:11px;
  letter-spacing:2px;
  text-decoration:none;
  color:#c3a86b;
  border:1px solid rgba(195,168,107,.6);
  transition:.4s ease;
}

.contact-card a:hover{
  background:#c3a86b;
  color:#120503;
}

/* ================= ANIMATION ================= */

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

@media(max-width:768px){
  .contact{ padding:110px 0; }
  .contact h2{ font-size:28px; }

  .contact::after,
  .contact-ring,
  .contact-line,
  .contact-vertical{
    display:none;
  }

  .contact-card:nth-child(2){
    transform:none;
  }
}
</style>

<section class="contact" id="contact">

  <div class="contact-ring"></div>
  <div class="contact-line"></div>
  <div class="contact-vertical">Contact</div>

  <div class="container">
    <p class="mini-title">CONTACT</p>
    <h2>We’re Always Ready to Help You</h2>

    <div class="contact-grid">

      <div class="contact-card">
        <div class="contact-icon">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <h4>LOCATION</h4>
        <p>Jakarta, Indonesia</p>
        <a href="#">VIEW MAP <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="contact-card">
        <div class="contact-icon">
          <i class="fa-brands fa-whatsapp"></i>
        </div>
        <h4>WHATSAPP</h4>
        <p>Fast response for orders & consultations</p>
        <a href="#">CHAT NOW <i class="fa-solid fa-paper-plane"></i></a>
      </div>

      <div class="contact-card">
        <div class="contact-icon">
          <i class="fa-solid fa-envelope"></i>
        </div>
        <h4>EMAIL</h4>
        <p>Send us your special requests anytime</p>
        <a href="#">SEND EMAIL <i class="fa-solid fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>
