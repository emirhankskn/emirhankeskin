<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-2">

            <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-share-alt"></i>
                    <h3>Social Profiles</h3>
                    <div class="social-links">
                        <a href="https://github.com/emirhankskn" target="_blank" class="twitter"><i
                                class="bi bi-github"></i></a>
                        <a href="https://www.linkedin.com/in/ahmet-emirhan-keskin-0141a41a5/" target="_blank"
                            class="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/kskn_1266/profilecard/?igsh=MWdxdTZsa2RodXE1NA=="
                            target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mt-4 d-flex align-items-stretch">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p>a.emirhankeskin@gmail.com</p>
                </div>
            </div>

        </div>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
            </div>
            <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>

    </div>
</section>