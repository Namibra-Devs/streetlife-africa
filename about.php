<?php include('header.php') ?>
<main>

    <section class="about-header">
        <h4 class="section-title">About JM StreetLife Studio</h4>
        <div class="about-hero">
            <!-- will be raplaced with a video -->
            <img src="./images/about-hero.png" alt="about-hero">
        </div>
    </section>

    <!-- About Section -->
  <section data-aos="fade-up" data-aos-delay="100">
    <?php
    $about_details = getWebsiteDetails();
    $about_title = $about_details['home_about_title'];
    $about_content = $about_details['home_about_content'];
    $about_img = $about_details['home_about_img'];
    ?>
    <div class="about-section">
      <div class="about-img">
        <img class="rounded-lg" src="./assets/uploads/<?php echo $about_img ?>" alt="<?php echo $about_title ?>">
      </div>
      <div class="about-text">
        <h3 class="about-header"><?php echo $about_title ?></h3>
        <p><?php echo $about_content ?></p>
      </div>
    </div>
  </section>

    <!-- Our goal -->
    <section class="our-goal">
        <h4 class="section-title text-3xl">Our goal and the future <br> we can grow</h4>
        <div class="our-goal__content">
            <div class="our-goal__text">
                <p>Our main goal is to connect people from all walks of life and to build a better Africa. We are committed to helping our community by providing opportunities for talent development and creating jobs. We take pride in training and grooming talents such as musicians, actors, artisans, writers, animators, graphic designers, and many more. <br><br>
                    At JM STREET-LIFE STUDIOS, we have a deep passion for transforming Africa into a better place, and we believe that our productions can play a significant role in achieving this goal. We are committed to using our platform to showcase the beauty, diversity, and richness of African culture to the world. One of our primary objectives is to tell the true African stories through our productions. We recognize the power of storytelling and its ability to shape the way people view the world. <br><br>
                    We are dedicated to producing content that reflects the real experiences and struggles of Africans, both past and present. <br><br>
                    We believe that by sharing these stories, we can help to dispel the negative stereotypes that exist about Africa and promote a more accurate and nuanced understanding of the continent. Our team of talented creatives is committed to producing content that is both entertaining and thought-provoking, with a focus on telling stories that resonate with our audience.</p>
            </div>

            <div class="our-goal__img">
                <img src="./images/our-goal-img.png" alt="">
            </div>
        </div>
    </section>

    <!-- Experience section-->

    <section>
        <div class="experience">
            <div>
                <p class="text-2xl">
                    <span class="text-3xl" data-target="5">3+</span> Years of Experience
                </p>
            </div>
            <div>
                <p class="text-2xl">
                    <span class="text-3xl count" data-target="25">100+</span> Events Organized
                </p>
            </div>
            <div>
                <p class="text-2xl">
                    <span class="text-3xl count" data-target="150">50+</span> Team Members
                </p>
            </div>
        </div>
    </section>

    <!-- Specialization section -->
    <section>
        <div>
            <h4 class="section-title text-3xl">OUR SPECIALITY</h4>
            <div class="flex">
                <div class="bg-primary-clr">
                    <h4 class="text-2xl">EVENT PRODUCTION</h4>
                    <p>We specialize in producing various types of events such as music festivals, art shows,
                        parties, corporate
                        events, and weddings. We have produced a number of notable events ranging from intimate
                        gatherings to
                        massive crowds of over 52,000 people.</p>
                </div>
                <div class="bg-dark">
                    <h4 class="text-2xl">STORYTELLING</h4>
                    <p>We believe in the power of storytelling and dedicated to telling true African stories through
                        our
                        productions. We aim to dispel negative stereotypes that exist about Africa through content
                        that reflects
                        the
                        real experiences of Africans, both past and present.</p>
                </div>
                <div class="bg-dark-800">
                    <h4 class="text-2xl">TALENT MANAGEMENT</h4>
                    <p>We are passionate about talent building and providing opportunities for actors, musicians,
                        artisans,
                        writers, animators, and designers, among others with a team dedicated to discovering and
                        grooming new
                        talents, with the support to succeed.</p>
                </div>
            </div>
        </div>

    </section>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="team-header">
            <h4 class="section-title text-3xl">Meet our team</h4>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="team-wrapper">

                <?php
                $statement = $pdo->prepare("SELECT 
												
												t1.id,
												t1.name,
												t1.slug,
												t1.designation_id,
												t1.photo,
												t1.facebook,
												t1.twitter,
												t1.linkedin,
												t1.youtube,
												t1.google_plus,
												t1.instagram,
												t1.flickr,

												t2.designation_id,
												t2.designation_name

					                           FROM tbl_team_member t1
					                           JOIN tbl_designation t2
					                           ON t1.designation_id = t2.designation_id
					                           WHERE t1.status = ?
					                           ");
                $statement->execute(array('Active'));
                $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $row) {
                ?>
                    <div class="member-wrapper">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="./assets/uploads/<?php echo $row['photo'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?php echo $row['name'] ?></h4>
                                    <span><?php echo $row['designation_name'] ?></span>
                                </div>
                                <div class="social">
                                    <?php if ($row['facebook'] != '') : ?>
                                        <a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['twitter'] != '') : ?>
                                        <a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['linkedin'] != '') : ?>
                                        <a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['youtube'] != '') : ?>
                                        <a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['google_plus'] != '') : ?>
                                        <a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fab fa-google-plus"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['instagram'] != '') : ?>
                                        <a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <?php endif; ?>

                                    <?php if ($row['flickr'] != '') : ?>
                                        <a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fab fa-flickr"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section><!-- End Team Section -->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-content">
            <div class="contact-text">
                <h4>LET'S CREATE LASTING EXPERIENCES TOGETHER</h4>
                <p>At JM STREET-LIFE STUDIOS, we believe in the power of collaboration. Whether you're looking to
                    plan an event, tell a story, or develop your talent, we're here to help. So let's connect and
                    see what amazing things we can create together!</p>
            </div>

            <div class="form">
                <div class="contact-form">
                    <form action="" class="form">
                        <div class="form-group">
                            <label for="name" class="text-slate-100">Name</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-slate-100">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message" class="text-slate-100">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('footer.php');
