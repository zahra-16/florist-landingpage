<!-- ================= PRODUCTS SECTION ================= -->
<style>
/* ================= PRODUCTS ================= */
.products {
  padding:120px 0;
  background:#020f02;
  font-family:'Inter', sans-serif;
  scroll-margin-top:80px;
  position:relative;
  overflow: visible;
}

/* Decorative circle */
.products::after {
  content:"";
  position:absolute;
  width:360px;
  height:360px;
  border:1px solid rgba(255,255,255,.05);
  border-radius:50%;
  left:-160px;
  top:50%;
  transform:translateY(-50%);
  z-index:1;
}

/* Container */
.products .container {
  width:90%;
  max-width:1200px;
  margin:auto;
  position:relative;
  z-index:2;
}

/* Title */
.mini-title {
  font-size:11px;
  letter-spacing:4px;
  color:#c3a86b;
  margin-bottom:26px;
  font-weight:400;
}

/* ================= CAROUSEL PRODUCTS ================= */
.product-carousel-wrapper {
  position:relative;
  z-index:10; 
  padding: 20px 0;
}

.product-carousel {
  display:flex;
  overflow-x:auto;
  gap:26px;
  scroll-behavior:smooth;
  padding: 10px 0;
  scrollbar-width: none;
  cursor: grab;
  scroll-snap-type: x mandatory;
  -webkit-overflow-scrolling: touch;
}
.product-carousel.active {
  cursor: grabbing;
}

.product-carousel::-webkit-scrollbar {
  display:none;
}

/* Product Card */
.product-card {
  min-width:260px;
  height:360px;
  border-radius:24px;
  overflow:hidden;
  position:relative;
  flex-shrink:0;
  cursor:pointer;
  box-shadow:0 12px 25px rgba(0,0,0,.45);
  transition:transform .35s ease, box-shadow .35s ease;
  text-decoration: none;
  scroll-snap-align: start;
  will-change: transform;
  backface-visibility: hidden;
}

.product-card img {
  width:100%;
  height:100%;
  object-fit:cover;
  transition:transform .45s ease;
}

.product-card::after {
  content:"";
  position:absolute;
  inset:0;
  background:rgba(0,0,0,.25);
  z-index:1;
  transition:background .35s ease;
  pointer-events: none; 
}

.product-content {
  position:absolute;
  inset:0;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  gap:8px;
  z-index:2;
  text-align:center;
  color:#fff;
}

.product-content h4 {
  font-size:14px;
  letter-spacing:2px;
  font-weight:500;
  margin: 0;
}

.product-content span {
  font-size:12px;
  opacity:.85;
}

.product-content .btn-view {
  margin-top:6px;
  font-size:10px;
  letter-spacing:1.5px;
  padding:6px 20px;
  border-radius:20px;
  border:1px solid rgba(255,255,255,.6);
  color:#fff;
  text-decoration:none;
  transition:.3s ease;
}

/* Hover effect */
@media (hover:hover){
  .product-card:hover{
    transform:translateY(-6px);
    box-shadow:0 20px 40px rgba(0,0,0,.55);
  }
  .product-card:hover img{
    transform:scale(1.05);
  }
  .product-card:hover::after{
    background:rgba(0,0,0,.1);
  }
  .product-card:hover .btn-view{
    border-color:#c3a86b;
    color:#c3a86b;
  }
}

/* ================= MINI COLLECTION ================= */
.mini-collection-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(260px,1fr));
  gap:26px;
  margin-top:20px;
}

.mini-collection-grid .product-card {
  min-width:auto;
}

/* Vertical text */
.product-vertical {
  position:absolute;
  right:20px;
  top:50%;
  transform:translateY(-50%) rotate(90deg);
  font-size:11px;
  letter-spacing:6px;
  text-transform:uppercase;
  color:rgba(195,168,107,.6);
  z-index:1;
  pointer-events: none;
}

/* Mobile */
@media(max-width:768px){
  .products{ padding:80px 0; }
  .product-card{ height:280px; }
  .product-vertical{ display:none; }
}
</style>

<section id="products" class="products premium-products">
  <div class="product-vertical">Our Products</div>

  <div class="container">
    <p class="mini-title">PRODUCTS</p>

    <div class="product-carousel-wrapper">
      <div class="product-carousel" id="productCarousel">
        <a href="#" class="product-card">
          <img src="assets/images/arrangement-with-beautiful-gerbera-vase.jpg" loading="lazy">
          <div class="product-content">
            <h4>BEST SELLER</h4>
            <span>Best Seller Bouquet</span>
            <span class="btn-view">VIEW</span>
          </div>
        </a>
        <a href="#" class="product-card">
          <img src="assets/images/flowers-vase-with-red-background.jpg" loading="lazy">
          <div class="product-content">
            <h4>PROMO</h4>
            <span>Promo Flowers</span>
            <span class="btn-view">VIEW</span>
          </div>
        </a>
        <a href="#" class="product-card">
          <img src="assets/images/beautiful-flowers-with-red-background.jpg" loading="lazy">
          <div class="product-content">
            <h4>SPECIAL</h4>
            <span>Limited Edition</span>
            <span class="btn-view">VIEW</span>
          </div>
        </a>
        <a href="#" class="product-card">
          <img src="assets/images/arrangement-with-beautiful-gerbera-water-vase.jpg" loading="lazy">
          <div class="product-content">
            <h4>LUXURY</h4>
            <span>Exclusive</span>
            <span class="btn-view">VIEW</span>
          </div>
        </a>
         <a href="#" class="product-card">
          <img src="assets/images/arrangement-with-beautiful-gerbera-water-vase.jpg" loading="lazy">
          <div class="product-content">
            <h4>LUXURY</h4>
            <span>Exclusive</span>
            <span class="btn-view">VIEW</span>
          </div>
        </a>
      </div>
    </div>

    <br><br>

    <p class="mini-title">MINI COLLECTION</p>

    <div class="mini-collection-grid">
      <a href="#" class="product-card">
        <img src="assets/images/sunlit-tulips-white-vase (1).jpg" loading="lazy">
        <div class="product-content">
          <h4>MINI PINK</h4>
          <span>Rp 350.000</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>
      <a href="#" class="product-card">
        <img src="assets/images/delicate-rose-bouquet.jpg" loading="lazy">
        <div class="product-content">
          <h4>WHITE</h4>
          <span>Rp 420.000</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>
      <a href="#" class="product-card">
        <img src="assets/images/blossoms-colorful-backdrops (2).jpg" loading="lazy">
        <div class="product-content">
          <h4>RED ROSE</h4>
          <span>Rp 390.000</span>
          <span class="btn-view">VIEW</span>
        </div>
      </a>
    </div>
  </div>
</section>

<script>
// ================= DRAG & SWIPE CAROUSEL SMOOTH =================
const carousel = document.getElementById('productCarousel');
let isDown = false;
let startX, scrollLeft;
let rafId = null;

function updateScroll(x) {
  const walk = (x - startX);
  carousel.scrollLeft = scrollLeft - walk;
}

carousel.addEventListener('mousedown', e => {
  isDown = true;
  carousel.classList.add('active');
  startX = e.pageX - carousel.offsetLeft;
  scrollLeft = carousel.scrollLeft;
});
carousel.addEventListener('mouseleave', () => {
  isDown = false;
  carousel.classList.remove('active');
});
carousel.addEventListener('mouseup', () => {
  isDown = false;
  carousel.classList.remove('active');
});
carousel.addEventListener('mousemove', e => {
  if(!isDown) return;
  e.preventDefault();
  cancelAnimationFrame(rafId);
  rafId = requestAnimationFrame(() => updateScroll(e.pageX - carousel.offsetLeft));
});

// Touch events
carousel.addEventListener('touchstart', e => {
  startX = e.touches[0].pageX - carousel.offsetLeft;
  scrollLeft = carousel.scrollLeft;
});
carousel.addEventListener('touchmove', e => {
  e.preventDefault();
  cancelAnimationFrame(rafId);
  rafId = requestAnimationFrame(() => updateScroll(e.touches[0].pageX - carousel.offsetLeft));
});
</script>
