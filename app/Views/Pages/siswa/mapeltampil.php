<?= $this->extend('Pages/Siswa/templatesiswa'); ?>

<?= $this->section('isi'); ?>
<div class="col-md-8 p-5 pt-2">
  <h3><img src="/img/open-book.png" alt=""><b> Mata Pelajaran Matematika</b></h3>
  <hr>
  <!--jangan lupa-->

  <div class="container-fluid" id="profil">
    <div class="row">
      <div class="col-md-12">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/siswa/matapelajaran">Data Mata Pelajaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Matematika</li>
          </ol>
        </nav>

        <div class="cardbaru">
          <div class="card">
            <div class="media">
              <img class="gambarmapel" src="/Img/bgpolos.png" class="align-self-start mr-3" alt="...">
              <div class="media-body">
                <h5 class="mt-1 ml-3">Top-aligned media</h5>
                <p class="ml-3">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <p class="ml-3">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <form>
                  <p>
                    <table>
                      <tr>
                        <td width="10"></td>
                        <td width="100">Komentar :</td>
                        <td width="400"><input type="text" name="komentar" placeholder="Komentar ..." class="form-control" length="50"></td>
                        <td width="5"><a href="#" class="fas fa-paper-plane"></a></td>
                      </tr>
                    </table>
                  </p>
                </form>

              </div>
            </div>
          </div>
          <!-- <div class="card">
                    <div class="media">
                        
                    </div>   
                    </div> -->
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-12">
        <div class="tampilmapel">
          <div class="card">
            <div class="card-body">
              <h3>
                <div class="kotak">
                  <i class="fas fa-clipboard"></i>
                </div>
                <a href="" data-toggle="modal" data-target="#staticBackdrop"><b>Tugas Meteri ke-1</b>
                  <i class="fas fa-angle-double-right"></i></a>
              </h3>
              <h6>hari, tgl bulan tahun</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-md-12">
        <div class="tampilmapel">
          <div class="card">
            <div class="card-body">
              <h3>
                <div class="kotak">
                  <i class="fas fa-clipboard"></i>
                </div>
                <a href="" data-toggle="modal" data-target="#scrollable"><b>Tugas Meteri ke-2</b>
                  <i class="fas fa-angle-double-right"></i></a>
              </h3>
              <h6>hari, tgl bulan tahun</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlFile1">Ketentuan Tugas : </label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="button" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="scrollable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Scrollable modal -->
        <div class="modal-dialog modal-dialog-scrollable">
          Kriptografi (atau kriptologi; dari bahasa Yunani κρυπτός kryptós, "tersembunyi, rahasia"; dan γράφειν graphein, "menulis", atau -λογία logi, "ilmu")[1] atau sandisastra merupakan keahlian dan ilmu dari cara-cara untuk komunikasi aman pada kehadirannya di pihak ketiga.[2] Secara umum, kriptografi ialah mengenai mengkonstruksi dan menganalisis protokol komunikasi yang dapat memblokir lawan;[3] berbagai aspek dalam keamanan informasi seperti data rahasia, integritas data, autentikasi, dan non-repudansi[4] merupakan pusat dari kriptografi modern. Kriptografi modern terjadi karena terdapat titik temu antara disiplin ilmu matematika, ilmu komputer, dan teknik elektro. Aplikasi dari kriptografi termasuk ATM, password komputer, dan E-commerce.

          Kriptografi sebelum merupakan sinonim dari "enkripsi", konversi dari kalimat-kalimat yang dapat dibaca menjadi kelihatan tidak masuk akal. Pembuat dari pesan enkripsi membagi teknik pemecahan sandi yang dibutuhkan untuk mengembalikan informasi asli jika hanya dengan penerima yang diinginkan, sehingga dapat mencegah orang yang tidak diinginkan melakukan hal yang sama. Sejak Perang Dunia I dan kedatangan komputer, metode yang digunakan untuk mengelola kriptologi telah meningkat secara komplek dan pengaplikasiannya telah tersebar luar.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



</div>

<?= $this->endSection(); ?>