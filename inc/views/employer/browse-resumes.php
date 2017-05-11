<!-- Titlebar
================================================== -->
<div id="titlebar">
    <div class="container">
        <div class="ten columns">
            <span>We've found 92 resumes for:</span>
            <h2>Web, Software & IT</h2>
        </div>

        <div class="six columns">
            <a href="add-resume.html" class="button">Post a Resume, It’s Free!</a>
        </div>

    </div>
</div>

<?php
    $result = $con->query("SELECT * from resumes");

?>


<!-- Content
================================================== -->
<div class="container">
    <!-- Recent Jobs -->
    <div class="eleven columns">
        <div class="padding-right">

            <form action="#" method="get" class="list-search">
                <button><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Search freelancer services (e.g. logo design)" value=""/>
                <div class="clearfix"></div>
            </form>

            <ul class="resumes-list">
                <?php

                while($row = $result->fetch_assoc()) {
                    $skills = explode(',', $row['skills']);
                    echo '<li><a href="resume-page.html">
                        <img src="'.$row['link_img'].'" alt="">
                        <div class="resumes-list-content">
                            <h4>'.$row['name'].' <span>'.$row['professional_title'].'</span></h4>
                            <span><i class="fa fa-map-marker"></i> '.$row['location'].'</span>
                            <span><i class="fa fa-envelope"></i> '.$row['email'].'</span>    

                            <div class="skills">';

                    foreach($skills as $skill){
                        echo '<span>'.$skill.'</span>';  
                    }        
                    echo '</div>
                            <div class="clearfix"></div>

                        </div>
                    </a>
                    <div class="clearfix"></div>
                </li>';
                }
                
                ?>    
                
     
            </ul>
            <div class="clearfix"></div>

            <div class="pagination-container">
                <nav class="pagination">
                    <ul>
                        <li><a href="#" class="current-page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="blank">...</li>
                        <li><a href="#">8</a></li>
                    </ul>
                </nav>

                <nav class="pagination-next-prev">
                    <ul>
                        <li><a href="#" class="prev">Previous</a></li>
                        <li><a href="#" class="next">Next</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>


    <!-- Widgets -->
    <div class="five columns">

        <!-- Sort by -->
        <div class="widget">
            <h4>Sort by</h4>

            <!-- Select -->
            <select data-placeholder="Choose Category" class="chosen-select-no-single">
                <option selected="selected" value="recent">Relevance</option>
                <option value="">Hourly Rate – Highest First</option>
                <option value="">Hourly Rate – Lowest First</option>
            </select>

        </div>

        <!-- Skills -->
        <div class="widget">
            <h4>Skills</h4>

            <!-- Select -->
            <form action="#" method="get">
                <select data-placeholder="Select Skills" class="chosen-select" multiple>
                    <option value="">Adobe Photoshop</option>
                    <option value="">PHP</option>
                    <option value="">HTML</option>
                    <option value="">CSS</option>
                    <option value="">JavaScript</option>
                    <option value="">jQuery</option>
                    <option value="">MySQL</option>
                    <option value="">WordPress</option>
                </select>
                <div class="margin-top-15"></div>
                <button class="button">Filter</button>
            </form>
        </div>

        <!-- Location -->
        <div class="widget">
            <h4>Location</h4>
            <form action="#" method="get">
                <input type="text" placeholder="State / Province" value=""/>
                <input type="text" placeholder="City" value=""/>

                <input type="text" class="miles" placeholder="Miles" value=""/>
                <label for="zip-code" class="from">from</label>
                <input type="text" id="zip-code" class="zip-code" placeholder="Zip-Code" value=""/><br>

                <button class="button">Filter</button>
            </form>
        </div>

        <!-- Rate/Hr -->
        <div class="widget">
            <h4>Rate / Hr</h4>

            <ul class="checkboxes">
                <li>
                    <input id="check-6" type="checkbox" name="check" value="check-6" checked>
                    <label for="check-6">Any Rate</label>
                </li>
                <li>
                    <input id="check-7" type="checkbox" name="check" value="check-7">
                    <label for="check-7">$0 - $25 <span>(231)</span></label>
                </li>
                <li>
                    <input id="check-8" type="checkbox" name="check" value="check-8">
                    <label for="check-8">$25 - $50 <span>(297)</span></label>
                </li>
                <li>
                    <input id="check-9" type="checkbox" name="check" value="check-9">
                    <label for="check-9">$50 - $100 <span>(78)</span></label>
                </li>
                <li>
                    <input id="check-10" type="checkbox" name="check" value="check-10">
                    <label for="check-10">$100 - $200 <span>(98)</span></label>
                </li>
                <li>
                    <input id="check-11" type="checkbox" name="check" value="check-11">
                    <label for="check-11">$200+ <span>(21)</span></label>
                </li>
            </ul>

        </div>



    </div>
    <!-- Widgets / End -->


</div>