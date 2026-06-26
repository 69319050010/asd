  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>

      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>

      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../photo/1.png" class="d-block w-100" alt="">
      </div>

      <div class="carousel-item">
        <img src="../photo/2.png" class="d-block w-100" alt="">
      </div>

      <div class="carousel-item">
        <img src="../photo/3.png" class="d-block w-100" alt="">
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

  </div>
  
  <script>
  const myCarousel = document.querySelector('#carouselExampleIndicators');

  new bootstrap.Carousel(myCarousel, {
    interval: 5000, // เปลี่ยนทุก 5 วินาที
    ride: 'carousel',
    pause: false,   // ไม่หยุดเมื่อเมาส์ชี้
    wrap: true      // วนกลับไปสไลด์แรก
  });
</script>