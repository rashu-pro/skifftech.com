<?php
/**
 * Team roster — departments, member cards, and profile modals.
 * Member data lives in one array so cards and their matching modals
 * stay in sync without duplicating markup per person.
 */

$team_img_uri = get_template_directory_uri() . '/images/team/';

$skifftech_departments = array(

	array(
		'title'   => 'Data &amp; Analytics Engineering',
		'members' => array(
			array(
				'slug'  => 'rayhan',
				'name'  => 'Rayhan Ahmed Sajib',
				'role'  => 'Data Analyst Manager',
				'exp'   => '16+ yrs',
				'image' => 'rayhan-ahmed-sajib.jpg',
				'modal' => array(
					'exp2'  => '16+ years experience',
					'jobs'  => array(
						array( '2023 — Present', 'Skiff Technologies (Dominion DMS)', 'Leads data operations and engineering teams to deliver automated ETL pipelines and large-scale data migrations for USA-based clients.' ),
						array( '2022 — 2023', 'BRAC International', 'Architected technical solutions and managed vendor relations for cross-country digital transformation and reporting systems.' ),
						array( '2018 — 2020', 'AB Bank Limited', 'Managed enterprise banking systems and automated regulatory reporting to optimize financial data accuracy.' ),
						array( '2017 — 2018', 'Fusion Info Tech', 'Consulted on Oracle EBS implementation and coordinated system integrations between multiple global stakeholders.' ),
						array( '2013 — 2017', 'IMS Health (IQVIA)', 'Developed global BI dashboards and led technical teams to deliver advanced analytics for Fortune 500 pharmaceutical clients.' ),
					),
					'education' => array(
						array( 'MBA in MIS', 'University of Dhaka' ),
						array( 'B.Sc. in CSE', 'Ahsanullah University of Science and Technology (AUST)' ),
					),
					'skills'    => array( 'Data Analytics', 'Azure Engineering', 'ETL Architecture', 'Team Leadership', 'System Integration' ),
					'languages' => array(
						array( 'C# / .NET', 100, 'Expert' ),
						array( 'SQL', 100, 'Expert' ),
						array( 'JavaScript / jQuery', 62, 'Intermediate' ),
						array( 'Python', 62, 'Intermediate' ),
						array( 'HTML5', 62, 'Intermediate' ),
						array( 'CSS3', 62, 'Intermediate' ),
						array( 'Java', 62, 'Intermediate' ),
						array( 'C / C++', 62, 'Intermediate' ),
					),
				),
			),
			array(
				'slug'  => 'asif',
				'name'  => 'Asif Islam',
				'role'  => 'Lead Data Analyst',
				'exp'   => '15+ yrs',
				'image' => 'asif-islam.jpg',
				'modal' => array(
					'exp2'   => '15+ years experience',
					'vision' => '&ldquo;To lead a high-performing data analytics team that transforms complex raw data into actionable strategic insights, directly influencing company growth and optimizing operational efficiency. I envision fostering a culture of curiosity and accuracy, where data storytelling enables stakeholders to make proactive, confident decisions.&rdquo;',
					'jobs'  => array(
						array( '2022 — Present', 'SKIFF Technologies', 'Leading local and outsourced development teams in data engineering, Azure ETL development, and complex C# application architecture.' ),
						array( '2020 — 2026', 'Dominion DMS (USA · Remote)', 'Technical Lead for data conversion projects, managing sprint planning, Azure functions, and complex data comparisons for US clients.' ),
						array( '2015 — 2020', 'e-World Ltd', 'Head of Technical Operations, managing infrastructure planning, IIS administration, and mVAS product development for major telecom operators.' ),
						array( '2007 — 2015', 'VU Mobile', 'Led full-scale telecom platform migrations (Robi–Huawei SDP) and developed SMS/charging gateways for all major Bangladeshi operators.' ),
					),
					'education' => array(
						array( 'Masters in Computer Science', 'University of South Asia' ),
						array( 'B.Sc. in CSE', 'The University of Asia Pacific' ),
					),
					'skills'    => array( 'Technical Leadership', 'Cloud Engineering', 'Database Administration', 'Software Development', 'Agile Planning' ),
					'languages' => array(
						array( 'C# / .NET', 100, 'Expert' ),
						array( 'SQL', 100, 'Expert' ),
						array( 'JavaScript / jQuery', 62, 'Intermediate' ),
						array( 'Python', 62, 'Intermediate' ),
						array( 'HTML5', 62, 'Intermediate' ),
						array( 'CSS3', 62, 'Intermediate' ),
						array( 'Java', 62, 'Intermediate' ),
						array( 'PowerShell', 62, 'Intermediate' ),
					),
				),
			),
			array(
				'slug'  => 'moktadir',
				'name'  => 'Abdul Moktadir',
				'role'  => 'Sr. SQL Data Analyst',
				'exp'   => '14+ yrs',
				'image' => 'abdul-moktadir.jpg',
				'modal' => array(
					'exp2' => '14+ years experience',
					'jobs' => array(
						array( '2021 — Present', 'Sr. SQL Data Analyst · Dominion DMS', 'Working with SQL Server to analyze data, build queries, and develop automation tools using C# and Python for reporting and decision support.' ),
						array( '2011 — 2021', 'Sr. IT Executive (Software Developer) · KDS Accessories', 'Developed enterprise applications and web systems using ASP.NET and SQL Server, including reporting and business management solutions.' ),
					),
					'education' => array(
						array( 'B.Sc. (Hons) in CSE', 'International Islamic University Chittagong' ),
					),
					'skills'    => array( 'Database Administration', 'Data Analysis', 'Backend Development', 'Report Development', 'Web Development' ),
					'languages' => array(
						array( 'SQL', 100, 'Expert' ),
						array( 'C#', 82, 'Advanced' ),
						array( 'HTML5', 82, 'Advanced' ),
						array( 'CSS3', 82, 'Advanced' ),
						array( 'VB.NET', 82, 'Advanced' ),
						array( 'JavaScript', 62, 'Intermediate' ),
						array( 'Python', 62, 'Intermediate' ),
					),
				),
			),
			array(
				'slug'  => 'rahman',
				'name'  => 'Muhammad Abdur Rahman',
				'role'  => 'Sr. Data Analyst',
				'exp'   => '17+ yrs',
				'image' => 'muhammad-abdur-rahman.jpg',
				'modal' => array(
					'exp2' => '17+ years experience',
					'jobs' => array(
						array( '2021 — Present', 'Sr. Data Analyst · Skiff Technologies (Dominion Dealer Solutions)', 'Designing and maintaining scalable ETL pipelines using SSIS and Azure Data Factory to process millions of records for the US automotive domain.' ),
						array( '2019 — 2021', 'Sr. Principal Officer · United Finance Ltd', 'Led the end-to-end implementation of Core Banking Solutions (CBS), including GAP analysis, stakeholder management, and business requirement documentation.' ),
						array( '2009 — 2019', 'Project Coordinator (Sr. Analyst Programmer) · Souttech Ltd', 'Coordinated large-scale financial software projects for BRAC while developing system functionalities using VB.NET and managing the full SDLC.' ),
					),
					'education' => array(
						array( 'Master of Information Technology (M.IT)', 'Institute of Information Technology, Jahangirnagar University' ),
						array( 'B.Sc. (Hons) in CSE', 'Asian University of Bangladesh' ),
					),
					'skills'    => array( 'Strategic Project Management', 'Data Engineering', 'Fintech &amp; Domain Expertise', 'Data Analytics' ),
					'languages' => array(
						array( 'C# / .NET', 100, 'Expert' ),
						array( 'SQL', 100, 'Expert' ),
						array( 'VB.NET', 82, 'Advanced' ),
						array( 'JavaScript', 38, 'Basic' ),
					),
				),
			),
			array(
				'slug'  => 'ashraful',
				'name'  => 'Ashraful Alam Akand',
				'role'  => 'Sr. Data Engineer',
				'exp'   => '17+ yrs',
				'image' => 'ashraful-alam-akand.jpg',
				'modal' => array(
					'exp2' => '17+ years experience',
					'jobs' => array(
						array( '2021 — Present', 'Sr. Data Engineer · Dominion DMS (USA · Remote) / Skiff Technologies', 'Designing and maintaining complex ETL pipelines using SSIS and Azure Data Factory to process millions of records while achieving 30–40% performance improvement through advanced SQL tuning and indexing strategies.' ),
						array( '2020 — 2021', 'Data Analyst · Bitopi Group', 'Developed structured reporting workflows for manufacturing (RMG) operations, reducing manual reporting effort by 40–50% and improving data accuracy through automated validation rules.' ),
						array( '2009 — 2019', 'Sr. Analyst Programmer · Southtech Group', 'Engineered high-volume financial data consolidation pipelines and MIS reporting systems for BRAC Microfinance, managing large-scale transactional datasets (1TB+) and ensuring data integrity across distributed environments.' ),
					),
					'education' => array(
						array( 'Master of Information Technology (MIT)', 'Jahangirnagar University' ),
						array( 'Post Graduate Diploma in IT (PGD-IT)', 'Jahangirnagar University' ),
						array( 'BSS in Archaeology', 'Jahangirnagar University' ),
					),
					'skills'    => array( 'Advanced ETL/ELT Pipeline Engineering', 'SQL Server &amp; Database Optimization', 'Data Migration &amp; Platform Integration', 'Operational Reliability &amp; Support', 'Strategic Data Analysis &amp; Reporting' ),
					'languages' => array(
						array( 'SQL (T-SQL)', 100, 'Expert' ),
						array( 'C# / .NET', 62, 'Intermediate' ),
						array( 'PHP', 62, 'Intermediate' ),
						array( 'Python', 38, 'Basic' ),
					),
				),
			),
			array(
				'slug'  => 'missba',
				'name'  => 'Missba Banu',
				'role'  => 'Sr. Data Analyst',
				'exp'   => '7+ yrs',
				'initials' => 'MB',
				'modal' => array(
					'exp2' => '7+ years experience',
					'jobs' => array(
						array( '2023 — Present', 'SKIFF Technologies', 'Designing ETL workflows and ADF pipelines while managing data health reporting and automated testing for DMS sources.' ),
						array( '2022 — 2023', 'Brain Station 23', 'Managed large-scale data migration projects and resolved complex data discrepancies using SQL and SSIS.' ),
						array( '2018 — 2022', 'Union Group', 'Developed real-time sales forecasts and data warehouse architectures (Star/Snowflake) using Python, SQL, and Power BI.' ),
					),
					'education' => array(
						array( 'M.Sc. in CSE', 'United International University (UIU)' ),
						array( 'B.Sc. in CSE', 'United International University (UIU)' ),
					),
					'skills'    => array( 'Data Visualization', 'ETL Engineering', 'SQL Mastery', 'Data Warehousing', 'Statistical Analysis' ),
					'languages' => array(
						array( 'DAX', 100, 'Expert' ),
						array( 'SQL', 100, 'Expert' ),
						array( 'JavaScript', 62, 'Intermediate' ),
						array( 'Python', 62, 'Intermediate' ),
						array( 'HTML5', 38, 'Basic' ),
						array( 'CSS3', 38, 'Basic' ),
					),
				),
			),
			array(
				'slug'  => 'doly',
				'name'  => 'Doly Akter',
				'role'  => 'SQL Data Analyst',
				'exp'   => '10+ yrs',
				'image' => 'doly-akter.jpg',
				'modal' => array(
					'exp2' => '10+ years experience',
					'jobs' => array(
						array( '2022 — Present', 'Skiff Technologies (Dominion DMS)', 'Designs and manages cloud-based ETL pipelines using Azure Data Factory and SQL to ensure data accuracy and reporting.' ),
						array( '2019 — 2022', 'Southtech Limited · Senior Programmer', 'Led financial software development using .NET, handled database design, and managed CMMI Level 5 process auditing.' ),
						array( '2016 — 2019', 'Southtech Limited · Junior Programmer', 'Developed web and desktop applications, wrote complex SQL queries, and performed extensive software testing and data migration.' ),
					),
					'education' => array(
						array( 'M.Sc. in CSE', 'Jahangirnagar University' ),
						array( 'Bachelor in CSE', 'IUBAT' ),
						array( 'Post Graduate Diploma in ICT', 'Bangladesh Computer Council (BCC)' ),
					),
					'skills'    => array( 'Data Engineering', 'Azure Cloud', 'SQL Optimization', 'ETL Pipelines', 'Business Intelligence' ),
					'languages' => array(
						array( 'C#', 100, 'Expert' ),
						array( 'SQL', 100, 'Expert' ),
						array( 'HTML5', 100, 'Expert' ),
						array( 'JavaScript / jQuery', 62, 'Intermediate' ),
						array( 'Python', 62, 'Intermediate' ),
						array( 'CSS3', 62, 'Intermediate' ),
						array( 'Java', 62, 'Intermediate' ),
						array( 'C / C++', 62, 'Intermediate' ),
					),
				),
			),
		),
	),

	array(
		'title'   => 'Product &amp; Development Operations',
		'members' => array(
			array( 'slug' => 'shahed', 'name' => 'Shahed Al Mahmud', 'role' => 'Software Developer', 'image' => 'shahed-al-mahmud.jpg' ),
			array( 'slug' => 'muhibullah', 'name' => 'Muhibullah Khandaker', 'role' => 'Software Developer', 'image' => 'muhibullah-khandaker.jpg' ),
			array( 'slug' => 'emdadul', 'name' => 'Md Emdadul Islam', 'role' => 'Software Developer', 'image' => 'md-emdadul-islam.jpg' ),
			array( 'slug' => 'rashu', 'name' => 'Rashu Nath', 'role' => 'Web Developer', 'image' => 'rashu-nath.jpg' ),
		),
	),

	array(
		'title'   => 'Quality Assurance',
		'members' => array(
			array(
				'slug'  => 'shirin',
				'name'  => 'Shirin Akter',
				'role'  => 'Lead Software QA Engineer',
				'exp'   => '15+ yrs',
				'image' => 'shirin-akter.jpg',
				'modal' => array(
					'exp2' => '15+ years experience',
					'jobs' => array(
						array( '2023 — Present', 'Skiff Technologies', 'Leading QA operations for Dominion DMS (USA), focusing on Cypress automation and data comparison for VUE systems.' ),
						array( '2020 — 2023', 'Orion Informatics Limited', 'Lead QA Engineer managing a team of seven, implementing Cypress automation, and leading daily Scrum meetings.' ),
						array( '2012 — 2017', 'BRAC (ICT Department)', 'Managed QA for BRAC&rsquo;s ERP and web applications, including whitebox testing and requirement analysis.' ),
					),
					'education' => array(
						array( 'M.Sc. in Computer Science', 'Jahangirnagar University' ),
						array( 'B.Sc. in CSE', 'Ahsanullah University of Science &amp; Technology' ),
					),
					'skills'    => array( 'Test Automation', 'API Testing', 'Team Leadership', 'Quality Control', 'Project Management' ),
					'languages' => array(
						array( 'HTML5', 100, 'Expert' ),
						array( 'CSS3', 100, 'Expert' ),
						array( 'JavaScript', 62, 'Intermediate' ),
						array( 'PHP', 62, 'Intermediate' ),
						array( 'SQL', 62, 'Intermediate' ),
						array( 'Java', 38, 'Basic' ),
					),
				),
			),
			array(
				'slug'  => 'sharif',
				'name'  => 'Sharif Faisal Ahmed',
				'role'  => 'Sr. QA Engineer',
				'exp'   => '5+ yrs',
				'image' => 'sharif-faisal-ahmed.jpg',
				'modal' => array(
					'exp2'   => '5+ years experience',
					'vision' => '&ldquo;To act as the guardian of product integrity by embedding rigorous quality standards into the DNA of the development lifecycle. My mission is to ensure that every release is a benchmark of reliability through early intervention, proactive collaboration, and a relentless commitment to excellence from the first requirement to final deployment.&rdquo;',
					'jobs'  => array(
						array( '2026 — Present', 'Sr. QA Engineer · Skiff Technologies (Dominion DMS)', 'Leads release validation across canary and production environments, providing the final risk assessment and functional sign-off required for stable deployments.' ),
						array( '2023 — 2026', 'QA Engineer · Skiff Technologies (Dominion DMS)', 'Improved data integrity by ~60% through a systematic approach of side-by-side UI and SQL validation during high-stakes system migrations.' ),
						array( '2023 — 2024', 'QA Engineer (Part-Time) · Faz Studio', 'Validated third-party integrations and role-based access security, ensuring design-to-code accuracy by comparing UI components against Figma and Storybook references.' ),
						array( '2022 — 2023', 'QA Engineer · ReliSource', 'Ensured consistent feature quality in Agile cycles by designing detailed test cases and executing comprehensive sanity and regression suites to maintain stability across frequent releases.' ),
						array( '2021 — 2022', 'Associate QA &amp; Support Engineer · Codemen Solutions Ltd.', 'Managed the full defect lifecycle for web modules and API integrations while bridging the gap between technical testing and user-facing documentation.' ),
						array( '2021', 'QA &amp; Support Intern · Codemen Solutions Ltd.', 'Supported early defect detection through exploratory testing and clear bug reporting, helping the team catch functional gaps before they reached later stages of development.' ),
					),
					'education' => array(
						array( 'B.Sc. in CSE', 'University of Asia Pacific · Dhaka, Bangladesh' ),
					),
					'skills'    => array( 'Shift-Left Agile Testing', 'Data &amp; Backend Validation', 'Test Strategy &amp; Planning', 'API &amp; Integration Testing', 'Test Automation (Web)', 'Defect Lifecycle Management', 'Quality Integrity Leadership' ),
					'languages' => array(
						array( 'Jira', 100, 'Expert' ),
						array( 'Azure DevOps', 100, 'Expert' ),
						array( 'HTML5', 100, 'Expert' ),
						array( 'CSS3', 100, 'Expert' ),
						array( 'Postman', 82, 'Advanced' ),
						array( 'TypeScript', 62, 'Intermediate' ),
						array( 'Cypress', 62, 'Intermediate' ),
						array( 'SQL', 62, 'Intermediate' ),
						array( 'Playwright', 38, 'Basic' ),
						array( 'Java', 38, 'Basic' ),
					),
				),
			),
			array( 'slug' => 'nigah', 'name' => 'Nigah Hossain Anika', 'role' => 'SQA Engineer', 'image' => 'nigah-hossain-anika.jpg' ),
		),
	),
);
?>

<section class="tm-section" id="team">
  <div class="tm-wrap">

    <div class="tm-head reveal">
      <span class="eyebrow">The team</span>
      <h2 class="tm-h2">The people you&rsquo;ll actually work with.</h2>
      <p class="tm-lead">No bait-and-switch &mdash; the profiles below are the engineers, analysts, and QA specialists who staff our engagements. Open any profile for full experience and skills.</p>
    </div>

    <?php foreach ( $skifftech_departments as $dept ) : ?>
      <div class="tm-dept">
        <div class="tm-dept-head reveal">
          <h3><?php echo $dept['title']; // phpcs:ignore -- static, escaped HTML entities ?></h3>
        </div>
        <div class="tm-grid">
          <?php foreach ( $dept['members'] as $m ) : ?>
            <div class="tm-card reveal">
              <div class="ph<?php echo empty( $m['image'] ) ? ' noimg' : ''; ?>">
                <?php if ( ! empty( $m['exp'] ) ) : ?>
                  <span class="exp"><?php echo esc_html( $m['exp'] ); ?></span>
                <?php endif; ?>
                <?php if ( ! empty( $m['image'] ) ) : ?>
                  <img src="<?php echo esc_url( $team_img_uri . $m['image'] ); ?>" alt="<?php echo esc_attr( $m['name'] ); ?>" loading="lazy">
                <?php else : ?>
                  <span class="init"><?php echo esc_html( $m['initials'] ); ?></span>
                <?php endif; ?>
              </div>
              <div class="bd">
                <h4><?php echo esc_html( $m['name'] ); ?></h4>
                <div class="role"><?php echo esc_html( $m['role'] ); ?></div>
                <?php if ( ! empty( $m['modal'] ) ) : ?>
                  <button class="more" data-modal="pm-<?php echo esc_attr( $m['slug'] ); ?>" aria-haspopup="dialog">
                    View profile <span class="ar">&rarr;</span>
                  </button>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- ============ PROFILE MODALS ============ -->
<?php foreach ( $skifftech_departments as $dept ) : ?>
  <?php foreach ( $dept['members'] as $m ) : ?>
    <?php if ( empty( $m['modal'] ) ) continue; ?>
    <?php $mo = $m['modal']; ?>
    <div class="tm-modal" id="pm-<?php echo esc_attr( $m['slug'] ); ?>" role="dialog" aria-modal="true" aria-label="<?php echo esc_attr( $m['name'] . ' profile' ); ?>">
      <div class="tm-dialog">
        <button class="tm-close" aria-label="Close profile">&times;</button>
        <div class="tm-dlg-head">
          <?php if ( ! empty( $m['image'] ) ) : ?>
            <div class="ph">
              <img src="<?php echo esc_url( $team_img_uri . $m['image'] ); ?>" alt="<?php echo esc_attr( $m['name'] ); ?>">
            </div>
          <?php else : ?>
            <div class="ph noimg"><?php echo esc_html( $m['initials'] ); ?></div>
          <?php endif; ?>
          <div>
            <h3><?php echo esc_html( $m['name'] ); ?></h3>
            <div class="role"><?php echo esc_html( $m['role'] ); ?></div>
            <span class="exp2"><?php echo esc_html( $mo['exp2'] ); ?></span>
          </div>
        </div>
        <div class="tm-dlg-body">

          <?php if ( ! empty( $mo['vision'] ) ) : ?>
            <div class="tm-block">
              <div class="bt">Professional vision</div>
              <div class="tm-vision"><?php echo $mo['vision']; // phpcs:ignore -- static, escaped HTML entities ?></div>
            </div>
          <?php endif; ?>

          <div class="tm-block">
            <div class="bt">Work experience</div>
            <?php foreach ( $mo['jobs'] as $job ) : ?>
              <div class="tm-job">
                <div class="yr"><?php echo esc_html( $job[0] ); ?></div>
                <h5><?php echo $job[1]; // phpcs:ignore -- static, escaped HTML entities ?></h5>
                <p><?php echo esc_html( $job[2] ); ?></p>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="tm-block">
            <div class="bt">Academic qualifications</div>
            <div class="tm-edu">
              <?php foreach ( $mo['education'] as $ed ) : ?>
                <div class="ed">
                  <div class="dg"><?php echo esc_html( $ed[0] ); ?></div>
                  <div class="in"><?php echo $ed[1]; // phpcs:ignore -- static, escaped HTML entities ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="tm-block">
            <div class="bt">Top core proficiencies</div>
            <div class="tm-skills">
              <?php foreach ( $mo['skills'] as $skill ) : ?>
                <span class="tm-chip"><?php echo $skill; // phpcs:ignore -- static, escaped HTML entities ?></span>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="tm-block">
            <div class="bt">Language &amp; tool proficiencies</div>
            <div class="tm-langs">
              <?php foreach ( $mo['languages'] as $lang ) : ?>
                <div class="tm-lang">
                  <span class="nm"><?php echo esc_html( $lang[0] ); ?></span>
                  <span class="track"><span class="fill" style="width:<?php echo (int) $lang[1]; ?>%"></span></span>
                  <span class="lv"><?php echo esc_html( $lang[2] ); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  <?php endforeach; ?>
<?php endforeach; ?>
