<?= $this->extend('layouts/template'); ?>
<?= $this->Section('content'); ?>
<div class="container">
    <!-- Main -->
    <div class="main-content">
        <section id="first" class="section-container">
            <!-- Efek Snow -->
            <div class="snow">
                <div></div>
            </div>


            <div class="content">
                <div class="header animate__animated animate__backInDown">
                    <!-- <span>HARIQ</span> -->
                    <img src="/img/hariqmc.png" alt="biglogo">
                </div>
                <div class="main animate__animated animate__bounceIn animate__delay-1s">
                    <p>Come join us and embark on an adventure in the mysterious world within our Minecraft server. Join us now and invite your friends to join us too!</p>
                </div>
                <div class="buttonCopy animate__animated animate__fadeInUp animate__delay-1s">
                    <button id="copyLink">Play Now</button>
                </div>
            </div>
            <img src="/img/bg-3.jpg" class="image-cover" alt="" />
        </section>

        <section id="second" class="section-container ">
            <div class="content about">
                <div class="header">
                    <h1 data-aos="zoom-in-down">About</h1>
                    <img src="/img/hariqabout.png" data-aos="zoom-in" alt="biglogo">
                </div>
                <div class="main" data-aos="zoom-in-up">
                    HariqMC is a server established by Faiq & Fathar in 2022 and is an intermediate-level Minecraft server based in Indonesia. It is also the best Slimefun Survival Minecraft server in Indonesian!
                </div>
            </div>
            <img src="/img/bg-8.png" class="image-cover" alt="" />
        </section>

    </div>
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="kiri">
                <div class="logo">
                    <img src="/img/hariqabout.png">
                </div>
                <div class="copyright">
                    <p>Copyright &copy; 2023 Hariq.</p>
                    <p>All rights reserved</p>
                </div>
                <div class="link">
                    <a href="https://discord.hariq.eu.org/" target="_blank"><i class="fa-brands fa-discord"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div class="tengah">
                <div class="tengah-kiri">
                    <h3>Usefull Links</h3>
                    <ul>
                        <li><a href="/store">Store</a></li>
                        <li><a href="/perks">Perks</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="tengah-kanan">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="https://discord.hariq.eu.org/" target="_blank">Help Center</a></li>
                    </ul>
                </div>
            </div>
            <div class="kanan">
                <h3>More Updates Soon</h3>
            </div>
        </div>
    </footer>
</div>
<?= $this->endSection(); ?>