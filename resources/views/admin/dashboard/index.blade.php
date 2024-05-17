<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body bg-primary">
        Selamat Datang {{ auth()->user()->name }} 😊 😊
      </div>
    </div>
  </div>
</div>

<div class="row ">
<div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Blog</span>
        <span class="info-box-number">
          {{ $blog }}
          <small>Blog</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">User</span>
        <span class="info-box-number">
          {{ $user }}
          <small>User</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>

<div class="col-12 col-sm-6 col-md-4">
  <div class="info-box">
    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Pesan</span>
      <span class="info-box-number">
        {{ $pesan }}
        <small>Pesan</small>
      </span>
    </div>
    <!-- /.info-box-content -->
  </div>
  <!-- /.info-box -->
</div>

</div>

