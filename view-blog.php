
<?php include "header.php"; ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Blog Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    
    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
      <div class="container" data-aos="fade-up">

        <article class="article">
          <div class="article-header">
            <div class="meta-categories" data-aos="fade-up">
              <a href="#" class="category">Category</a>
              <a href="#" class="category">SubCategory</a>
            </div>

            <h1 class="title" data-aos="fade-up" data-aos-delay="100">Title</h1>

            <div class="article-meta" data-aos="fade-up" data-aos-delay="200">
              <div class="author">
                <img src="assets/img/person/person-m-6.webp" alt="Author" class="author-img">
                <div class="author-info">
                  <h4>David Wilson</h4>
                  <span>UI/UX Design Lead</span>
                </div>
              </div>
              <div class="post-info">
                <span><i class="bi bi-calendar4-week"></i> April 15, 2025</span>
                <span><i class="bi bi-clock"></i> 10 min read</span>
                <span><i class="bi bi-chat-square-text"></i> 32 Comments</span>
              </div>
            </div>
          </div>

          <div class="article-featured-image" data-aos="zoom-in">
            <img src="assets/img/blog/blog-hero-1.webp" alt="UI Design Evolution" class="img-fluid">
          </div>

          <div class="article-wrapper">
            <aside class="table-of-contents" data-aos="fade-left">
              <h3>Category Filter</h3>
              <nav>
                <ul>
                  <li><a href="#introduction" class="active">Marriage</a></li>
                  <li><a href="#skeuomorphism">Happiness</a></li>
                  <li><a href="#flat-design">Love</a></li>
                  <li><a href="#material-design">Companionship</a></li>
              
                </ul>
              </nav>
            </aside>

            <div class="article-content">
              <div class="content-section" id="introduction" data-aos="fade-up">
                
                <p>
                  From the early days of graphical user interfaces to today's sophisticated design systems, the evolution of UI design reflects not just technological advancement, but also changing user expectations and cultural shifts in how we interact with digital products.
                </p>

             
              </div>

            </div>
          </div>

          <div class="article-footer" data-aos="fade-up">
            <div class="share-article">
              <h4>Share this article</h4>
              <div class="share-buttons">
                <a href="#" class="share-button twitter">
                  <i class="bi bi-twitter-x"></i>
                  <span>Share on X</span>
                </a>
                <a href="#" class="share-button facebook">
                  <i class="bi bi-facebook"></i>
                  <span>Share on Facebook</span>
                </a>
                <a href="#" class="share-button linkedin">
                  <i class="bi bi-linkedin"></i>
                  <span>Share on LinkedIn</span>
                </a>
              </div>
            </div>

            <div class="article-tags">
              <h4>Related Topics</h4>
              <div class="tags">
                <a href="#" class="tag">UI Design</a>
                <a href="#" class="tag">User Experience</a>
                <a href="#" class="tag">Design Trends</a>
                <a href="#" class="tag">Innovation</a>
                <a href="#" class="tag">Technology</a>
              </div>
            </div>
          </div>

        </article>

      </div>
    </section><!-- /Blog Details Section -->

    <!-- Blog Comments Section -->
    <section id="blog-comments" class="blog-comments section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-comments-4">
          <div class="comments-header">
            <h3 class="title">All Comments</h3>
            <div class="comments-stats">
              <span class="count">12</span>
              <span class="label">Comments</span>
            </div>
          </div>

          <div class="comments-container">
            <!-- Comment #1 -->
            <div class="comment-thread">
              <div class="comment-box">
                <div class="comment-wrapper">
                  <div class="avatar-wrapper">
                    <img src="assets/img/person/person-f-9.webp" alt="Avatar" loading="lazy">
                    <span class="status-indicator"></span>
                  </div>

                  <div class="comment-content">
                    <div class="comment-header">
                      <div class="user-info">
                        <h4>Thomas Anderson</h4>
                        <span class="time-badge">
                          <i class="bi bi-clock"></i>
                          2 hours ago
                        </span>
                      </div>
                      <div class="engagement">
                        <span class="likes">
                          <i class="bi bi-heart"></i>
                          24
                        </span>
                      </div>
                    </div>

                    <div class="comment-body">
                      <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                    </div>

                    <div class="comment-actions">
                      <button class="action-btn like-btn" aria-label="Like comment">
                        <i class="bi bi-heart"></i>
                        <span>Like</span>
                      </button>
                      <button class="action-btn reply-btn" aria-label="Reply to comment">
                        <i class="bi bi-chat"></i>
                        <span>Reply</span>
                      </button>
                      <button class="action-btn share-btn" aria-label="Share comment">
                        <i class="bi bi-share"></i>
                        <span>Share</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Replies Container -->
              <div class="replies-container">
                <!-- Reply #1 -->
                <div class="comment-box reply">
                  <div class="comment-wrapper">
                    <div class="avatar-wrapper">
                      <img src="assets/img/person/person-m-9.webp" alt="Avatar" loading="lazy">
                      <span class="status-indicator"></span>
                    </div>

                    <div class="comment-content">
                      <div class="comment-header">
                        <div class="user-info">
                          <h4>Maria Rodriguez</h4>
                          <span class="time-badge">
                            <i class="bi bi-clock"></i>
                            1 hour ago
                          </span>
                        </div>
                        <div class="engagement">
                          <span class="likes">
                            <i class="bi bi-heart"></i>
                            8
                          </span>
                        </div>
                      </div>

                      <div class="comment-body">
                        <p>Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae.</p>
                      </div>

                      <div class="comment-actions">
                        <button class="action-btn like-btn" aria-label="Like comment">
                          <i class="bi bi-heart"></i>
                          <span>Like</span>
                        </button>
                        <button class="action-btn reply-btn" aria-label="Reply to comment">
                          <i class="bi bi-chat"></i>
                          <span>Reply</span>
                        </button>
                        <button class="action-btn share-btn" aria-label="Share comment">
                          <i class="bi bi-share"></i>
                          <span>Share</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Reply #2 -->
                <div class="comment-box reply">
                  <div class="comment-wrapper">
                    <div class="avatar-wrapper">
                      <img src="assets/img/person/person-f-9.webp" alt="Avatar" loading="lazy">
                      <span class="status-indicator"></span>
                    </div>

                    <div class="comment-content">
                      <div class="comment-header">
                        <div class="user-info">
                          <h4>Alex Chen</h4>
                          <span class="time-badge">
                            <i class="bi bi-clock"></i>
                            30 minutes ago
                          </span>
                        </div>
                        <div class="engagement">
                          <span class="likes">
                            <i class="bi bi-heart"></i>
                            5
                          </span>
                        </div>
                      </div>

                      <div class="comment-body">
                        <p>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                      </div>

                      <div class="comment-actions">
                        <button class="action-btn like-btn" aria-label="Like comment">
                          <i class="bi bi-heart"></i>
                          <span>Like</span>
                        </button>
                        <button class="action-btn reply-btn" aria-label="Reply to comment">
                          <i class="bi bi-chat"></i>
                          <span>Reply</span>
                        </button>
                        <button class="action-btn share-btn" aria-label="Share comment">
                          <i class="bi bi-share"></i>
                          <span>Share</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Comment #2 -->
            <div class="comment-thread">
              <div class="comment-box">
                <div class="comment-wrapper">
                  <div class="avatar-wrapper">
                    <img src="assets/img/person/person-f-7.webp" alt="Avatar" loading="lazy">
                    <span class="status-indicator"></span>
                  </div>

                  <div class="comment-content">
                    <div class="comment-header">
                      <div class="user-info">
                        <h4>Emily Watson</h4>
                        <span class="time-badge">
                          <i class="bi bi-clock"></i>
                          3 hours ago
                        </span>
                      </div>
                      <div class="engagement">
                        <span class="likes">
                          <i class="bi bi-heart"></i>
                          15
                        </span>
                      </div>
                    </div>

                    <div class="comment-body">
                      <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                    </div>

                    <div class="comment-actions">
                      <button class="action-btn like-btn" aria-label="Like comment">
                        <i class="bi bi-heart"></i>
                        <span>Like</span>
                      </button>
                      <button class="action-btn reply-btn" aria-label="Reply to comment">
                        <i class="bi bi-chat"></i>
                        <span>Reply</span>
                      </button>
                      <button class="action-btn share-btn" aria-label="Share comment">
                        <i class="bi bi-share"></i>
                        <span>Share</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Blog Comments Section -->

    <!-- Blog Comment Form Section -->
    <section id="blog-comment-form" class="blog-comment-form section">
      <div class="container">

        <form action="">

          <h4>Post Comment</h4>
          <div class="row">
            <div class="col-md-6 form-group">
              <input name="name" type="text" class="form-control" placeholder="Your Name*">
            </div>
            <div class="col-md-6 form-group">
              <input name="email" type="text" class="form-control" placeholder="Your Email*">
            </div>
          </div>
          <div class="row">
            <div class="col form-group">
              <input name="website" type="text" class="form-control" placeholder="Your Website">
            </div>
          </div>
          <div class="row">
            <div class="col form-group">
              <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Post Comment</button>
          </div>

        </form>

      </div>
    </section><!-- /Blog Comment Form Section -->

  </main>

<?php include 'footer.php'; ?>