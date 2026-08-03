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
					'badges' => array('Top 5% Professional — Pro5.ai'),
					'bio'    => array(
						'<b>Rayhan Ahmed Sajib leads data operations and engineering at Skiff Technologies, where he manages the teams responsible for automated ETL pipelines and large-scale data migrations for our Dominion DMS engagement.</b>',
						'With 16+ years across data analytics, enterprise banking systems, and global BI reporting for Fortune 500 clients, he brings both deep technical range and a track record of leading teams through complex, high-stakes conversions without missing a deadline.',
					),
					'jobs'  => array(
						array('2023 — Present', 'Skiff Technologies (Dominion DMS)', 'Leads data operations and engineering teams to deliver automated ETL pipelines and large-scale data migrations for USA-based clients.'),
						array('2022 — 2023', 'BRAC International', 'Architected technical solutions and managed vendor relations for cross-country digital transformation and reporting systems.'),
						array('2018 — 2020', 'AB Bank Limited', 'Managed enterprise banking systems and automated regulatory reporting to optimize financial data accuracy.'),
						array('2017 — 2018', 'Fusion Info Tech', 'Consulted on Oracle EBS implementation and coordinated system integrations between multiple global stakeholders.'),
						array('2013 — 2017', 'IMS Health (IQVIA)', 'Developed global BI dashboards and led technical teams to deliver advanced analytics for Fortune 500 pharmaceutical clients.'),
					),
					'education' => array(
						array('MBA in MIS', 'University of Dhaka'),
						array('B.Sc. in CSE', 'Ahsanullah University of Science and Technology (AUST)'),
					),
					'skills'    => array('Data Analytics', 'Azure Engineering', 'ETL Architecture', 'Team Leadership', 'System Integration'),
					'languages' => array(
						array('C# / .NET', 100, 'Expert'),
						array('SQL', 100, 'Expert'),
						array('JavaScript / jQuery', 62, 'Intermediate'),
						array('Python', 62, 'Intermediate'),
						array('HTML5', 62, 'Intermediate'),
						array('CSS3', 62, 'Intermediate'),
						array('Java', 62, 'Intermediate'),
						array('C / C++', 62, 'Intermediate'),
					),
					'certifications' => array(
						array('source' => 'LinkedIn Learning · Microsoft', 'title' => 'Microsoft Azure AI Essentials — Professional Certificate', 'date' => 'Issued Jul 12, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-azure-ai-essentials.jpg'),
						array('source' => 'LinkedIn Learning', 'title' => 'Microsoft Azure AI Essentials: Workloads and Machine Learning on Azure', 'date' => 'Issued Jul 12, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-azure-ai-workloads-ml.jpg'),
						array('source' => 'LinkedIn Learning', 'title' => 'Professional Scrum Product Ownership: An Introduction', 'date' => 'Issued Jul 11, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-scrum-product-ownership.jpg'),
						array('source' => 'LinkedIn Learning · PMI', 'title' => 'Professional Scrum Product Ownership: An Introduction (PMI PDU)', 'date' => 'Issued Jul 11, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-scrum-product-ownership-pmi-pdu.jpg'),
						array('source' => 'Google Cloud', 'title' => 'Gemini for Data Scientists and Analysts — Completion Badge', 'date' => 'Issued Jul 11, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-gemini-data-scientists-analysts.jpg'),
						array('source' => 'Google Cloud', 'title' => 'Responsible AI: Applying AI Principles with Google Cloud', 'date' => 'Issued Jul 7, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-responsible-ai-google-cloud.jpg'),
						array('source' => 'LinkedIn Learning', 'title' => 'Databricks for Data Analysts', 'date' => 'Issued Jun 16, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-databricks-data-analysts.jpg'),
						array('source' => 'LinkedIn Learning', 'title' => 'Microsoft Azure Synapse for Developers', 'date' => 'Issued Jun 12, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-azure-synapse-developers.jpg'),
						array('source' => 'micro1', 'title' => 'Certified — Data Analyst Manager (AI Interview)', 'date' => 'Issued May 24, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-data-analyst-manager-ai-interview.jpg'),
						array('source' => 'Coursera', 'title' => 'Business Analysis &amp; Process Management — Project Certificate', 'date' => 'Issued May 8, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-business-analysis-process-management.jpg'),
						array('source' => 'Coursera', 'title' => 'Introduction to Data Analysis using Microsoft Excel', 'date' => 'Issued May 8, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-excel-data-analysis.jpg'),
						array('source' => 'Pro5.ai', 'title' => 'Top 5% Professional — AI Interview: Deputy General Manager, Growth &amp; Market Intelligence, Data Science &amp; Engineering', 'date' => 'Issued April 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-top-5-percent-professional-pro5.jpg'),
						array('source' => 'Certificate of Achievement', 'title' => '2026 Your Role: Internet Security and You', 'date' => 'Issued Feb 22, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-internet-security-and-you.jpg'),
						array('source' => 'Anthropic · GivingTuesday', 'title' => 'AI Fluency for Nonprofits', 'date' => '', 'image' => get_template_directory_uri() . '/images/team/certs/cert-ai-fluency-nonprofits.jpg'),
						array('source' => 'Anthropic', 'title' => 'Claude Code 101', 'date' => '', 'image' => get_template_directory_uri() . '/images/team/certs/cert-claude-code-101.jpg'),
						array('source' => 'Anthropic', 'title' => 'Claude 101', 'date' => '', 'image' => get_template_directory_uri() . '/images/team/certs/cert-claude-101.jpg'),
						array('source' => 'Certificate of Achievement', 'title' => 'Security Awareness Foundations (SAF)', 'date' => 'Issued Sep 11, 2025', 'image' => get_template_directory_uri() . '/images/team/certs/cert-security-awareness-foundations.jpg'),
						array('source' => 'Certificate of Achievement', 'title' => '2025 Social Engineering Red Flags', 'date' => 'Issued May 6, 2025', 'image' => get_template_directory_uri() . '/images/team/certs/cert-social-engineering-red-flags.jpg'),
						array('source' => 'Certificate of Achievement', 'title' => 'Anti-Phishing Essentials', 'date' => 'Issued Jul 3, 2023', 'image' => get_template_directory_uri() . '/images/team/certs/cert-anti-phishing-essentials.jpg'),
					),
					'recommendations' => array(
						array('name' => 'Tony Garcia', 'title' => 'Director of IT Delivery at SouthEast Toyota Finance', 'relationship' => 'Tony managed Rayhan Ahmed directly', 'quote' => 'I had the opportunity to work closely with Rayhan for the better part of five years at Dominion DMS, where he served as Team Lead for the Data Development group. During that time, Rayhan played a critical role in leading many of the DMS conversion processes, implementations, and complex data mappings that were essential to successful client onboarding. Rayhan consistently demonstrated exceptional leadership and accountability. He led a highly dedicated team that often worked tirelessly — many times overnight — to ensure implementations were delivered on time and met the highest quality standards. His ability to manage complex data challenges while maintaining focus on delivery is truly impressive. What stands out most about Rayhan is his unwavering commitment and professionalism. His work ethic, attention to detail, and positive attitude made him a pleasure to collaborate with, even under demanding timelines. He brings both technical depth and strong leadership, making him an invaluable asset to any organization. I highly recommend Rayhan for any role that requires expertise in data development, leadership, and a strong commitment to delivering results.'),
						array('name' => 'Alexander', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Alexander worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan is an excellent Data Engineer. I had the privilege of working with him, and I was consistently impressed by his strong technical expertise in SQL Server and C#. He played a key role in several data conversion projects, all of which were highly successful thanks to his skill, dedication, and attention to detail.'),
						array('name' => 'Dr Reasat', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Dr Reasat worked with Rayhan Ahmed but on different teams', 'quote' => 'Rayhan brings a rare combination of technical depth and dependability. Every project I&#x27;ve seen him touch has been delivered with care and precision.'),
						array('name' => 'Sharif Faisal', 'title' => 'Sr. QA Engineer at Skiff Technologies', 'relationship' => 'Sharif Faisal reported to Rayhan Ahmed directly', 'quote' => 'Rayhan is a supportive and knowledgeable leader who always makes time to unblock the team, while holding a high bar for data quality.'),
						array('name' => 'Arifur', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Arifur was senior to Rayhan Ahmed but didn&#x27;t manage Rayhan Ahmed directly', 'quote' => 'A dependable engineer with strong command over complex ETL work — Rayhan is someone I&#x27;d gladly work with again.'),
						array('name' => 'Ericka', 'title' => 'Manager at Dominion DMS', 'relationship' => 'Ericka managed Rayhan Ahmed directly', 'quote' => 'Rayhan consistently exceeded expectations on delivery timelines while maintaining excellent communication with stakeholders throughout every migration.'),
						array('name' => 'Abu Syed Mohammad', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Abu Syed Mohammad reported to Rayhan Ahmed directly', 'quote' => 'Rayhan is patient, technically sharp, and genuinely invested in helping his team grow their skills.'),
						array('name' => 'Missba Banu', 'title' => 'Sr. Data Analyst at Skiff Technologies', 'relationship' => 'Missba worked with Rayhan Ahmed on the same team', 'quote' => 'I had the privilege of working under Rayhan&#x27;s leadership and have has been exceptional leadership and communication skills. He has a unique ability to handle multiple tasks while maintaining high-quality work and met dealines. Any organization would be lucky to have such a dedicated and effective leader.'),
						array('name' => 'Md. Abdur Rahman Rony', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Md. Abdur Rahman Rony reported to Rayhan Ahmed directly', 'quote' => 'Rayhan&#x27;s guidance was instrumental in my growth as a data engineer — clear expectations, honest feedback, and always available when it mattered.'),
						array('name' => 'Tasnur Rahman', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Tasnur Rahman worked with Rayhan Ahmed on the same team', 'quote' => 'A steady hand under pressure — Rayhan kept our migration workstreams on track through some genuinely difficult conversions.'),
						array('name' => 'Russell', 'title' => 'Manager at Dominion DMS', 'relationship' => 'Russell managed Rayhan Ahmed directly', 'quote' => 'Rayhan consistently demonstrates high-level technical expertise and delivers quality work across every project. He collaborates effectively with teams, manages deadlines with ease, and supports others by providing clear guidance and development opportunities. At Dominion DMS, he showcased strong skills in Azure Data Factory, SQL, C#, Python, and all aspects of ETL processes.'),
						array('name' => 'Asif Islam', 'title' => 'Lead Data Analyst at Skiff Technologies', 'relationship' => 'Asif worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan is one of the most reliable engineers I&#x27;ve worked alongside — deep SQL and ETL expertise paired with genuine team-first collaboration.'),
						array('name' => 'Paul', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Paul was senior to Rayhan Ahmed but didn&#x27;t manage Rayhan Ahmed directly', 'quote' => 'Rayhan&#x27;s attention to detail on data mapping work saved us from several potential production issues during migration.'),
						array('name' => 'Farhana Zaman', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Farhana Zaman worked with Rayhan Ahmed on the same team', 'quote' => 'Always willing to jump in and help troubleshoot, Rayhan brings both technical rigor and a genuinely collaborative attitude.'),
						array('name' => 'Khaza Moinuddin', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Khaza Moinuddin worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan&#x27;s leadership on our conversion sprints kept the whole team aligned and confident, even against tight deadlines.'),
						array('name' => 'Nazmul', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Nazmul worked with Rayhan Ahmed on the same team', 'quote' => 'A genuinely strong technical lead — clear communicator, thorough reviewer, and always fair with feedback.'),
						array('name' => 'Mohammad', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Mohammad worked with Rayhan Ahmed on the same team', 'quote' => 'Rayhan brings deep ETL and SQL Server expertise to every engagement, and it shows in the quality of the deliverables.'),
						array('name' => 'Mohammad', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Mohammad worked with Rayhan Ahmed on the same team', 'quote' => 'I&#x27;ve seen Rayhan handle some of our most complex data conversions without missing a beat — highly recommended.'),
						array('name' => 'Farhat Nizam', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Farhat Nizam worked with Rayhan Ahmed on the same team', 'quote' => 'I highly recommend Rayhan for his exceptional data analysis and technical skills. He has a talent for turning complex data into clear insights. Riaihan is a great team player, always willing to help others and share his knowledge. His analytical mindset and attention to detail make him a valuable asset to any team.'),
						array('name' => 'Md. Nazmul', 'title' => 'Colleague at Dominion DMS', 'relationship' => 'Md. Nazmul worked with Rayhan Ahmed on the same team', 'quote' => 'I have enjoyed working with Rayjan Ahmed Sajib for the last 8 years. Our teams worked closely together to help build out the company&#x27;s project management process. I found him to be hard-working, bright, and a skilled communicator. I particularly enjoyed his sense of humor in the face of what can sometimes be a stressful situation when faced with tight deadlines. But what makes him stand out is his willingness to help others. I am glad to have worked with him and have no hesitation recommending him to potential employers.'),
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
						array('2022 — Present', 'SKIFF Technologies', 'Leading local and outsourced development teams in data engineering, Azure ETL development, and complex C# application architecture.'),
						array('2020 — 2026', 'Dominion DMS (USA · Remote)', 'Technical Lead for data conversion projects, managing sprint planning, Azure functions, and complex data comparisons for US clients.'),
						array('2015 — 2020', 'e-World Ltd', 'Head of Technical Operations, managing infrastructure planning, IIS administration, and mVAS product development for major telecom operators.'),
						array('2007 — 2015', 'VU Mobile', 'Led full-scale telecom platform migrations (Robi–Huawei SDP) and developed SMS/charging gateways for all major Bangladeshi operators.'),
					),
					'education' => array(
						array('Masters in Computer Science', 'University of South Asia'),
						array('B.Sc. in CSE', 'The University of Asia Pacific'),
					),
					'skills'    => array('Technical Leadership', 'Cloud Engineering', 'Database Administration', 'Software Development', 'Agile Planning'),
					'languages' => array(
						array('C# / .NET', 100, 'Expert'),
						array('SQL', 100, 'Expert'),
						array('JavaScript / jQuery', 62, 'Intermediate'),
						array('Python', 62, 'Intermediate'),
						array('HTML5', 62, 'Intermediate'),
						array('CSS3', 62, 'Intermediate'),
						array('Java', 62, 'Intermediate'),
						array('PowerShell', 62, 'Intermediate'),
					),
					'certifications' => array(
						array('source' => 'HackerRank', 'title' => 'SQL (Basic) — Certificate of Accomplishment', 'date' => 'Issued Aug 4, 2023', 'image' => get_template_directory_uri() . '/images/team/certs/cert-asif-sql-basic-hackerrank.jpg'),
					),
					'recommendations' => array(
						array('name' => 'Md. Abdur Rahman Rony, PMP®, ACMP', 'title' => 'Fintech · Project Management · Business Analysis · Data Analysis', 'relationship' => 'Md. Abdur Rahman Rony reported to Asif directly', 'quote' => 'I had the opportunity to work closely with Asif Islam and can confidently say he is a highly skilled and dependable technology professional. His expertise in data engineering, particularly in Azure Data Factory (ADF), ETL processes, and .NET development, consistently delivers high-quality and scalable solutions. Asif stands out for his strong leadership and project management abilities. He effectively leads teams, ensures smooth collaboration, and maintains a clear focus on delivering results within deadlines. His attention to detail and deep understanding of data workflows make him a valuable asset in any data-driven environment.'),
						array('name' => 'Doly Akter', 'title' => 'Data Engineer · Data Analyst · Cloud Pipelines · BI Developer', 'relationship' => 'Asif was senior to Doly but didn&#x27;t manage Doly directly', 'quote' => 'Asif Islam is a very smart working, organised team lead and very sincere and honest employee. I had an opportunity to work with him as a team member. As an active team lead, he has the proven ability to lead teams and deliver scalable, relaiable data solutions. Strongly experts in ADF ETL work flows along with SSIS and Net. Has a tremendous team leadership skill to manage and collaborative the team mates. Dedicated to fulfill his duties and responsibilities on time. He is very dynamic in his working area. I think the best about him is the fact that he is a good soul and active team lead. He carries outstanding professional soft skill attires which bear him from being his best as a fellow human being. I wish his success in his upcoming carrer ahead.'),
						array('name' => 'Rayhan Ahmed Sajib', 'title' => 'Data Analyst Manager · Data Engineering Manager · 16+ Years', 'relationship' => 'Rayhan Ahmed worked with Asif on the same team', 'quote' => 'I had the opportunity to work with Asif Islam, and I can confidently say he is a highly dedicated and dependable professional. Asif is an excellent ETL developer with strong delivery execution capabilities. He has a deep understanding of business requirements and architectural challenges, and consistently contributes to identifying and implementing effective solutions. He is hardworking, focused, and remains calm under pressure — especially during critical deadlines. He is also a trustworthy team player who takes full ownership of his responsibilities. Known for his relentless work ethic, he is often recognized as someone who goes above and beyond to ensure successful delivery. I highly recommend Asif Islam for any role that demands commitment, technical expertise, and accountability.'),
						array('name' => 'Ericka Solis', 'title' => 'DBA Team Lead (Dominion DMS)', 'relationship' => 'Ericka managed Asif directly', 'quote' => 'While working with Asif at Dominion DMS, he consistently stood out as one of the most hard-working individuals on the team, always willing to step in, take ownership, and help ensure projects were completed on time. He demonstrates strong technical expertise in Azure SQL, writing SQL stored procedures, ETL development using both SSIS and Azure Data Factory, and version control through Azure DevOps. He also brings valuable experience in process documentation using Confluence and SharePoint, as well as creating custom batch scripts. Asif is known for being a true team player, collaborating closely with colleagues, asking the right questions to resolve data issues, and developing code that aligns with business requirements. He maintains professionalism at all times and is highly respected by his peers. He embraces challenges and is committed to delivering work with strong data quality and reliability. I highly recommend Asif to any company seeking a dedicated, proactive, and results-driven data analyst who takes pride in delivering successful outcomes.'),
						array('name' => 'Russell Gibson', 'title' => 'Senior Data Engineer · Azure Data Factory · SQL/T-SQL · ETL/ELT', 'relationship' => 'Russell managed Asif directly', 'quote' => 'Asif brings strong expertise in ETL processes and consistently delivers high-quality work. He demonstrated solid skills in Azure Data Factory, SSIS, SQL, and C#, and successfully led the execution of DMS ETL processes for 100+ dealers. It was a pleasure working with him.'),
						array('name' => 'Paul Whipps, LSSBB', 'title' => 'Vice President of Technology', 'relationship' => 'Paul managed Asif directly', 'quote' => 'I worked in the same division as Asif for around 3 years. I knew Asif to be a very hard worker who was deeply knowledgeable in the area of data conversions for automotive DMS software. I have seen Asif provide guidance to his peers on numerous occasions to help distribute the knowledge that he&#x27;s developed over the years. I really enjoyed working with Asif and would recommend him for any data conversion projects.'),
						array('name' => 'Tony Garcia', 'title' => 'Director of IT Delivery at SouthEast Toyota Finance', 'relationship' => 'Tony managed Asif directly', 'quote' => 'I highly recommend Asif as an exceptional data developer and a natural leader. He consistently demonstrates a strong ability to take ownership of challenges and see them through to completion with efficiency and precision. Asif is truly a &quot;get-it-done&quot; professional; someone who thrives in fast-paced, high-pressure environments without compromising on quality. His technical expertise, combined with his problem-solving mindset, allows him to deliver results reliably and effectively. Beyond his skills, Asif is a genuine pleasure to work with. He brings a positive attitude, dedication, and a collaborative spirit to every project. His ability to lead by example and maintain high performance under pressure makes him a valuable asset to any team. I would not hesitate to work with Asif again and strongly recommend him for any role that demands excellence, leadership, and execution.'),
						array('name' => 'M. Shukarno bin Shareef', 'title' => 'Japanese Car Navigation and Parts Expert', 'relationship' => 'M. Shukarno bin reported to Asif directly', 'quote' => 'I have had the opportunity to observe Asif bhai&#x27;s professional skills as well as interpersonal style. He is consistently pleasant, and takes on all assignments with enthusiasm and dedication. I wish that all my co-workers follow his pathway.'),
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
					'bio'  => array(
						'<b>Senior Backend Engineer with 15+ years of experience designing enterprise applications, database systems, and business automation solutions.</b>',
						'Strong expertise in SQL Server, T-SQL optimization, ASP.NET Core APIs, data migration, and enterprise application architecture.',
						'Currently specializing in Python backend development and AI-powered automation using FastAPI, LLMs, and AI Agents.',
					),
					'jobs' => array(
						array('2021 — Present', 'Sr. SQL Data Analyst · Dominion DMS', 'Working with SQL Server to analyze data, build queries, and develop automation tools using C# and Python for reporting and decision support.'),
						array('2011 — 2021', 'Sr. IT Executive (Software Developer) · KDS Accessories', 'Developed enterprise applications and web systems using ASP.NET and SQL Server, including reporting and business management solutions.'),
					),
					'education' => array(
						array('B.Sc. (Hons) in CSE', 'International Islamic University Chittagong'),
					),
					'skills'    => array('Database Administration', 'Data Analysis', 'Backend Development', 'Report Development', 'Web Development'),
					'languages' => array(
						array('SQL', 100, 'Expert'),
						array('C#', 82, 'Advanced'),
						array('HTML5', 82, 'Advanced'),
						array('CSS3', 82, 'Advanced'),
						array('VB.NET', 82, 'Advanced'),
						array('JavaScript', 62, 'Intermediate'),
						array('Python', 62, 'Intermediate'),
					),
					'certifications' => array(
						array('source' => 'HackerRank', 'title' => 'SQL (Intermediate) — Certificate of Accomplishment', 'date' => 'Issued May 8, 2022', 'image' => get_template_directory_uri() . '/images/team/certs/cert-moktadir-sql-intermediate-hackerrank.jpg'),
						array('source' => 'HackerRank', 'title' => 'SQL (Basic) — Certificate of Accomplishment', 'date' => 'Issued Sep 15, 2020', 'image' => get_template_directory_uri() . '/images/team/certs/cert-moktadir-sql-basic-hackerrank.jpg'),
					),
					'recommendations' => array(
						array('name' => 'Paul Whipps, LSSBB', 'title' => 'Vice President of Technology', 'relationship' => 'Paul was senior to Mohammad but didn&#x27;t manage Mohammad directly', 'quote' => 'In my interactions with Mohammad Moktadir, I was impressed by their dedication and professionalism. I appreciated Moktadir&#x27;s work and proactive updates on data conversions within his team. He displayed great attention to detail and a strong work ethic. Mohammad is a reliable, knowledgeable, and easy to work with. I am confident that they will be an asset to any team.'),
						array('name' => 'Tony Garcia', 'title' => 'Director of IT Delivery at SouthEast Toyota Finance', 'relationship' => 'Tony was senior to Mohammad but didn&#x27;t manage Mohammad directly', 'quote' => 'I had the pleasure of working with Mohammad during my tenure at Dominion DMS, where he served as a Database Developer. Mohammad was a critical resource in dealership data conversions, handling complex mappings and addressing data-related issues in real time with precision and efficiency. What truly sets Mohammad apart is his unwavering commitment to delivery. He consistently rose to the challenge in high-pressure situations, ensuring that data migrations and implementations were completed accurately and on time. His ability to troubleshoot issues quickly while maintaining a strong focus on quality made a significant impact on project success. In addition to his technical expertise, Mohammad is a reliable and dedicated professional who approaches his work with a strong sense of ownership. He is truly an excellent developer to have on any team, and I highly recommend him for any role requiring data expertise, problem-solving, and commitment to results.'),
						array('name' => 'Rayhan Ahmed Sajib', 'title' => 'Data Analyst Manager · Data Engineering Manager · 16+ Years', 'relationship' => 'Rayhan Ahmed managed Mohammad directly', 'quote' => 'Very efficient data analyst. Holds very good knowledge in PL/SQL and .Net programming. Honest, kind and helpful team member.'),
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
					'exp2' => '18+ years experience',
					'bio'  => array(
						'<b>Muhammad Abdur Rahman is a dedicated, meticulous team player with more than eighteen (18) years of experience in project management, team coordination, decision making, customer and stakeholder communication, and documentation related to project management — alongside writing code, testing, and support for software applications across different programming languages.</b>',
						'He brings nine (9) years of intense experience in project management, backed by professional certification as a PMP (Project Management Professional) from PMI and an ACMP (Advanced Certificate of Management Professional) from IBA — University of Dhaka. He has extensive exposure in database systems and analytical techniques, transforming complex, multi-source datasets into structured, high-quality data for reporting and business operations.',
					),
					'jobs' => array(
						array('2021 — Present', 'Sr. Data Analyst · Skiff Technologies (Dominion Dealer Solutions)', 'Designing and maintaining scalable ETL pipelines using SSIS and Azure Data Factory to process millions of records for the US automotive domain.'),
						array('2019 — 2021', 'Sr. Principal Officer · United Finance Ltd', 'Led the end-to-end implementation of Core Banking Solutions (CBS), including GAP analysis, stakeholder management, and business requirement documentation.'),
						array('2009 — 2019', 'Project Coordinator (Sr. Analyst Programmer) · Souttech Ltd', 'Coordinated large-scale financial software projects for BRAC while developing system functionalities using VB.NET and managing the full SDLC.'),
					),
					'education' => array(
						array('Master of Information Technology (M.IT)', 'Institute of Information Technology, Jahangirnagar University'),
						array('B.Sc. (Hons) in CSE', 'Asian University of Bangladesh'),
					),
					'skills'    => array('Strategic Project Management', 'Data Engineering', 'Fintech &amp; Domain Expertise', 'Data Analytics'),
					'languages' => array(
						array('C# / .NET', 100, 'Expert'),
						array('SQL', 100, 'Expert'),
						array('VB.NET', 82, 'Advanced'),
						array('JavaScript', 38, 'Basic'),
					),
					'certifications' => array(
						array('source' => 'DCCI Business Institute (DBI) &amp; Daffodil International University (DIU)', 'title' => 'Financial Technology (FIN-TECH)', 'date' => 'Issued Dec 2021'),
						array('source' => 'Project Management Institute', 'title' => 'Project Management Professional (PMP)', 'date' => 'Issued Dec 2021'),
						array('source' => 'Institute of Business Administration, University of Dhaka', 'title' => 'Advanced Certificate For Management Professionals (ACMP)', 'date' => 'Issued Apr 2018 · Credential ID 10845'),
						array('source' => 'Cisco', 'title' => 'CISCO Certified Network Associate (CCNA)', 'date' => 'Issued Dec 2005 · Expired Dec 2007 · Credential ID CSCO11004732'),
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
					'bio'  => array(
						'<b>Senior Data Engineer with 17+ years of experience in software and data systems, focused on ETL pipelines, data consolidation, reporting systems, and large-scale data migration.</b>',
					),
					'jobs' => array(
						array('2021 — Present', 'Sr. Data Engineer · Dominion DMS (USA · Remote) / Skiff Technologies', 'Designing and maintaining complex ETL pipelines using SSIS and Azure Data Factory to process millions of records while achieving 30–40% performance improvement through advanced SQL tuning and indexing strategies.'),
						array('2020 — 2021', 'Data Analyst · Bitopi Group', 'Developed structured reporting workflows for manufacturing (RMG) operations, reducing manual reporting effort by 40–50% and improving data accuracy through automated validation rules.'),
						array('2009 — 2019', 'Sr. Analyst Programmer · Southtech Group', 'Engineered high-volume financial data consolidation pipelines and MIS reporting systems for BRAC Microfinance, managing large-scale transactional datasets (1TB+) and ensuring data integrity across distributed environments.'),
					),
					'education' => array(
						array('Master of Information Technology (MIT)', 'Jahangirnagar University'),
						array('Post Graduate Diploma in IT (PGD-IT)', 'Jahangirnagar University'),
						array('BSS in Archaeology', 'Jahangirnagar University'),
					),
					'skills'    => array('Advanced ETL/ELT Pipeline Engineering', 'SQL Server &amp; Database Optimization', 'Data Migration &amp; Platform Integration', 'Operational Reliability &amp; Support', 'Strategic Data Analysis &amp; Reporting'),
					'languages' => array(
						array('SQL (T-SQL)', 100, 'Expert'),
						array('C# / .NET', 62, 'Intermediate'),
						array('PHP', 62, 'Intermediate'),
						array('Python', 38, 'Basic'),
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
					'bio'  => array(
						'<b>Organized, reliable, and data-driven data analyst and engineer with over 7 years of experience transforming complex datasets into clear, actionable insights, building dashboards, reports, and ADF pipelines, and validating data accuracy.</b>',
						'Skilled in Power BI, SQL Server, SSIS, Azure tools, and Python, with a strong background in data warehousing, DAX, and query optimization. Committed to turning complex data findings into actionable strategies that drive organizational success.',
					),
					'jobs' => array(
						array('2023 — Present', 'SKIFF Technologies', 'Designing ETL workflows and ADF pipelines while managing data health reporting and automated testing for DMS sources.'),
						array('2022 — 2023', 'Brain Station 23', 'Managed large-scale data migration projects and resolved complex data discrepancies using SQL and SSIS.'),
						array('2018 — 2022', 'Union Group', 'Developed real-time sales forecasts and data warehouse architectures (Star/Snowflake) using Python, SQL, and Power BI.'),
					),
					'education' => array(
						array('M.Sc. in CSE', 'United International University (UIU)'),
						array('B.Sc. in CSE', 'United International University (UIU)'),
					),
					'skills'    => array('Data Visualization', 'ETL Engineering', 'SQL Mastery', 'Data Warehousing', 'Statistical Analysis'),
					'languages' => array(
						array('DAX', 100, 'Expert'),
						array('SQL', 100, 'Expert'),
						array('JavaScript', 62, 'Intermediate'),
						array('Python', 62, 'Intermediate'),
						array('HTML5', 38, 'Basic'),
						array('CSS3', 38, 'Basic'),
					),
					'certifications' => array(
						array('source' => 'CognitiveClass.ai · IBM', 'title' => 'Data Analysis with Python (DA0101EN)', 'date' => 'Issued Nov 16, 2020', 'image' => get_template_directory_uri() . '/images/team/certs/cert-missba-data-analysis-python-ibm.jpg'),
						array('source' => 'CognitiveClass.ai · IBM', 'title' => 'Python 101 for Data Science (PY0101EN)', 'date' => 'Issued Nov 9, 2020', 'image' => get_template_directory_uri() . '/images/team/certs/cert-missba-python-101-data-science-ibm.jpg'),
					),
					'recommendations' => array(
						array('name' => 'Rifat Jahan Azad', 'title' => 'Leading Technology Innovations', 'relationship' => 'Rifat Jahan managed Missba directly', 'quote' => 'I have worked with Missba for a brief amount of time, but during this time I found her calm, collected, and focused on her goals. She is visionary and very much concerned about clients&#x27; well-being. Her dedication amazed us. We hope for the best for her in the coming days.'),
						array('name' => 'Doly Akter', 'title' => 'Data Engineer · Data Analyst · Cloud Pipelines · BI Developer', 'relationship' => 'Doly worked with Missba on the same team', 'quote' => 'Missba Banu is not only a fantastic Power BI specialist but also a true team player. As a data analyst, she is also proficient in SQL programming, Azure Data Factory pipelines, ETL, Python, and also knowledgeable in DAX. She consistently goes above and beyond to ensure the team has the data needed for strategic decisions. Her ability to explain complex data models in simple terms helped bridge the gap between our technical teams. She is a reliable, enthusiastic developer who brings fresh ideas to the table! Best of luck for her future endeavour. I highly recommend her for her successful IT profession.'),
						array('name' => 'Asif Islam', 'title' => 'Data Analyst · SQL Programming, DBA · Team Lead · Agile Development', 'relationship' => 'Asif managed Missba directly', 'quote' => 'I have worked with Missba Banu for 5+ years. As a teammate I found her sincere and energetic, delivering high-quality work. She brings strong expertise in data analysis, SQL Server stored procedure development, Power BI, and Python. She is a continuous learner and aligns with the latest technologies. She raised valuable points during development meetings and also discussed possible solutions. I wish her all the best for her future endeavors.'),
						array('name' => 'Russell Gibson', 'title' => 'Senior Data Engineer · Azure Data Factory · SQL/T-SQL · ETL/ELT', 'relationship' => 'Russell managed Missba directly', 'quote' => 'Missba was a strong addition to the conversion team at Dominion DMS. She demonstrated solid knowledge of SQL and ETL processes and consistently delivered her workloads on time. I truly enjoyed working with Missba and appreciated her reliability and professionalism.'),
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
					'bio'  => array(
						'<b>Data Engineer and Business Intelligence Analyst with 4+ years of experience developing automated and scalable solutions. Skilled in SQL, ETL, and cloud-based pipelines with Azure. Proficient in creating Power BI dashboards and handling large datasets. She considers herself a technology and learning enthusiast — there have never been excuses when learning something new, and she&#x27;s especially interested in working and learning more about data engineering with Microsoft on the cloud.</b>',
						'Proficient in analyzing, designing, developing, and implementing changes to existing SSRS reports, Power BI applications, ETL processes, data marts, and data models.',
					),
					'jobs' => array(
						array('2022 — Present', 'Skiff Technologies (Dominion DMS)', 'Designs and manages cloud-based ETL pipelines using Azure Data Factory and SQL to ensure data accuracy and reporting.'),
						array('2019 — 2022', 'Southtech Limited · Senior Programmer', 'Led financial software development using .NET, handled database design, and managed CMMI Level 5 process auditing.'),
						array('2016 — 2019', 'Southtech Limited · Junior Programmer', 'Developed web and desktop applications, wrote complex SQL queries, and performed extensive software testing and data migration.'),
					),
					'education' => array(
						array('M.Sc. in CSE', 'Jahangirnagar University'),
						array('Bachelor in CSE', 'IUBAT'),
						array('Post Graduate Diploma in ICT', 'Bangladesh Computer Council (BCC)'),
					),
					'skills'    => array('Data Engineering', 'Azure Cloud', 'SQL Optimization', 'ETL Pipelines', 'Business Intelligence'),
					'languages' => array(
						array('C#', 100, 'Expert'),
						array('SQL', 100, 'Expert'),
						array('HTML5', 100, 'Expert'),
						array('JavaScript / jQuery', 62, 'Intermediate'),
						array('Python', 62, 'Intermediate'),
						array('CSS3', 62, 'Intermediate'),
						array('Java', 62, 'Intermediate'),
						array('C / C++', 62, 'Intermediate'),
					),
					'certifications' => array(
						array('source' => 'CMMI Institute', 'title' => 'Certified Associate — CMMI V2.0', 'date' => 'Issued Jul 2019'),
					),
					'recommendations' => array(
						array('name' => 'Jose Arcos', 'title' => 'Data Engineer · Azure · Power BI · SQL · ETL · Python', 'relationship' => 'Jose worked with Doly on the same team', 'quote' => 'I had the pleasure of working with Doly at Dominion, and I can confidently say she is a highly skilled and dependable professional. She has strong technical expertise in data engineering, SQL, ETL development, and cloud technologies, and she consistently delivers high-quality work with great attention to detail. Beyond her technical skills, Doly is also collaborative, supportive, and easy to work with. She always brought a positive attitude to the team and was willing to help others whenever needed. I truly enjoyed working alongside her and would highly recommend her to any organization looking for a talented data professional.'),
						array('name' => 'Missba Banu', 'title' => 'Data Engineer · Data Analyst · BI Developer · Power BI · Python · DBT', 'relationship' => 'Missba worked with Doly but on different teams', 'quote' => 'I have had the privilege of working closely with Doly for the past three years. During this time, I found her as dedicated, and hardworking person. One of her strongest qualities is her ability to deliver projects on time without compromising quality.'),
						array('name' => 'Abu Syed Mohammad Noman', 'title' => 'Software &amp; Data Solution Specialist', 'relationship' => 'Abu Syed Mohammad worked with Doly on the same team', 'quote' => 'I have known Doly Akter professionally for over four years and have been consistently impressed by her dedication and capabilities. She has built strong technical knowledge in Azure Data Factory (ADF) ETL development, along with valuable experience in Data Analysis, SQL Server stored procedures, Power BI, and CSS. What sets Doly apart is her willingness to learn and adapt to new technologies. She continuously improves her skills and stays updated with modern tools and practices. She is also supportive, cooperative, and works well within a team environment, making her a reliable colleague to work with. Doly is someone who can be trusted to handle routine deliverables efficiently and responsibly, always maintaining quality and meeting expectations. I am confident she will continue to achieve great success in her career, and I wish her all the best for the future.'),
						array('name' => 'Asif Islam', 'title' => 'Data Analyst · SQL Programming, DBA · Team Lead · Agile Development', 'relationship' => 'Asif was senior to Doly but didn&#x27;t manage Doly directly', 'quote' => 'I have worked with Doly Akter for more than 4 years. She has gained a very good level for building ADF ETL processes. Also, she brings strong expertise in Data Analysis, SQL Server stored procedure development, Power BI, and CSS. She is a continuous learner and aligns with the latest technologies. Doly is very cooperative and a team player. For any regular task-oriented delivery, she can be trusted without any doubt. I wish her all the best for her future endeavours.'),
						array('name' => 'Md. Nazrul Islam Khan (Shohagh)', 'title' => 'Technical Project Manager · CSM® · Java · Spring Boot · SQL · Fintech', 'relationship' => 'Md. Nazrul Islam was senior to Doly but didn&#x27;t manage Doly directly', 'quote' => 'Doly is a very good team member and a very sincere and honest employee. I can definitely say that she is not only one of the most dedicated resources of our organization but also a highly technical person. She is very dynamic in her workplace. I wish her success in her career ahead.'),
					),
				),
			),
		),
	),

	array(
		'title'   => 'Product &amp; Development Operations',
		'members' => array(
			array(
				'slug'  => 'shahed',
				'name'  => 'Shahed Al Mahmud',
				'role'  => 'Senior Developer',
				'exp'   => '14+ yrs',
				'image' => 'shahed-al-mahmud.jpg',
				'modal' => array(
					'exp2' => '14+ years experience',
					'bio'  => array(
						'<b>Shahed Al Mahmud is an experienced Software Developer with a demonstrated history of working in the information technology and SaaS industry.</b>',
						'Skilled in diverse facets of back-end development, project planning, and database design and development, he specializes in converting business ideas and requirements into real, working applications — with a particular passion for software architecture, system design, and IT-based product development.',
					),
					'jobs' => array(
						array('2023 — Present', 'Senior Developer · Skiff Technologies', 'Leads back-end development and system design, translating business requirements into scalable, production-ready applications.'),
					),
					'education' => array(
						array('Bachelor of Social Science, Economics', 'East West University · 2009 – 2014'),
						array('H.S.C, Science', 'Ideal College · 2006 – 2008'),
						array('S.S.C, Science', 'Government Laboratory High School, Dhaka · 1996 – 2006'),
					),
					'skills'    => array('Backend Development', 'Software Architecture', 'System Design', 'Database Design &amp; Development', 'Project Planning'),
					'languages' => array(
						array('.NET Core', 100, 'Expert'),
						array('ASP.NET', 100, 'Expert'),
						array('Java', 82, 'Advanced'),
						array('Python', 82, 'Advanced'),
						array('C++', 62, 'Intermediate'),
						array('JavaScript', 62, 'Intermediate'),
						array('Node.js', 62, 'Intermediate'),
						array('C', 62, 'Intermediate'),
						array('SQL', 62, 'Intermediate'),
					),
				),
			),
			array(
				'slug'  => 'muhibullah',
				'name'  => 'Muhibullah Khandaker',
				'role'  => 'Front-End Software Developer',
				'exp'   => '15+ yrs',
				'image' => 'muhibullah-khandaker.jpg',
				'modal' => array(
					'exp2' => '15+ years experience',
					'bio'  => array(
						'<b>Muhibullah Khandaker is a Front-End Software Developer with a genuine passion for technology, known for taking on any task in front of him and pushing for improvement in every project he touches.</b>',
						'A skilled programmer with several years of experience in software development, he finds particular satisfaction in developing solutions to the most difficult front-end challenges — turning complex requirements into clean, working interfaces.',
					),
					'jobs' => array(
						array('Aug 2023 — Present', 'Front-End Software Developer · Skiff Technologies', 'Builds and maintains front-end interfaces using React.js, Next.js, and Redux.js, translating designs into responsive, production-ready user experiences.'),
					),
					'education' => array(
						array('Daffodil International University (DIU)', '2010 – 2014'),
						array('HSC, General Studies', 'Dania University College · 2007 – 2009'),
					),
					'skills'    => array('JavaScript Libraries', 'Responsive Web Design', 'User Interface Design', 'Front-End Development'),
					'languages' => array(
						array('Figma', 62, 'Intermediate'),
						array('jQuery', 82, 'Advanced'),
						array('REST APIs', 82, 'Advanced'),
						array('Chart.js', 62, 'Intermediate'),
						array('Redux.js', 100, 'Expert'),
						array('React.js', 100, 'Expert'),
						array('Next.js', 100, 'Expert'),
						array('Node.js', 82, 'Advanced'),
					),
					'certifications' => array(
						array('source' => 'Code with Mosh', 'title' => 'Certificate of Graduation — Claude Code for Professional Developers', 'date' => 'Issued Jul 27, 2026', 'image' => get_template_directory_uri() . '/images/team/certs/cert-muhibullah-claude-code-mosh.jpg'),
					),
				),
			),
			array(
				'slug'  => 'emdadul',
				'name'  => 'Md Emdadul Islam',
				'role'  => 'Software Developer',
				'exp'   => '5+ yrs',
				'image' => 'md-emdadul-islam.jpg',
				'modal' => array(
					'exp2' => '5+ years experience',
					'bio'  => array(
						'<b>Md Emdadul Islam is an ASP.NET Developer who enjoys building ASP.NET-based web applications, with specialties spanning ASP.NET MVC, ASP.NET Core, Angular, WordPress, HTML5, CSS3, and Microsoft SQL Server.</b>',
					),
					'jobs' => array(
						array('Mar 2021 — Present', 'Software Developer · Skiff Technologies', 'Develops and maintains ASP.NET-based web applications, working across MVC architecture, front-end interfaces, and SQL Server-backed data layers.'),
					),
					'education' => array(
						array('Diploma in Enterprise Systems Analysis and Design — C# .NET, Computer Programming, Specific Applications', 'IDB-BISEW · 2017 – 2018'),
						array('Bachelor of Arts (BA), Islamic Studies', 'Islamic University · 2012 – 2015'),
					),
					'skills'    => array('ASP.NET Development', 'MVC Architecture', 'Web Application Development'),
					'languages' => array(
						array('ASP.NET', 82, 'Advanced'),
						array('ASP.NET MVC', 82, 'Advanced'),
						array('AngularJS', 62, 'Intermediate'),
						array('JavaScript', 82, 'Advanced'),
						array('SQL', 82, 'Advanced'),
						array('C#', 82, 'Advanced'),
						array('Node.js', 62, 'Intermediate'),
						array('WordPress', 62, 'Intermediate'),
					),
					'certifications' => array(
						array('source' => 'Microsoft', 'title' => 'Exam 486: Developing ASP.NET MVC Web Applications', 'date' => 'Issued Dec 2018'),
					),
				),
			),
			array(
				'slug'  => 'rashu',
				'name'  => 'Rashu Nath',
				'role'  => 'Web Developer',
				'exp'   => '7+ yrs',
				'image' => 'rashu-nath.min.jpg',
				'modal' => array(
					'exp2' => '7+ years experience',
					'bio'  => array(
						'<b>Rashu Nath is a Web Developer who enjoys building real-world web applications. He\'s careful to follow programming language conventions, treats errors as opportunities to learn something new, and makes it a habit to consult official documentation whenever working with a new language or framework.</b>',
					),
					'jobs' => array(
						array('2021 — Present', 'Web Developer · Skiff Technologies', 'Builds and maintains web applications, working across front-end interfaces, WordPress sites, and MySQL-backed data layers.'),
					),
					'education' => array(
						array('Computer Science, Computer Programming', 'BGC Trust University Bangladesh · 2012 – 2016'),
						array('Secondary School Certificate, Science', 'Rotary Betagi Union High School · 1998 – 2008'),
					),
					'skills'    => array('Web Development', 'Front-End Development', 'WordPress Development', 'Database Management'),
					'languages' => array(
						array('HTML', 82, 'Advanced'),
						array('CSS', 82, 'Advanced'),
						array('PHP', 82, 'Advanced'),
						array('WordPress', 82, 'Advanced'),
						array('JavaScript', 62, 'Intermediate'),
						array('MySQL', 62, 'Intermediate'),
						array('Adobe Photoshop', 62, 'Intermediate'),
					),
					'certifications' => array(
						array('source' => 'EF', 'title' => 'EFSET EXPRESS Basic Proficiency (CEFR A1/A2)', 'date' => ''),
					),
				),
			),
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
					'bio'  => array(
						'<b>Desire to be a part of a vibrant and leading organization and create footprints as a Quality Assurance Engineer, assisting the organization in all aspects by utilizing her skills, knowledge, abilities, and experience with a balance of hands-on, management, and leadership responsibilities.</b>',
					),
					'jobs' => array(
						array('2023 — Present', 'Skiff Technologies', 'Leading QA operations for Dominion DMS (USA), focusing on Cypress automation and data comparison for VUE systems.'),
						array('2020 — 2023', 'Orion Informatics Limited', 'Lead QA Engineer managing a team of seven, implementing Cypress automation, and leading daily Scrum meetings.'),
						array('2012 — 2017', 'BRAC (ICT Department)', 'Managed QA for BRAC&rsquo;s ERP and web applications, including whitebox testing and requirement analysis.'),
					),
					'education' => array(
						array('M.Sc. in Computer Science', 'Jahangirnagar University'),
						array('B.Sc. in CSE', 'Ahsanullah University of Science &amp; Technology'),
					),
					'skills'    => array('Test Automation', 'API Testing', 'Team Leadership', 'Quality Control', 'Project Management', 'Load Testing', 'Data Validation'),
					'languages' => array(
						array('HTML5', 100, 'Expert'),
						array('CSS3', 100, 'Expert'),
						array('JavaScript', 62, 'Intermediate'),
						array('PHP', 62, 'Intermediate'),
						array('SQL', 62, 'Intermediate'),
						array('Java', 38, 'Basic'),
					),
					'recommendations' => array(
						array('name' => 'Rebecca Collins, ICP-TST', 'title' => 'Quality Assurance Manager — leading teams to ensure product quality and compliance', 'relationship' => 'Rebecca managed Shirin directly', 'quote' => 'I had the pleasure of working with Shirin Akter at Dominion DMS, where we collaborated on several key QA initiatives. She is meticulous and detail-oriented, leading various team members in best practices and processes. Shirin would be an excellent contributor to any QA department.'),
						array('name' => 'Sharif Faisal Ahmed', 'title' => 'SQA Engineer (5+ Years) · ISTQB&reg; Certified · Data Migration &amp; Regression Testing', 'relationship' => 'Sharif Faisal reported to Shirin directly', 'quote' => 'I had the pleasure of working under Shirin&#x27;s leadership, where she consistently demonstrated exceptional skill in managing QA processes. She has a natural ability to bridge communication gaps across teams, ensuring everyone is aligned and work is briefed with absolute clarity. From high-level test planning to strategic execution, her guidance was instrumental in maintaining high quality standards. She is a strong, organized leader who would be a strategic asset to any QA department.'),
						array('name' => 'Leonardo Ayala', 'title' => 'Consultor en Banco Guayaquil', 'relationship' => 'Leonardo worked with Shirin on the same team', 'quote' => 'I am pleased to recommend Shirin Akter, an exceptional Quality Assurance professional with extensive experience in the field. She is highly responsible, persistent, and consistently delivers outstanding results. Her dedication to excellence, strong analytical skills, and unwavering commitment to quality make her a valuable asset to any organization. I am confident that she will continue to excel and contribute significantly wherever she applies her expertise.'),
						array('name' => 'Russell Gibson', 'title' => 'Senior Data Engineer · Azure Data Factory · SQL/T-SQL · ETL/ELT', 'relationship' => 'Russell managed Shirin directly', 'quote' => 'Shirin makes an excellent leader in the QA division. While working with Shirin, she provided insight and resolutions for each DMS Data Conversion. While providing QA analysis for DMS Data Conversions, she was also reviewing outbound feeds to ensure SLA compliances. I believe Shirin&#x27;s analytical skills would be a benefit to any company she collaborates with.'),
						array('name' => 'Tonmoy Pramanik', 'title' => 'Senior Application Developer and Team Lead', 'relationship' => 'Tonmoy knew Shirin as a senior at university', 'quote' => 'I had the privilege of knowing Shirin Akter as my senior at university, and she has always been incredibly supportive, kind, and professional. She is not only a wonderful person but also a very skilled QA Engineer with great attention to detail and a strong understanding of software quality processes. Her dedication, positive attitude, and willingness to help others make her stand out both as a teammate and as a mentor. I truly admire her work ethic and personality — she&#x27;s someone any team would be lucky to have!'),
						array('name' => 'Hossain Md. Niaze Motaher, PMP&reg;, CSAP', 'title' => 'Systems &amp; Infrastructure Engineer · IT Project Management · Cybersecurity', 'relationship' => 'Colleague connection', 'quote' => 'The most dedicated Manager/Team lead you could ever ask for.'),
						array('name' => 'Munshi Sadman Sakib', 'title' => 'Senior Software Engineer QA, Nagad Ltd.', 'relationship' => 'Munshi reported to Shirin directly', 'quote' => 'I had the privilege of working under Shirin, who possesses an exceptional grasp of software quality assurance and a keen eye for detail. Her leadership led to a highly efficient testing process during our time collaborating on multiple projects. She skillfully orchestrated our testing efforts, ensuring comprehensive coverage and timely delivery without compromising quality. Her ability to foster a collaborative team spirit stands out. She promoted open communication and a culture of continuous improvement, boosting both morale and the overall effectiveness of the SQA team. I am confident in her expertise and leadership, making them an asset to any quality-driven project. Her dedication to maintaining the highest standards is truly commendable and will undoubtedly yield success in future endeavors.'),
						array('name' => 'Syed Mahboob Nur', 'title' => 'Project Management, Leadership, QA, Automation, Agentic Solutions, AI, DevOps', 'relationship' => 'Colleague connection', 'quote' => 'Shirin is highly experienced and skilled. She is very good at automation testing. She is very hard-working and dedicated to her work. She has great leading capability. I wish her all the best for her future.'),
						array('name' => 'MD MONZER UL HAQUE', 'title' => 'SQA, Testing, Automation', 'relationship' => 'MD Monzer Ul worked with Shirin on the same team', 'quote' => 'She is a very good colleague to work with, with a very strong technical knowledge and leadership skill.'),
						array('name' => 'Munim Hossain Siddiqui', 'title' => 'Freelancer at Upwork&trade; Global Inc.', 'relationship' => 'Munim Hossain managed Shirin directly', 'quote' => 'Good set of skills, professional and creative in her field of work. I&#x27;m recommending her as worthy of getting hired. Wishing a bright future ahead. Thanks.'),
						array('name' => 'Shouman Das', 'title' => 'Data Engineering &amp; Data Architecture · AI First · Project Lead', 'relationship' => 'Shouman managed Shirin directly', 'quote' => 'Shirin is a very much dedicated and hard-working, active QA developer, as I&#x27;ve seen at BRAC. She is completely a focused developer during project QA and testing related work, very much analytical and proactive. I wish her a successful and prosperous career in the ICT arena.'),
						array('name' => 'Mohammad Jabed Akhter', 'title' => 'CEO at Sukoon International (Thailand) Co., Ltd.', 'relationship' => 'Mohammad Jabed was senior to Shirin but didn&#x27;t manage Shirin directly', 'quote' => 'Quick learner, right attitude and aptitude, ethics for delivering assigned tasks on time.'),
						array('name' => 'Monjurul Bhuiyan', 'title' => 'Systems Administrator at US Embassy Dhaka', 'relationship' => 'Monjurul worked with Shirin on the same team', 'quote' => 'Shirin has excellent communication and interpersonal skills. She&#x27;s always up for exciting and new challenges and gets the job done under pressure as well as deadlines. She always does her job perfectly. Shirin is dedicated and yet easy to work with.'),
						array('name' => 'Md. Samnoon Mohebbo', 'title' => 'Technical Lead at biTS', 'relationship' => 'Md. Samnoon was senior to Shirin but didn&#x27;t manage Shirin directly', 'quote' => 'Shirin is an excellent QA engineer, who is very diligent, detail-oriented, and highly accountable, while she worked as QA at BRAC-ICT. She quickly learned all the assigned features with minimal guidance, became an expert in these areas, caught many hard-to-find bugs, and persistently contributed to each release. Shirin has strong written and oral communication skills. She is a great asset to any organization.'),
						array('name' => 'Md. Yeasir Arafat', 'title' => 'Staff Engineer at Samsung R&amp;D Institute Bangladesh', 'relationship' => 'Md. Yeasir and Shirin studied together', 'quote' => 'Nice guys....'),
						array('name' => 'Tariqul Islam Sarker', 'title' => 'Head of Operations, TAJ ADL · Import-Export · Dubai, UAE', 'relationship' => 'Tariqul was Shirin&#x27;s mentor', 'quote' => 'I worked with Shirin. She is very polite, honest, a hard worker, and a responsible person. Wish her every success in her future endeavors.'),
						array('name' => 'Md Ashif uz zaman', 'title' => 'White Hat SEO · Off Page SEO Expert · Quality Link Builder', 'relationship' => 'Md Ashif uz was Shirin&#x27;s teacher', 'quote' => 'Shirin is a good student.'),
						array('name' => 'Arman Sadat Hossain', 'title' => 'Regional Manager, Dhaka at Rahimafrooz Renewable Energy Ltd. (RREL)', 'relationship' => 'Arman and Shirin studied together', 'quote' => 'At school I was always envious of Shirin because she is the most intelligent girl among us. She is talented, dynamic, creative, friendly, and helpful. I wish she&#x27;d achieve success in every part of her life. Good luck, Shirin!'),
						array('name' => 'Syed Abidur Rahman', 'title' => 'Software Architect · E-Ticketing · Health Tech · Delivery Tech · Tech Lead @Shohoz', 'relationship' => 'Syed Abidur and Shirin studied together', 'quote' => 'Shirin is one of our best friends from AUST. We miss her very much. May Allah bless her, always!'),
						array('name' => 'Syed Mahboob Nur', 'title' => 'Project Management, Leadership, QA, Automation, Agentic Solutions, AI, DevOps', 'relationship' => 'Syed Mahboob worked with Shirin at different companies', 'quote' => 'Shirin is very hardworking. If she understands anything, she gives her best effort on it. She is polite and friendly. I wish her all the best.'),
						array('name' => 'MD ASEF JAMAL', 'title' => 'Fractional CTO &amp; Technical Consultant · Full-Stack &amp; Cloud Architect', 'relationship' => 'MD ASEF and Shirin studied together', 'quote' => 'She is one of my favorite classmates. She is a nice person, modest, generous, and respected.'),
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
					'exp2' => '5+ years experience',
					'bio'  => array(
						'<b>Sharif Faisal Ahmed ensures software releases don&#x27;t break in production. With 5+ years of experience in Software Quality Assurance, he specializes in regression-heavy systems, data migration validation, and backend verification using SQL.</b>',
						'He has worked across Healthcare, Vehicle Dealer Management Systems (VUE DMS), and PropTech platforms, supporting high-frequency releases and global teams.',
						'He is an ISTQB-certified QA professional with strong experience in Agile environments, focused on clear defect communication and maintaining production stability.',
					),
					'jobs_shown' => 2,
					'jobs'  => array(
						array('2026 — Present', 'Sr. QA Engineer · Skiff Technologies (Dominion DMS)', 'Leads release validation across canary and production environments, providing the final risk assessment and functional sign-off required for stable deployments.'),
						array('2023 — 2026', 'QA Engineer · Skiff Technologies (Dominion DMS)', 'Improved data integrity by ~60% through a systematic approach of side-by-side UI and SQL validation during high-stakes system migrations.'),
						array('2023 — 2024', 'QA Engineer (Part-Time) · Faz Studio', 'Validated third-party integrations and role-based access security, ensuring design-to-code accuracy by comparing UI components against Figma and Storybook references.'),
						array('2022 — 2023', 'QA Engineer · ReliSource', 'Ensured consistent feature quality in Agile cycles by designing detailed test cases and executing comprehensive sanity and regression suites to maintain stability across frequent releases.'),
						array('2021 — 2022', 'Associate QA &amp; Support Engineer · Codemen Solutions Ltd.', 'Managed the full defect lifecycle for web modules and API integrations while bridging the gap between technical testing and user-facing documentation.'),
						array('2021', 'QA &amp; Support Intern · Codemen Solutions Ltd.', 'Supported early defect detection through exploratory testing and clear bug reporting, helping the team catch functional gaps before they reached later stages of development.'),
					),
					'education' => array(
						array('B.Sc. in CSE', 'University of Asia Pacific · Dhaka, Bangladesh'),
					),
					'skills'    => array('Shift-Left Agile Testing', 'Data &amp; Backend Validation', 'Test Strategy &amp; Planning', 'API &amp; Integration Testing', 'Test Automation', 'Defect Lifecycle Management', 'Quality Integrity Leadership'),
					'languages' => array(
						array('Jira', 100, 'Expert'),
						array('Azure DevOps', 100, 'Expert'),
						array('HTML5', 100, 'Expert'),
						array('CSS3', 100, 'Expert'),
						array('Postman', 82, 'Advanced'),
						array('TypeScript', 62, 'Intermediate'),
						array('Cypress', 62, 'Intermediate'),
						array('SQL', 62, 'Intermediate'),
						array('Selenium', 38, 'Basic'),
						array('Java', 38, 'Basic'),
					),
					'certifications' => array(
						array('source' => 'IBM', 'title' => 'Project Management Fundamentals', 'date' => 'Issued Mar 2025'),
						array('source' => 'ISTQB&reg; — International Software Testing Qualifications Board', 'title' => 'Certified Tester Foundation Level (CTFL)', 'date' => 'Issued Jan 2022'),
					),
					'recommendations' => array(
						array('name' => 'Shirin Akter', 'title' => 'Lead SQA Engineer · Manual &amp; Automation Testing · API Testing · Load Testing · SQL · Cypress', 'relationship' => 'Shirin managed Sharif Faisal directly', 'quote' => 'Sharif Faisal is a competent SQA and very reliable in any tasks. He is a talented SQA engineer. He is very hardworking and passionate about his work. He knows how to take responsibility for each task and complete within the time frame. He has extensive knowledge of SQA processes. I wish him all the best in his future.'),
						array('name' => 'Paul Whipps, LSSBB', 'title' => 'Vice President of Technology', 'relationship' => 'Paul was senior to Sharif Faisal but didn&#x27;t manage Sharif Faisal directly', 'quote' => 'I had the pleasure of working on the same team as Sharif for a little over a year at Dominion DMS. As a QA Analyst, Sharif was instrumental in our regular deployment testing that ensured the quality of our product. They are meticulous and detail oriented, often catching complex defects that others missed. What sets Sharif apart was their extremely helpful communication that highlighted user impacts to help triage impacts and resolve issues quickly. I believe that Sharif would be an invaluable asset to any QA team.'),
						array('name' => 'Ericka Solis', 'title' => 'DBA Team Lead (Dominion DMS)', 'relationship' => 'Ericka managed Sharif Faisal directly', 'quote' => 'I&#x27;ve had the opportunity to work with Sharif and saw firsthand how dedicated he was to thoroughly testing the DMS system. He has experience developing test plans using Azure DevOps that helped identify data anomalies and unexpected system behavior early in the process. He also documented and shared his test cases with the team, ensuring that high priority issues were clearly understood, properly validated, and addressed to maintain strong data accuracy and quality. Sharif was always proactive and ready to support the team, whether it was testing new development work, validating results, or identifying areas of concern that needed attention. He is an approachable and caring professional who takes pride in ensuring the product is tested thoroughly. His peers respect him and appreciate the support he provides during testing cycles. It was a pleasure working with him and getting to know him.'),
						array('name' => 'Asif Islam', 'title' => 'Data Analyst · SQL Programming, DBA · Team Lead · Agile Development', 'relationship' => 'Asif was senior to Sharif Faisal but didn&#x27;t manage Sharif Faisal directly', 'quote' => 'I had the pleasure of working with Sharif Faisal Ahmed around 3 years. I can confidently say he is a highly dedicated and results-driven professional. He consistently demonstrates strong analytical thinking, attention to detail, and a proactive approach to problem-solving. During our work experience Sharif compared several data conversions between one DMS and another DMS. His critical findings were very helpful to find and resolve issues in data mapping and conversion. He has performed daily regression testing for the continuous updates the team has done, ensuring client satisfaction for live software. Sharif has an excellent ability to understand complex requirements and test quality for any software. His technical expertise, combined with his collaborative mindset, makes him a great team member in any organization. I highly recommend Sharif for any role that needs modern QA approaches and deep analysis.'),
						array('name' => 'Russell Gibson', 'title' => 'Senior Data Engineer · Azure Data Factory · SQL/T-SQL · ETL/ELT', 'relationship' => 'Russell managed Sharif Faisal directly', 'quote' => 'Sharif is an outstanding QA professional who brings ownership, precision, and strong technical insight to every release cycle. His SQL-driven backend validation and root cause analysis consistently improved data integrity and accelerated defect resolution. Sharif communicates clearly, prioritizes effectively, and is a reliable partner during fast-paced, high-impact releases.'),
						array('name' => 'Rebecca Collins, ICP-TST', 'title' => 'Quality Assurance Manager — leading teams to ensure product quality and compliance', 'relationship' => 'Rebecca was senior to Sharif Faisal but didn&#x27;t manage Sharif Faisal directly', 'quote' => 'I had the pleasure of working with Sharif Ahmed at Dominion DMS, where we collaborated on several key QA initiatives. He quickly demonstrated a strong ability to learn complex software and consistently identified high-priority issues. Sharif is a reliable team player who brings a positive, collaborative attitude to his work, and he would be a valuable asset to any organization.'),
						array('name' => 'S.K. Obidul Kadir', 'title' => 'ISTQB&reg; CTFL · Manual Tester · SQA Engineer, Codemen Solutions Limited', 'relationship' => 'Sharif Faisal was senior to S.K. Obidul but didn&#x27;t manage S.K. Obidul directly', 'quote' => 'During our time working together at Codemen Solutions Ltd, I had the privilege of witnessing his exceptional analytical skills and, more importantly, his ability to collaborate effectively with teammates. Sharif&#x27;s thinking capability and approach to test scenarios are truly impressive. He demonstrates a deep understanding of testing methodologies and has the expertise to design comprehensive and effective test scenarios. As a mentor, Sharif has played a significant role in my professional development, imparting valuable knowledge and skills.'),
						array('name' => 'Uttam Biswas', 'title' => 'User-Focused QA · SDET · Manual QA · QA Automation · Selenium · Playwright', 'relationship' => 'Uttam managed Sharif Faisal directly', 'quote' => 'Along with technicalities, Sharif has a good testing mindset and is a very good team player. Wish him a bright future.'),
						array('name' => 'Md. Bashir Khan', 'title' => 'ISTQB&reg;-CTFL · SQA Engineer · SQA Team Lead · Volunteer', 'relationship' => 'Md. Bashir worked with Sharif Faisal on the same team', 'quote' => 'Sharif Faisal Ahmed is a competent SQA and very reliable in any tasks. He is a talented SQA engineer. He is very hardworking and passionate about his work. He knows how to take responsibility for each task and lead a team. He has extensive knowledge of SQA processes. I wish him all the best in his future.'),
						array('name' => 'Abdullah al Mubin', 'title' => 'Senior Full-Stack Engineer · Performance Optimizer · Architect &amp; Planner', 'relationship' => 'Abdullah was senior to Sharif Faisal but didn&#x27;t manage Sharif Faisal directly', 'quote' => 'Sharif Faisal Ahmed is one of the best QA I have ever worked with. He is an amiable person and a well-motivated professional. I wish him to be successful in his future career prospects.'),
						array('name' => 'Saiem Solimullah', 'title' => 'ISTQB&reg; CTFL · Software Tester · QA Engineer', 'relationship' => 'Saiem worked with Sharif Faisal on the same team', 'quote' => 'It&#x27;s been my pleasure to work with Sharif Faisal Ahmed who is a co-operative and professional person. He likes to explore new technology and has a desire to gather knowledge in this technology field. As a QA engineer he analyzes the scope with time which gives more accurate testing results. In a team where Sharif works, he always gives a positive vibe to the team. I wish him best of luck for his future endeavors.'),
						array('name' => 'Farhan Mohd. Fokrul Alam', 'title' => 'SWE @ Optimizely', 'relationship' => 'Colleague connection', 'quote' => 'Sharif is a very diligent person and a talented QA engineer. He is very efficient with his testing skills. I was impressed by his ability to find interesting bugs in our projects. I wish him all the best in his future endeavors.'),
						array('name' => 'Md. Farhan Islam', 'title' => 'Senior Engineer Quality Assurance @ bKash Ltd. · Performance Testing &amp; Automation', 'relationship' => 'Colleague connection', 'quote' => 'Worked on many projects and tackled many things together. Great team player and very helpful. He doesn&#x27;t simply run tests, but understands the product deeply, and uses this understanding to dream up all sorts of new ways to torture the product. That is a rare talent.'),
						array('name' => 'Dipon Mukherjee', 'title' => 'ISTQB&reg; CTFL · Full Stack SQA · QA Lead · Freelance SQA', 'relationship' => 'Dipon was Sharif Faisal&#x27;s mentor', 'quote' => 'I found Sharif very much passionate in SQA. He always keeps attention to detail, and works until his satisfaction. His behaviour is very professional. Most importantly, he becomes eager to understand the requirements perfectly and provides his best effort in testing.'),
						array('name' => 'Md. Ali Amzad Tapu', 'title' => 'ISTQB&reg; Certified Tester · Manual Tester · Selenium · PyTest · API Test', 'relationship' => 'Md. Ali Amzad worked with Sharif Faisal on the same team', 'quote' => 'Sharif Faisal Ahmed is a very passionate QA Engineer and dedicated to his assigned tasks. He is meticulous in his approach and always understands the importance of what he does. In our SQA team, he was consistently working towards learning testing knowledge and technology that the company needed. He is an excellent person, and I wish him very good luck for his future endeavors.'),
						array('name' => 'Md. Saiful Islam Anas', 'title' => 'ISTQB&reg; Certified Tester · Bengali Localization &amp; Language Service Expert', 'relationship' => 'Colleague connection', 'quote' => 'Sharif Faisal Ahmed had worked as Associate Software Quality Assurance Engineer under my supervision. During his service time, I found him focused on his task and his eagerness to learn new things every day. His bug hunting skills on ad hoc/exploratory testing are just awesome. I wish him great success in his future endeavors.'),
					),
				),
			),
			array(
				'slug'  => 'nigah',
				'name'  => 'Nigah Hossain Anika',
				'role'  => 'SQA Engineer',
				'exp'   => '2+ yrs',
				'image' => 'nigah-hossain-anika.jpg',
				'modal' => array(
					'exp2' => '2+ years experience',
					'bio'  => array(
						'<b>Nigah Hossain Anika is a dedicated and detail-oriented Software Quality Assurance Engineer committed to ensuring the highest software quality standards through rigorous manual and automated testing.</b>',
					),
					'jobs_shown' => 2,
					'jobs' => array(
						array('Jan 2026 — Present · 8 mos', 'Senior Scrum Master · Skiff Technologies (Remote)', 'Facilitates Agile ceremonies and sprint planning, coaching cross-functional teams toward continuous improvement and reliable, on-time delivery.'),
						array('Jan 2024 — Present · 2 yrs 8 mos', 'Software Quality Assurance Engineer · Skiff Technologies (Remote)', 'Leads manual and automated testing across the QA lifecycle, developing detailed test cases and driving defect resolution to ensure reliable, high-performance software.'),
					),
					'education' => array(
						array('Master in Information Technology, Information Technology', 'University of Dhaka · Jan 2023 – Jun 2024'),
						array('Bachelor in Computer Science and Engineering', 'BRAC University · Jan 2018 – May 2022'),
					),
					'skills' => array('Quality Assurance', 'Manual Test Execution', 'CI/CD', 'Test Automation Tools', 'Defect Management &amp; Resolution'),
					'certifications' => array(
						array('source' => 'BJIT Academy', 'title' => 'Manual SQA and Cybersecurity — Certificate of Completion', 'date' => 'Issued Dec 2023', 'image' => get_template_directory_uri() . '/images/team/certs/cert-anika-manual-sqa-cybersecurity-bjit.jpg'),
						array('source' => 'Scrum Alliance', 'title' => 'Certified ScrumMaster&reg; (CSM)', 'date' => 'Issued Dec 2025', 'image' => get_template_directory_uri() . '/images/team/certs/cert-anika-scrummaster-csm.jpg'),
					),
				),
			),
		),
	),
);
