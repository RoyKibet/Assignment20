<?php
// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "campaign_feedback");

// Check connection
if (!$conn) {
  die("Connection failed: ". mysqli_connect_error());
}

// Retrieve the data from the feedback table
$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);

// Display the retrieved data in an HTML table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Feedback</th><th>Rating</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>". $row["name"]. "</td>";
  echo "<td>". $row["email"]. "</td>";
  echo "<td>". $row["feedback"]. "</td>";
  echo "<td>". $row["rating"]. "</td>";
  echo "</tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);