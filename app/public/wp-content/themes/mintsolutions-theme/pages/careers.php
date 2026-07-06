<?php
/**
 * Careers page content partial.
 *
 * @package MintSolutions_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- Careers page banner -->
<section class="inner-banner-otr">
  <video autoplay muted loop playsinline>
    <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/videos/about-hero.mp4" type="video/mp4" />
  </video>
  <div class="container h-100">
    <div class="inner-banner-hero">
      <div class="inner-hero career-hero-w">
        <h2>Let’s<span class="highlight">Build</span> Something</h2>
        <h2>Great<span class="highlight">Together.</span></h2>
      </div>
    </div>
  </div>
</section>

<section class="inner-main-wrap">
  <section class="section-solutions">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcump">/Inspire.Captivate.<span>Innovate/</span></div>
          <h3>Current <span>Openings.</span></h3>

          <div class="career-section">
            <!-- Left Job List -->
            <div class="job-list career-accordian">
              
              <!-- Job 1 -->
              <div class="job-item career-list" data-job="uiux" id="num-tag">
                <div class="num-title">
                  <div class="num"></div>
                  <h3>UI/UX Designer</h3>
                  <p>Creative</p>
                </div>
                <button class="view-btn">View Details</button>
                <button class="close-btn">✕</button>
              </div>

              <!-- Job 2 -->
              <div class="job-item career-list" data-job="pm">
                <div class="num-title">
                  <div class="num"></div>
                  <h3>Senior Project Manager</h3>
                  <p>Project Management</p>
                </div>
                <button class="view-btn">View Details</button>
                <button class="close-btn">✕</button>
              </div>

              <!-- Job 3 -->
              <div class="job-item career-list" data-job="fullstack">
                <div class="num-title">
                  <div class="num"></div>
                  <h3>Full Stack Developer</h3>
                  <p>Development</p>
                </div>
                <button class="view-btn">View Details</button>
                <button class="close-btn">✕</button>
              </div>

            </div>

            <!-- Right Side: default image + job details -->
            <div class="job-right">
              <div class="default-image active">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/developer-img.jpg" alt="Career Image" />
              </div>

              <div class="job-details">
                <!-- Job 1 Details -->
                <div class="detail-box" id="uiux">
                  <h2>UI/UX Designer</h2>
                  <p class="meta">Experience: 7+ Years | Positions: 1 | Job Type: Full Time | Location: UAE</p>
                  <div class="job-text-dtl">
                    <h3>Job Overview</h3>
                    <p>As a Senior UI/UX Developer at Sundew, you will build high-quality, responsive front-end experiences...</p>

                    <h3>Required Skill Set:</h3>
                    <p><span>Experience:</span> Minimum relevant experience as per role.</p>
                    <p><span>Education:</span> BE/B.Tech/MCA or equivalent (where relevant).</p>

                    <h3>Technical Skill Set:</h3>
                    <ul>
                      <li>Proficiency in HTML, CSS, SASS, JavaScript and modern frameworks.</li>
                      <li>Skilled in version control systems like Git.</li>
                    </ul>
                  </div>
                </div>

                <!-- Job 2 Details -->
                <div class="detail-box" id="pm">
                  <h2>Senior Project Manager</h2>
                  <p class="meta">Experience: 10+ Years | Job Type: Full Time | Location: Remote</p>
                  <div class="job-text-dtl">
                    <h3>Job Overview</h3>
                    <p>Lead cross-functional teams to deliver enterprise solutions on time.</p>

                    <h3>Required Skill Set:</h3>
                    <p><span>Experience:</span> Minimum relevant experience as per role.</p>
                    <p><span>Education:</span> BE/B.Tech/MCA or equivalent (where relevant).</p>

                    <h3>Technical Skill Set:</h3>
                    <ul>
                      <li>Proficiency in Agile methodologies.</li>
                      <li>Strong communication and leadership skills.</li>
                    </ul>
                  </div>
                </div>

                <!-- Job 3 Details -->
                <div class="detail-box" id="fullstack">
                  <h2>Full Stack Developer</h2>
                  <p class="meta">Experience: 5+ Years | Job Type: Full Time | Location: India</p>
                  <div class="job-text-dtl">
                    <h3>Job Overview</h3>
                    <p>Build and maintain scalable web applications using Node.js and React.</p>

                    <h3>Required Skill Set:</h3>
                    <p><span>Experience:</span> Minimum relevant experience as per role.</p>
                    <p><span>Education:</span> BE/B.Tech/MCA or equivalent (where relevant).</p>

                    <h3>Technical Skill Set:</h3>
                    <ul>
                      <li>Proficiency in HTML, CSS, SASS, JavaScript and modern frameworks.</li>
                      <li>Skilled in version control systems like Git.</li>
                    </ul>
                  </div>
                </div>

              </div>
            </div>
            <!-- /.job-right -->
          </div>
          <!-- /.career-section -->

        </div>
      </div>
    </div>
  </section>
</section>

<section class="career-join-wrap">
  <div class="hver-greenbg"></div>
  <div class="career-join-detail">
    <div class="breadcump">OUR SERVICES</div>
    <h2>Join Us & <br /> Shape the Future</h2>
    <p>Build what matters — your ideas, our team, real impact.</p>
    <!-- Triggers global modal using standard bootstrap data-bs-toggle -->
    <a href="#" class="rto-btn btn-hvr-wt btn-x-bounce" data-bs-toggle="modal" data-bs-target="#enquirNow">
      <span>Internship & Student Programs</span>
    </a>
  </div>
</section>
