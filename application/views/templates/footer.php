
    <footer>
        <div class="container">
            <div class="contentFooter">
                <div class="content">
                    <h3>Saran kami</h3>
                    <p>Menjaga jarak adalah hal kecil dengan perubahan besar yang sering diabaikan banyak orang. Dengan menjaga jarak, kita dapat menjaga kesehatan tubuh dan meminimalisir penularan penyakait yang ditularkan dari lingkungan sekitar.</p>
                </div>
                <div class="content">
                    <h3>Tautan</h3>
                    <a href="<?= $this->config->base_url()?>">Beranda</a>
                    <a href="<?= $this->config->base_url()?>page/gejala">Gejala</a>
                    <a href="<?= $this->config->base_url()?>page/blog">Blog</a>
                    <a href="<?= $this->config->base_url()?>page/tentang">Tentang kami</a>
                    <a href="<?= $this->config->base_url()?>page/contact">Kontak</a>
                </div>
                <div class="content">
                    <h3>Tautan bermanfaat</h3>
                    <a href="https://id.wikipedia.org/wiki/Tenaga_kesehatan" target='_blank'>Tenaga kesehatan</a>
                    <a href="https://www.neda.gov.ph/wp-content/uploads/2015/01/Q4-ODA-Facilities-for-LGUs.pdf" target='_blank'>Fasilitas LGU</a>
                    <a href="https://axa.co.id/inspirasi/lindungi-keluarga-juga-rumah-anda/" target='_blank'>Lindungi Keluarga Anda</a>
                    <a href="https://id.wikipedia.org/wiki/Organisasi_Kesehatan_Dunia" target='_blank'>Kesehatan Dunia</a>
                </div>
                <div class="content">
                    <h3>Sumber daya</h3>
                    <a href="https://www.who.int/" target='_blank'>WHO Website</a>
                    <a href="https://www.cdc.gov/" target='_blank'>CDC Website</a>
                    <a href="https://www.gov.uk/" target='_blank'>Gov Website</a>
                    <a href="https://www.doh.gov.ph/" target='_blank'>DOH Website</a>
                </div>
            </div>
            <div class="row developeWithContainer">
                <p>Copyright ©2020 All rights reserved | Inspiration by <a href="https://colorlib.com/" target='_blank'>Colorlib</a> developed by <span class="material-icons">favorite</span> Reynaldy saputra and Team</p>
            </div>
        </div>
    </footer>

      <script>
        	$(document).ready(function(){
                $('.sidenav').sidenav();
            });

            const cardBlog = document.querySelectorAll('.cardBlog');

            cardBlog.forEach(item => {
                item.addEventListener('click', function() {
                    Swal.fire({
                        title: 'Blog terkunci!',
                        text: 'Mohon maaf atas ketidaknyamanannya, blog untuk sementara kami kunci, terima kasih.',
                        confirmButtonColor: '#DBB028',
                        imageUrl: 'https://image.flaticon.com/icons/png/512/891/891399.png',
                        imageWidth: 200,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                    })
                })
            })
      </script>
  </body>
</html>