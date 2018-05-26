<!DOCTYPE html>
<html>

<head>
  <?php include_once("src/niceadmin/headmeta.php"); ?>
    <title>Laporan | KaRuNIA</title>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <?php include_once("src/niceadmin/navbar.php"); ?>
      <?php include_once("src/niceadmin/sidebar.php"); ?>
        <!--main content start-->
        <section id="main-content">
          <section class="wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_piechart"></i> Laporan</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="dashboard.php">Beranda</a></li>
                  <li><i class="icon_piechart"></i>Laporan</li>
                </ol>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading"><h3>Laporan Umum</Char></header>
                    <div class="panel-body">
                      <div class="tab-pane" id="chartjs">

                        <div class="row">
                          <div class="col-lg-6">
                            <section class="panel">
                              <header class="panel-heading">Aktivitas Pengguna</header>
                              <div class="panel-body text-center"><canvas id="line" height="300" width="450"></canvas></div>
                            </section>
                          </div>

                          <div class="col-lg-6">
                            <section class="panel">
                              <header class="panel-heading">Stok Properti Bulanan</header>
                              <div class="panel-body text-center"><canvas id="bar" height="300" width="500"></canvas></div>
                            </section>
                          </div>
                        </div>

                      </div>
                    </div>
                </section>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading"><h3>Laporan Khusus</Char></header>
                    <div class="panel-body">
                      <div class="tab-pane" id="chartjs">

                        <div class="row">
                          <div class="col-lg-6">
                            <section class="panel">
                              <header class="panel-heading">Fasilitas dan Properti</header>
                              <div class="panel-body text-center"><canvas id="pie" height="300" width="400"></canvas></div>
                            </section>
                          </div>
                          <div class="col-lg-6">
                            <section class="panel">
                              <header class="panel-heading">Rentang Khusus</header>
                              <div class="panel-body">
                                <div class="col-lg-12">
                                  <div class="col-lg-12">
                                    <label class="control-label">Pilih Laporan</label>
                                  </div>
                                  <div class="col-lg-12">
                                    <select class="form-control m-bot15">
                                      <option>Laporan Properti</option>
                                      <option>Laporan Fasilitas</option>
                                      <option>Laporan Kegiatan</option>
                                      <option>Laporan Pengguna</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="col-lg-12">
                                    <label class="control-label">Rentang Waktu</label>
                                  </div>
                                  <div class="col-lg-4">
                                    <input type="text" class=" form-control" value="22/06/2017" />
                                  </div>
                                  <div class="col-lg-4">
                                    <input type="text" class=" form-control" value="22/07/2017" />
                                  </div>
                                  <div class="col-lg-4">
                                    <a class="btn btn-sm btn-primary" href="#"><span class="icon_cloud-download_alt"></span> Lihat</a>
                                    <a class="btn btn-sm btn-primary" href="#"><span class="icon_cloud-download_alt"></span> Cetak</a>
                                  </div>
                                </div>

                              </div>
                            </section>
                          </div>
                        </div>

                      </div>
                    </div>
                </section>
              </div>
            </div>

      </section>
    </section>
    <!--main content end-->

      <div class="text-right">
        <div class="credits">
          <?php include_once("src/niceadmin/footer.php"); ?>
        </div>
      </div>
  </section>
  <?php include_once("src/niceadmin/footermeta.php"); ?>
  <!-- custom chart script for this page only-->
  <script src="src/niceadmin/js/chartjs-custom.js"></script>
  <!--custome script for all page-->
  <script src="src/niceadmin/js/scripts.js"></script>
</body>
</html>
