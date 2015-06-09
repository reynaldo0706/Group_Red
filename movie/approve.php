 <?php
//create_cat.php
include 'connect.php';
include 'header.php';

echo '<h2>Approve Comments</h2>';
if($_SESSION['signed_in'] == false | $_SESSION['user_level'] != 1 )
{
	//the user is not an admin
	echo 'Sorry, you do not have sufficient rights to access this page.';
}
else
{
	//the user has admin rights
	if($_SERVER['REQUEST_METHOD'] != 'Approve')
	{
	 $con = mysql_connect("forum","posts");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("posts", $con);

$query = "select * from posts where approved='0'";

$result=mysql_query($query);

$i = 1; //counter for the checkboxes so that each has a unique name
echo "<form action='process.php' method='post'>"; //form started here
echo "<table border='1'>
<tr>
<th>post_id</th>
<th>post_content</th>
<th>post_date</th>
<th>post_topic</th>
<th>post_by</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  
  echo "<td>" . $row['post_id'] . "</td>";
  echo "<td>" . $row['post_content'] . "</td>";
  echo "<td>" . $row['post_date'] . "</td>";
  echo "<td>" . $row['post_topic'] . "</td>";
  echo "<td>" . $row['post_by'] . "</td>";
  
  echo "<td><input type='checkbox' name='check[$i]' value='".$row['post_id']."'/>";   
  echo "</tr>";
  $i++;
  }
echo "</table>";
echo "<input class='action' type='button' name='approve' value='approve' />";
   echo "<input class='action' type='button' name='edit' value='edit' />";
   echo "<input class='action' type='button' name='delete' value='delete' />";
   echo "<input type='hidden' name='action' value='' id='action' />"; //Action (edit, approve or delete) will be set here which will be passed as POST variable on form submission
echo "</form>";

mysql_close($con);
	}
	/*//fetch the posts from the database
			$posts_sql = "SELECT
						posts.post_topic,
						posts.post_content,
						posts.post_date,
						posts.post_by,
						users.user_id,
						users.user_name
					FROM
						posts
					LEFT JOIN
						users
					ON
						posts.post_by = users.user_id
					WHERE
						posts.post_topic = " . mysql_real_escape_string($_GET['id']);
						
			$posts_result = mysql_query($posts_sql);
		*/	
	?>
	
	<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script type="text/javascript">
            $(document).ready(function(){
                $('.action').click(function(){
                    var action = $(this).attr('name');
                    $('#action').val(action);
                    $(this).closest('form').submit();

                })
            })
     </script>