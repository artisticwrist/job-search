    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require "../connect/connect.php";
    
    if(isset($_POST['submit'])){

        $search_name = $_POST['jobs'];
        $search_industry = $_POST['industries'];
        $search_exp = $_POST['experience'];
        $search_location = $_POST['locations'];

        //job_name=$job_name,category=$job_industry,exp_level=$exp_level,job_location=$location 

        $sql = "SELECT * FROM `jobs` ORDER BY RAND()";
    
        $result = mysqli_query($con, $sql);

        
    }



    
    ?>
    <form action="../components/search-job-form.php" method="POST" class="search-job-header sticky-job-search">

        <select name="jobs" id="">
            <option value="all-jobs">All job function</option>
            <option value="accounting">Accounting, Auditing and Finance</option>
            <option value="admin">Admin & Office</option>
            <option value="building">Building & Architecture</option>
            <option value="community">Community & Social services</option>
            <option value="consulting">Consulting & Strategy</option>
            <option value="deisgn">Creative and Design</option>
            <option value="customer-service">Customer Service & Support</option>
            <option value="transport-service">Driver & Transport Services</option>
            <option value="engineeering">Engineering and Technology</option>
            <option value="estate-management">Estate Agent & Property Management</option>
            <option value="farming">Farming & Agriculture</option>
            <option value="food-services">Food Services & Catering</option>
            <option value="health">Health & Safety</option>
            <option value="hospitality">Hospitality & Leisure</option>
            <option value="human-resources">Human Resources</option>
            <option value="legal-services">Legal Services</option>
            <option value="business-management">Management & Busisness Development</option>
            <option value="marketing">Marketing & Communications</option>
            <option value="pharmaceutical">Medical Pharmaceutical</option>
            <option value="product-management">Product & Project Management</option>
            <option value="insurance">Quality Control & Insurance</option>
            <option value="resaerch">Research, Teaching & Training</option>
            <option value="sales">Sales</option>
            <option value="software">Software & Data</option>
            <option value="trading-services">Trades & Services</option>
        </select>

        <select name="industries" id="">
            <option value="all-industris">All industries</option>
            <option value="advertising">Advertising, Media & Communications</option>
            <option value="agriculture">Agriculture, Fishing & Forestry</option>
            <option value="automotive">Automotive & Aviation</option>
            <option value="banking">Banking, Finance & Insurance</option>
            <option value="construction">Construction</option>
            <option value="education">Education</option>
            <option value="energy">Energy & Utilities</option>
            <option value="security">Enforcement & Securiity</option>
            <option value="entertainment">Entertainment, Events & Sport</option>
            <option value="government">Government</option>
            <option value="health-care">Healthcare</option>
            <option value="otel">Hospitality & Hotel</option>
            <option value="it-telecoms">IT & Telecoms</option>
            <option value="law">Law & Compliance</option>
            <option value="warehousing">Manufacturing & Warehousing</option>
            <option value="mining">Mining, Energy & Metals</option>
            <option value="charity">NGO, NPO & Charity</option>
            <option value="real-estate">Real Estate</option>
            <option value="recruitment">Recruitment</option>
            <option value="fashion">Retail, Fashion & FMCG</option>
            <option value="logistics">Shipping & Logistics</option>
            <option value="tourism">Tourism & Travel</option>
        </select>

        <select name="locations" id="">
            <option value="all-locations">All location</option>
            <option value="abeokuta-ogun">Abeokuta & Ogun State</option>
            <option value="abuja">Abuja</option>
            <option value="enugu">Enugu</option>
            <option value="ibandan-oyo">Ibandan & Oyo State</option>
            <option value="imo">Imo</option>
            <option value="lagos">Lagos</option>
            <option value="porthacourt">Porthacourt & Rivers State</option>
            <option value="rest-of-nigeria">Rest of Nigeria</option>
            <option value="outside-nigeria">Outside Nigeria</option>
            <option value="remote-work">Remote (Work FRom Home)</option>
        </select>

        <select name="experience" id="">
            <option value="all-exp">All experience level</option>
            <option value="no-exp">No experience</option>
            <option value="internship-graduate">Internship & Graduate</option>
            <option value="entry-level">Entry level</option>
            <option value="mid-level">Mid level</option>
            <option value="senior-level">Senior level </option>
            <option value="executive-level">EXecutive level</option>
        </select>

        <button name="submit" type="submit">Find a Job</button>
    </form>