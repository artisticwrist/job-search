    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require "../config/connect/connect.php";

    
    ?>
    <form action="../components/search-job-result.php" method="POST" class="search-job-header">

        <!-- <select name="job_title" id="">
            <option value="all-jobs">Job Titles</option>
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
        </select> -->

        <input type="text" placeholder="Job Title" name="job_title">

        <select name="categories" id="">
            <option value="arts">Arts</option>
            <option value="business">Business</option>
            <option value="communications">Communications</option>
            <option value="education">Education</option>
            <option value="healthcare">Healthcare</option>
            <option value="hospitality">Hospitality</option>
            <option value="information-technology">Information Technology</option>
            <option value="law">Law Enforcement</option>
            <option value="sales-marketing">Sales & Marketing</option>
            <option value="science">Science</option>
            <option value="transportation">Transportation</option>
        </select>

        <select name="locations" id="">
            <option value="abia">Abia</option>
            <option value="abuja">Abuja</option>
            <option value="adamawa">Adamawa</option>
            <option value="akwa-ibom">Akwa Ibom</option>
            <option value="anambra">Anambra</option>
            <option value="bauchi">Bauchi</option>
            <option value="bayelsa">Bayelsa</option>
            <option value="benue">Benue</option>
            <option value="borno">Borno</option>
            <option value="cross-river">Cross River</option>
            <option value="delta">Delta</option>
            <option value="ebonyi">Ebonyi</option>
            <option value="edo">Edo</option>
            <option value="ekiti">Ekiti</option>
            <option value="gombe">Gombe</option>
            <option value="imo">Imo</option>
            <option value="jigawa">Jigawa</option>
            <option value="kaduna">Kaduna</option>
            <option value="kano">Kano</option>
            <option value="katsina">Katsina</option>
            <option value="kebbi">Kebbi</option>
            <option value="kogi">Kogi</option>
            <option value="kwara">Kwara</option>
            <option value="lagos">Lagos</option>
            <option value="nasarawa">Nasarawa</option>
            <option value="niger">Niger</option>
            <option value="ogun">Ogun</option>
            <option value="ondo">Ondo</option>
            <option value="osun">Osun</option>
            <option value="oyo">Oyo</option>
            <option value="plateau">Plateau</option>
            <option value="rivers">Rivers</option>
            <option value="sokoto">Sokoto</option>
            <option value="taraba">Taraba</option>
            <option value="yobe">Yobe</option>
            <option value="zamfara">Zamfara</option>
            <option value="outside-nigeria">Outside Nigeria</option>
        </select>

        <select name="experience" id="">
            <option value="no-exp">No experience</option>
            <option value="internship-graduate">Internship & Graduate</option>
            <option value="entry-level">Entry level</option>
            <option value="mid-level">Mid level</option>
            <option value="senior-level">Senior level </option>
            <option value="executive-level">EXecutive level</option>
        </select>

        <button name="submit" class=" btn btn-primary" type="submit">Find a Job</button>
    </form>