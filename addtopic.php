<!DOCTYPE html> 
  <html> 
<head> 
<title>Add a Topic</title> 
 </head>  
  <body>  <h1>Add a Topic</h1>
  <form method="post" action="do_addtopic.php"> 
  <p><label for="topic_owner">Your Email Address:</label><br/> 
  <input type="email"id="topic_owner" name="topic_owner" size="40"   maxlength="150" required="required"/></p> 
  <p><label for="topic_title">Topic Title:</label><br/> 
  <input type="text" id="topic_title" name="topic_title" size="40" maxlength="150" required="required" /></p>
  <p><label for="post_text">Post Text:</label><br/> 
  <textarea id="post_text" name="post_text" rows="8"  cols="40" ></textarea></p> 
  <button type="submit" name="submit" value="submit">Add Topic</button> 
  </form> 
   </body> 
     </html>

