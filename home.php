<html >

<head>

    <meta charset =" utf-8">

    <title>Welcome</title>


</head>

<body>
<div id="main" class="container">


    <h1>Group Project Team Generator</h1>

    <p>Enter a list of names, pick the number of teams you want, and select create group to assign people randomly to teams!</p>

    <form action="generate" method="post" id="form">
        <div class="name-container">
            <label for="names">Add names (one per line)</label>
            <textarea name="names" id="names" cols="30" rows="10" placeholder="Add Names">Tom
Bob
Johnny
Sam
Jemima
Henry
Sandra
Ian
Molly
Samantha</textarea>
        </div>

        <div class="options">
            <label for="number_teams">Number of Teams</label>
            <select name="number_teams" id="number_teams">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <label for="team_names">Base team names on:</label>
            <select name="team_names" id="team_names">
                <option value="numbers">Numbers</option>
                <option value="animals">Animals</option>
                <option value="colours">Colours</option>
                <option value="planets">Planets</option>
            </select>
        </div>

        <input type="submit" value="create group" class="submit">
    </form>

    <script src="//ssl.google-analytics.com/ga.js"></script><script src="https://pagead2.googlesyndication.com/pub-config/r20160913/ca-pub-3863319475191168.js"></script><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</body>

</html>