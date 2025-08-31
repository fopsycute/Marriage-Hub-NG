

<?php include "header.php"; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0">Article</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Article</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->
<section id="enroll" class="enroll section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="enrollment-form-wrapper">

          <form class="enrollment-form" action="process_question.php" method="POST">

            <h4 class="mb-4">What is your question?</h4>

            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" required>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Body of Question:</label>
                <textarea name="body" class="form-control" rows="6" required></textarea>
              </div>
            </div>

            <!-- Category -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label class="form-label">Category</label>
                <select name="category" class="form-select" required>
                  <option value="">Select Category</option>
                </select>
              </div>

              <!-- Sub-Category -->
              <div class="col-md-6">
                <label class="form-label">Sub-Category</label>
                <select name="subcategory" class="form-select" required>
                  <option value="">Select Sub-Category</option>          
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-12">
                <label class="form-label">Tags</label>
                <input type="text" name="tags" class="form-control" placeholder="e.g. love, hatred, companionship">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-enroll">
                <i class="bi bi-check-circle me-2"></i> SUBMIT
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
</section>

</main>
<?php include "footer.php"; ?>