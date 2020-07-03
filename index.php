<!DOCTYPE html>
<html>
<head>
<title>Ali Chowdhury</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<img src="images/snsw.png" width="200px" height="auto"/>    
<h1>Service NSW Software Engineering Task – Backend</h1>
<section>
    <div>
        <p>You are tasked with building a simple API to display a list of Vehicle Registrations for a given user.</p>
        <p>A sample JSON contract can be found here: <a href="https://bit.ly/3fqZZ3Y" target="_blank">https://bit.ly/3fqZZ3Y</a></p>
    </div>
    <div>
        <h3>Requirements</h3>
        <ul>
            <li>Create a simple REST microservice that will return data in the format of the sample JSON contract.</li>
            <li>You may create a local database (SQL preferred). <b>[MySQL used]</b></li>
            <li>A simple GET request is all that is needed.</li>
        </ul>
    </div>
    <div>
        <h3>Other notes</h3>
        <ul>
            <li>You may use either Java, Swift, Kotlin, <b>PHP</b></li>
            <li>You may use Node.js if you like, but we prefer this task in an <b>Object Oriented</b> language as above.</li>
            <li>You are allowed to use third party libraries if you wish</li>
            <li>Please provide any supporting documentation to run the application</li>
            <li>Please use git for source control</li>
            <li>Please add unit tests where you believe needs coverage</li>
            <li>We are looking for clean and well structured code</li>
            <li>You can spend as long as you like on this task, but we recommend ~3 hours.</li>
        </ul>
    </div>
</section>
<section>
    <h3>Setup Guide</h3>
    <p>If you are able to see this page then you have already setup the webserver to run the PHP project</p>
    <h4>Database setup</h4>
    <ul>
        <li>Create a database named <b>registrations</b>.</li>
        <li>Please import the registrations.sql dump file into the registrations database.</li>
        <li>Please go to the file <b>rego/config/database.php</b>. And update the database connection credentials.</li>
    </ul>
</section>
<section>
    <h3>Overview</h3>
    <ul>
        <li>There are two tables in the database. <b>User</b> table and <b>Registration</b> table.</li>
        <li>User table and Registration table are joined with a cardinality of 1 to many.</li>
        <li>The API endpoint must contain a user ID parameter to fetch all the registered vehicle information for the particular user</li>
        <li>Below are the links and names of the users to check the API
            <ul>
                <li>Jonathan Rhodes - <a href="/api/getData.php?uid=1" target="_blank">API response</a></li>
                <li>Kristina Thompson - <a href="/api/getData.php?uid=2" target="_blank">API response</a></li>
                <li>Allan Taylor - <a href="/api/getData.php?uid=3" target="_blank">API response</a></li>
            </ul>
        </li>
    </ul>
</section>

</body>