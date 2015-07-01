@extends('layouts.master')


@section('title')
    My Resume
@stop


@section('content')

<style type="text/css">

</style>
    <!-- Resume -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Benny Cardenas, MLIS</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>CONTACT</p>
                    1211 W. Ashby Place <br>
                    San Antonio, TX 78201 <br>
                    (210) 322-0876 <br>
                    benitocardenas@gmail.com</p>
                </div>
                <div class="col-lg-4">
                    <p>SKILLS</p>
                    Linux, Apache(NginX), MySQL, PHP, JavaScript, jQuery, HTML5, CSS3, Laravel, Git, GitHub, Microsoft Office, Information Literacy Development, Source Tree, CLI </p>
                </div>
            </div>

            <br>

                <div class="col-lg-8 col-lg-offset-2">
                    <p>WEB DEVELOPMENT EXPERIENCE</p>
                        <p> Weather Forecast Web App</p>
                        Constructed a web app that provides real-time forecasts with click-and-drag functionality using APIs for Google and Open Weather in conjunction with AJAX <br>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>National Parks Database Web App</p>
                        <p>Developed a basic framework to generate a web interface in order to access/modify a database of National Parks using PHP, MySQL Pro, Twitter Bootstrap
                        </p>
                    </p>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Blog/Personal Page<br>
                        Built personal site with blog using Laravel, MySQL Pro, Twitter Bootstrap, Custom CSS, Pure CSS Framework, Faker
                    </p>
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                    <p>ADDITIONAL EXPERIENCE</p>
                        <p>Bilingual Service Representative, SSA- June 2010 – Jan. 2015, San Antonio, TX</p>
                        <ul>
                            <li>Interfaced with federal and state agencies to educate number holders on rights and responsibilities</li>
                            <li>Performed issuance of social security numbers and replacement cards</li>
                        </ul>
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                        <p>Director, One Telluride- Dec. 2005 – Aug. 2009, Telluride, CO</p>
                        <ul>
                            <li>Established One Telluride Cultural Resource Center with mission of Immigrant Integration
                            </li>
                            <li>Maintained English as a Second Language program with registration totaling over 2% of local population and taught Spanish language information literacy courses
                            </li>
                            <li>Produced translations and original content for documents including press releases, brochures, radio interviews, web content, contracts, applications, and newspaper articles
                            </li>
                        </ul>
                </div>

                <div class="col-lg-8 col-lg-offset-2">
                        <p>Bilingual Reference Librarian, Weld Library District, July 2004 – May 2006, Greeley, CO</p>
                        <ul>
                            <li>Served as interim webmaster as well as maintained and developed bilingual website content
                            </li>
                            <li>Developed, marketed and delivered Spanish language information literacy classes
                            </li>
                            <li>Served on Technology Instruction committee to develop courses for public and staff
                            </li>
                        </ul>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                        <p>Librarian I, San Antonio Public Library, Jan. 2004 – July 2004, San Antonio, TX</p>
                        <ul>
                            <li>Performed reference services, bibliographic instruction and computer maintenance/coaching
                            </li>
                            <li>Served on Hispanic Heritage Month committee to develop system-wide activities
                            </li>
                        </ul>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                        <p>Library Assistant, Champaign Public Library, Aug. 2003 – Dec. 2003, Champaign, IL</p>
                        <ul>
                            <li>Supported Reference Librarians in researching in-depth topics for academic inquiries
                            </li>
                            <li>Performed Information Desk duties including computer management and research inquiries
                            </li>
                        </ul>
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                        <p>Special Librarian, University of Illinois, 6/03 – 12/03, Urbana, IL</p>
                        <ul>
                            <li>Supported Intellectual Property investments by serving as full-time researcher.
                            </li>
                            <li>Worked on team supporting decisions made on patents, trademarks and copyrights
                            </li>
                        </ul>
                </div>


                <div class="row">
                <div class="col-lg-3 col-lg-offset-2">
                    <p>EDUCATION</p>
                    Codeup<br>
                    Web Development Bootcamp<br>
                    Jan – May 2015<br>
                </div>
                <div class="col-lg-3">
                    <br>
                    <br>
                    University of Illinois <br>
                    Master of Science, 2003<br>
                    Library and Information Science <br>
                </div>
                <div class="col-lg-3">
                    <br>
                    <br>
                    University of Wisconsin <br>
                    Bachelor of Science, 2000 <br>
                    Family and Consumer Journalism <br>
                </div>
            </div>






                    </p>
                </div>

                {{-- Possibly allow to download Resume for view in Modal --}}
                {{-- <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div> --}}
            </div>
        </div>
    </section>

@stop