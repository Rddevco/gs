<?php require_once "layouts/header.php"; ?>
<style>
    .swiper-slide img {
        width: 100%;
        height: 100%;
        padding: 1rem 0.5rem;
        object-fit: contain;
        aspect-ratio: 1 / 1;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: var(--primary);
    }
    /* Container and layout adjustments */
    #courses-course-details .container {
        padding: 0 15px;
    overflow: hidden;
    }
    #courses-course-details h3 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    #courses-course-details h4 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 20px;
    }
    #courses-course-details p {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
    }
    /* Row and column styles for large screens */
    #courses-course-details .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
    #courses-course-details .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }
    .vector-image img {
        max-width: 100%;
        height: auto;
    }
    /* Responsive adjustments */
    @media (max-width: 768px) {
        #courses-course-details .col-lg-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        #courses-course-details h3 {
            font-size: 1.8rem;
        }
        #courses-course-details h4 {
            font-size: 1.3rem;
        }
        #courses-course-details p {
            font-size: 0.9rem;
        }
    }
</style>
<main class="main">
    <!-- Page Title -->
    <div class="page-title -iim" data-aos="fade">
        <div class="heading">
            <img src="assets/img/banners/40123918_8796857.png" alt=""/>
            <!-- <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Indian Institutes of Management</h1>
                        <p class="mb-0">
                            Global Smart Education: Empowering Students with Insights and Support for a Successful MBA Journey
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="./">Home</a></li>
                    <li class="current">IIMs</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Page Title -->

    <!-- IIMS Colleges Slider -->
    <!-- Swiper Container -->
	 <section id="courses-course-details" class="courses-course-details section pt-3 pb-0">
        <div class="container" data-aos="fade-up">
			<div class="swiper2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Ahmedabad.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Bangalore.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Calcutta.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Indore.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Kozhikode.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Lucknow.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/IIM_Shillong.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/Indian_Institute_of_Management_Raipur.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/Indian_Institute_of_Management_Ranchi.png" alt="" />
					</div>
					<div class="swiper-slide">
						<img src="assets/img/iims-colleges/Indian_Institute_of_Management_Rohtak.png" alt="" />
					</div>
				</div>
				<!-- Pagination -->
				<!-- <div class="swiper-pagination"></div> -->
				<!-- Navigation Buttons -->
				<!-- <div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div> -->
			</div>
		</div>
	</section>
    

    <!-- IIMS Colleges Slider -->

    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section py-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Indian Institutes of Management (IIMs): The Pinnacle of Management Education in India</h3>
                    <p>
                        The Indian Institutes of Management (IIMs) are premier business schools in India, known for their rigorous academic programs, world-class faculty, and strong industry connections. They have played a pivotal role in
                        shaping the management landscape in India and producing some of the brightest leaders and entrepreneurs who have contributed significantly to both national and global economies. Established by the Government of
                        India, the IIMs are regarded as among the best institutions for management education in India and are recognized worldwide for their academic excellence.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <h4>History and Establishment of IIMs</h4>
                    <p>
                        The idea of setting up management institutes in India was conceived in the 1950s. The first IIM, IIM Calcutta, was established in 1961 with the support of the Government of India, the West Bengal government, and the
                        Ford Foundation. The goal was to create a world-class institution to address the growing demand for highly skilled managers and business leaders in the post-independence industrializing economy. IIM Ahmedabad (IIMA)
                        followed in 1962, with IIM Bangalore (IIMB) coming into existence in 1973. Over the years, more IIMs were established across the country, including IIM Lucknow, IIM Kozhikode, IIM Indore, IIM Shillong, IIM Rohtak,
                        IIM Ranchi, IIM Udaipur, IIM Trichy, IIM Kashipur, IIM Raipur, IIM Bodh Gaya, IIM Sambalpur, IIM Amritsar, IIM Nagpur, and IIM Sirmaur. As of today, there are 20 IIMs across India, making them a powerful network in
                        the country's higher education and corporate ecosystem.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/001.png" alt="Indian Institutes of Management" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <p>
                        The IIMs were conceived with the vision of developing management professionals who could contribute to the nation's economic growth by applying their business acumen to solve contemporary challenges. These institutes
                        aimed to provide high-quality education that was in line with international standards, preparing leaders capable of thinking strategically, managing complexities, and leading with integrity.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <h4>Structure and Governance</h4>
                    <p>
                        The IIMs are autonomous institutions, but they are overseen by the Ministry of Education, Government of India, and are governed by a board of directors, which includes members from the government, industry, and
                        academia. Each IIM is led by a Director, who is appointed by the Board of Governors. The governance structure ensures that the institutes are well-managed, with autonomy in academic and administrative matters, while
                        also ensuring alignment with national education policies and industry needs.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/002.png" alt="Structure and Governance of IIMs" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <p>
                        The IIMs offer a wide range of programs, including postgraduate programs, doctoral programs, and executive education programs. While the Post Graduate Program in Management (PGPM) is the flagship program of most
                        IIMs, they also offer specialized programs like the Post Graduate Program for Executives (PGPX), the Fellow Program in Management (FPM, equivalent to a PhD), and short-term executive education programs for working
                        professionals.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <h4>Academic Excellence and Programs</h4>
                    <p>
                        The IIMs are known for their world-class academic rigor, strong industry linkages, and emphasis on practical learning. The Post Graduate Program in Management (PGPM) is the flagship offering, typically a two-year,
                        full-time residential course, designed to provide students with a comprehensive understanding of business management. The curriculum is dynamic, incorporating the latest trends in business, technology, and society.
                        It is taught by internationally acclaimed faculty and includes case studies, simulations, guest lectures, and internships that provide students with real-world exposure.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/003.png" alt="Academic Excellence and Programs" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <p>
                        In addition to the PGPM, the IIMs also offer various specialized programs such as the Post Graduate Program in Management for Executives (PGPX) and the Fellow Program in Management (FPM), which caters to those
                        seeking academic careers. These programs are designed to cater to different segments of the student population, including professionals with work experience and those interested in doctoral research.
                    </p>
                    <p>
                        The IIMs are also known for their robust research output. Faculty members are actively involved in cutting-edge research across various domains of business and management, such as finance, marketing, operations,
                        strategy, entrepreneurship, and human resource management. The research is published in top-tier international journals and contributes significantly to the global body of knowledge in management studies.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <h4>Admission Process</h4>
                    <p>
                        The admission process to the IIMs is highly competitive and is considered one of the most rigorous in the world. For the Post Graduate Program in Management (PGPM), admission is based on the Indian Institutes of
                        Management Common Admission Test (CAT), which is a national-level entrance exam that evaluates students on quantitative ability, verbal ability, data interpretation, and logical reasoning.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/004.png" alt="Admission Process" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <p>
                        Candidates who perform well in the CAT exam are shortlisted for the next stage of the selection process, which typically includes Group Discussion (GD), Personal Interview (PI), and Written Ability Test (WAT). The
                        final selection is based on a combination of CAT scores, academic performance, work experience, and performance in the interview.
                    </p>
                    <p>
                        Admission to the executive programs like the Post Graduate Program for Executives (PGPX) is based on a combination of academic qualifications, professional experience, and personal interviews. The process ensures
                        that students admitted to these programs have a diverse range of skills and experience, contributing to a rich learning environment.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <h4>International Recognition</h4>
                    <p>
                        Over the years, the IIMs have gained global recognition for the quality of education they offer. The alumni network of the IIMs includes some of the most influential business leaders, CEOs, and entrepreneurs who have
                        made a significant impact on the global business landscape. IIM graduates are highly sought after by multinational corporations, and many have taken leadership positions in prestigious organizations across
                        industries.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/005.png" alt="Admission Process" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <p>
                        Several IIMs have also partnered with leading international institutions, offering exchange programs, collaborative research, and joint academic ventures. This has further strengthened the global standing of the IIMs
                        and provided students with opportunities to gain international exposure.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <h4>Corporate Connections and Placements</h4>
                    <p>
                        One of the key reasons for the IIMs' success is their strong relationship with the corporate world. The IIMs have a robust placement process, with top-tier companies from diverse sectors such as consulting, finance,
                        technology, marketing, and entrepreneurship recruiting students directly from the campuses. Many IIM alumni also go on to found successful startups, contributing to the growing startup ecosystem in India.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/006.png" alt="Admission Process" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <div class="vector-image">
                        <p>
                            In addition to placements, IIMs have a wide network of corporate partners that offer students opportunities for internships, live projects, and mentorships. This helps students apply theoretical knowledge in
                            real-world scenarios and develop the practical skills required to succeed in the business world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <h4>Alumni Success and Impact</h4>
                    <p>
                        The alumni network of the IIMs is one of the most influential in the world. Prominent IIM alumni include business leaders such as Indra Nooyi (Former CEO, PepsiCo), Arvind Krishna (Chairman & CEO, IBM), Raghuram
                        Rajan (Former Governor, Reserve Bank of India), N. R. Narayana Murthy (Co-founder, Infosys), and many others who have made significant contributions to the business and economic development of India and the world.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/007.png" alt="Admission Process" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <div class="vector-image">
                        <p>
                            IIMs also have a strong presence in the entrepreneurial ecosystem, with many graduates becoming successful entrepreneurs and creating innovative companies in various sectors. The IIMs' focus on leadership,
                            innovation, and problem-solving has created an ecosystem of professionals who are committed to driving positive change in society.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <h4>Challenges and the Future</h4>
                    <p>
                        Despite their immense success, the IIMs face several challenges, including the need to continually adapt to changing global business trends, improve access to education for students from diverse socio-economic
                        backgrounds, and address issues related to faculty retention and diversity. There is also increasing competition from international business schools, and the IIMs must continue to innovate in terms of curriculum,
                        pedagogy, and infrastructure to maintain their leadership position.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/008.png" alt="Admission Process" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-12 order-lg-3 order-3">
                    <div class="vector-image">
                        <p>
                            The future of IIMs looks promising, with a focus on incorporating emerging technologies such as artificial intelligence, data analytics, and digital transformation into their curriculum. Additionally, the rise of
                            entrepreneurship and startups in India presents new opportunities for IIMs to support innovation and contribute to the growing startup ecosystem.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <!-- Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section pb-0">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <!-- Left Column for Content -->
                <div class="col-lg-6 order-lg-1 order-2">
                    <h4>Culmination</h4>
                    <p>
                        The Indian Institutes of Management have emerged as one of the most prestigious networks of business schools in the world. With their exceptional academic programs, top-tier faculty, global recognition, and strong
                        industry connections, the IIMs continue to shape the future of management education in India and produce leaders who are making a global impact. As they navigate new challenges and opportunities, the IIMs are set to
                        continue playing a central role in shaping the future of business education in India and beyond.
                    </p>
                </div>
                <!-- Right Column for Vector Image -->
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="vector-image">
                        <!-- Example vector image, replace with actual image source -->
                        <img src="./assets/img/iims/009.png" alt="Admission Process" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Courses Course Details Section -->
    <section id="courses-course-details" class="courses-course-details section">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <h3>IIMs (Indian Institute of Management) All Campuses</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>S.NO</th>
                                    <th>INSTITUTE NAME</th>
                                    <th>ESTABLISHMENT YEAR</th>
                                    <th>LOCATION</th>
                                    <th>NIRF RANKING</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>IIM Calcutta</td>
                                    <td>1961</td>
                                    <td>Kolkata</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IIM Ahmedabad</td>
                                    <td>1961</td>
                                    <td>Ahmedabad</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>IIM Bangalore</td>
                                    <td>1973</td>
                                    <td>Bengaluru</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>IIM Lucknow</td>
                                    <td>1984</td>
                                    <td>Lucknow</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>IIM Indore</td>
                                    <td>1996</td>
                                    <td>Indore</td>
                                    <td>8</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>IIM Kozhikode</td>
                                    <td>1996</td>
                                    <td>Kozhikode</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>IIM Shillong</td>
                                    <td>2007</td>
                                    <td>Shillong</td>
                                    <td>24</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>IIM Raipur</td>
                                    <td>2010</td>
                                    <td>Raipur</td>
                                    <td>14</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>IIM Ranchi</td>
                                    <td>2010</td>
                                    <td>Ranchi</td>
                                    <td>17</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>IIM Rohtak</td>
                                    <td>2010</td>
                                    <td>Rohtak</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>IIM Kashipur</td>
                                    <td>2011</td>
                                    <td>Kashipur</td>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>IIM Tiruchirappalli</td>
                                    <td>2011</td>
                                    <td>Tiruchirappalli</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>IIM Udaipur</td>
                                    <td>2011</td>
                                    <td>Udaipur</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>IIM Amritsar</td>
                                    <td>2015</td>
                                    <td>Amritsar</td>
                                    <td>47</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>IIM Bodh Gaya</td>
                                    <td>2015</td>
                                    <td>Bodh Gaya</td>
                                    <td>33</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>IIM Nagpur</td>
                                    <td>2015</td>
                                    <td>Nagpur</td>
                                    <td>31</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>IIM Sambalpur</td>
                                    <td>2015</td>
                                    <td>Sambalpur</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>IIM Sirmaur</td>
                                    <td>2015</td>
                                    <td>Sirmaur district</td>
                                    <td>57</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>IIM Visakhapatnam</td>
                                    <td>2015</td>
                                    <td>Visakhapatnam</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>IIM Jammu</td>
                                    <td>2016</td>
                                    <td>Jammu</td>
                                    <td>42</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>IIM Mumbai (converted to IIM in 2023)</td>
                                    <td>1963 (converted to IIM in 2023)</td>
                                    <td>Mumbai</td>
                                    <td>6</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    
</main>
<?php require_once "layouts/footer.php"; ?>
