<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Value Management</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Value Management Platform (Use Branches - update-3  + ADPROJECT file)</h1>
    <p>Optimize and track your resources effectively.</p>
  </header>
  <main>
    <section>
      <h2>Key Features</h2>
      <ul>
        <li>Real-Time Synchronization</li>
        <li>Cross-Platform support</li>
        <li>Notification And Alerts</li>
        <li>Conflict Detection And Resolution</li>
      </ul>
    </section>
    <section>
      <h2>Enter Your Values</h2>
      <form id="valueForm">
        <label for="resource">Resource Name:</label>
        <input type="text" id="resource" name="resource" required>
        <label for="value">Value:</label>
        <input type="number" id="value" name="value" required>
        <button type="submit">Submit</button>
      </form>
      <div id="output"></div>
    </section>
  </main>
  <footer>
    <p>&copy; 2024 Value Management. All rights reserved.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>
