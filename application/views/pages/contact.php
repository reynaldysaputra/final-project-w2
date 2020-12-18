    <!-- Display Container -->
    <div class="jumbotron jumbotron-fluid display-container" id='containerGejala'>
        <div class="container">
            <div class="row">
                <div class="col xl5 l5 s12">
                    <p class='p-1'>Contact</p>
                    <h1 class='h-1'>Kontak Kami</h1>
                    <p id='contentHeader'>Hai, tentunya kami mendirikan website ini tidak sendirian, Kami memiliki beberapa tim yang hebat yang siap membantu anda, mulai dari junior hingga senior. Jika anda tertarik dengan website dan ingin menghubungi salah satu rekan kerja kami ini silahkan hubungi kami dibawah ini.</p>
                </div>
                <div class="col xl7 l7 s12 img-header">
                    <img src="<?= $this->config->base_url()?>assets/img/contact/contactMe.png" alt="header" class='img-1' id='ContactImage'>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Display Container -->

     <!-- Contact -->
     <div class="container ContactContainer">
        <div class="row">
            <div class="col xl7 lg7 sm12 inputContact">
                <form action="<?= base_url('page/feedback');?>" method="post">
                    <div class="inputNameContainer">
                        <div>
                            <label for="namadepan">Nama Depan</label>
                            <input type="text" id='namadepan' name="namadepan" value="<?= set_value('namadepan');?>">
                            <?= form_error('namadepan','<small class="text-danger pl-3" style="color:red;">','</small>')?>
                        </div>
                        <div>
                            <label for="namabelakang">Nama Belakang</label>
                            <input type="text" id='namabelakang' name="namabelakang" value="<?= set_value('namabelakang');?>">
                            <?= form_error('namabelakang','<small class="text-danger pl-3" style="color:red;">','</small>')?>
                        </div>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id='email' name="email" value="<?= set_value('email');?>">
                        <?= form_error('email','<small class="text-danger pl-3" style="color:red;">','</small>')?>
                    </div>
                    <div>
                        <label for="subject">Subject</label>
                        <input type="text" id='subject' name="subject" value="<?= set_value('subject');?>">
                        <?= form_error('subject','<small class="text-danger pl-3" style="color:red;">','</small>')?>
                    </div>
                    <div>
                        <label for="pesan">Pesan</label>
                        <textarea id='pesan' name="pesan"></textarea>
                        <?= form_error('pesan','<small class="text-danger pl-3" style="color:red;">','</small>')?>
                    </div>

                    <button type='submit'>Kirim Pesan</button>
                    <?= $this->session->flashdata('pesan');?>
                </form>
            </div>
            <div class="col xl5 lg5 sm12">
                <h4>Info Kontak</h4>
                <div class="contactContent">
                    <span class="material-icons contactIcon">location_on</span>
                    <p>Jln h selong no 51, Duri kosambi, Jakarta barat.</p>
                </div>
                <div class="contactContent">
                    <span class="material-icons contactIcon">local_phone</span>
                    <p>089607266532</p>
                </div>
                <div class="contactContent">
                    <span class="material-icons contactIcon">email</span>
                    <p>renalfrontend@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Contact -->