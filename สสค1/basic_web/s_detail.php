  <style>
    .pd {
        max-height: 400px;
        object-fit: cover;
    }

    .thumbnail {
        width: 80px;
        height: 80px;
        object-fit: cover;
        cursor: pointer;
        opacity: 0.6;
        transition: opacity 0.3s ease;
    }

    .thumbnail:hover,
    .thumbnail.active {
        opacity: 1;
    }
</style>

  <div class="container mt-5">
    <div class="row g-4">

      <div class="col-6 col-md-3">
        <div class="card h-100">
          <img src="../photo/lords_of_cinder_abyss_watchers.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Abyss Watchers</h5>
            <p class="card-text">ราคา 18,000 บาท</p>
            <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card h-100">
          <img src="../photo/lord_of_cinder_yhorm_the_giant.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Yhorm the Giant</h5>
            <p class="card-text">ราคา 36,000 บาท</p>
            <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card h-100">
          <img src="../photo/lord_of_cinder_aldritch_devourer_of_gods.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Lothric, Younger Prince</h5>
            <p class="card-text">ราคา 85,000 บาท</p>
            <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="card h-100">
          <img src="../photo/lord_of_cinder_lothric_younger_prince.png" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">Aldrich, Devourer of Gods</h5>
            <p class="card-text">ราคา 50,000 บาท</p>
            <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function changeImage(event, src) {
        document.getElementById('mainImage').src = src;
        document.querySelectorAll('.thumbnail').forEach(thumb => thumb.classList.remove('active'));
        event.target.classList.add('active');
    }
</script>