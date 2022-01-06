<?php 
session_start(); 
?>
<div class="col-lg-6">

                    <?php if (isset($_SESSION["alert"])) {
?>

<div class="alert alert-<?php echo $_SESSION["alert"]["type"]; ?> ">
    <?php echo $_SESSION["alert"]["message"]; ?>
                    </div>
                    <?php unset($_SESSION["alert"]); ?>
                    
                    <?php } ?>
                        <form action="send_email" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-container">
                                        <label>Ad</label>
                                        <input type="text"  id="ad" name="ad" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-container">
                                        <label>Soyad</label>
                                        <input type="text"  id="soyad" name="soyad" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-container">
                                        <label>E-Posta</label>
                                        <input type="email"  id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-container">
                                        <label>Telefon</label>
                                        <input type="tel"  id="telefon" name="telefon">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-container">
                                        <label>Konu</label>
                                        <input type="text"  id="subject" name="subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-container">
                                        <label>Mesajınız</label>
                                        <textarea name="mesaj" id="mesaj" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-container">
                                        <div class="button-container">
                                            <button type="submit">Gönder</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        

                    </div>
