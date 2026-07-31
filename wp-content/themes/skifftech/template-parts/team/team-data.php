<?php
/**
 * Team roster data — departments, members, and their profile content.
 *
 * Single source of truth for both the roster grid (template-parts/team/roster.php)
 * and the individual profile pages (template-pages/team-profile.php).
 *
 * Returns $skifftech_departments — a plain array (no CPT/ACF): each department
 * has a 'title' and a list of 'members'. A member only gets a "View profile"
 * link / profile page once it has a 'modal' key. Within 'modal', all keys are
 * required except: vision, bio, badges, certifications, recommendations —
 * those are optional and their section is skipped entirely when absent.
 *
 * @package skifftech
 */

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
					'exp2'   => '16+ years experience',
					'badges' => array( 'Top 5% Professional — Pro5.ai' ),
					'bio'    => array(
						'<b>Rayhan Ahmed Sajib leads data operations and engineering at Skiff Technologies, where he manages the teams responsible for automated ETL pipelines and large-scale data migrations for our Dominion DMS engagement.</b>',
						'With 16+ years across data analytics, enterprise banking systems, and global BI reporting for Fortune 500 clients, he brings both deep technical range and a track record of leading teams through complex, high-stakes conversions without missing a deadline.',
					),
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
					'certifications' => array(
						array( 'source' => 'LinkedIn Learning · Microsoft', 'title' => 'Microsoft Azure AI Essentials — Professional Certificate', 'date' => 'Issued Jul 12, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-azure-ai-essentials.jpg' ),
						array( 'source' => 'LinkedIn Learning', 'title' => 'Microsoft Azure AI Essentials: Workloads and Machine Learning on Azure', 'date' => 'Issued Jul 12, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-azure-ai-workloads-ml.jpg' ),
						array( 'source' => 'LinkedIn Learning', 'title' => 'Professional Scrum Product Ownership: An Introduction', 'date' => 'Issued Jul 11, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-scrum-product-ownership.jpg' ),
						array( 'source' => 'LinkedIn Learning · PMI', 'title' => 'Professional Scrum Product Ownership: An Introduction (PMI PDU)', 'date' => 'Issued Jul 11, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-scrum-product-ownership-pmi-pdu.jpg' ),
						array( 'source' => 'Google Cloud', 'title' => 'Gemini for Data Scientists and Analysts — Completion Badge', 'date' => 'Issued Jul 11, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-gemini-data-scientists-analysts.jpg' ),
						array( 'source' => 'Google Cloud', 'title' => 'Responsible AI: Applying AI Principles with Google Cloud', 'date' => 'Issued Jul 7, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-responsible-ai-google-cloud.jpg' ),
						array( 'source' => 'LinkedIn Learning', 'title' => 'Databricks for Data Analysts', 'date' => 'Issued Jun 16, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-databricks-data-analysts.jpg' ),
						array( 'source' => 'LinkedIn Learning', 'title' => 'Microsoft Azure Synapse for Developers', 'date' => 'Issued Jun 12, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-azure-synapse-developers.jpg' ),
						array( 'source' => 'micro1', 'title' => 'Certified — Data Analyst Manager (AI Interview)', 'date' => 'Issued May 24, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-data-analyst-manager-ai-interview.jpg' ),
						array( 'source' => 'Coursera', 'title' => 'Business Analysis &amp; Process Management — Project Certificate', 'date' => 'Issued May 8, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-business-analysis-process-management.jpg' ),
						array( 'source' => 'Coursera', 'title' => 'Introduction to Data Analysis using Microsoft Excel', 'date' => 'Issued May 8, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-excel-data-analysis.jpg' ),
						array( 'source' => 'Pro5.ai', 'title' => 'Top 5% Professional — AI Interview: Deputy General Manager, Growth &amp; Market Intelligence, Data Science &amp; Engineering', 'date' => 'Issued April 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-top-5-percent-professional-pro5.jpg' ),
						array( 'source' => 'Certificate of Achievement', 'title' => '2026 Your Role: Internet Security and You', 'date' => 'Issued Feb 22, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-internet-security-and-you.jpg' ),
						array( 'source' => 'Anthropic · GivingTuesday', 'title' => 'AI Fluency for Nonprofits', 'date' => '', 'image' => get_template_directory_uri() . '/images/team/certs/cert-ai-fluency-nonprofits.jpg' ),
						array( 'source' => 'Anthropic', 'title' => 'Claude Code 101', 'date' => '', 'image' => get_template_directory_uri() . '/images/team/certs/cert-claude-code-101.jpg' ),
						array( 'source' => 'Anthropic', 'title' => 'Claude 101', 'date' => '', 'image' => get_template_directory_uri() . '/images/team/certs/cert-claude-101.jpg' ),
						array( 'source' => 'Certificate of Achievement', 'title' => 'Security Awareness Foundations (SAF)', 'date' => 'Issued Sep 11, 2025', 'image' => get_template_directory_uri() . '/images/team/certs/cert-security-awareness-foundations.jpg' ),
						array( 'source' => 'Certificate of Achievement', 'title' => '2025 Social Engineering Red Flags', 'date' => 'Issued May 6, 2025', 'image' => get_template_directory_uri() . '/images/team/certs/cert-social-engineering-red-flags.jpg' ),
						array( 'source' => 'Certificate of Achievement', 'title' => 'Anti-Phishing Essentials', 'date' => 'Issued Jul 3, 2023', 'image' => get_template_directory_uri() . '/images/team/certs/cert-anti-phishing-essentials.jpg' ),
					),
					'recommendations' => array(
						array( 'name' => 'Tony Garcia', 'title' => 'Director of IT Delivery at SouthEast Toyota Finance', 'relationship' => 'Tony managed Rayhan Ahmed directly', 'quote' => 'I had the opportunity to work closely with Rayhan for the better part of five years at Dominion DMS, where he served as Team Lead for the Data Development group. During that time, Rayhan played a critical role in leading many of the DMS conversion processes, implementations, and complex data mappings that were essential to successful client onboarding. Rayhan consistently demonstrated exceptional leadership and accountability. He led a highly dedicated team that often worked tirelessly — many times overnight — to ensure implementations were delivered on time and met the highest quality standards. His ability to manage complex data challenges while maintaining focus on delivery is truly impressive. What stands out most about Rayhan is his unwavering commitment and professionalism. His work ethic, attention to detail, and positive attitude made him a pleasure to collaborate with, even under demanding timelines. He brings both technical depth and strong leadership, making him an invaluable asset to any organization. I highly recommend Rayhan for any role that requires expertise in data development, leadership, and a strong commitment to delivering results.' ),
						array( 'name' => 'Alexander', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Alexander worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan is an excellent Data Engineer. I had the privilege of working with him, and I was consistently impressed by his strong technical expertise in SQL Server and C#. He played a key role in several data conversion projects, all of which were highly successful thanks to his skill, dedication, and attention to detail.' ),
						array( 'name' => 'Dr Reasat', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Dr Reasat worked with Rayhan Ahmed but on different teams', 'quote' => 'Rayhan brings a rare combination of technical depth and dependability. Every project I&#x27;ve seen him touch has been delivered with care and precision.' ),
						array( 'name' => 'Sharif Faisal', 'title' => 'Sr. QA Engineer at Skiff Technologies', 'relationship' => 'Sharif Faisal reported to Rayhan Ahmed directly', 'quote' => 'Rayhan is a supportive and knowledgeable leader who always makes time to unblock the team, while holding a high bar for data quality.' ),
						array( 'name' => 'Arifur', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Arifur was senior to Rayhan Ahmed but didn&#x27;t manage Rayhan Ahmed directly', 'quote' => 'A dependable engineer with strong command over complex ETL work — Rayhan is someone I&#x27;d gladly work with again.' ),
						array( 'name' => 'Ericka', 'title' => 'Manager at Dominion DMS', 'relationship' => 'Ericka managed Rayhan Ahmed directly', 'quote' => 'Rayhan consistently exceeded expectations on delivery timelines while maintaining excellent communication with stakeholders throughout every migration.' ),
						array( 'name' => 'Abu Syed Mohammad', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Abu Syed Mohammad reported to Rayhan Ahmed directly', 'quote' => 'Rayhan is patient, technically sharp, and genuinely invested in helping his team grow their skills.' ),
						array( 'name' => 'Missba Banu', 'title' => 'Sr. Data Analyst at Skiff Technologies', 'relationship' => 'Missba worked with Rayhan Ahmed on the same team', 'quote' => 'I had the privilege of working under Rayhan&#x27;s leadership and have has been exceptional leadership and communication skills. He has a unique ability to handle multiple tasks while maintaining high-quality work and met dealines. Any organization would be lucky to have such a dedicated and effective leader.' ),
						array( 'name' => 'Md. Abdur Rahman Rony', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Md. Abdur Rahman Rony reported to Rayhan Ahmed directly', 'quote' => 'Rayhan&#x27;s guidance was instrumental in my growth as a data engineer — clear expectations, honest feedback, and always available when it mattered.' ),
						array( 'name' => 'Tasnur Rahman', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Tasnur Rahman worked with Rayhan Ahmed on the same team', 'quote' => 'A steady hand under pressure — Rayhan kept our migration workstreams on track through some genuinely difficult conversions.' ),
						array( 'name' => 'Russell', 'title' => 'Manager at Dominion DMS', 'relationship' => 'Russell managed Rayhan Ahmed directly', 'quote' => 'Rayhan consistently demonstrates high-level technical expertise and delivers quality work across every project. He collaborates effectively with teams, manages deadlines with ease, and supports others by providing clear guidance and development opportunities. At Dominion DMS, he showcased strong skills in Azure Data Factory, SQL, C#, Python, and all aspects of ETL processes.' ),
						array( 'name' => 'Asif Islam', 'title' => 'Lead Data Analyst at Skiff Technologies', 'relationship' => 'Asif worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan is one of the most reliable engineers I&#x27;ve worked alongside — deep SQL and ETL expertise paired with genuine team-first collaboration.' ),
						array( 'name' => 'Paul', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Paul was senior to Rayhan Ahmed but didn&#x27;t manage Rayhan Ahmed directly', 'quote' => 'Rayhan&#x27;s attention to detail on data mapping work saved us from several potential production issues during migration.' ),
						array( 'name' => 'Farhana Zaman', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Farhana Zaman worked with Rayhan Ahmed on the same team', 'quote' => 'Always willing to jump in and help troubleshoot, Rayhan brings both technical rigor and a genuinely collaborative attitude.' ),
						array( 'name' => 'Khaza Moinuddin', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Khaza Moinuddin worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan&#x27;s leadership on our conversion sprints kept the whole team aligned and confident, even against tight deadlines.' ),
						array( 'name' => 'Nazmul', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Nazmul worked with Rayhan Ahmed on the same team', 'quote' => 'A genuinely strong technical lead — clear communicator, thorough reviewer, and always fair with feedback.' ),
						array( 'name' => 'Mohammad', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Mohammad worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan brings deep ETL and SQL Server expertise to every engagement, and it shows in the quality of the deliverables.' ),
						array( 'name' => 'Mohammad', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Mohammad worked with Rayhan Ahmed on the same team', 'quote' => 'I&#x27;ve seen Rayhan handle some of our most complex data conversions without missing a beat — highly recommended.' ),
						array( 'name' => 'Farhat Nizam', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Farhat Nizam worked with Rayhan Ahmed on the same team', 'quote' => 'I highly recommend Rayhan for his exceptional data analysis and technical skills. He has a talent for turning complex data into clear insights. Riaihan is a great team player, always willing to help others and share his knowledge. His analytical mindset and attention to detail make him a valuable asset to any team.' ),
						array( 'name' => 'Md. Nazmul', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Md. Nazmul worked with Rayhan Ahmed on the same team', 'quote' => 'I have enjoyed working with Rayjan Ahmed Sajib for the last 8 years. Our teams worked closely together to help build out the company&#x27;s project management process. I found him to be hard-working, bright, and a skilled communicator. I particularly enjoyed his sense of humor in the face of what can sometimes be a stressful situation when faced with tight deadlines. But what makes him stand out is his willingness to help others. I am glad to have worked with him and have no hesitation recommending him to potential employers.' ),
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
					'bio'    => array(
						'<b>Asif Islam brings 15+ years of experience spanning enterprise application development, cloud data engineering, and IT infrastructure leadership. He specializes in Azure Data Factory development, complex C# and ASP.NET applications, and advanced SQL Server programming — including data warehousing, ETL/SSIS/SSAS, and high-performance stored procedures.</b>',
						'Beyond development, Asif has led data center planning, live-service operations, and IT security management, giving him a rare combination of hands-on engineering depth and full-stack infrastructure ownership. At Skiff Technologies, he leads both local and outsourced teams across data engineering and application architecture.',
					),
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
					'certifications' => array(
						array( 'source' => 'HackerRank', 'title' => 'SQL (Basic) — Certificate of Accomplishment', 'date' => 'Issued Aug 4, 2023', 'image' => get_template_directory_uri() . '/images/team/certs/cert-asif-sql-basic-hackerrank.jpg' ),
					),
					'recommendations' => array(
						array( 'name' => 'Md. Abdur Rahman Rony, PMP®, ACMP', 'title' => 'Fintech · Project Management · Business Analysis · Data Analysis', 'relationship' => 'Md. Abdur Rahman Rony reported to Asif directly', 'quote' => 'I had the opportunity to work closely with Asif Islam and can confidently say he is a highly skilled and dependable technology professional. His expertise in data engineering, particularly in Azure Data Factory (ADF), ETL processes, and .NET development, consistently delivers high-quality and scalable solutions. Asif stands out for his strong leadership and project management abilities. He effectively leads teams, ensures smooth collaboration, and maintains a clear focus on delivering results within deadlines. His attention to detail and deep understanding of data workflows make him a valuable asset in any data-driven environment.' ),
						array( 'name' => 'Doly Akter', 'title' => 'Data Engineer · Data Analyst · Cloud Pipelines · BI Developer', 'relationship' => 'Asif was senior to Doly but didn&#x27;t manage Doly directly', 'quote' => 'Asif Islam is a very smart working, organised team lead and very sincere and honest employee. I had an opportunity to work with him as a team member. As an active team lead, he has the proven ability to lead teams and deliver scalable, relaiable data solutions. Strongly experts in ADF ETL work flows along with SSIS and Net. Has a tremendous team leadership skill to manage and collaborative the team mates. Dedicated to fulfill his duties and responsibilities on time. He is very dynamic in his working area. I think the best about him is the fact that he is a good soul and active team lead. He carries outstanding professional soft skill attires which bear him from being his best as a fellow human being. I wish his success in his upcoming carrer ahead.' ),
						array( 'name' => 'Rayhan Ahmed Sajib', 'title' => 'Data Analyst Manager · Data Engineering Manager · 16+ Years', 'relationship' => 'Rayhan Ahmed worked with Asif on the same team', 'quote' => 'I had the opportunity to work with Asif Islam, and I can confidently say he is a highly dedicated and dependable professional. Asif is an excellent ETL developer with strong delivery execution capabilities. He has a deep understanding of business requirements and architectural challenges, and consistently contributes to identifying and implementing effective solutions. He is hardworking, focused, and remains calm under pressure — especially during critical deadlines. He is also a trustworthy team player who takes full ownership of his responsibilities. Known for his relentless work ethic, he is often recognized as someone who goes above and beyond to ensure successful delivery. I highly recommend Asif Islam for any role that demands commitment, technical expertise, and accountability.' ),
						array( 'name' => 'Ericka Solis', 'title' => 'DBA Team Lead (Dominion DMS)', 'relationship' => 'Ericka managed Asif directly', 'quote' => 'While working with Asif at Dominion DMS, he consistently stood out as one of the most hard-working individuals on the team, always willing to step in, take ownership, and help ensure projects were completed on time. He demonstrates strong technical expertise in Azure SQL, writing SQL stored procedures, ETL development using both SSIS and Azure Data Factory, and version control through Azure DevOps. He also brings valuable experience in process documentation using Confluence and SharePoint, as well as creating custom batch scripts. Asif is known for being a true team player, collaborating closely with colleagues, asking the right questions to resolve data issues, and developing code that aligns with business requirements. He maintains professionalism at all times and is highly respected by his peers. He embraces challenges and is committed to delivering work with strong data quality and reliability. I highly recommend Asif to any company seeking a dedicated, proactive, and results-driven data analyst who takes pride in delivering successful outcomes.' ),
						array( 'name' => 'Russell Gibson', 'title' => 'Senior Data Engineer · Azure Data Factory · SQL/T-SQL · ETL/ELT', 'relationship' => 'Russell managed Asif directly', 'quote' => 'Asif brings strong expertise in ETL processes and consistently delivers high-quality work. He demonstrated solid skills in Azure Data Factory, SSIS, SQL, and C#, and successfully led the execution of DMS ETL processes for 100+ dealers. It was a pleasure working with him.' ),
						array( 'name' => 'Paul Whipps, LSSBB', 'title' => 'Vice President of Technology', 'relationship' => 'Paul managed Asif directly', 'quote' => 'I worked in the same division as Asif for around 3 years. I knew Asif to be a very hard worker who was deeply knowledgeable in the area of data conversions for automotive DMS software. I have seen Asif provide guidance to his peers on numerous occasions to help distribute the knowledge that he&#x27;s developed over the years. I really enjoyed working with Asif and would recommend him for any data conversion projects.' ),
						array( 'name' => 'Tony Garcia', 'title' => 'Director of IT Delivery at SouthEast Toyota Finance', 'relationship' => 'Tony managed Asif directly', 'quote' => 'I highly recommend Asif as an exceptional data developer and a natural leader. He consistently demonstrates a strong ability to take ownership of challenges and see them through to completion with efficiency and precision. Asif is truly a &quot;get-it-done&quot; professional; someone who thrives in fast-paced, high-pressure environments without compromising on quality. His technical expertise, combined with his problem-solving mindset, allows him to deliver results reliably and effectively. Beyond his skills, Asif is a genuine pleasure to work with. He brings a positive attitude, dedication, and a collaborative spirit to every project. His ability to lead by example and maintain high performance under pressure makes him a valuable asset to any team. I would not hesitate to work with Asif again and strongly recommend him for any role that demands excellence, leadership, and execution.' ),
						array( 'name' => 'M. Shukarno bin Shareef', 'title' => 'Japanese Car Navigation and Parts Expert', 'relationship' => 'M. Shukarno bin reported to Asif directly', 'quote' => 'I have had the opportunity to observe Asif bhai&#x27;s professional skills as well as interpersonal style. He is consistently pleasant, and takes on all assignments with enthusiasm and dedication. I wish that all my co-workers follow his pathway.' ),
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
			array( 'slug' => 'rashu', 'name' => 'Rashu Nath', 'role' => 'Web Developer', 'image' => 'rashu-nath.min.jpg' ),
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
