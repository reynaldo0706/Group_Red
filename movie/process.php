<?php
if(isset($_POST['approve'])){
                if(isset($_POST['check'])){
                    foreach ($_POST['check'] as $value){
                        $sql = "UPDATE post SET post_approved = 1 WHERE ID = $post_id , $post_content, $post_date, $post_topic, $post_by"; //write this query according to your table schema
                        mysql_query($sql) or die (mysql_error());
                    }
                }
            }
			?>