<?php include('header.php') ?>
<main>
  <!-- Upcoming events -->
  <section class="event-section">
    <h4 class="section-title text-3xl" style="display: block;">Upcoming Events</h4>
    <?php getUpcomingEvents() ?>
  </section>

  <!-- Past events -->
  <section class="event-section">
    <h4 class="section-title text-3xl" style="display: block;">Past Events</h4>
    <?php getPastEvents() ?>
  </section>
</main>

<?php include('footer.php') ?>